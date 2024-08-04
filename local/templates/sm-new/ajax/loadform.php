<?php require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");?>

<?
use Bitrix\Main\Application, 
    Bitrix\Main\Context, 
    Bitrix\Main\Request, 
    Bitrix\Main\Server;

if($request->isAjaxRequest()){
	$target = str_replace(['.', '#'], '', $request->getPost('target'));

	$response = [
		'success' => false,
		'html' => 'Произошла ошибка'
	];

	if(file_exists('forms/'.$target.'.html')){
		$output = file_get_contents('forms/'.$target.'.html');

		$response['success'] = true;
		$response['html'] = $output;
	}
	elseif(file_exists('forms/'.$target.'.php')){
		$output = include('forms/'.$target.'.php');

		$response['success'] = true;
		$response['html'] = $output;
	}

	die(json_encode($response, JSON_UNESCAPED_UNICODE));
}