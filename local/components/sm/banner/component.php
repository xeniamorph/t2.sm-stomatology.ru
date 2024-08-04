<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/*global $USER;
if ($USER->IsAdmin()) {
	echo $APPLICATION->GetCurPage();
}*/
/*if ($this->StartResultCache())
{*/
$arParams['CACHE_TIME'] = 36000;

	if(!isset($arParams['BANNER_TYPE']))
		return;

	$detect = new Mobile_Detect;

	$count_banner = 0;
	$banner_list = [];
	$banner_url = [];
	$banner_url_exclude = [];
	if(!empty($arParams['CUR_URL'])) {
		$cur_page = $arParams['CUR_URL'];
	} else {
		$cur_page = $APPLICATION->GetCurPage();
	}
	//print_r($cur_page);


	if ($this->StartResultCache()) {
		if(!CModule::IncludeModule("iblock"))
		return;
		$arSelect = [
			"ID",
			"NAME",
			"DATE_ACTIVE_FROM",
			"PREVIEW_PICTURE",
			"DETAIL_PICTURE",
			"PREVIEW_TEXT",
			"DETAIL_TEXT",
			"PROPERTY_BANNER_HREF",
			"PROPERTY_BANNER_TARGET",
			"PROPERTY_BANNER_TYPE",
			"PROPERTY_BANNER_NO_SHOW",
			"PROPERTY_BANNER_CSS",
			"PROPERTY_BANNER_JS",
			"PROPERTY_BANNER_HTML",
			"PROPERTY_BANNER_CSS_MOB",
			"PROPERTY_BANNER_JS_MOB",
			"PROPERTY_BANNER_HTML_MOB",
			"PROPERTY_BANNER_NOFOLLOW",
			"PROPERTY_ERID"
		];
		$arFilter = ["IBLOCK_ID" => IntVal($arParams['IBLOCK_ID']), "ACTIVE_DATE" => "Y", "ACTIVE" => "Y", "PROPERTY_BANNER_TYPE_VALUE" => $arParams['BANNER_TYPE']];
		$res = CIBlockElement::GetList([], $arFilter, false, false, $arSelect);
		while($ob = $res->GetNextElement())
		{
			$arResult['BANNERS'][] = $ob->GetFields();
		}
		$this->EndResultCache();
	}

	foreach($arResult['BANNERS'] as $arFields) {
		$arFields['PREVIEW_TEXT'] = str_replace([' ', "\r", "\n"], '', $arFields['PREVIEW_TEXT']);
		$banner_url = explode(';', $arFields['PREVIEW_TEXT']);

		$arFields['DETAIL_TEXT'] = str_replace([' ', "\r", "\n"], '', $arFields['DETAIL_TEXT']);
		$banner_url_exclude = explode(';', $arFields['DETAIL_TEXT']);

		$add_banner = false;

		foreach($banner_url as $value) {
			if(strpos($value, '*') !== false) {
				$value = str_replace('*', '', $value);
				if(strpos($cur_page, $value) !== false) {
					$add_banner = true;
					foreach ($banner_url_exclude as $exclude) {
						if($cur_page == '/' && $exclude == '/') {
							$add_banner = false;
							break;
						} else if(strpos($cur_page, $exclude) !== false && $exclude != '/') {
							$add_banner = false;
							break;
						}
						
					}
					break;
				}
			} else if($cur_page === $value) {
				$add_banner = true;
				foreach ($banner_url_exclude as $exclude) {
					if($cur_page === $exclude) {
						$add_banner = false;
						break;
					}
				}
				break;
			}
		}

		if($add_banner) {
			$count_banner++;

			$banner_list[$count_banner] = $arFields;
		}
	}

	if($count_banner > 0) {

		$banner_rand = 1;
		if($count_banner > 1) {
			$banner_list_include = [];
			$count_banner_include = 0;
			$no_show = false;

			foreach($banner_list as $value) {
				if($value['PROPERTY_BANNER_NO_SHOW_VALUE'] != 'Y') {
					$count_banner_include++;
					$banner_list_include[$count_banner_include] = $value;
					$no_show = true;
				}
			}

			//print_r($banner_list_include);

			if($no_show) {
				$banner_list = $banner_list_include;
				$count_banner = $count_banner_include;
			}

			if($count_banner > 1) {
				$banner_rand =  rand(1, $count_banner);
			}
		}

		$arResult = $banner_list[$banner_rand];

		if(isset($arResult['PREVIEW_PICTURE'])) {
			$arResult['PICTURE_MAIN'] = CFile::GetFileArray($arResult['PREVIEW_PICTURE']);
		}
		if(isset($arResult['DETAIL_PICTURE'])) {
			$arResult['PICTURE_MOB'] = CFile::GetFileArray($arResult['DETAIL_PICTURE']);
		}

		if($detect->isMobile()) {
			if(!empty($arResult['PROPERTY_BANNER_JS_MOB_VALUE'])) {
				$APPLICATION->AddHeadScript(CFile::GetPath($arResult['PROPERTY_BANNER_JS_MOB_VALUE']));
			}
			if(!empty($arResult['PROPERTY_BANNER_CSS_MOB_VALUE'])) {
				$APPLICATION->SetAdditionalCSS(CFile::GetPath($arResult['PROPERTY_BANNER_CSS_MOB_VALUE']), true);
			}
		} else {
			if(!empty($arResult['PROPERTY_BANNER_JS_VALUE'])) {
				$APPLICATION->AddHeadScript(CFile::GetPath($arResult['PROPERTY_BANNER_JS_VALUE']));
				//print_r(CFile::GetPath($arResult['PROPERTY_BANNER_JS_MOB_VALUE']));
			}
			if(!empty($arResult['PROPERTY_BANNER_CSS_VALUE'])) {
				$APPLICATION->SetAdditionalCSS(CFile::GetPath($arResult['PROPERTY_BANNER_CSS_VALUE']), true);
			}
		}

		$this->IncludeComponentTemplate();
	}
//}
