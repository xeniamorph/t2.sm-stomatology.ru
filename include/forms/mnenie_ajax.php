<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

use Bitrix\Main\Context;

function escapeCharacter($value) {
	if(isset($value)) {
		$value = strip_tags($value);
		return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
	} else return '';
}

$request = Context::getCurrent()->getRequest();

$f_spec = escapeCharacter($request->get('spec'));

$APPLICATION->IncludeComponent(
	"sm:forms",
	"mnenie",
	[
		'TITLE' => 'Онлайн консультация '.$f_spec,
		'SPEC' => $f_spec,
		'INPUTS' => [
            'NAME' => ['NAME' => 'name'],
            'PHONE' => ['NAME' => 'phone', 'REQUIRED' => true],
			'SPEC' => ['NAME' => 'spec'],
			'TEXT' => ['NAME' => 'text', 'VALUE' => 'Онлайн консультация '.$f_spec],
			'NAME_FORM' => ['NAME' => 'name_news', 'VALUE' => 'Онлайн консультация '.$f_spec]
		],
		'IBLOCK' => [
			'ACTIVE' => true,
			'ID' => 15,
			'VALUE' => [
                'name' => 'NAME',
				'phone' => 'PHONE',
				'spec' => 'SPEC'
			]
		],
		'CALL_CENTER' => [
			'ACTIVE' => true,
			'SOURCE' => 160065,
			'TYPE' => 365,
			'STATISTICS_SEND' => true,
			'VALUE' => [
                'FNAME' => 'NAME',
                'PHONE' => 'PHONE',
                'VOPROS' => 'TEXT'
			]
		],
		'MAIL_SEND' => [
			'ACTIVE' => true,
			'MAIL_TEMPLATE' => 'FORM_ALL'
		]
	]
);