<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?php if (!empty($arResult)):
	$submenu = [];
	$parentId = 0;
	?>
<ul class="topmenu">
	<?php
	$previousLevel = 0;
	foreach($arResult as $arItem):
		if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):
			if(!empty($submenu)){
				echo '<ul class="submenu">';
				foreach($submenu as $item){?>
					<li><a href="<?=$item["LINK"]?>"><?=$item["TEXT"]?></a></li>
				<?php }
				echo '</ul>';
				$submenu = [];
			}?>
			<?=str_repeat("</li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
		<?php endif?>

		<?php if ($arItem["IS_PARENT"]):?>
			<li class="two-level">
				<a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
		<?php else:
			if($arItem["DEPTH_LEVEL"] == 2):
				$submenu[] = $arItem ;
			else: ?>
				<li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
			<?php endif;
		endif;
		$previousLevel = $arItem["DEPTH_LEVEL"];?>
	<?php endforeach?>
</ul>

<?php endif?>