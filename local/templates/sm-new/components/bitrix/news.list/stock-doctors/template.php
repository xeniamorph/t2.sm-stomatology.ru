<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<? if(!empty($arResult["ITEMS"])): ?>
<div class="iz-doctors">
	<div class="iz-doctors__box">
		<div class="iz-doctors__header">Наши врачи</div>
		<div class="iz-doctors__items">
			<?foreach($arResult["ITEMS"] as $arItem):?>
			<?
			
/*			if(!empty($arItem["PROPERTIES"]["SQUARE_PHOTO"]["VALUE"])){
				$file = CFile::ResizeImageGet($arItem["PROPERTIES"]["SQUARE_PHOTO"]["VALUE"], ['width' => 136, 'height' => 136], BX_RESIZE_IMAGE_EXACT, true);
			} else {*/
				//$file = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"], ['width' => 150, 'height' => 200], BX_RESIZE_IMAGE_EXACT, true);
			//}
			
			?>
			<div class="iz-doctors__item">
				<div class="iz-doctors__image"><img src="<?= $arItem["DETAIL_PICTURE"]['SRC'] ?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>" loading="lazy"></div>
				<div class="iz-doctors__name"><?= preg_replace('/\s/', '<br>', $arItem['NAME'], 1) ?></div>
				<div class="iz-doctors__spec"><?= $arItem["PROPERTIES"]["specialization"]["VALUE"] ?></div>
			</div>
			<? endforeach ?>
		</div>
	</div>
</div>
<? endif ?>