<?
/*ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);*/

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

if(!CModule::IncludeModule("iblock")) {
	return; 
}

function escapeCharacter($value) {
	if(isset($value)) {
		$value = strip_tags($value);
		return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
	} else return '';
}

$putdata = file_get_contents('php://input');

$problem_phone = 11256;
$problem_form = 11255;

if($putdata) {	
	$data = json_decode($putdata);
	if(isset($data->id)) {
		$data->id = escapeCharacter($data->id);
		
		$el = new CIBlockElement;
		if($data->id == 1) {
			$el->Update($problem_phone, ['ACTIVE' => 'Y']);
			$el->Update($problem_form, ['ACTIVE' => 'N']);
		} else if($data->id == 2) {
			$el->Update($problem_phone, ['ACTIVE' => 'N']);
			$el->Update($problem_form, ['ACTIVE' => 'Y']);
		} else {
			$el->Update($problem_phone, ['ACTIVE' => 'N']);
			$el->Update($problem_form, ['ACTIVE' => 'N']);
		}
	}
}
