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
$strSectionEdit = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_EDIT");
$strSectionDelete = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_DELETE");
$arSectionDeleteParams = array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM'));
?>
<?php if(!empty($arResult["SECTIONS"])): ?>
<section class="basic-services">
	<div class="container">
		<div class="basic-services__title">
			Основные услуги стоматологических клиник
		</div>
		<div class="basic-services__wrapper">
			<?php foreach($arResult["SECTIONS"] as $arItem): ?>
				<?php
				$editID = '';
				if($admin){
					$editID = ' id="'.$this->GetEditAreaId($arResult['SECTION']['ID']).'"';
					$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], $strSectionEdit);
					$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);
				}
				?>
				<a class="basic-services__item" href="<?= $arItem["SECTION_PAGE_URL"]?>">
					<div class="basic-services__img_bg">
						<img src="<?= $arItem["icon"] ?>" alt="<?= $arItem["NAME"] ?>">
					</div>
					<div class="basic-services__text">
						<?= $arItem["NAME"] ?>
					</div>
					<div class="basic-services__link">
						<?=($arItem["CODE"]=='online-konsultatsiya-vracha' ? 'Онлайн':'Подробнее')?>
					</div>
				</a>
			<?php endforeach ?>
		</div>
	</div>
</section>
<?php endif ?>