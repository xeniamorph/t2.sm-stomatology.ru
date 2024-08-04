<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");

$APPLICATION->SetPageProperty("title", "Бесплатная онлайн консультация стоматолога — клиника «СМ-Стоматология»");
$APPLICATION->SetPageProperty("description", "Профессиональная консультация врача стоматолога клиники «СМ-Стоматология». Задайте интересующие вопросы специалистам онлайн с 9:00 до 21:00 часа. Подробнее об услуге можно узнать на сайте.");

$APPLICATION->SetAdditionalCSS('/upload/online-consult/style.css');

$APPLICATION->AddHeadScript('/upload/online-consult/script.js');
?>
<div class="l-container l-container--page container"><?$APPLICATION->IncludeComponent("sm:text", "", ['IBLOCK_ID' => 23,'ELEMENT_ID' => 16981], false);?></div>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>