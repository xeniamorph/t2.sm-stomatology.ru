<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
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
?>

<h1 class="b-heading">
	Результаты поиска
	<a class="b-heading__link"
	   href="#">
		Есть вопросы?
	</a>
</h1>

<section class="search-form">
	<form action="" method="get">
		<label class="search-form-input-wrap">
			<input type="text" name="q" class="search-form-input" value="<?=$arResult["REQUEST"]["QUERY"]?>" size="40" />
			<span class="clear-input js-clear-input"></span>
		</label>
		<input type="submit" class="form-panel__submit search-page" value="Найти" />
		<input type="hidden" name="how" value="<?echo $arResult["REQUEST"]["HOW"]=="d"? "d": "r"?>" />
	</form>
	<?php if( $arResult['NAV_RESULT']->NavRecordCount ){ ?>
		Найдено: 
		<strong><?= $arResult['NAV_RESULT']->NavRecordCount ?></strong>
		результаты по запросу 
		<strong>«<?=$arResult["REQUEST"]["QUERY"]?>»</strong>
	<?php }?>
</section>
<section class="search-content">
	<?if($arResult["REQUEST"]["QUERY"] === false && $arResult["REQUEST"]["TAGS"] === false):?>
	<?elseif($arResult["ERROR_CODE"]!=0):?>
		<p><?=GetMessage("SEARCH_ERROR")?></p>
		<?ShowError($arResult["ERROR_TEXT"]);?>
		<p><?=GetMessage("SEARCH_CORRECT_AND_CONTINUE")?></p>
		<br /><br />
	<?elseif(count($arResult["SEARCH"])>0):?>
		<div class="search-list">
			<?php foreach($arResult["SEARCH"] as $arItem) {?>
				<div class="search-list-item">
					<a class="search-list-item-link" href="<?= $arItem["URL"] ?>">
						<div class="search-list-item-name">
							<span><?= $arItem["TITLE_FORMATED"] ?></span>
						</div>
						<p class="search-list-item-text" ><?= $arItem["BODY_FORMATED"] ?></p>
					</a>
				</div>
			<?php } ?>
		</div>
		<?= $arResult["NAV_STRING"] ?>
	<?else:?>
		<?ShowNote(GetMessage("SEARCH_NOTHING_TO_FOUND"));?>
	<?endif;?>
</section>
<div class="before-after-wrap"></div>
<!-- end content block -->
		</div><!-- content-text -->
	</div><!-- content -->
</div><!-- wr-content -->
<a name="question-form"></a>
<?php
	$APPLICATION->IncludeComponent(
		"techart:form",
		"question_form",
		Array(
			"COMPONENT_TEMPLATE" => "question_form",
			"IBLOCK_ID" => "11"
		)
	);
?>
<!-- start content block -->
<div class="wr-content disable">
	<div class="content">
		<div class="content-text">
