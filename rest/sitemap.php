<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

if($_SERVER['REMOTE_ADDR'] != '5.53.123.187') die();

use Bitrix\Main\IO,
    Bitrix\Main\Application;

$putdata = file_get_contents('php://input');

function escapeCharacter($value) {
	if (isset($value)) {
		$value = strip_tags($value);
		return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
	} else
		return '';
}

if($putdata) {
	$data = json_decode($putdata);

	//print_r($data);

	$token = 'VtKDG2gNpDb46BYiSKbSj6yTaKSGZoI7';

	if($token == escapeCharacter($data->token)) {
		if(!empty($data->data) && !empty($data->filename)) {
			$file = new IO\File(Application::getDocumentRoot() . $data->filename);
			$file->putContents($data->data);
			echo 'file ok';
		} else {
			echo 'error file';
		}
		echo 'token ok';
	} else {
		echo 'error token';
	}
} else {
	echo 'error data';
}


