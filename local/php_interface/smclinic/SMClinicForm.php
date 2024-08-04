<?php

use Bitrix\Main\Application, 
    Bitrix\Main\Context, 
    Bitrix\Main\Request, 
    Bitrix\Main\Server,
    Bitrix\Main\Mail\Event;


/*use Bitrix\Main\Loader,
	Bitrix\Main,
	Bitrix\Iblock;

Loader::includeModule("iblock");*/

class SMClinicForm
{
	/**
	При DEBUG = true данные на шлюз и почту не отправляются, а сервер в ответе возвращает массив
	*/
	const DEBUG = false;

	/**
	тип формы
	*/	
	public $formType = '';

	/**
	Данные пришедшие из формы
	*/
	public $data = [];

	/**
	Данные отслеживания
	*/
	public $sources = [
		'clientid' => '',
		'type' => '',
		'referrer' => '',
		'source' => '',
		'medium' => '',
		'campaign' => '',
		'keyword' => ''
	];

	/**
	Ответ сервера
	*/
	public $response = [
		'success' => false,
		'message' => 'Сообщение успешно отправлено.',
		'errors' => []
	];

	/**
	Запрещенные поля к передачи из формы
	*/
	private $disallowFields = [
		"IBLOCK_ID",
		"LID",
		"IBLOCK_SECTION",
		"ACTIVE",
		"ACTIVE_FROM",
		"ACTIVE_TO",
		"DETAIL_PICTURE",
		"PREVIEW_PICTURE",
		"PREVIEW_TEXT_TYPE",
		"DETAIL_TEXT_TYPE",
		"XML_ID",
		"CODE",
		"TAGS",
		"SECTION_NAME",
		"SECTION_PICTURE",
		"SECTION_DESCRIPTION_TYPE",
		"SECTION_DESCRIPTION",
		"SECTION_DETAIL_PICTURE",
		"SECTION_XML_ID",
		"SECTION_CODE",
		"LOG_SECTION_ADD",
		"LOG_SECTION_EDIT",
		"LOG_SECTION_DELETE",
		"LOG_ELEMENT_ADD",
		"LOG_ELEMENT_EDIT",
		"LOG_ELEMENT_DELETE",
		"XML_IMPORT_START_TIME",
		"DETAIL_TEXT_TYPE_ALLOW_CHANGE",
		"PREVIEW_TEXT_TYPE_ALLOW_CHANGE",
		"SECTION_DESCRIPTION_TYPE_ALLOW_CHANGE"
	];

	/**
	IP с которого пришли данные формы
	*/
	public $userIP = '';

	/**
	Названия полей для валидации, зависит от типа формы
	*/
	public $required = [];


	public function init()
	{

		$request = Context::getCurrent()->getRequest();

		$post = $request->getPostList()->toArray();

		//if(!isset($post["formtype"])) die('ERROR: formtype not defined');
		
		$this->formType = $post["formtype"];
		unset($post["formtype"]);

		$this->process($post);

	}

	private function process($post)
	{
		$this->userIP = $_SERVER['REMOTE_ADDR'];

		$this->prepareFields($post);

		$this->validateFields();
	}

	private function prepareFields($post)
	{
		// убираем запрещенные поля, если они были переданы
		foreach($this->disallowFields as $v){
			unset($post[$v], $post[strtolower($v)]);
		}

		foreach($post as $key => $value){
			if(is_array($value)) continue;
			$this->data[$key] = htmlspecialchars(mb_substr(strip_tags($value), 0, 4000), ENT_QUOTES, 'UTF-8');
		}

		// Если Имя не было заполнено
		if(empty($this->data["name"])){
			$this->data["name"] = "Post ".date("d.m.Y - H:i");
		}

		// заполняем массив данными отслеживания
		foreach($this->sources as $k => $v){
			if(isset($this->data[$k])){
				$this->sources[$k] = $this->data[$k];
				unset($this->data[$k]);
			}
		}
	}

