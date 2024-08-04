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
				<hr>
				<?php require '../doctors/aside.php' ?>
			</div>
			<div class="col-sm-12 col-md-9">
				<?php require '../services/breadcrumbs.php' ?>

				<h1 class="b-heading">
					КОНТАКТНАЯ ИНФОРМАЦИЯ
					<a class="b-heading__link"
					   href="#">
						Есть вопросы?
					</a>
				</h1>

				<div class="b-contacts">

					<div class="b-contact">
						<h2 class="b-contact__title">
							<a href="/html/contacts/item.php">
								«СМ-Стоматология» на ул. Космонавта Волкова
							</a>
						</h2>
						<div class="row">
							<div class="col-sm-6">
								<a href="/html/contacts/item.php">
									<img class="b-contact__img"
									     src="/html/images/contacts1.jpg">
								</a>
							</div>
							<div class="col-sm-6">
								<div class="b-with-metro-icon b-with-metro-icon--orange">
									Войковская
								</div>
								<p>
									ул. Космонавта Волкова, 9/2
									<br>
									<a href="">Схема проезда</a>
								</p>
								<p>
									Круглосуточная запись на прием: (495) 308-02-14
								</p>
								<p>
									Часы работы клиники:
									<br>
									с 09:00 до 21:30 в будни,
									<br>
									с 09:00 до 21:00 в субботу и воскресенье.
									<br>
									<a href="">Фотогалерея</a>
								</p>
							</div>
						</div>
					</div>

					<div class="b-contact">
						<h2 class="b-contact__title">
							<a href="/html/contacts/item.php">
								«СМ-Стоматология» на ул. Клары Цеткин
							</a>
						</h2>
						<div class="row">
							<div class="col-sm-6">
								<a href="/html/contacts/item.php">
									<img class="b-contact__img"
									     src="/html/images/contacts1.jpg">
								</a>
							</div>
							<div class="col-sm-6">
								<div class="b-with-metro-icon b-with-metro-icon--magenta">
									Войковская
								</div>
								<p>
									ул. Космонавта Волкова, 9/2
									<br>
									<a href="">Схема проезда</a>
								</p>
								<p>
									Круглосуточная запись на прием: (495) 308-02-14
								</p>
								<p>
									Часы работы клиники:
									<br>
									с 09:00 до 21:30 в будни,
									<br>
									с 09:00 до 21:00 в субботу и воскресенье.
									<br>
									<a href="">Фотогалерея</a>
								</p>
							</div>
						</div>
					</div>

				</div>

			</div>
		</div>
	</div>

<?php require '../map.php' ?>

<?php require '../popups.php' ?>

<?php require '../footer.php' ?>
