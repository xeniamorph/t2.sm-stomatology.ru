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
<div class="page-container-inner">
	<div class="kp-doctors__filter">
		<form class="doctors-filter">
			<div class="doctors-filter__box bg-grey">
				<div class="doctors-filter__items js-filter-radio">
					<div class="doctors-filter__header doctors-filter__header_adult">Взрослые стоматологии</div>
					<? foreach($arResult['CLINICS'] as $clinic): ?>
					<? if($clinic['DEPARTAMENT'] == 'child') continue; ?>
					<div class="doctors-filter__item">
						<div class="doctors-filter__clinic js-filter" data-action="get">
							<div class="m-point m-point_<?= $clinic['COLOR'] ?>"></div>
							<div><?= $clinic['NAME'] ?></div>
							<input type="radio" name="clinics" value="<?= $clinic['ID'] ?>">
						</div>
					</div>
					<? endforeach ?>
				</div>
				<div class="doctors-filter__items js-filter-radio">
					<div class="doctors-filter__header doctors-filter__header_child">Детские стоматологии</div>
					<? foreach($arResult['CLINICS'] as $clinic): ?>
					<? if($clinic['DEPARTAMENT'] == 'adult') continue; ?>
					<div class="doctors-filter__item">
						<div class="doctors-filter__clinic js-filter" data-action="get">
							<div class="m-point m-point_<?= $clinic['COLOR'] ?>"></div>
							<div><?= $clinic['NAME'] ?></div>
							<input type="radio" name="clinics" value="<?= $clinic['ID'] ?>">
						</div>
					</div>
					<? endforeach ?>
				</div>
			</div>
		</form>
	</div>
</div>
<div class="kp-doctors__items">
	<div class="doctors-slider">
		<div class="doctors-slider__slider">
			<? foreach($arResult["ITEMS"] as $arItem): ?>
			<div class="doctors-slider__slide">
				<div class="doctor-card">
					<?
					//$file = CFile::ResizeImageGet($arItem["DETAIL_PICTURE"], ['width' => 136, 'height' => 136], BX_RESIZE_IMAGE_EXACT, true);
					if(!empty($arItem["PROPERTIES"]["SQUARE_PHOTO"]["VALUE"])){
						$file = CFile::ResizeImageGet($arItem["PROPERTIES"]["SQUARE_PHOTO"]["VALUE"], ['width' => 136, 'height' => 136], BX_RESIZE_IMAGE_EXACT, true);
					} else {
						$file = CFile::ResizeImageGet($arItem["DETAIL_PICTURE"], ['width' => 136, 'height' => 136], BX_RESIZE_IMAGE_EXACT, true);
					}
					?>
					<div class="doctor-card__image"><img src="<?= $file['src'] ?>"></div>
					<div class="doctor-card__name f-italic"><?= preg_replace('/\s/', '<br>', $arItem['NAME'], 1) ?></div>
					<div class="doctor-card__spec"><?= $arItem["PROPERTIES"]["specialization"]["VALUE"] ?></div>
					<div class="doctor-card__text"><?/*Опыт работы с 2002 года (18 лет) Является членом Профессионального Общества Ортодонтов России (с 2010 года). Принимает участие в ежегодных съездах ортодонтов России.*/?></div>
					<? foreach($arItem["PROPERTIES"]["clinics"]["VALUE"] as $clinic): ?>
					<div class="doctor-card__metro"><div class="metro metro_<?= $arResult["CLINICS"][$clinic]['COLOR'] ?>"></div><?= $arResult["CLINICS"][$clinic]['NAME'] ?></div>
					<? endforeach ?>
					<a class="doctor-card__button kp-btn js-open-popup" href="#" data-toggle="modal" data-target=".popup-form-feedback" data-analytics="OrderDoctor_Toolbar">Записаться на прием</a>
				</div>
			</div>
			<? endforeach ?>
		</div>
		<div class="doctors-slider__prev i-slider-prev"></div>
		<div class="doctors-slider__next i-slider-next"></div>
	</div>
	<div class="kp-doctors__loading">
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

<?/*
<div class="news-list">
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<p class="news-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
			<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
				<a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><img
						class="preview_picture"
						border="0"
						src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
						width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
						height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
						alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
						title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
						style="float:left"
						/></a>
			<?else:?>
				<img
					class="preview_picture"
					border="0"
					src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
					width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
					height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
					alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
					title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
					style="float:left"
					/>
			<?endif;?>
		<?endif?>
		<?if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
			<span class="news-date-time"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></span>
		<?endif?>
		<?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
			<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
				<a href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><b><?echo $arItem["NAME"]?></b></a><br />
			<?else:?>
				<b><?echo $arItem["NAME"]?></b><br />
			<?endif;?>
		<?endif;?>
		<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
			<?echo $arItem["PREVIEW_TEXT"];?>
		<?endif;?>
		<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
			<div style="clear:both"></div>
		<?endif?>
		<?foreach($arItem["FIELDS"] as $code=>$value):?>
			<small>
			<?=GetMessage("IBLOCK_FIELD_".$code)?>:&nbsp;<?=$value;?>
			</small><br />
		<?endforeach;?>
		<?foreach($arItem["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
			<small>
			<?=$arProperty["NAME"]?>:&nbsp;
			<?if(is_array($arProperty["DISPLAY_VALUE"])):?>
				<?=implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);?>
			<?else:?>
				<?=$arProperty["DISPLAY_VALUE"];?>
			<?endif?>
			</small><br />
		<?endforeach;?>
	</p>
<?endforeach;?>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
</div>
*/?>