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
<section class="network-clinic">
	<div class="container">
		<h1 class="network-clinic__title">
			Сеть стоматологических клиник <br>
			«СМ-Стоматология»
		</h1>
		<div class="network-clinic__wrapper">
			<div class="network-clinic__wrapper-flex">
				<?php foreach($arResult["ITEMS"] as $arItem):
					$editID = '';
					if($admin){
						$editID = ' id="'.$this->GetEditAreaId($arItem['ID']).'"';
						$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
						$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
					}
					?>
					<div<?= $editID ?> class="network-clinic__wrapper-item">
						<?php $svgPath = CFile::GetPath($arItem["PROPERTIES"]["SVG_ICON"]["VALUE"]);?>
						<div class="network-clinic__img-wrapp">
							<img src="<?=$svgPath?>" alt="">
						</div>
						<div class="network-clinic__text-wrapper">
							<?= $arItem["NAME"] ?>
						</div>
					</div>
				<?php endforeach?>
			</div>
		</div>
	</div>
</section>
<?php endif ?>