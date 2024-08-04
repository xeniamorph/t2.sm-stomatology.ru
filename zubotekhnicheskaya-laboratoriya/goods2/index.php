<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Зуботехническая лаборатория «СМ-Стоматология»");

\TAO::App()->SetTitle('Зуботехническая лаборатория «СМ-Стоматология»');
\TAO::App()->SetPageProperty("description", "Зуботехническая лаборатория");
\TAO::App()->SetPageProperty("keywords", "Зуботехническая лаборатория");

require($_SERVER["DOCUMENT_ROOT"] . "/zubotekhnicheskaya-laboratoriya/include.php");
?>
<?php $APPLICATION->IncludeComponent("sm:text", ".default", ['IBLOCK_ID' => 23,'ELEMENT_ID' => 14738], false); ?>
<?= \TAO::Form('Lab')->setOption('layout', 'popup-lab')->setOption('title', 'Бюгельный протез')->render(); ?>
<br><?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>