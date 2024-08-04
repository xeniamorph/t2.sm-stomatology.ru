<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
	<ul>
	<?foreach($arResult as $arItem):?>
	<?
	// если внешняя ссылка
	$target = '';
	if(preg_match('/^https?:\/\//iu', $arItem["LINK"])){
		$target = ' target="_blank"';
	}
	?>
	<li><a<?=$target?> href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
	<?endforeach?>
	</ul>
<?endif?>