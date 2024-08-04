<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
global $USER;
$admin = $USER->isAdmin() ? true : false;
?>
<?php if(!empty($arResult["ITEMS"])): ?>
<div class="m-slider">
	<div class="m-slider__wrap">
		<div class="m-slider__bg"></div>
		<div class="m-slider__slider">
			<?php	$first = true; ?>
			<?php foreach($arResult["ITEMS"] as $key => $arItem):
			$editID = '';
			if($admin){
				$editID = ' id="'.$this->GetEditAreaId($arItem['ID']).'"';
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			}
			?>
				<div class="m-slider__slide"<?= $editID ?>>
					<div class="container">
						<a class="m-slider__box" href="<?= $arItem["PROPERTIES"]["link"]["VALUE"] ?>">
							<div class="m-slider__left">
								<div class="m-slider__title"><?= $arItem["DETAIL_TEXT"] ? $arItem["DETAIL_TEXT"] : $arItem["NAME"]?></div>
								<div class="m-slider__desc"><?= $arItem["PREVIEW_TEXT"]?></div>
								<div class="m-slider__button">
									<span>Подробнее</span>
								</div>
							</div>
							<div class="m-slider__right">
								<img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>" title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>">
							</div>
							<? if(!empty($arItem["PROPERTIES"]["ERID"]["VALUE"])): ?>
								<span class="erid">Erid: <?= $arItem["PROPERTIES"]["ERID"]["VALUE"]; ?> 
									ООО «ГК СМ-Клиника» ИНН 7743846660
								</span>
						    <? endif; ?>
						</a>
					</div>
				</div>
			<?php endforeach;?>
		</div>
		<div class="m-slider__nav">
			<div class="m-slider__controls">
				<div class="m-slider__prev"></div>
				<div class="m-slider__dots"></div>
				<div class="m-slider__next"></div>
			</div>
		</div>
	</div>
</div>
<?php endif;?>