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
global $USER;
$admin = $USER->isAdmin() ? true : false;
?>
<?php if(!empty($arResult["ITEMS"])): ?>
<div class="news-block bg-style">
	<div class="container">
		<div class="news-block__wrap">
			<h2 class="news-block__title">Новости</h2>
			<div class="news-block__items">
				<?php foreach($arResult["ITEMS"] as $arItem):?>
					<?php
					$editID = '';
					if($admin){
						$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
						$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
						$editID = ' id="'.$this->GetEditAreaId($arItem['ID']).'"';
					}
					$data = date('d.m.Y', strtotime($arItem["ACTIVE_FROM"]));
					?>
					<a class="news-card" href="<?= $arItem["DETAIL_PAGE_URL"] ?>">
						<div class="news-card__cell">
							<div class="news-card__left">
								<img class="news-card__image" src="<?= CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"], array('width'=>100, 'height'=>100), BX_RESIZE_IMAGE_EXACT, true)['src'] ?>">
							</div>
							<div class="news-card__date-label news-card__date-label--main"><?=$data?></div>
						</div>
						<div class="news-card__cell-text">
							<div class="news-card__title">
								<?= $arItem["NAME"] ?>
							</div>
							<?= $arItem["PREVIEW_TEXT"] ?>
						</div>
					</a>
				<?php endforeach?>
			</div>
			<div class="news-block__show">
				<a class="news-block__button" href="<?= $arResult["ITEMS"][0]["LIST_PAGE_URL"] ?>">Все новости</a>
			</div>
		</div>
	</div>
</div>
<?php endif ?>
