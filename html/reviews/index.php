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
					Отзывы
					<a class="b-heading__link"
					   href="#">
						Есть вопросы?
					</a>
				</h1>

				<div class="b-tabs">

					<ul class="nav nav-tabs">
						<li class="nav-item">
							<a class="nav-link active"
							   data-toggle="tab" href="#review-tab1" role="tab">
								Отзывы с сайта
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link"
							   data-toggle="tab" href="#review-tab2" role="tab">
								Отзывы из клиник
							</a>
						</li>
					</ul>


					<div class="tab-content">
						<div class="tab-pane active" id="review-tab1" role="tabpanel">
							<? require "tab1.php"; ?>
						</div>

						<div class="tab-pane" id="review-tab2" role="tabpanel">
							<? require "tab2.php"; ?>
						</div>
					</div>

				</div>


				<? require "form.php" ?>

				<blockquote class="blockquote blockquote--left">
					<p>
						Ваши персональные данные не будут использованы для спамовой рассылки и не попадут в открытый
						доступ и не будут переданы третьим лицам.
					</p>
				</blockquote>

				<p>
					Уважаемые посетители, большая просьба при написании отзыва, заполнять все поля формы и указывать
					адрес электронной почты для связи.
				</p>
				<p>
					В противном случае администрация клиники не сможет отреагировать на оставленную информацию и
					связаться с вами для решения возникших вопросов.
				</p>

			</div>
		</div>
	</div>

<?php require '../map.php' ?>

<?php require '../popups.php' ?>

<?php require '../footer.php' ?>
