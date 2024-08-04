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
				<?php require '../doctors/aside.php' ?>
			</div>
			<div class="col-sm-12 col-md-9">
				<?php require '../services/breadcrumbs.php' ?>

				<h1 class="b-heading">
					Ошибка 404:
					<br>
					Страница не найдена
				</h1>

				<p>
					Неправильно набран адрес или такой страницы на сайте не существует.

					<br>

					Попробуйте воспользоваться <a href="#" class="b-link b-link--red">поиском</a> или перейдите
					на <a href="#" class="b-link b-link--red">главную страницу</a>.

					<br>
					<br>

					Мы работаем ежедневно, включая выходные и праздничные дни:

					<br>
					<br>

					Часы работы клиники &mdash; с 09:00 до 21:30 в будни,

					<br>

					с 09:00 до 21:00 в субботу и воскресенье.

					<br>
					<br>

					Круглосуточная запись на прием: +7 (495) 241 89 49
				</p>
			</div>
		</div>
	</div>

<?php require '../map.php' ?>

<?php require '../popups.php' ?>

<?php require '../footer.php' ?>