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
				Терапевтическая стоматология <br>
				и профилактика
				<a class="b-heading__link"
				   href="#">
					Есть вопросы?
				</a>
			</h1>


			<div class="b-cards b-cards--categories">
				<div class="row">

					<div class="col-sm-4">
						<div class="b-card b-card--category">
							<div class="b-card__img"
							     style="background-image: url(/html/images/c1.jpg);"></div>
							<div class="b-card__title">
								Консультация стоматолога
							</div>
						</div>
					</div>

					<div class="col-sm-4">
						<div class="b-card b-card--category">
							<div class="b-card__img"
							     style="background-image: url(/html/images/c2.jpg);"></div>
							<div class="b-card__title">
								Пломбирование зубов
							</div>
						</div>
					</div>

					<div class="col-sm-4">
						<div class="b-card b-card--category">
							<div class="b-card__img"
							     style="background-image: url(/html/images/c3.jpg);"></div>
							<div class="b-card__title">
								Лечение кариеса
							</div>
						</div>
					</div>

					<div class="col-sm-4">
						<div class="b-card b-card--category">
							<div class="b-card__img"
							     style="background-image: url(/html/images/c4.jpg);"></div>
							<div class="b-card__title">
								Лечение пульпита
							</div>
						</div>
					</div>

					<div class="col-sm-4">
						<div class="b-card b-card--category">
							<div class="b-card__img"
							     style="background-image: url(/html/images/c5.jpg);"></div>
							<div class="b-card__title">
								Консультация стоматолога
							</div>
						</div>
					</div>

					<div class="col-sm-4">
						<div class="b-card b-card--category">
							<div class="b-card__img"
							     style="background-image: url(/html/images/c6.jpg);"></div>
							<div class="b-card__title">
								Пломбирование зубов
							</div>
						</div>
					</div>

				</div>
			</div>


			<blockquote class="blockquote">
				<p>
					В норме в полости рта человека существует большое количество микроорганизмов.
				</p>
			</blockquote>


			<p>
				Некоторые их виды при поступлении в полость рта углеводов способны вырабатывать клейкие вещества и с их
				помощью фиксироваться на поверхности зуба, образуя зубной налёт.
			</p>
			<p>
				Налёт обычно скапливается:
				<br>
				— в фиссурах (ямках на поверхности зуба);
				<br>
				— между зубами;
				<br>
				— между зубом и десной.
			</p>
			<p>
				С течением времени бактерии в зубном налёте размножаются, он становится более толстым и плотным. В этом
				случае начинается процесс растворения эмали в месте прилегания налёта к зубу.
			</p>

			<? require "../services/form.php" ?>

			<p>
				Начинается кариес — процесс разрушения твёрдых тканей зуба, приводящий к появлению полости. На процесс
				возникновения кариеса также оказывают влияние недостаток фтора и кальция в питьевой воде, неполноценное
				питание, избыток сахара в пище, нарушение общего состояния организма, стрессы, неблагоприятная
				наследственность, возраст, нарушение свойств и состава слюны. Если кариозный процесс достигает пульпы,
				то начинается её воспаление-пульпит.
			</p>
			<p>
				Его лечение осуществляется при помощи удаления пульпы из канала зуба с последующим пломбированием канала
				и кариозной полости. Через пораженную пульпу бактерии могут проникнуть в периодонт - фиброзную ткань,
				соединяющую корни зубов с лунками и вызвать воспалительный процесс (периодонтит) уже там.
			</p>
			<p>
				Лечение периодонтита крайне серьёзная и сложная задача. Это заболевание может привести к потере зуба.
				Также необходимо знать, что периодонтит это очаг хронической интоксикации всего организма, в результате
				которой могут поражаться сердце, почки и другие внутренние органы.
			</p>
			<p>
				Следует помнить, что на ранних стадиях кариес почти не вызывает болевых ощущений и диагностируется
				только при осмотре стоматологом.
			</p>

			<br>

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
