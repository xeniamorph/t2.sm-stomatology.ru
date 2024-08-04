<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die(); ?>
<? if(!empty($arResult['TEXT']['PREVIEW_TEXT'])): ?>
<div class="alarm-message">
	<div class="container">
		<div class="alarm-message__text">
			<?= $arResult['TEXT']['PREVIEW_TEXT']; ?>
		</div>
	</div>
</div>
<? endif ?>



