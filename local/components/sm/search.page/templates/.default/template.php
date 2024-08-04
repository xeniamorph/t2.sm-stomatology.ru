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
<div class="heading-btn">
	<div class="container">
		<div class="heading-btn__wrap ">
			<div class="heading-btn__title">
				<h1>Результаты поиска</h1>
			</div>
			<div class="heading-btn__btn-wrapp one-button">
				<div><a class="btn-appointment question" href="#" data-target="#modal-ask-question">Есть вопросы?</a></div>
			</div>
		</div>
	</div>
</div>
<div class="container">
<div class="b-form b-form--inline b-form--bg">
	<form action="" method="get" class="search-page-form">
		<div class="search-page-form__wrapper">
			<div class="search-page-form__input">
				<div class="b-form__group b-form__group--float-label b-form__group--m0">
					<input type="text" name="q" value="<?=$arResult["REQUEST"]["QUERY"]?>" size="40"  onkeyup="this.setAttribute('value', this.value);" id="search"
						class="form-control b-form__control b-form__control--empty" name="q"
						value="<?= htmlspecialchars($query) ?>" />
					<label>Поиск</label>
				</div>
			</div>
			<div class="search-page-form__button">
				<div class="b-form__group b-form__group--m0 b-form__buttons">
					<input class="btn btn-primary btn-lg" type="submit" value="<?=GetMessage("SEARCH_GO")?>" />
				</div>
			</div>
		</div>

	</form>
</div><br />

<?if(isset($arResult["REQUEST"]["ORIGINAL_QUERY"])):
	?>
<div class="search-language-guess">
	<?echo GetMessage("CT_BSP_KEYBOARD_WARNING", array("#query#"=>'<a href="'.$arResult["ORIGINAL_QUERY_URL"].'">'.$arResult["REQUEST"]["ORIGINAL_QUERY"].'</a>'))?>
</div><br />
<?
endif;?>

<?if($arResult["REQUEST"]["QUERY"] === false && $arResult["REQUEST"]["TAGS"] === false):?>
<?elseif($arResult["ERROR_CODE"]!=0):?>
<p><?=GetMessage("SEARCH_ERROR")?></p>
<?ShowError($arResult["ERROR_TEXT"]);?>
<p><?=GetMessage("SEARCH_CORRECT_AND_CONTINUE")?></p>
<br /><br />
<p><?=GetMessage("SEARCH_SINTAX")?><br /><b><?=GetMessage("SEARCH_LOGIC")?></b></p>
<table border="0" cellpadding="5">
	<tr>
		<td align="center" valign="top"><?=GetMessage("SEARCH_OPERATOR")?></td>
		<td valign="top"><?=GetMessage("SEARCH_SYNONIM")?></td>
		<td><?=GetMessage("SEARCH_DESCRIPTION")?></td>
	</tr>
	<tr>
		<td align="center" valign="top"><?=GetMessage("SEARCH_AND")?></td>
		<td valign="top">and, &amp;, +</td>
		<td><?=GetMessage("SEARCH_AND_ALT")?></td>
	</tr>
	<tr>
		<td align="center" valign="top"><?=GetMessage("SEARCH_OR")?></td>
		<td valign="top">or, |</td>
		<td><?=GetMessage("SEARCH_OR_ALT")?></td>
	</tr>
	<tr>
		<td align="center" valign="top"><?=GetMessage("SEARCH_NOT")?></td>
		<td valign="top">not, ~</td>
		<td><?=GetMessage("SEARCH_NOT_ALT")?></td>
	</tr>
	<tr>
		<td align="center" valign="top">( )</td>
		<td valign="top">&nbsp;</td>
		<td><?=GetMessage("SEARCH_BRACKETS_ALT")?></td>
	</tr>
</table>
<?elseif(count($arResult["SEARCH"])>0):?>
	<?if($arParams["DISPLAY_TOP_PAGER"] != "N") echo $arResult["NAV_STRING"]?>
	<br />
<div class="b-search-results">
	<!-- <div class="b-search-results__top">

	</div> -->
	<?foreach($arResult["SEARCH"] as $arItem):?>
	<div class="b-search-results__item b-search-result">
		<a class="b-search-result__link" href="<?echo $arItem["URL"]?>">
			<?echo $arItem["TITLE_FORMATED"]?></a>
		<p class="b-search-result__text">
			<?echo $arItem["BODY_FORMATED"]?>
		</p>
	</div>
	<!-- <hr /> -->
	<?endforeach;?>
	<?if($arParams["DISPLAY_BOTTOM_PAGER"] != "N") echo $arResult["NAV_STRING"]?>
	<br />
	<!-- <p>
		<b><?/*=GetMessage("SEARCH_SORTED_BY_RANK")?></b>&nbsp;|&nbsp;<a
			href="<?=$arResult["URL"]?>&amp;how=d<?echo $arResult[" REQUEST"]["FROM"]? '&amp;from='
			.$arResult["REQUEST"]["FROM"]: '' ?>
			<?echo $arResult["REQUEST"]["TO"]? '&amp;to='.$arResult["REQUEST"]["TO"]: ''?>"><?=GetMessage("SEARCH_SORT_BY_DATE")*/?></a>
	</p> -->
	<?else:?>
	<?ShowNote(GetMessage("SEARCH_NOTHING_TO_FOUND"));?>
	<?endif;?>
	<br>
</div>
</div>
<?= \TAO::Form('Appointment')->setOption('layout','appointment-in-text')->render() ?>
