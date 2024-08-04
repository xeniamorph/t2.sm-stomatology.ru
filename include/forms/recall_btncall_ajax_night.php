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

$f_source['clientid'] = escapeCharacter($request->getPost('source')['clientId']);
$f_source['type'] = escapeCharacter($request->getPost('source')['type']);
$f_source['referrer'] = escapeCharacter($request->getPost('source')['referrer']);
$f_source['source'] = escapeCharacter($request->getPost('source')['source']);
$f_source['medium'] = escapeCharacter($request->getPost('source')['medium']);
$f_source['campaign'] = escapeCharacter($request->getPost('source')['campaign']);
$f_source['keyword'] = escapeCharacter($request->getPost('source')['keyword']);

if(!empty($f_phone)) {
	global $APPLICATION;

    $url_call = 'http://callcenter.smclinic.ru/shluz_sources.php';
    $servname = 'www.sm-stomatology.ru';
    @$date = date( "Y-m-d H:i" );
    
    $form_url = explode('?', $_SERVER['HTTP_REFERER']);
    $form_url = explode($_SERVER['HTTP_HOST'], $form_url[0]);

    $source = 160065;
    if(isset($form_url[1])) {
        if($form_url[1] == '/zubotekhnicheskaya-laboratoriya/') {
            $source = 482587;
        }
    }
    
    $items = array(
        'id_form' => $review_id,
        'SOURCE' => $source,
        'TYPE' => 365,
        'FNAME' => $f_name,
        'DATE_BEGIN' => $date,
        'PHONE' => $f_phone,
        'CALL_TIME' => $f_time,
        'VOPROS' => 'Форма с виджета трубки (ночная форма)',
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

    $email = '';
    $subject = 'sm-stomatology.ru: Форма с виджета трубки (ночная)';
    $message = '
    <html>
        <head>
            <title>Форма с виджета трубки. Cайта sm-stomatology.ru (ночная)</title>
        </head>
        <body>
            <p>Вам поступила заявка c сайта sm-stomatology.ru (ночная).</p>
            <p>Имя: ' . $f_name . '</p>
            <p>Телефон: ' . $f_phone . '</p>
            <p>Удобное время для звонка: ' . $f_time . '</p>
        </body>
    </html>
    ';
        
    // Для отправки HTML-письма должен быть установлен заголовок Content-type
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
        
    // Дополнительные заголовки
    $headers .= "To: sm-admin@smpost.ru\r\n";
    //$headers .= "To: ice_splash@mail.ru\r\n";
    //$headers .= "To:  \r\n";
    $headers .= 'From: noreply@smpost.ru' . "\r\n";
        
    // Отправляем
    mail($email, $subject, $message, $headers);
}
else {
    //global $strError;
    //echo $strError;
}

