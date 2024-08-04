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

if($putdata) {	
	$data = json_decode($putdata);
	if(isset($data->id)) {
		$IBLOCK_ID = 4;
		$find_element = false;
		$res = CIBlockElement::GetByID($data->id);
		if($ar_res = $res->GetNext()) {
			$find_element = true;
		}
		if($find_element) {
			$el = new CIBlockElement;

			$PROP = [];
			$PROP['email'] = escapeCharacter($data->email);
			$PROP['number_cart'] = escapeCharacter($data->card);
			$PROP['fio'] = escapeCharacter($data->name);
			$PROP['review'] = escapeCharacter($data->review);
			$PROP['answer'] = escapeCharacter($data->answer);
			
			$status_active = 'N';
			if($data->active == 'Y')
				$status_active = 'Y';

			$file_scan = ['del' => 'Y'];
			if(!empty(escapeCharacter($data->scan_review))) {
				$file_scan = CFile::MakeFileArray('http://okk.smclinic.ru'.escapeCharacter($data->scan_review));
				if(!isset($file_scan['tmp_name']) || empty($file_scan['tmp_name']))
					$file_scan = ['del' => 'Y'];
			}

			$arLoadProductArray = Array(
				"MODIFIED_BY"    => 1, 
				"IBLOCK_ID"      => $IBLOCK_ID,
				"NAME"           => escapeCharacter($data->name),
				//"PREVIEW_TEXT"   => escapeCharacter($data->review),
				//"DETAIL_TEXT"    => escapeCharacter($data->answer),
				"ACTIVE"         => $status_active,
				"DATE_ACTIVE_FROM" => escapeCharacter($data->date_active),
				"PREVIEW_PICTURE" => $file_scan
			);
			$RESULT_ID =  $el->Update($data->id, $arLoadProductArray);

			CIBlockElement::SetPropertyValuesEx($data->id, $IBLOCK_ID, $PROP);
		}
	}
}
