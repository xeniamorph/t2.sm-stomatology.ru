<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?

$clinics = CIBlockElement::GetList(
	array(),
	array('IBLOCK_ID' => 5, 'ACTIVE' => 'Y'),
	false,
	false,
	array('ID', 'IBLOCK_ID', 'NAME', 'PROPERTY_metro')
);

$arClinics = [];
while($arItem = $clinics->GetNextElement()){
	$fields = $arItem->GetFields();
	$fields['COLOR'] = SMClinicHelper::getMetroColorById($fields['PROPERTY_METRO_VALUE']);
	$arClinics[$fields['ID']] = $fields;
}
unset($arItem);

$arResult['CLINICS'] = $arClinics;


/*
$metro = CIBlockElement::GetList(
	array(),
	array('IBLOCK_ID' => 18, 'ACTIVE' => 'Y'),
	false,
	false,
	array('ID', 'IBLOCK_ID', 'NAME')
);

$arMetro = [];
while($arItem = $metro->GetNextElement()){
	$arMetro[] = $arItem->GetFields();
}
unset($arItem);
print_r($arMetro);
*/

//print_r($arClinics);

/*
$doctors = CIBlockElement::GetList(
	array(),
	array('ID' => $arResult["PROPERTIES"]["doctors"]["VALUE"], 'ACTIVE' => 'Y')
	//false,
	//false,
	//['ID', 'IBLOCK_ID', '']
);

while($arItem = $doctors->GetNextElement()){
	
	$fields = $arItem->GetFields();
	$props = $arItem->GetProperties();
	
	$fields['PROPERTIES'] = $props;
	
	$arResult["PROPERTIES"]["doctors"]["ITEMS"][] = $fields;
}

*/