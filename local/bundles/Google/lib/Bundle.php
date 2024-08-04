<?php

namespace App\Bundle\Google;

use Bitrix\Main\Page\Asset;

define('GOOGLE_CAPTCHA_SECRET_KEY', '6LdSzJoUAAAAAJih05Q3L9GmUT56wLBIwrQFRbuw');

class Bundle extends \TAO\Bundle
{
	public function init()
	{
		$this->useScript('recaptcha.js');
		Asset::getInstance()->addString("<script src='https://www.google.com/recaptcha/api.js?onload=onloadCaptchaCallback&render=explicit&hl=ru' async defer></script>");

	}
}
