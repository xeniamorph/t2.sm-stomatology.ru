<?php
namespace App\Bundle\Google;

class Recaptcha
{
	const SECRET_KEY = '6LdSzJoUAAAAAJih05Q3L9GmUT56wLBIwrQFRbuw';
	const URL = 'https://www.google.com/recaptcha/api/siteverify';

	public function __construct($secretKey)
	{
		$this->secretKey = $secretKey;
	}

	public function isValidResponse($recaptchaResponse, $remoteIP)
	{
		$request = curl_init();
		curl_setopt($request, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($request, CURLOPT_POST, 1);
		curl_setopt($request, CURLOPT_POSTFIELDS, [
			'secret' => $this->secretKey,
			'response' => $recaptchaResponse,
			'remoteip' => $remoteIP,
		]);
		curl_setopt($request, CURLOPT_TIMEOUT, 10);
		curl_setopt($request, CURLOPT_URL, self::URL);
		$response = curl_exec($request);
		$response = json_decode($response, true);
		curl_close($request);

		if ($response["success"] === false) {
			return false;
		}
		return true;
	}
}
