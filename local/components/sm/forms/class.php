<?php
use Bitrix\Main\Loader;
use Bitrix\Main\Context;
use Bitrix\Main\Mail\Event;
//use \Bitrix\Iblock\ElementTable;
use Bitrix\Main\Type\DateTime;
use Bitrix\Main\SystemException;

if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

class SMForms extends CBitrixComponent
{
	protected $urlCallCenter = 'http://callcenter.smclinic.ru/shluz.php';
	protected $urlOKK = 'http://okk.smclinic.ru/shluz.php';
	protected $urlCallCenterSources = 'http://callcenter.smclinic.ru/shluz_sources.php';
	protected $errors = [];
	protected $inputs = [];
	protected $inputsSources = [];
	protected $title = '';
	protected $idForm = '';

	public function onPrepareComponentParams($arParams)
	{
		if(isset($arParams['TITLE']) && !empty($arParams['TITLE'])) {
			$this->title = $arParams['TITLE'];
		} else {
			$this->title = new DateTime();
		}
		$this->inputs = $arParams['INPUTS'];
		return $arParams;
	}
	
	public function executeComponent()
	{
		$request = Context::getCurrent()->getRequest();
		$action = $this->escapeCharacter($request->getPost('action'));

		if(!empty($action) && $action == 'send') {
			$this->getDataForm($request);
			$this->infoBlockSave();
			$this->mailSend();
			$this->callCenterSend();
			echo 'ok';
		} else {
			$this->includeComponentTemplate();
		}
	}
	
	protected function escapeCharacter($value) {
		if(isset($value)) {
			$value = strip_tags($value);
			return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
		} else {
			return '';
		}
	}
	
	protected function getDataForm($request) {	
		foreach ($this->inputs as $key => $value) {
			$formValue = '';
			if(isset($value['VALUE']) && !empty($value['VALUE'])) {
				$formValue = $value['VALUE'];
			} else {
				$formValue = $this->escapeCharacter($request->getPost($value['NAME']));
			}
			if(isset($value['REQUIRED']) && $value['REQUIRED'] == true && empty($formValue)) {
				echo 'error';
				die();
			}
			if(
				isset($value['REPLACE']) &&
				!empty($formValue) &&
				isset($value['REPLACE'][0]) &&
				isset($value['REPLACE'][1])
				) {
				$formValue = str_replace($value['REPLACE'][0], $value['REPLACE'][1], $formValue);
			}

			if(isset($value['DATE_FORMAT']) && !empty($formValue)) {
				$formValue = date($value['DATE_FORMAT'], strtotime($formValue));
			}
			$this->inputs[$key]['VALUE'] = $formValue;
		}

		if($this->arParams['CALL_CENTER']['STATISTICS_SEND'] == true) {
			$_inputsSources = $request->getPost('source');
			if(!empty($_inputsSources)) {
				foreach($_inputsSources as $key => $value) {
					$_key = mb_strtolower($key, 'UTF-8');
					$this->inputsSource[$_key] = $this->escapeCharacter($request->getPost('source')[$key]);
				}
			}
		}
	}
	
	protected function infoBlockSave() {
		if(
		isset($this->arParams['IBLOCK']) &&
		$this->arParams['IBLOCK']['ACTIVE'] == true &&
		!empty($this->arParams['IBLOCK']['ID']) &&
		Loader::includeModule("iblock")
		) {
			$arLoad = [
				'MODIFIED_BY' => 1,
				'IBLOCK_SECTION_ID' => false,
				'DATE_ACTIVE_FROM' => date('d.m.Y'),
				'IBLOCK_ID' => $this->arParams['IBLOCK']['ID'],
				'NAME' => $this->title,
				'ACTIVE' => "N"
			];
			foreach ($this->arParams['IBLOCK']['VALUE'] as $key => $value) {
				$value_form = $this->inputs[$value]['VALUE'];
				if($key == 'PREVIEW_TEXT') {
					$arLoad['PREVIEW_TEXT'] = $value_form;
				} else if($key == 'DETAIL_TEXT') {
					$arLoad['DETAIL_TEXT'] = $value_form;
				} else {
					$arLoad['PROPERTY_VALUES'][$key] = $value_form;
				}
			}
			
			$el = new CIBlockElement;
			$this->idForm = $el->Add($arLoad);
			//ElementTable::add($arLoad);
		}
	}
	
	protected function callCenterSend() {
		if(
		isset($this->arParams['CALL_CENTER']) &&
		$this->arParams['CALL_CENTER']['ACTIVE'] == true &&
		!empty($this->arParams['CALL_CENTER']['SOURCE']) &&
		!empty($this->arParams['CALL_CENTER']['TYPE'])
		) {
			$valueList = [
				'ID_FORM' => $this->idForm,
				'SOURCE' => $this->arParams['CALL_CENTER']['SOURCE'],
				'TYPE' => $this->arParams['CALL_CENTER']['TYPE'],
			];
			foreach ($this->arParams['CALL_CENTER']['VALUE'] as $key => $value) {
				$valueList[$key] = $this->inputs[$value]['VALUE'];
			}
			
			if($this->arParams['CALL_CENTER']['STATISTICS_SEND'] == true) {
				$valueList['SOURCES'] = $this->inputsSource;
				$this->urlCallCenter = $this->urlCallCenterSources;
			}
			if($this->arParams['CALL_CENTER']['OKK_SEND'] == true) {
				$this->urlCallCenter = $this->urlOKK;
			}
			
			if($curl = curl_init()) {
				curl_setopt($curl, CURLOPT_URL, $this->urlCallCenter);

				curl_setopt_array($curl, array(
					CURLOPT_POST => TRUE,
					CURLOPT_RETURNTRANSFER => TRUE,
					CURLOPT_HTTPHEADER => array(
						'Content-Type: application/json'
					),
					CURLOPT_POSTFIELDS => json_encode($valueList)
				));

				curl_exec($curl);
				curl_close($curl);
			}
		}
	}
	
	protected function mailSend() {
		if(
		isset($this->arParams['MAIL_SEND']) &&
		$this->arParams['MAIL_SEND']['ACTIVE'] == true &&
		!empty($this->arParams['MAIL_SEND']['MAIL_TEMPLATE'])
		) {
			$valueList = [];
			foreach ($this->inputs as $key => $value) {
				$valueList[$key] = $value['VALUE'];
			}
			
			$valueList['TITLE'] = $this->title;

			Event::send([
				'EVENT_NAME' => $this->arParams['MAIL_SEND']['MAIL_TEMPLATE'],
				'LID' => SITE_ID,
				'C_FIELDS' => $valueList
			]);
		}
	}
}
