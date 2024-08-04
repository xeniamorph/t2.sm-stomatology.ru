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
					Технологии и оборудование
					<a class="b-heading__link"
					   href="#">
						Есть вопросы?
					</a>
				</h1>

				<br>

				<? require "tab1.php"; ?>

				<blockquote class="blockquote">
					<p>
						Чтобы достичь превосходных результатов в своей работе мы используем сертифицированное и
						проверенное временем оборудование.
					</p>
				</blockquote>

				<p>
					В «СМ-Клиника» представлен полный спектр диагностической аппаратуры (дентальную компьютерную
					томографию, компьютерная ортопантомография, радиовизиография, компьютерная диагностика состояния
					пародонта, компьютерное моделирование коронок и искусственных протезов), что позволяет безошибочно
					поставить диагноз и составить план лечения.
				</p>

				<p>
					Консультация у врача-стоматолога проходит в приятной, спокойной обстановке. На первичной
					консультации вам предложат все возможные варианты лечения, из которых вы сможете выбрать наиболее
					подходящий.
				</p>

				<hr class="hr--light">

				<h3 class="b-heading--secondary b-heading--black">
					Записаться на прием
				</h3>

				<? require "../services/form2.php" ?>

			</div>
		</div>
	</div>

<?php require '../map.php' ?>

<?php require '../popups.php' ?>

<?php require '../footer.php' ?>