<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
	//print_r($arResult);
	$detect = new Mobile_Detect;
	$nofollow = '';
	if($arResult['PROPERTY_BANNER_NOFOLLOW_VALUE'] == 'Y') {
		$nofollow = 'rel="nofollow"';
	}
?>
<? if(!$detect->isMobile()): ?>
	<a <?= $nofollow; ?> href="<?= $arResult['PROPERTY_BANNER_HREF_VALUE']?>" <? if(isset($arResult['PROPERTY_BANNER_TARGET_VALUE'])): ?>target="_blank" <? endif; ?>>
		<picture>
			<?/*<source srcset="<?= $arResult['PICTURE_MAIN']['SRC']?>.webp" type="image/webp" />*/?>
			<img width="<?= $arResult['PICTURE_MAIN']['WIDTH']?>" height="<?= $arResult['PICTURE_MAIN']['HEIGHT']?>" class="b-main" src="<?= $arResult['PICTURE_MAIN']['SRC']?>">
		</picture>	
	</a>
<? endif; ?>

<?/*
<? if(!$detect->isMobile()): ?>
	<? if(!empty($arResult['PROPERTY_BANNER_HTML_VALUE']['TEXT'])): ?>
		<?= $arResult['~PROPERTY_BANNER_HTML_VALUE']['TEXT']?>
	<? else: ?>
		<? if(isset($arResult['PICTURE_MAIN'])): ?>
			<a href="<?= $arResult['PROPERTY_BANNER_HREF_VALUE']?>" <? if(isset($arResult['PROPERTY_BANNER_TARGET_VALUE'])): ?>target="_blank" <? endif; ?>>
				<picture>
					<source srcset="<?= $arResult['PICTURE_MAIN']['SRC']?>.webp" type="image/webp" />
					<img width="<?= $arResult['PICTURE_MAIN']['WIDTH']?>" height="<?= $arResult['PICTURE_MAIN']['HEIGHT']?>" class="b-main" src="<?= $arResult['PICTURE_MAIN']['SRC']?>">
				</picture>	
			</a>
		<? endif; ?>
	<? endif; ?>
<? else: ?>
	<? if(!empty($arResult['PROPERTY_BANNER_HTML_MOB_VALUE']['TEXT'])): ?>
		<?= $arResult['~PROPERTY_BANNER_HTML_MOB_VALUE']['TEXT']?>
	<? else: ?>
		<? if(isset($arResult['PICTURE_MOB'])): ?>
			<a href="<?= $arResult['PROPERTY_BANNER_HREF_VALUE']?>" <? if(isset($arResult['PROPERTY_BANNER_TARGET_VALUE'])): ?>target="_blank" <? endif; ?>>
				<picture>
					<source srcset="<?= $arResult['PICTURE_MOB']['SRC']?>.webp" type="image/webp" />
					<img width="<?= $arResult['PICTURE_MOB']['WIDTH']?>" height="<?= $arResult['PICTURE_MOB']['HEIGHT']?>" class="b-main" src="<?= $arResult['PICTURE_MOB']['SRC']?>">
				</picture>
			</a>
		<? endif; ?>
	<? endif; ?>
<? endif; ?>
*/?>


