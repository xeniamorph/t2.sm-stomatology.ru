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
					Акции
					<a class="b-heading__link"
					   href="#">
						Есть вопросы?
					</a>
				</h1>


				<div class="b-sales">

					<div class="b-sale">
						<div class="row">
							<div class="col-sm-3 b-sale__left">
								<a href="#">
									<img class="b-sale__img"
									     src="/html/images/sale1.jpg">
								</a>
							</div>
							<div class="col-sm-9 b-sale__right">

								<div class="b-sale__date">
									1 декабря &ndash; 31 декабря
								</div>

								<a href="#" class="b-sale__link">
									Акция «Год здоровой улыбки»
								</a>

								<div class="b-sale__text">
									Только с 1 декабря 2015 года по 31 декабря 2015 года на Комплексную гигиену полости
									рта действует скидка 500 рублей.
								</div>
							</div>
						</div>
					</div>

					<div class="b-sale">
						<div class="row">
							<div class="col-sm-3 b-sale__left">
								<a href="#">
									<img class="b-sale__img"
									     src="/html/images/sale1.jpg">
								</a>
							</div>
							<div class="col-sm-9 b-sale__right">

								<div class="b-sale__date">
									1 декабря &ndash; 31 декабря
								</div>

								<a href="#" class="b-sale__link">
									Акция «Год здоровой улыбки»
								</a>

								<div class="b-sale__text">
									Только с 1 декабря 2015 года по 31 декабря 2015 года на Комплексную гигиену полости
									рта действует скидка 500 рублей.
								</div>
							</div>
						</div>
					</div>

					<div class="b-sale">
						<div class="row">
							<div class="col-sm-3 b-sale__left">
								<a href="#">
									<img class="b-sale__img"
									     src="/html/images/sale1.jpg">
								</a>
							</div>
							<div class="col-sm-9 b-sale__right">

								<div class="b-sale__date">
									1 декабря &ndash; 31 декабря
								</div>

								<a href="#" class="b-sale__link">
									Акция «Год здоровой улыбки»
								</a>

								<div class="b-sale__text">
									Только с 1 декабря 2015 года по 31 декабря 2015 года на Комплексную гигиену полости
									рта действует скидка 500 рублей.
								</div>
							</div>
						</div>
					</div>

				</div>

				<a href="/html/sale/archive.php" class="btn btn-warning btn--fixed-width">
					АРХИВ АКЦИЙ
				</a>

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