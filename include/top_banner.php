<? /*if($APPLICATION->GetCurPage() != '/stock/aktsiya-nedelya-implantatsii/'): */?>
<? //$rand_count = 1; ?>
<? //$rand =  rand(0, $rand_count); ?>
<? /*if($rand == 0): ?>
<div class="main-b">
	<a href="/stock/aktsiya-ispravlenie-prikusa-dlya-schastlivoy-detskoy-ulybki/" target="_blank">
		<picture>
			<source srcset="/upload/b/ispravlenie-prikusa_small.png" media="(max-width: 768px)">
			<img src="/upload/b/ispravlenie-prikusa_big.png" width="100%">
		</picture>
	</a>
</div>
<? elseif($rand == 1):*/ /*?>
<div class="main-b">
	<a href="/stock/aktsiya-nedelya-implantatsii/">
		<picture>
			<source srcset="/upload/b/imp_320-120.png" media="(max-width: 768px)">
			<img src="/upload/b/imp_1004.png" width="100%">
		</picture>
	</a>
</div>
<?*//*elseif($rand == 2): ?>
<div class="main-b">
	<a href="/about/news/tselitelnyy-son-dlya-zdorovya-ulybki/" target="_blank">
		<picture>
			<source srcset="/upload/b/n-320-120.jpg" media="(max-width: 768px)">
			<img src="/upload/b/n-1200-150.jpg" width="100%">
		</picture>
	</a>
</div>
<? endif;*/ ?>
<? //endif; ?>
<?
require_once($_SERVER["DOCUMENT_ROOT"] . '/include/Mobile_Detect.php');
$detect = new Mobile_Detect;

$APPLICATION->IncludeComponent("sm:banner", "banner-top", Array(
	"IBLOCK_ID" => "26",
		"BANNER_TYPE" => "Баннер в шапке",	// Тип баннера
	),
	false
);
?>