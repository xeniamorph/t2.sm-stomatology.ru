<br />
<?
require_once($_SERVER["DOCUMENT_ROOT"] . '/include/Mobile_Detect.php');
$detect = new Mobile_Detect;

$APPLICATION->IncludeComponent("sm:banner", "banner-top", Array(
	"IBLOCK_ID" => "26",
		"BANNER_TYPE" => "Баннер на странице",	// Тип баннера
	),
	false
);
?>