<?php

use Bitrix\Main\Application, 
    Bitrix\Main\Context, 
    Bitrix\Main\Request, 
    Bitrix\Main\Server,
    Bitrix\Main\Mail\Event;

class SMClinicReviewForm extends SMClinicForm
{
	/**
	id сайта для отправки на шлюз
	*/	
	private $sourceId = 12638;

	/**
	id формы для отправки на шлюз
	*/	
	private $formId = 366;

	/**
	TYPE для отправки на шлюз
	*/	
	private $type = 366;

	/**
	Инфоблок для сохранения заявки
	*/
	private $iblockId = 4;

	/**
	id нового отзыва в БД
	*/
	private $elementId = false;

	/**
	Раздел для сохранения отзывов
	*/
	private $sectionId = 21;

	/**
	URL шлюза для заявки
	*/
	private $shellUrl = 'http://okk.smclinic.ru/shluz.php';

	/**
	Шаблон письма
	*/
	private $mailEvent = 'NEW_REVIEW';

	public function run()
	{
		$this->required = ['fio','review','email'];

		parent::init();

		$this->prepareFields();
		// Сначала надо отправить в битрикс, чтобы заполнился $elementId, до отправки на шлюз
		$this->sendToBitrix();

		$this->sendToShell();

		$this->sendToMail();

		$this->response['message'] = 'Благодарим за Ваш отзыв.<br>Отзыв будет опубликован на сайте после проверки модератором в течение 7 дней.';

		$this->response();

	}

	/**
	Дополнительная обработка необходимых полей, сделано для совместимости со старым форматом данных
	*/
	private function prepareFields()
	{
		if(!isset($this->data['name']) && isset($this->data['fio'])){
			$this->data['name'] = $this->data['fio'];
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
			"ACTIVE" => false,
			"IBLOCK_SECTION_ID" => $this->sectionId
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

		// не знаю зачем это, взято от текарта
		$arData["PROPERTY_VALUES"]['answer'] = '';
		$arData["PROPERTY_VALUES"]['review_ip'] = $this->userIP;
		

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
		// Не знаю для чего это, взято из старого кода
        $formUrl = explode('?', $_SERVER['HTTP_REFERER']);
        $formUrl = explode($_SERVER['HTTP_HOST'], $formUrl[0]);

        if(isset($formUrl[1])) {
            if($formUrl[1] == '/zubotekhnicheskaya-laboratoriya/') {
                $this->sourceId = 482587;
            }
        }

		if(empty($this->data['doctor_fio']) && !empty($this->data['doctors'])) {
			$res = CIBlockElement::GetByID($this->data['doctors']);
			if($ar_res = $res->GetNext()) {
				$this->data['doctor_fio'] = $ar_res['NAME'];
			}
		}

		$items = array(
			'ID_FORM' => $this->elementId,
			'SOURCE' => $this->sourceId,
			'TYPE' => $this->type,
			'FNAME' => $this->data['fio'],
			'PHONE' => $this->data['phone'],
			'DATE_BEGIN' => date("d.m.Y"),
			'EMAIL' => $this->data['email'],
			'VOPROS' => $this->data['review'],
			'CARD' => $this->data['number_cart'],
			'VRACH' => $this->data['doctor_fio'], // ФИО Врача
			'VRACH_ID' => $this->data['doctors'] // ID Врача
		);

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
}