<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

\TAO::App()->SetTitle('Политика обработки и защиты персональных данных | Стоматологическая клиника «СМ-Стоматология»');
\TAO::App()->SetPageProperty("description", "Политика в отношении обработки персональных данных в сети стоматологический клиник «СМ-Стоматология». Узнайте цены на консультацию стоматолога на сайте.");
\TAO::App()->SetPageProperty("keywords", "Политика обработки и защиты персональных данных");?>

<div class="heading-btn">
	<div class="container">
		<div class="heading-btn__wrap ">
			<div class="heading-btn__title">
				<h1>Политика обработки и защиты персональных данных</h1>
			</div>
			<div class="heading-btn__btn-wrapp one-button">
				<div><a class="btn-appointment question js-open-popup" href="" data-toggle="modal" data-target=".modal-ask-question">Есть вопросы?</a></div>
			</div>
		</div>
	</div>
</div>

<?php
$APPLICATION->IncludeComponent("sm:text", "", ['IBLOCK_ID' => 23,'ELEMENT_ID' => 21765], false);
print TAO::frontend()->renderBlock('common/licenses-block', [
	'items' => SMClinicHelper::getLicenses()
]);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php"); ?>
