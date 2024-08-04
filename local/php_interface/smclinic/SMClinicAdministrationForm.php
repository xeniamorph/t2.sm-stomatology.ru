<?php

use Bitrix\Main\Application, 
    Bitrix\Main\Context, 
    Bitrix\Main\Request, 
    Bitrix\Main\Server,
    Bitrix\Main\Mail\Event;

class SMClinicAdministrationForm extends SMClinicForm
{
	/**
	Шаблон письма
	*/
	private $mailEvent = 'NEW_ADMIN';

	public function run()
	{
		$this->required = ['name','lastname','email','review'];

		parent::init();
		
		$this->sendToMail();

		$this->response();
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

}