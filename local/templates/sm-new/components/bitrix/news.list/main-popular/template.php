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
<section class="popular-services">
	<div class="container">
		<div class="popular-services__wrapp">
			<div class="popular-services__link">
				<div class="popular-services__link-title">
					Популярные услуги <br>
					«СМ-Стоматология»
				</div>
				<a class="popular-services_link" href="<?= $arResult["ITEMS"][0]["LIST_PAGE_URL"]?>">Все услуги</a>
			</div>
			<div class="popular-services__price-tible">
				<?php foreach($arResult["ITEMS"] as $arItem):?>
				<a class="price-table__item" href="<?= $arItem["DETAIL_PAGE_URL"] ?>">
					<div class="price-table__item-left"><?= $arItem["NAME"] ?></div>
					<div class="price-table__item-right">
						<?php
						$price = $arItem["PROPERTIES"]["PRICE_TO_POPULAR"]["VALUE"] ? : $arItem["PROPERTIES"]["price_to_list"]["VALUE"];
						if(stripos($price, 'от') !== false) {
							$price = str_replace('от', '', $price);
							echo 'от';
						}?>
						<span><?= $price ?></span>
						руб.
					</div>
				</a>
				<?php endforeach?>
			</div>
		</div>
	</div>
</section>
<?php endif ?>