	private function validateFields()
	{
		// проверка телефона
		if(isset($this->data['phone']) && in_array('phone', $this->required)){
			// если номер телефона короче 9 символов (допускаем что +7 не было передано)
			if(mb_strlen(preg_replace('/[^\d]/ius', '', $this->data['phone'])) < 9){
				$this->response['errors']['phone'] = 'Не верный номер телефона.';
			} else {
				//$this->data['phone'] = preg_replace('/[^\d\+]/ius', '', $this->data['phone']);
			}
		}
		// проверка фио для отзывов
		if(isset($this->data['fio']) && in_array('fio', $this->required)){
			// просто тупая проверка на заполненность
			if(mb_strlen($this->data['fio']) < 2){
				$this->response['errors']['fio'] = 'Введите Имя.';
			}
		}
		// проверка email для отзывов
		if(isset($this->data['email']) && in_array('email', $this->required)){
			// просто тупая проверка на заполненность
			if(mb_strlen($this->data['email']) < 2){
				$this->response['errors']['email'] = 'Введите E-mail.';
			}
		}
		// проверка revie для отзывов
		if(isset($this->data['review']) && in_array('review', $this->required)){
			// просто тупая проверка на заполненность
			if(mb_strlen($this->data['review']) < 2){
				$this->response['errors']['review'] = 'Введите отзыв.';
			}
		}

		if(!empty($this->response['errors'])){
			$this->response['success'] = false;
			$this->response();
		}

		$this->response['success'] = true;
	}

	public function response()
	{
		header('Content-type: application/json');
		//\Bitrix\Main\Web\Json::encode($array);
		die(json_encode($this->response, JSON_UNESCAPED_UNICODE));
	}

/*	public function sendToMail()
	{
		// sm-admin@smpost.ru
		//$this->data
		
		Event::send(array(
		    "EVENT_NAME" => "NEW_CALLBACK",
		    "LID" => SITE_ID,
		    "C_FIELDS" => $this->data,
		)); 
	}*/
	/**
	Сохранение заявки в БД сайта
	*/
	/*
	private function sendToBitrix()
	{
		// Каждая форма должна передавать поле formtype для определения инфоблока записи
		if(!isset($this->iblockIds[$this->formType])) die();

		// получаем данные о инфоблоке для проверки перед записью
		$iblockId = $this->iblockIds[$this->formType];

		$iblockFields = CIBlock::GetFields($iblockId);

		$iblockProps = [];
		$arProps = CIBlockProperty::GetList([], ["CHECK_PERMISSIONS" => "N", "IBLOCK_ID" => $iblockId]);

		while($prop = $arProps->Fetch()){
			$iblockProps[$prop['CODE']] = $prop;
		}

		// подготавливаем данные для сохранения в инфоблок
		$arData = [
			"IBLOCK_ID" => $iblockId,
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
		// Если Имя не было заполнено
		if(empty($arData["NAME"])){
			$arData["NAME"] = "Post ".date("d.m.Y - H:i");
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
	*/
	/*
	private function sendToMail()
	{

	}
	*/
	/*
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

		// ?clientid=test_id_123&type=test_type&referrer="test_referrer"&source="test_source"&medium=test_medium&campaign=test_campaign&keyword=test_keyword
		
		$sources = [
			'clientid' => '',
			'type' => '',
			'referrer' => '',
			'source' => '',
			'medium' => '',
			'campaign' => '',
			'keyword' => ''
		];
		foreach($sources as $k => $v){
			$sources[$k] = isset($this->data[$k]) ? $this->data[$k] : '';
		}
		unset($v);

        $items = [
            'id_form' => $this->formIds[$this->formtype],
            'SOURCE' => $this->sourceId,
            'TYPE' => $this->formIds[$this->formtype],
            'FNAME' => $this->data['name'],
            'DATE_BEGIN' => date("d-m-Y H:i"),
            'PHONE' => $this->data['phone'],
            'VOPROS' => $this->data['question'],
			'SOURCES' => $sources
        ];

        if(isset($this->data['time']) && isset($this->data['date'])){
        	$items['PRIEM_DATE_TIME'] = $this->data['date'] . ' ' . $this->data['time'];
        }
	}
	*/
/*	public function getData()
	{
		return $this->data;
	}
	public function getFormType()
	{
		return $this->formType;
	}*/
}

        /*
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
        */