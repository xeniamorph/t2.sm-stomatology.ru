<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

function escapeCharacter($value) {
	if(isset($value)) {
		$value = strip_tags($value);
		return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
	} else return '';
}
use Bitrix\Main\Context;
$request = Context::getCurrent()->getRequest();

$f_name = escapeCharacter($request->getPost('name'));
$f_phone = escapeCharacter($request->getPost('phone'));
$f_time = escapeCharacter($request->getPost('time'));
$id_news = escapeCharacter($request->getPost('id'));

$f_source['clientid'] = escapeCharacter($request->getPost('source')['clientId']);
$f_source['type'] = escapeCharacter($request->getPost('source')['type']);
$f_source['referrer'] = escapeCharacter($request->getPost('source')['referrer']);
$f_source['source'] = escapeCharacter($request->getPost('source')['source']);
$f_source['medium'] = escapeCharacter($request->getPost('source')['medium']);
$f_source['campaign'] = escapeCharacter($request->getPost('source')['campaign']);
$f_source['keyword'] = escapeCharacter($request->getPost('source')['keyword']);

if(!empty($f_phone)) {
	global $APPLICATION;
	CModule::IncludeModule("iblock");
	
	$name_news = '';
	$email_news = '';
	$form_name_news = '';
	if(!empty($id_news)) {
		$arSelect = Array("ID", "IBLOCK_ID", "NAME", "DATE_ACTIVE_FROM","PROPERTY_EMAIL_FORM", "PROPERTY_TITLE_FORM");
		$arFilter = Array("IBLOCK_ID"=>9, "ID"=>(int)$id_news, "ACTIVE"=>"Y");
		$res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
		while($ob = $res->GetNextElement()){
			$arFields = $ob->GetFields();
			$name_news = $arFields['NAME'];
			
			$arProps = $ob->GetProperties();
			$email_news = $arProps['email_form']['VALUE'];
			$form_name_news = $arProps['title_form']['VALUE'];
			//print_r($name_news);
		}
	}
	/*$newReview = new CIBlockElement();
	$prop[15] = $f_phone;
	$prop[16] = $f_name;
	$fields  = [
		'IBLOCK_ID' => 13,
		'NAME' => 'Запись на прием по акции «Бесплатная консультация хирурга по поводу операции»',
		'ACTIVE' => 'N',
		'PROPERTY_VALUES' => $prop,
	];
	$review_id = $newReview->Add($fields);*/
	$review_id = 0;
	// send callcenter
	// SOURCE
	$url_call = 'http://callcenter.smclinic.ru/shluz_sources.php';
	$servname = 'sm-stomatology.ru';
	@$date = date( "Y-m-d H:i" );	
	$items = array(
		'id_form' => $review_id,
		'SOURCE' => 160065,
		'TYPE' => 366,
		'FNAME' => $f_name,
		'DATE_BEGIN' => $date,
		'PHONE' => $f_phone,
		'VOPROS' => $form_name_news.' '.$name_news.': Желаемое время: '.$f_time,
		'SOURCES' => $f_source
	);
	
	if($curl = curl_init()) {
		curl_setopt($curl, CURLOPT_URL, $url_call);

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
	
	$subject = 'sm-stomatology.ru: Заявка "'.$form_name_news.' «'.$name_news.'»"';
	
	$message = '
	<html>
		<head>
			<title>'.$name_news.'</title>
		</head>
		<body>
			<p>Вам поступила заявка</p>
			<p>Имя: ' . $f_name . '</p>
			<p>Телефон: ' . $f_phone . '</p>
			<p>Желательное время: ' . $f_time . '</p>
		</body>
	</html>
	';
	
	// Для отправки HTML-письма должен быть установлен заголовок Content-type
	$headers = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
	
	// Дополнительные заголовки
	$headers .= "To: sm-admin@smpost.ru, 9926@smpost.ru, ice_splash@mail.ru\r\n";
	//$headers .= "To: '.$email_news.'\r\n";
	//$headers .= "To:  \r\n";
	$headers .= 'From: noreply@smpost.ru' . "\r\n";
	
	// Отправляем
	if(!empty($email_news)) {
		mail($email_news, $subject, $message, $headers);
	}
}
else {
	//global $strError;
	//echo $strError;
}
