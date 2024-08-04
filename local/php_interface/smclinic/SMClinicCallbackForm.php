<?php

use Bitrix\Main\Application, 
    Bitrix\Main\Context, 
    Bitrix\Main\Request, 
    Bitrix\Main\Server,
    Bitrix\Main\Mail\Event;

class SMClinicCallbackForm extends SMClinicForm
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
	URL шлюза для заявки
	*/
	private $shellUrl = 'http://callcenter.smclinic.ru/shluz_sources.php';

	/**
	Шаблон письма
	*/
	private $mailEvent = 'NEW_CALLBACK';

	public function run()
	{
		$this->required = ['phone'];

		parent::init();

		$this->prepareFields();

		$this->sendToMail();

		$this->sendToShell();

		$this->sendToBitrix();
		
		$this->sendToCalltouch();

		$this->response['message'] = 'Спасибо за оставленную заявку. Мы свяжемся с вами в ближайшее время.<br /><br />
		Заявки, поступившие после 22:00, будут обработаны на следующий день после 8:00.';

		if(SMClinicHelper::isNight()){
			$text = SMClinicHelper::getNightText();
			$this->response['message'] .= '<br>'.$text;
		}

		$this->response();

	}

	/**
	Дополнительная обработка необходимых полей, сделано для совместимости со старым форматом данных
	*/
	private function prepareFields()
	{
		// форматирование даты и времени как было у текарта, хз зачем
		if(isset($this->data['date']) && !empty($this->data['date'])){
			$temp = explode('-', $this->data['date']);
			$this->data['date'] = date("d.m.Y", mktime(0, 0, 0, $temp[1], $temp[0], $temp[2]));
		} else {
			$this->data['date'] = date('d.m.Y');
		}

		if(isset($this->data['time']) && empty($this->data['time'])){
			$this->data['time'] = '';
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

		if($el->Add(
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

        /** test
		?clientid=test_id_123&type=test_type&referrer="test_referrer"&source="test_source"&medium=test_medium&campaign=test_campaign&keyword=test_keyword
		*/

        $items = [
            'id_form' => $this->formId,
            'SOURCE' => $this->sourceId,
            'TYPE' => $this->formId,
            'FNAME' => $this->data['name'],
            'DATE_BEGIN' => date("d-m-Y H:i"),
            'PHONE' => $this->data['phone'],
            'VOPROS' => $this->data['question'],
			'SOURCES' => $this->sources,
			'PRIEM_DATE_TIME' => $this->data['date'] . ' ' . $this->data['time']
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
		$formUrl = explode('?', $_SERVER['HTTP_REFERER']);
        $formUrl = explode($_SERVER['HTTP_HOST'], $formUrl[0]);

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
				."&requestUrl=".urlencode('https://www.sm-stomatology.ru'.$formUrl[1])
				."".($call_value != 'undefined' ? "&sessionId=".$call_value : ""));
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			$calltouch = curl_exec($ch);
			curl_close($ch);
		}
	}
}