<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
	//print_r($arResult);
	require_once($_SERVER["DOCUMENT_ROOT"] . '/include/Mobile_Detect.php');
	$detect = new Mobile_Detect;
	$nofollow = '';
	if($arResult['PROPERTY_BANNER_NOFOLLOW_VALUE'] == 'Y') {
		$nofollow = 'rel="nofollow"';
	}
?>
<div class="n-header-banner">
	<span class="important-information-desk">
		<div class="top_banner">
			<div class="container">
				<!--a href="#">
					<img alt="" title="" src="/local/templates/sm-new/img/blue_banner.jpg" >
				</a-->

				<a class="int_b" <?= $nofollow; ?> href="<?= $arResult['PROPERTY_BANNER_HREF_VALUE']?>" <? if(isset($arResult['PROPERTY_BANNER_TARGET_VALUE'])): ?>target="_blank" <? endif; ?>>
					<picture>
						<source srcset="<?= $arResult['PICTURE_MOB']['SRC']?>" media="(max-width: 768px)">
						<img src="<?= $arResult['PICTURE_MAIN']['SRC']?>">
					</picture>
					<? if(!empty($arResult['PROPERTY_ERID_VALUE'])): ?>
						<span>Erid: <?= $arResult['PROPERTY_ERID_VALUE']; ?> ООО «ГК СМ-Клиника» ИНН 7743846660</span>
					<? endif; ?>
				</a>
			</div>
		</div>
	</span>
</div>


