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
	$fields["DEPARTAMENT"] = preg_match('/детск(ий|ое|ая)/ius', $fields["NAME"]) ? 'child' : 'adult';
	$arClinics[$fields['ID']] = $fields;
}
unset($arItem);

$arResult['CLINICS'] = $arClinics;
