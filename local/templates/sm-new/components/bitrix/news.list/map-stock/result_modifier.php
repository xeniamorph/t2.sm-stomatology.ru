<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?

$metro = CIBlockElement::GetList(
	array(),
	array('IBLOCK_ID' => 18, 'ACTIVE' => 'Y'),
	false,
	false,
	array('ID', 'IBLOCK_ID', 'NAME')
);

$arMetro = [];
while($arItem = $metro->GetNextElement()){
	$fields = $arItem->GetFields();
	$arMetro[$fields['ID']] = $fields;
}
unset($arItem);

foreach($arResult['ITEMS'] as &$arItem){
	$arItem["DEPARTAMENT"] = preg_match('/детск(ий|ое|ая)/ius', $arItem["NAME"]) ? 'child' : 'adult';
	$arItem["PROPERTIES"]["metro"]["NAME"] = $arMetro[$arItem["PROPERTIES"]["metro"]["VALUE"]]["NAME"];
}
unset($arItem);