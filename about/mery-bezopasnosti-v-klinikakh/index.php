<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

\TAO::App()->SetTitle('Меры профилактики и защиты здоровья | Стоматологическая клиника «СМ-Стоматология»');
\TAO::App()->SetPageProperty("description", "Безопасность и здоровье пациентов и сотрудников клиники «СМ-Стоматология» - меры профилактики и защиты от вирусных инфекций.");

$APPLICATION->SetAdditionalCSS('/upload/mery-bezopasnosti-v-klinikakh/style.css');
$APPLICATION->AddHeadScript('/upload/mery-bezopasnosti-v-klinikakh/script.js');
?>

<div class="heading-btn">
	<div class="container">
		<div class="heading-btn__wrap ">
			<div class="heading-btn__title">
				<h1>Меры профилактики и защиты <br>здоровья пациентов и сотрудников</h1>
			</div>
			<div class="heading-btn__btn-wrapp one-button">
				<div><a class="btn-appointment question js-open-popup" href="" data-toggle="modal" data-target=".modal-ask-question">Есть вопросы?</a></div>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<?php $APPLICATION->IncludeComponent("sm:text", "", ['IBLOCK_ID' => 23,'ELEMENT_ID' => 16903], false);?>
</div>

<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php"); ?>
