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
				<?php require '../services/breadcrumbs.php' ?>

				<h1 class="b-heading">
					Воронцова <br>
					Елена Валерьевна
					<a class="b-heading__link"
					   href="#">
						Есть вопросы?
					</a>
				</h1>

				<div class="b-doctor-card">
					<div class="b-doctor-card__img"
					     style="background-image: url(/html/images/b-card.jpg)"></div>
					<div class="b-doctor-card__text">
						<div class="c-doctor-gray-text">
							Врач-стоматолог, стоматолог-терапевт, стоматолог-пародонтолог
						</div>
						Ведет прием в клиниках:
						<a href="#" class="b-doctor-card__link">
							«СМ-Стоматология» на ул. Космонавта Волкова (м. «Войковская»)
						</a>

						<a href="#" class="btn btn-primary btn-lg b-doctor-card__btn">
							Записаться на прием
						</a>
					</div>
				</div>

				<? require "tabs.php" ?>

			</div>
		</div>
	</div>

<?php require '../map.php' ?>

<?php require '../popups.php' ?>

<?php require '../footer.php' ?>