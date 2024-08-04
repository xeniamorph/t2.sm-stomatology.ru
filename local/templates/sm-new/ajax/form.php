<?php
require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
require_once($_SERVER["DOCUMENT_ROOT"]."/include/recaptcha_check.php");


use Bitrix\Main\Application, 
    Bitrix\Main\Context, 
    Bitrix\Main\Request, 
    Bitrix\Main\Server;

function escapeCharacter($value) {
	if(isset($value)) {
		$value = strip_tags($value);
		return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
	} else return '';
}

$formType = $request->getPost('formtype');

if($formType != 'review') {
	$recaptchaResponse = escapeCharacter($request->getPost('recaptcha_response'));
	if(!getStatusRecaptcha($recaptchaResponse)) { die; }
}

if($request->isAjaxRequest()){
	if($formType == 'callback'){
		$form = new SMClinicCallbackForm;
		$form->run();
	}
	elseif($formType == 'appointment'){
		$form = new SMClinicAppointmentForm;
		$form->run();
	}
	elseif($formType == 'review'){
		$form = new SMClinicReviewForm;
		$form->run();
	}
	elseif($formType == 'question'){
		$form = new SMClinicQuestionForm;
		$form->run();
	}
	elseif($formType == 'administration'){
		$form = new SMClinicAdministrationForm;
		$form->run();
	}
	elseif($formType == 'lab'){
		$form = new SMClinicLabForm;
		$form->run();
	}
	elseif($formType == 'consultation'){
		$form = new SMClinicConsultationForm;
		$form->run();
	}
} else {
	//die('not ajax');
}

?>