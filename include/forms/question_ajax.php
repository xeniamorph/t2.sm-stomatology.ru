<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

$APPLICATION->IncludeComponent(
	"sm:forms",
	"",
	[
		'TITLE' => 'Онлайн консультация (остались вопросы)',
		'SPEC' => $f_name,
		'INPUTS' => [
            'NAME' => ['NAME' => 'name'],
			'PHONE' => ['NAME' => 'phone', 'REQUIRED' => true],
			'QUESTION' => ['NAME' => 'question'],
			'NAME_FORM' => ['NAME' => 'name_news', 'VALUE' => 'Онлайн консультация (остались вопросы)']
		],
		'IBLOCK' => [
			'ACTIVE' => true,
			'ID' => 14,
			'VALUE' => [
                'name' => 'NAME',
				'phone' => 'PHONE',
				'question' => 'QUESTION',
			]
		],
		'CALL_CENTER' => [
			'ACTIVE' => false,
			'SOURCE' => 160065,
			'TYPE' => 367,
			'STATISTICS_SEND' => true,
			'VALUE' => [
                'FNAME' => 'NAME',
				'PHONE' => 'PHONE',
				'VOPROS' => 'QUESTION'
			]
		],
		'MAIL_SEND' => [
			'ACTIVE' => true,
			'MAIL_TEMPLATE' => 'FORM_ONLINE_QUESTION'
		]
	]
);