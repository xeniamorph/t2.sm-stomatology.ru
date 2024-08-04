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
<section class="doctors-slider__block">
	<div class="container">
		<h2 class="doctors-slider__title">Звезды медицины</h2>
	</div>
	<div class="doctors-slider">
		<div class="container">
			<div class="doctors-slider__wrap">
				<div class="doctors-slider__slider">
					<?php foreach($arResult["ITEMS"] as $arItem):
					$editID = '';
					if($admin){
						$editID = ' id="'.$this->GetEditAreaId($arItem['ID']).'"';
						$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
						$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
					}

					if(!empty($arItem["PROPERTIES"]["SQUARE_PHOTO"]["VALUE"])){
						$file = CFile::ResizeImageGet($arItem["PROPERTIES"]["SQUARE_PHOTO"]["VALUE"], ['width' => 136, 'height' => 136], BX_RESIZE_IMAGE_EXACT, true);
					} else {
						$file = CFile::ResizeImageGet($arItem["DETAIL_PICTURE"], ['width' => 136, 'height' => 136], BX_RESIZE_IMAGE_EXACT, true);
					}
					?>
					<div class="doctors-slider__slide"<?= $editID ?>>
						<div class="doctor-card">
							<a href="<?= $arItem['DETAIL_PAGE_URL'] ?>" title="<?= $arItem['NAME'] ?>" class="doctor-card__link">
								<div class="doctor-card__image">
									<img src="" data-lazy="<?= $file['src'] ?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>" loading="lazy">
								</div>
								<div class="doctor-card__name doctor-card__name--main"><?= preg_replace('/\s/', '<br>', $arItem['NAME'], 1) ?></div>
							</a>
							<div class="doctor-card__desc">
								<div class="doctor-card__spec doctor-card__spec--main"><?= $arItem["PROPERTIES"]["specialization"]["VALUE"] ?></div>
							</div>
							<div class="doctor-card__button doctor-card__button--main">
								<a class="btn js-open-popup" data-target=".popup-form-feedback" data-analytics="OrderDoctor">Записаться на прием</a>
							</div>
						</div>
					</div>
					<?php endforeach ?>
				</div>
				<div class="doctors-slider__dots"></div>
			</div>
		</div>
	</div>
</section>
<?php endif ?>