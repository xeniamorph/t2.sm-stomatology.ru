<? //if($APPLICATION->GetCurPage() != '/stock/aktsiya-nedelya-implantatsii/'): ?>
<?
require_once($_SERVER["DOCUMENT_ROOT"] . '/include/Mobile_Detect.php');
$rand_count = 1;
$detect = new Mobile_Detect; ?>

<br />
<? $rand =  rand(0, $rand_count); ?>
<? /*if($rand == 0): ?>
	<a href="/services/online-konsultatsiya-vracha/" target="_blank"><img src="/upload/b/sm-stomatology-240-400.jpg"></a>
<? elseif($rand == 1): ?>
	<a href="/stock/aktsiya-nedelya-implantatsii/" target="_blank"><img src="/upload/b/imp_240-400.png"></a>
<? endif;*/ ?>
<? //endif; ?>
<?/*<a href="/stock/luchshaya-profilaktika-kariesa-po-vygodnoy-tsene/" target="_blank"><img src="/upload/b/240x400.jpg"></a>*/?>
<?
$APPLICATION->IncludeComponent("sm:banner", "banner-left", Array(
	"IBLOCK_ID" => "26",
		"BANNER_TYPE" => "Баннер в левом блоке",	// Тип баннера
	),
	false
);
?>
