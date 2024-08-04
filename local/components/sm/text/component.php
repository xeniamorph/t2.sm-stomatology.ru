<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$arParams['CACHE_TIME'] = 36000;

if($this->StartResultCache()) {
	if (!\Bitrix\Main\Loader::includeModule('iblock')) {
        $this->AbortResultCache();
        ShowError('Модуль «Информационные блоки» не установлен');
        return;
    }
	
	if(!empty($arParams['ELEMENT_ID'])) {
		$arSelect = [
			"ID",
			"NAME",
			"DATE_ACTIVE_FROM",
			"PREVIEW_PICTURE",
			"DETAIL_PICTURE",
			"PREVIEW_TEXT",
			"DETAIL_TEXT",
		];
		$arFilter = ["IBLOCK_ID" => IntVal($arParams['IBLOCK_ID']), "ACTIVE_DATE" => "Y", "ACTIVE" => "Y", "ID" => $arParams['ELEMENT_ID']];
		$res = CIBlockElement::GetList([], $arFilter, false, false, $arSelect);
		while($ob = $res->GetNextElement())
		{
			$arFields = $ob->GetFields();
			$arResult['TEXT'] = $arFields;
		}

		$this->IncludeComponentTemplate();
	}
}