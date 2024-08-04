<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?php if (!empty($arResult)):?>
	<div class="fix-bar">
		<div class="fix-bar__items">
			<?php foreach($arResult as $key => $arItem):
				if($key == count($arResult) - 2) echo '<div class="fix-bar__line"></div>';
				if($arItem["PARAMS"]["submenu"]) {?>
					<div class="fix-bar__item">
						<div class="fix-bar__cap">
							<a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
							<?php foreach ($arItem["PARAMS"]["submenu"] as $key=>$sub) {?>
								<a href="<?=$key?>"><?=$sub?></a>
							<?php }?>
						</div>
						<div class="fix-bar__ico">
							<svg role="img">
								<use xlink:href="<?=$arItem["PARAMS"]["img"]?>">
							</svg>
						</div>
					</div>
				<?php } else {?>
					<a class="fix-bar__item <?=$arItem["PARAMS"]["red"]?'fix-bar__item_red':''?>" href="<?=$arItem["LINK"]?>">
						<div class="fix-bar__cap">
							<?=$arItem["TEXT"]?>
						</div>
						<div class="fix-bar__ico">
							<svg role="img">
								<use xlink:href="<?=$arItem["PARAMS"]["img"]?>">
							</svg>
						</div>
					</a>
				<?php }
			endforeach;?>
		</div>
	</div>
<?php endif;?>