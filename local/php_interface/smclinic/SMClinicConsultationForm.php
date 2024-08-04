<?php

use Bitrix\Main\Application, 
    Bitrix\Main\Context, 
    Bitrix\Main\Request, 
    Bitrix\Main\Server,
    Bitrix\Main\Mail\Event;

class SMClinicConsultationForm extends SMClinicForm
{
	/**
	id сайта для отправки на шлюз
	*/	
	private $sourceId = 160065;

	/**
	id формы для отправки на шлюз
	*/	
	private $formId = 365;

	/**
	Инфоблок для сохранения заявки
	*/
	private $iblockId = 15;

	/**
	id элемента в БД
	*/
	private $elementId = false;

	/**
	URL шлюза для заявки
	*/
	private $shellUrl = 'http://callcenter.smclinic.ru/shluz_sources.php';

	/**
	Шаблон письма
	*/
	private $mailEvent = 'FORM_ALL';

	public function run()
	{
		$this->required = ['phone'];

		parent::init();

		$this->prepareFields();
		
		$this->sendToBitrix();

		$this->sendToShell();

		$this->sendToMail();
		
		$this->sendToCalltouch();

		$this->response();
	}

	/**
	Дополнительная обработка необходимых полей, сделано для совместимости со старым форматом данных
	*/
	private function prepareFields()
	{
		if(isset($this->data['spec']) && !empty($this->data['spec'])){
			$this->data['name'] = 'Онлайн консультация '.$this->data['spec'];
		}
	}

	/**
	Сохранение заявки в БД сайта
	*/
	private function sendToBitrix()
	{
		// получаем данные о инфоблоке для проверки перед записью
		$iblockFields = CIBlock::GetFields($this->iblockId);

		$iblockProps = [];
		$arProps = CIBlockProperty::GetList([], ["CHECK_PERMISSIONS" => "N", "IBLOCK_ID" => $this->iblockId]);

		while($prop = $arProps->Fetch()){
			$iblockProps[$prop['CODE']] = $prop;
		}

		// подготавливаем данные для сохранения в инфоблок
		$arData = [
			"IBLOCK_ID" => $this->iblockId,
			"LID" => SITE_ID,
			"ACTIVE" => false
		];
		// Заполняем поля элемента
		foreach($this->data as $key => $value){
			// регистр ключей формы и ИБ может различаться, проверяем существование в двух вариациях
			$key = mb_strtoupper($key);
			if(!isset($iblockFields[$key])){
				if(!isset($iblockFields[mb_strtolower($key)])){
					continue;
				}
				$key = mb_strtolower($key);
			}

			$arData[$key] = $value;
		}
		// Заполняем свойства (доп поля) элемента
		foreach($this->data as $key => $value){
			// регистр ключей формы и ИБ может различаться, проверяем существование в двух вариациях
			$key = mb_strtoupper($key);
			if(!isset($iblockProps[$key])){
				if(!isset($iblockProps[mb_strtolower($key)])){
					continue;
				}
				$key = mb_strtolower($key);
			}

			$arData["PROPERTY_VALUES"][$key] = $value;
		}


		$el = new CIBlockElement;

		if($this->elementId = $el->Add(
			$arData,
			false,
			false,
			false
		)){
			// успешно сохранили
			//die('success');
		} else {
			//die($el->LAST_ERROR);
			// $el->LAST_ERROR;
		}

	}

	private function sendToMail()
	{
		if(parent::DEBUG) return;

		Event::send(array(
		    "EVENT_NAME" => $this->mailEvent,
		    "LID" => SITE_ID,
		    "C_FIELDS" => $this->data,
		)); 
	}

	private function sendToShell()
	{

        $items = [
            'id_form' => $this->elementId,
            'SOURCE' => $this->sourceId,
            'TYPE' => $this->formId,
            'FNAME' => $this->data['name'],
            'DATE_BEGIN' => date("d-m-Y H:i"),
            'PHONE' => $this->data['phone'],
            'VOPROS' => $this->data['question'],
			'SOURCES' => $this->sources
        ];

        if(parent::DEBUG){
        	die(print_r($items, true));
        }
        
        if ($curl = curl_init()) {
            curl_setopt($curl, CURLOPT_URL, $this->shellUrl);

            curl_setopt_array($curl, array(
                CURLOPT_POST => TRUE,
                CURLOPT_RETURNTRANSFER => TRUE,
                CURLOPT_HTTPHEADER => array(
                    'Content-Type: application/json'
                ),
                CURLOPT_POSTFIELDS => json_encode($items)
            ));

            $out = curl_exec($curl);
            curl_close($curl);
        }
	}
	
	private function sendToCalltouch()
	{
		$call_value = $_COOKIE['_ct_session_id']; // ID сессии Calltouch, полученный из cookie
		$ct_site_id = '8112';
		if ($ch = curl_init()) {
			curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-type: application/x-www-form-urlencoded;charset=utf-8"));
			curl_setopt($ch, CURLOPT_URL,'https://api.calltouch.ru/calls-service/RestAPI/requests/'.$ct_site_id.'/register/');
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS,
				"fio=".urlencode($this->data['name'])
				."&phoneNumber=".preg_replace("/[^0-9]/", '', $this->data['phone'])
				."&subject=".urlencode('Заявка с сайта')
				."".($call_value != 'undefined' ? "&sessionId=".$call_value : ""));
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			$calltouch = curl_exec($ch);
			curl_close($ch);
		}
	}
}