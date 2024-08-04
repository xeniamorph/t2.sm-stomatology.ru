<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
$APPLICATION->ShowHead();
TAO::frontendCss('index');
TAO::frontendJs('index');
require 'header_full.php';
?>

	<div class="l-container container">
		<?php require 'services-carousel.php' ?>
	</div>

	<div class="l-container container">
		<?php require 'main-carousel.php' ?>
	</div>

	<div class="l-container container">
		<div class="row row-eq-height">
			<div class="row-eq-height__col row-eq-height__col--services col-xs-12 col-sm-12 col-md-9">
				<?php require 'main-services.php' ?>
			</div>
			<div class="row-eq-height__col row-eq-height__col--contacts col-xs-12 col-sm-12 col-md-3">
				<?php require 'main-contacts.php' ?>
			</div>
		</div>
	</div>

	<div class="l-container container">
		<?php require 'main-features.php' ?>
	</div>

	<div class="l-container container">
		<?php require 'news.php' ?>
	</div>

<?php require 'map.php' ?>

<?php require 'popups.php' ?>

<?php require 'footer.php' ?>