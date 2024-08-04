<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>

<?
$submenu = [];
$parentId = 0;
?>

<nav class="main-menu">
	<ul class="main-menu__list">
	<?

	$previousLevel = 0;
	foreach($arResult as $arItem):?>
		<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
			<?
			if(!empty($submenu)){
				if(count($submenu) > 1){
					$count = ceil(count($submenu) / 2);
					$submenu = array_chunk($submenu, $count);

					foreach($submenu[0] as $item){
					?><li class="main-submenu__item"><a class="main-submenu__link" href="<?=$item["LINK"]?>"><?=$item["TEXT"]?></a></li><?
					}
					echo '</ul><ul>';
					foreach($submenu[1] as $item){
					?><li class="main-submenu__item"><a class="main-submenu__link" href="<?=$item["LINK"]?>"><?=$item["TEXT"]?></a></li><?
					}

				} else {
					?><li class="main-submenu__item"><a class="main-submenu__link" href="<?=$submenu[0]["LINK"]?>"><?=$submenu[0]["TEXT"]?></a></li><?
				}
				
				$submenu = [];
			}
			?>
			<?=str_repeat("</ul></div></div></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
		<?endif?>

		<?if ($arItem["IS_PARENT"]):?>
			<li class="main-menu__item main-menu__submenu"><a class="main-menu__link" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
				<div class="main-menu__mark"></div>
				<div class="main-submenu">
					<div class="main-submenu__box">
						<ul>
			

		<?else:?>
			<? if($arItem["DEPTH_LEVEL"] == 2): ?>
				<? $submenu[] = $arItem ?>
				<?/*<li class="main-submenu__item"><a class="main-submenu__link" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>*/?>
			<? else: ?>
				<li class="main-menu__item"><a class="main-menu__link" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
			<? endif ?>
			


		<?endif?>
		<? $previousLevel = $arItem["DEPTH_LEVEL"];?>

	<?endforeach?>

	<?if ($previousLevel > 1)://close last item tags?>
		<?=str_repeat("</ul></li>", ($previousLevel-1) );?>
	<?endif?>

	</ul>
</nav>
<?endif?>