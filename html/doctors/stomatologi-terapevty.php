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
					Стоматологи-терапевты
					<a class="b-heading__link"
					   href="#">
						Есть вопросы?
					</a>
				</h1>

				<?php require '../services/form3.php' ?>

				<div class="b-cards">
					<div class="row">

						<div class="col-sm-4">
							<div class="b-card b-card--doctor">
								<div class="b-card__img"
								     style="background-image: url(/html/images/d1.jpg);"></div>
								<div class="b-card__title">
									Берулава
									Маргарита Георгиевна
								</div>
								<div class="b-card__sub">
									Врач стоматолог-ортодонт
								</div>
							</div>
						</div>

						<div class="col-sm-4">
							<div class="b-card b-card--doctor">
								<div class="b-card__img"
								     style="background-image: url(/html/images/d2.jpg);"></div>
								<div class="b-card__title">
									Вышлова
									Анастасия Владимировна
								</div>
								<div class="b-card__sub">
									Стоматолог, стоматолог-терапевт, стоматолог-хирург
								</div>
							</div>

						</div>

						<div class="col-sm-4">
							<div class="b-card b-card--doctor">
								<div class="b-card__img"
								     style="background-image: url(/html/images/d3.jpg);"></div>
								<div class="b-card__title">
									Галушко
									Андрей Васильевич
								</div>
								<div class="b-card__sub">
									Врач стоматолог-хирург, стоматолог-имплантолог
								</div>
							</div>
						</div>
					</div>
				</div>


				<blockquote class="blockquote">
					<p>
						Нашим специалистам доступны все новейшие методики лечения, имплантации и протезирования зубов
					</p>
				</blockquote>

				<p>
					В «СМ-Клиника» представлен полный спектр диагностической аппаратуры (дентальную компьютерную
					томографию,
					компьютерная ортопантомография, радиовизиография, компьютерная диагностика состояния пародонта,
					компьютерное моделирование коронок и искусственных протезов), что позволяет безошибочно поставить
					диагноз и составить план лечения.
				</p>
				<p>
					Консультация у врача-стоматолога проходит в приятной, спокойной обстановке. На первичной
					консультации
					вам предложат все возможные варианты лечения, из которых вы сможете выбрать наиболее подходящий.
				</p>

				<? require "../services/form.php" ?>

				<p>
					В «СМ-Клиника» применяется самое современное оборудование. Новейшие немецкие установки с
					фиброоптикой и
					системой веерного охлаждения при препарировании позволяют забыть о боли. Наши специалисты используют
					проверенные методики и эффективные способы обезболивания, применяется электронная анестезия.
				</p>
				<p>
					В «СМ-Клиника» доступны все новейшие методики лечения, имплантации и протезирования зубов. В
					стоматологических отделениях обеспечена безопасность лечения: каждый стоматологический инструмент
					стерилизуется индивидуально и упаковывается в крафт-пакет! Прием ведут лучшие врачи-стоматологи.
				</p>

				<br>

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