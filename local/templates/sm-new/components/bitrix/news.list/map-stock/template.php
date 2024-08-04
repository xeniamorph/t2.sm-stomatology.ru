<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
<? if(!empty($arResult["ITEMS"])): ?>
<? $json = [] ?>

<section class="map-block js-map-tab-container">
	<div class="map-block__box">
		<div class="map-block__left">
			<div class="map-block__header">
				<div class="map-block__title">
					<h2>Филиалы «СМ-Стоматология»</h2>
				</div>
			</div>
			<div class="map-address">
			<?/*
			$output = [];
			$titles = [];
			foreach($arResult["ITEMS"] as $arItem){
				// Пропускаем один адрес, когда совпадают детское отделение и взрослое
				if(in_array($arItem["PROPERTIES"]["address"]["VALUE"], $titles)) continue;
				else $titles[] = $arItem["PROPERTIES"]["address"]["VALUE"];

				$output[$arItem["PROPERTIES"]["metro"]["NAME"]][] = $arItem;
			}
			?>
			<?foreach($output as $metro => $address):?>
			<?// если адресов под одним метро несколько
				if(count($address) > 1): ?>
				<div class="map-address__item">
					<div class="map-address__point"></div>
					<div class="map-address__title">
						<?= $metro ?><br>
						<? foreach($address as $item): ?>
							<div class="map-address__row js-map-point" data-value="<?= $item["ID"] ?>">
							<b><?= $item["PROPERTIES"]["address"]["VALUE"] ?></b>
							</div>	
						<? endforeach ?>		
					</div>
				</div>
				<? else: ?>
				<div class="map-address__item js-map-point" data-value="<?= $address[0]["ID"] ?>">
					<div class="map-address__point"></div>
					<div class="map-address__title">
						<?= $metro ?><br>
						<b><?= $address[0]["PROPERTIES"]["address"]["VALUE"] ?></b>
					</div>
				</div>
				<? endif ?>
			<? endforeach ?>
			</div>
*/?>
			



					<div class="map-address">
						<div class="map-address__header map-address__header_adult">Стоматология для взрослых</div>
						<? // группируем адреса по метро ?>
						<? $output = []; ?>
						<? foreach($arResult["ITEMS"] as $arItem):?>
						<? if($arItem["DEPARTAMENT"] == 'child') continue; ?>
						<? if($arItem["ID"] == 47687) continue; //	исключаем «СМ-Стоматология» на Сретенском тупике ?>
						<? $output[$arItem["PROPERTIES"]["metro"]["NAME"]][] = $arItem; ?>
						<? endforeach ?>

						<? foreach($output as $metro => $address):?>
						<? // если адресов под одним метро несколько
						if(count($address) > 1): ?>
						<div class="map-address__item metro_<?= SMClinicHelper::getMetroColorById($address['ID']); ?>">
							<div class="map-address__point metro_<?= SMClinicHelper::getMetroColorById($address[0]["PROPERTIES"]["metro"]["VALUE"]); ?>"></div>
							<div class="map-address__title">
								<?= $metro ?><br>
								<? foreach($address as $item): ?>
									<div class="map-address__row js-map-point" data-value="<?= $item["ID"] ?>">
									<b><?= $item["PROPERTIES"]["address"]["VALUE"] ?></b>
									</div>	
								<? endforeach ?>		
							</div>
						</div>
						<? else: ?>
						<div class="map-address__item js-map-point" data-value="<?= $address[0]["ID"] ?>">
							<div class="map-address__point metro_<?= SMClinicHelper::getMetroColorById($address[0]["PROPERTIES"]["metro"]["VALUE"]); ?>"></div>
							<div class="map-address__title">
								<?= $metro ?><br>
								<b><?= $address[0]["PROPERTIES"]["address"]["VALUE"] ?></b>
							</div>
						</div>
						<? endif ?>
						<? endforeach ?>
					</div>

					<div class="map-address">
						<div class="map-address__header map-address__header_child">Детская стоматология</div>
						<? // группируем адреса по метро ?>
						<? $output = []; ?>
						<? foreach($arResult["ITEMS"] as $arItem): ?>
						<? if($arItem["DEPARTAMENT"] == 'adult') continue; ?>
						<? $output[$arItem["PROPERTIES"]["metro"]["NAME"]][] = $arItem; ?>
						<? endforeach ?>

						<?foreach($output as $metro => $address):?>
						<?// если адресов под одним метро несколько
						if(count($address) > 1): ?>
						<div class="map-address__item">
							<div class="map-address__point metro_<?= SMClinicHelper::getMetroColorById($address[0]["PROPERTIES"]["metro"]["VALUE"]); ?>"></div>
							<div class="map-address__title">
								<?= $metro ?><br>
								<? foreach($address as $item): ?>
									<div class="map-address__row js-map-point" data-value="<?= $item["ID"] ?>">
									<b><?= $item["PROPERTIES"]["address"]["VALUE"] ?></b>
									</div>	
								<? endforeach ?>		
							</div>
						</div>
						<? else: ?>
						<div class="map-address__item js-map-point" data-value="<?= $address[0]["ID"] ?>">
							<div class="map-address__point metro_<?= SMClinicHelper::getMetroColorById($address[0]["PROPERTIES"]["metro"]["VALUE"]); ?>"></div>
							<div class="map-address__title">
								<?= $metro ?><br>
								<b><?= $address[0]["PROPERTIES"]["address"]["VALUE"] ?></b>
							</div>
						</div>
						<? endif ?>
						<? endforeach ?>
					</div>

			</div>
		</div>
		<div class="map-block__right">
			<div class="map-block__render js-ymap-lazyload" data-event="onScroll" <?/*data-points="mapPoints"*/?>></div>
			<div class="map-block__loading js-ymap-lazyload-loading">
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
</section>

<?
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
<?foreach($arResult["ITEMS"] as $arItem):?>
<?
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
				//SITE_TEMPLATE_PATH.'/build/prod/src/i/map-point.svg',
				//SITE_TEMPLATE_PATH.'/build/prod/src/i/map-point-active.svg'
			],
			//'iconImageStatusActive' => SITE_TEMPLATE_PATH.'/build/prod/src/i/map-point-active.svg',
			//'iconImageStatusActive' => $icon,
			'hintContent' => $arItem["NAME"],
			'balloonContent' => "<b>".$arItem["NAME"]."</b><br>".$arItem["PROPERTIES"]["address"]["VALUE"].'<div><a href="'.$arItem["DETAIL_PAGE_URL"].'">Подробнее</a></div>'
		],
		[
			'iconLayout' => 'default#image',
			//'iconImageHref' => SITE_TEMPLATE_PATH.'/build/prod/src/i/map-point.svg',
			'iconImageHref' => $arItem["_MAP_ICON"],
			"iconImageSize" => [49, 62],
			"iconImageOffset" => [-25, -55],
			"hideIconOnBalloonOpen" => false
		]
	]
];
?>
<? endforeach ?>
<script type="text/javascript">
	window.mapPoints = <?= json_encode($json, JSON_UNESCAPED_UNICODE) ?>;
</script>
<? endif ?>