<?php

use Bitrix\Main\Application, 
    Bitrix\Main\Context, 
    Bitrix\Main\Request, 
    Bitrix\Main\Server,
    Bitrix\Main\Mail\Event;

class SMClinicLabForm extends SMClinicForm
{
	/**
	Шаблон письма
	*/
	private $mailEvent = 'NEW_ORDER';

	public function run()
	{
		$this->required = ['phone','email'];

		parent::init();
		
		$this->sendToMail();

		$this->response['message'] = 'Заявка на Ваш заказ отправлена!';

		$this->response();
	}

	private function sendToMail()
	{
		if(parent::DEBUG) die(print_r($this->data, true));

        $this->data['product_price'] = '';
        if($this->data['product'] == 'Полный съемный протез') {
        	$this->data['product_price'] = 'Стоимость «Полного съемного протеза с опорой на 4-6 имплантатах с использованием балочной конструкции»  - 50.700 рублей.';
        }
        if($this->data['product'] == 'Бюгельный протез') {
            $this->data['product_price'] = 'Стоимость «Бюгельного протеза с фиксацией на аттачменах SAE двусторонний» - 30.300 рублей.';
        }

        // отправка нам
		Event::send(array(
		    "EVENT_NAME" => $this->mailEvent,
		    "LID" => SITE_ID,
		    "C_FIELDS" => $this->data,
		)); 

        // отправка подтверждения клиенту
        if(!empty($this->data['product_price'])) {
			Event::send(array(
			    "EVENT_NAME" => 'NEW_ORDER_CLIENT',
			    "LID" => SITE_ID,
			    "C_FIELDS" => [
					'email' => $this->data['email'],
					'product_price' => $this->data['product_price']
			    ]
			)); 
        }

	}
}