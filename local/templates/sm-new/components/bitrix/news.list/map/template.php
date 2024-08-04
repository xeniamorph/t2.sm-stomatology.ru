1<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
if(!empty($arResult["ITEMS"])): ?>
<?php $json = [] ?>
<div class="filials-block">
	<div class="container js-map-tab-container">
		<h2 class="filials-block__title">
			Наши филиалы
		</h2>
		<div class="filials-block__wrapper">
			<div class="filials-block__metro-list">
				<div class="filials-block__map-address">
					<div class="filials-block__list-title">
						Стоматология для взрослых
					</div>
					<div class="filials-block__list-content">
						<?php // группируем адреса по метро
						$output = [];
						foreach($arResult["ITEMS"] as $arItem):
							if($arItem["DEPARTAMENT"] == 'child') continue;
							if($arItem["ID"] == 47687) continue; //	исключаем «СМ-Стоматология» на Сретенском тупике
							$output[$arItem["PROPERTIES"]["metro"]["NAME"]][] = $arItem;
						endforeach ?>

						<?php foreach($output as $metro => $address):
							// если адресов под одним метро несколько
							if(count($address) > 1): ?>
							<div class="filials-block__list-item metro_<?= SMClinicHelper::getMetroColorById($address['ID']); ?>">
								<div class="filials__metro">
									<div class="filials__point metro_<?= SMClinicHelper::getMetroColorById($address[0]["PROPERTIES"]["metro"]["VALUE"]); ?>"></div>
									<div class="filials__map-item">
										<?= $metro ?><br>
										<?php foreach($address as $item): ?>
											<div class="filials__point js-map-point" data-value="<?= $item["ID"] ?>"></div>
											<div>
												<div class="filials__map-item">
													<?= $item["PROPERTIES"]["address"]["VALUE"] ?>
												</div>
											</div>
										<? endforeach ?>
									</div>
								</div>
							</div>
							<?php else: ?>
							<div class="filials-block__list-item js-map-point" data-value="<?= $address[0]["ID"] ?>">
								<div class="filials__metro">
									<div class="filials__point metro_<?= SMClinicHelper::getMetroColorById($address[0]["PROPERTIES"]["metro"]["VALUE"]); ?>"></div>
									<div>
										<div class="filials__map-item">
											<span><?= $metro ?></span><br>
											<?= $address[0]["PROPERTIES"]["address"]["VALUE"] ?>
										</div>
									</div>
								</div>
							</div>
							<?php endif ?>
						<?php endforeach ?>
					</div>
				</div>

				<div class="filials-block__map-address">
					<div class="filials-block__list-title">
						Детская стоматология
					</div>
					<div class="filials-block__list-content">
						<?php // группируем адреса по метро
						$output = [];
						foreach($arResult["ITEMS"] as $arItem):
							if($arItem["DEPARTAMENT"] == 'adult') continue;
							$output[$arItem["PROPERTIES"]["metro"]["NAME"]][] = $arItem;
						endforeach ?>

						<?foreach($output as $metro => $address):
						// если адресов под одним метро несколько
						if(count($address) > 1): ?>
						<div class="filials-block__list-item">
							<div class="filials__metro">
								<div class="filials__point metro_<?= SMClinicHelper::getMetroColorById($address[0]["PROPERTIES"]["metro"]["VALUE"]); ?>"></div>
								<div class="map-address__title">
									<?= $metro ?><br>
									<?php foreach($address as $item): ?>
										<div class="filials__point js-map-point" data-value="<?= $item["ID"] ?>"></div>
										<div>
											<div class="filials__map-item">
												<?= $item["PROPERTIES"]["address"]["VALUE"] ?>
											</div>
										</div>
									<?php endforeach ?>
								</div>
							</div>
						</div>
						<?php else: ?>
						<div class="filials-block__list-item js-map-point" data-value="<?= $address[0]["ID"] ?>">
							<div class="filials__metro">
								<div class="filials__point metro_<?= SMClinicHelper::getMetroColorById($address[0]["PROPERTIES"]["metro"]["VALUE"]); ?>"></div>
								<div>
									<div class="filials__map-item">
										<span><?= $metro ?></span><br>
										<?= $address[0]["PROPERTIES"]["address"]["VALUE"] ?>
									</div>
								</div>
							</div>
						</div>
						<?php endif ?>
						<?php endforeach ?>
					</div>
				</div>
			</div>
			<div class="filials-block__map-block">
				<div class="filials-block__map js-ymap-lazyload" data-event="onScroll" <?/*data-points="mapPoints"*/?>></div>
				<div class="filials-block__loading js-ymap-lazyload-loading">
					<div class="loading loading_big">
						<div class="loading__anim">
							<div></div>
							<div></div>
							<div></div>
							<div></div>
							<div></div>
							<div></div>
							<div></div>
							<div></div>
							<div></div>
						</div><span>Загрузка</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
$uniq = [];
$dublicates = [];
foreach($arResult["ITEMS"] as $arItem){
	$address = trim($arItem["PROPERTIES"]["address"]["VALUE"]);
	if(in_array($address, $uniq)){
		// если адрес уже в массиве
		$dublicates[] = $address;
	} else {
		$uniq[] = $address;
	}
}
?>
<?php foreach($arResult["ITEMS"] as $arItem):
	if($arItem["ID"] == 47687) continue; //	исключаем «СМ-Стоматология» на Сретенском тупике
	$address = trim($arItem["PROPERTIES"]["address"]["VALUE"]);
	if(in_array($address, $dublicates)){
		// если адрес уже в массиве, то ставим смешанную иконку текущему элементу и элемнту с таким же адресом
		$arItem["_MAP_ICON"] = SITE_TEMPLATE_PATH.'/build/prod/src/i/map-point-fifty.svg?v=7';
	} else {
		if($arItem["DEPARTAMENT"] == 'child'){
			$arItem["_MAP_ICON"] = SITE_TEMPLATE_PATH.'/build/prod/src/i/map-point-green.svg?v=7';
		} else {
			$arItem["_MAP_ICON"] = SITE_TEMPLATE_PATH.'/build/prod/src/i/map-point-gray.svg?v=7';
		}
	}

$json[] = [
	'coords' => explode(',', $arItem["PROPERTIES"]["map_address"]["VALUE"]),
	'options' => [
		[
			'id' => $arItem['ID'],
			'departament' => $arItem["DEPARTAMENT"],
			"iconImages" => [
				$arItem["_MAP_ICON"],
				$arItem["_MAP_ICON"]	// Активная иконка
			],
			'hintContent' => $arItem["NAME"],
			'balloonContent' => "<b>".$arItem["NAME"]."</b><br>".$arItem["PROPERTIES"]["address"]["VALUE"].'<div><a href="'.$arItem["DETAIL_PAGE_URL"].'">Подробнее</a></div>'
		],
		[
			'iconLayout' => 'default#image',
			'iconImageHref' => $arItem["_MAP_ICON"],
			"iconImageSize" => [49, 62],
			"iconImageOffset" => [-25, -55],
			"hideIconOnBalloonOpen" => false
		]
	]
];
?>
<?php endforeach ?>
<script type="text/javascript">
	window.mapPoints = <?= json_encode($json, JSON_UNESCAPED_UNICODE) ?>;
</script>
<?php endif ?>