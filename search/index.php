<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->AddChainItem("Поиск", "/search/");
$APPLICATION->SetPageProperty("title", "Поиск - «СМ-Стоматология»");
\TAO::navigation()->route()->add(['url' => '/search/', 'title' => 'Поиск']);?>

<?php
$APPLICATION->IncludeComponent(
	"sm:search.page",
	".default",
	array(
		"AJAX_MODE" => "Y",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "N",
		"DEFAULT_SORT" => "rank",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_TOP_PAGER" => "Y",
		"FILTER_NAME" => "arrFilter",
		"NO_WORD_LOGIC" => "Y",
		"PAGER_SHOW_ALWAYS" => "Y",
		"PAGER_TEMPLATE" => "",
		"PAGER_TITLE" => "Результаты поиска",
		"PAGE_RESULT_COUNT" => "10",
		"PATH_TO_USER_PROFILE" => "",
		"RATING_TYPE" => "",
		"RESTART" => "N",
		"SHOW_RATING" => "",
		"SHOW_WHEN" => "N",
		"SHOW_WHERE" => "Y",
		"USE_LANGUAGE_GUESS" => "Y",
		"USE_SUGGEST" => "N",
		"USE_TITLE_RANK" => "Y",
		"arrFILTER" => array(
			0 => "iblock_info",
			1 => "iblock_clinic",
			2 => "iblock_services",
			3 => "iblock_disease_c",
		),
		"arrWHERE" => array(
		),
		"COMPONENT_TEMPLATE" => ".default",
		"arrFILTER_iblock_disease_c" => array(
			0 => "8",
		),
		"arrFILTER_iblock_services" => array(
			0 => "11",
		),
		"arrFILTER_iblock_info" => array(
			0 => "2",
			1 => "9",
		),
		"arrFILTER_iblock_clinic" => array(
			0 => "5",
			1 => "6",
		)
	),
	false
);?>
<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php"); ?>
