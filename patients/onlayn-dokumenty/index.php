<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

\TAO::App()->SetTitle('Заполнить документы онлайн для посещения стоматолога в Москве в «СМ-Стоматология»');
\TAO::App()->SetPageProperty("description", "Записаться на прием к стоматологу в клинику «СМ-Стоматология» в Москве");

//$APPLICATION->SetAdditionalCSS('/upload/mery-bezopasnosti-v-klinikakh/style.css');
//$APPLICATION->AddHeadScript('/upload/mery-bezopasnosti-v-klinikakh/script.js');

//$APPLICATION->IncludeComponent("sm:text", "", ['IBLOCK_ID' => 23,'ELEMENT_ID' => 16903], false);?>

<div class="b-heading"><h1 class="b-heading__title">Онлайн документы – подготовка перед визитом к стоматологу </h1><a href="#" class="b-heading__link hidden-md-down" data-toggle="modal" data-target="#modal-ask-question">
Есть вопросы? </a></div>

<? $APPLICATION->IncludeComponent("sm:forms", "online_doc", [], false); ?>

<script>
$( document ).ready(function() {
	/*$(".fancybox_news").fancybox({
		openEffect: 'none',
		closeEffect: 'none',
		loop: false,
	});*/
});
</script>

<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php"); ?>
