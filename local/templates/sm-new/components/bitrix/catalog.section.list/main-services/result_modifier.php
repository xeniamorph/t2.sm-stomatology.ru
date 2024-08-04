<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

foreach($arResult['SECTIONS'] as $key=>$item) {
	$res = \CIBlockSection::GetList(["SORT"=>"ASC"], ['ID'=>$item['ID'], 'IBLOCK_ID'=> $item['IBLOCK_ID']],false,['ID', 'UF_ICO'] );
	if($section = $res->GetNext())
		$arResult['SECTIONS'][$key]['icon'] = \CFile::GetPath($section['UF_ICO']);
}
