<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

$APPLICATION->IncludeComponent(
	"sm:forms",
	"online_doc",
	[
		'TITLE' => 'Онлайн документы',
		'INPUTS' => [
			'DEP' => ['NAME' => 'dep'],
            'NAME' => ['NAME' => 'name', 'REQUIRED' => true],
			'DOB' => ['NAME' => 'dob', 'REQUIRED' => true, 'DATE_FORMAT' => 'd.m.Y'],
			'EMAIL' => ['NAME' => 'email'],
			'PHONE' => ['NAME' => 'phone', 'REQUIRED' => true],
			'PASSPORT' => ['NAME' => 'passport', 'REQUIRED' => true],
			'ISSUED' => ['NAME' => 'issued', 'REQUIRED' => true],
			'PARENT' => ['NAME' => 'parent', 'REPLACE' => ['on', 'да']],

			'CNAME' => ['NAME' => 'cname'],
			'CDOB' => ['NAME' => 'cdob', 'DATE_FORMAT' => 'd.m.Y'],
			'CPASSPORT' => ['NAME' => 'cpassport'],
			'CISSUED' => ['NAME' => 'cissued'],

			'ADDRESS' => ['NAME' => 'address', 'REQUIRED' => true],
			'MATCH' => ['NAME' => 'match', 'REPLACE' => ['on', 'да']],
			'ADDRESSR' => ['NAME' => 'addressr'],

			'ALLERGIC' => ['NAME' => 'allergic'],
			'ADDINFO' => ['NAME' => 'addinfo'],
		],
		'IBLOCK' => [
			'ACTIVE' => true,
			'ID' => 25,
			'VALUE' => [
				'DEP' => 'DEP',
                'NAME' => 'NAME',
				'DOB' => 'DOB',
				'EMAIL' => 'EMAIL',
				'PHONE' => 'PHONE',
				'PASSPORT' => 'PASSPORT',
				'ISSUED' => 'ISSUED',
				'PARENT' => 'PARENT',

				'CNAME' => 'CNAME',
				'CDOB' => 'CDOB',
				'CPASSPORT' => 'CPASSPORT',
				'CISSUED' => 'CISSUED',

				'ADDRESS' => 'ADDRESS',
				'MATCH' => 'MATCH',
				'ADDRESSR' => 'ADDRESSR',

				'ALLERGIC' => 'ALLERGIC',
				'ADDINFO' => 'ADDINFO',
			]
		],
		'CALL_CENTER' => [
			'ACTIVE' => false
		],
		'MAIL_SEND' => [
			'ACTIVE' => true,
			'MAIL_TEMPLATE' => 'FORM_ONLINE_DOC'
		]
	]
);