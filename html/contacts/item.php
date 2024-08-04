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
					«СМ-Стоматология» <br>
					на ул. Космонавта Волкова
					<a class="b-heading__link"
					   href="#">
						Есть вопросы?
					</a>
				</h1>

				<div class="b-contact b-contact--card">
					<div class="half-bordered">
						<div class="row">
							<div class="col-sm-6">
								<img class="b-contact__img"
								     src="/html/images/contacts1.jpg">
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

					<div class="b-contact__text">
						<p>
							В районе метро «Войковская» действует стоматологическое отделение «СМ-Клиника» на ул.
							Космонавта
							Волкова, которое предлагает пациентам услуги по следующим направлениям:
						</p>
						<ul class="b-list b-list--dash">
							<li>
								диагностика (панорамный снимок (ортопантомограмма), прицельный снимок, компьютерная
								диагностика
								состояния тканей пародонта)
							<li>
								терапевтическая стоматология (компьютерная анестезия без боли, микроинвазивные методы
								лечения
								кариеса и его осложнений, качественная пломбировка каналов, отбеливание зубов с помощью
								системы ZOOM, лазерное отбеливание, профессиональная гигиена полости рта)
							</li>
							<li>
								ортопедическая стоматология (все виды керамики, коронки, вкладки, виниры, протезирование
								на имплантаты, протезирование без обточки зубов, нейлоновые протезы «Valplast» и
								«Acryfree»,
								сложное протезирование при заболеваниях пародонта)
							</li>
							<li>
								хирургическая стоматология (удаление зубов любой сложности, в том числе зубов мудрости,
								восстановление утраченной кости, пластика мягких тканей, зубосохраняющие операции).
							</li>
							<li>
								имплантология (имплантация в сложных условиях, при недостатке кости, имплантация при
								наличии
								общесоматических заболеваний, использование новейших систем имплантации, большой выбор
								различных видов имплантов, импланты MIS Израиль, ASTRA TECH Швеция, BIOMED 3i США)
							</li>
							<li>
								ортодонтия (исправление прикуса в любом возрасте, все виды брекет систем, невидимые
								брекеты,
								система «INCOGNITO», микроимпланты, лечение без брекетов)
							</li>
							<li>
								пародонтология (компьютерная диагностика заболеваний пародонта (десен и полости рта),
								пародонтология (компьютерная диагностика заболеваний пародонта (десен и полости рта),
								терапевтическое и хирургическое лечение заболеваний пародонта, использование диодного
								лазера
								«OPUS5»).
							</li>
						</ul>


						<p class="b-note b-note--i">
							Узнать подробности и записаться на прием к стоматологу вы можете по телефону
							<b>+7 (495) 401-74-36 </b>
						</p>

						<iframe src="https://api-maps.yandex.ru/frame/v1/-/CZwMyC-y" width="100%" height="400"
						        frameborder="0"></iframe>
						<br>
						<br>


						<h3> Проезд общественным транспортом</h3>
						<div class="b-content-dd">
							<div class="b-content-dd__links b-content-dd__links--block b-content-dd__items">
								<a href="#contact-bb1"
								   class="b-content-dd-link">
									Проезд от станции м. Петровско-Разумовская
								</a>
								<div class="b-content-dd-item" id="contact-bb1">
									<p>
										Последний вагон из центра, автобус № 461. Доехать до остановки 2-й
										Новоподмосковный
										переулок, справа
										будет наша клиника. Время в пути без пробок — 15 минут
									</p>
								</div>
							</div>

							<div class="b-content-dd__links b-content-dd__links--block b-content-dd__items">
								<a href="#contact-bb2"
								   class="b-content-dd-link">
									Проезд от станции м. Войковская
								</a>
								<div class="b-content-dd-item" id="contact-bb2">
									<p>
										Последний вагон из центра, автобус № 461. Доехать до остановки 2-й
										Новоподмосковный
										переулок, справа
										будет наша клиника. Время в пути без пробок — 15 минут
									</p>
								</div>
							</div>

							<div class="b-content-dd__links b-content-dd__links--block b-content-dd__items">
								<a href="#contact-bb3"
								   class="b-content-dd-link">
									Проезд с ул. Большая академическая
								</a>
								<div class="b-content-dd-item" id="contact-bb3">
									<p>
										Последний вагон из центра, автобус № 461. Доехать до остановки 2-й
										Новоподмосковный
										переулок, справа
										будет наша клиника. Время в пути без пробок — 15 минут
									</p>
								</div>
							</div>

							<div class="b-content-dd__links b-content-dd__links--block b-content-dd__items">
								<a href="#contact-bb4"
								   class="b-content-dd-link">
									Пешком от м. Войковская
								</a>
								<div class="b-content-dd-item" id="contact-bb4">
									<p>
										Последний вагон из центра, автобус № 461. Доехать до остановки 2-й
										Новоподмосковный
										переулок, справа
										будет наша клиника. Время в пути без пробок — 15 минут
									</p>
								</div>
							</div>
						</div>


						<h3>Проезд на автомобиле</h3>
						<div class="b-content-dd">
							<div class="b-content-dd__links b-content-dd__links--block b-content-dd__items">
								<a href="#contact-bb5"
								   class="b-content-dd-link">
									По Ленинградскому шоссе в сторону области
								</a>
								<div class="b-content-dd-item" id="contact-bb5">
									<p>
										ППо Ленинградскому шоссе в сторону области
									</p>
								</div>
							</div>

							<div class="b-content-dd__links b-content-dd__links--block b-content-dd__items">
								<a href="#contact-bb6"
								   class="b-content-dd-link">
									По Ленинградскому шоссе в сторону центра
								</a>
								<div class="b-content-dd-item" id="contact-bb6">
									<p>
										По Ленинградскому шоссе в сторону центра
									</p>
								</div>
							</div>

						</div>


					</div>

				</div>

				<hr class="hr--light">

				<h2>
					Фотогалерея
				</h2>
				<br>
				<? require "../gallery/tab1.php" ?>

				<hr class="hr--light">

				<h3 class="b-heading--secondary b-heading--black">
					Записаться на прием
				</h3>

				<?php require '../services/form2.php' ?>


			</div>
		</div>
	</div>

<?php require '../map.php' ?>

<?php require '../popups.php' ?>

<?php require '../footer.php' ?>