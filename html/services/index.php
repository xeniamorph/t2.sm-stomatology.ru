<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
$APPLICATION->ShowHead();
TAO::frontendCss('index');
TAO::frontendJs('index');
require '../header_full.php';
?>

<div class="l-container l-container--page container">

	<div class="row">
		<div class="hidden-sm-down col-md-3">
			<hr>
			<?php require 'aside.php' ?>
		</div>
		<div class="col-sm-12 col-md-9">
			<?php require 'breadcrumbs.php' ?>

			<h1 class="b-heading">
				Лечение кариеса
				<a class="b-heading__link"
				   href="#">
					Есть вопросы?
				</a>
			</h1>

			<div class="b-page-img"
			     style="background-image: url(/html/images/page.jpg);">
			</div>

			<?php require 'tabs.php' ?>

		</div>
	</div>
</div>

<?php require '../map.php' ?>

<?php require '../popups.php' ?>

<?php require '../footer.php' ?>