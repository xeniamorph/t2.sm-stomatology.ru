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
					УСЛУГИ И ЦЕНЫ
					<a class="b-heading__link"
					   href="#">
						Есть вопросы?
					</a>
				</h1>

				<div class="b-services">
					<div class="b-service">
						<h2 class="b-service__title">
							Терапевтическая стоматология и профилактика
						</h2>
						<div class="row">
							<div class="col-sm-6">
								<img class="b-service__img"
								     src="http://placehold.it/600x400">
							</div>
							<div class="col-sm-6">
								<div class="b-service__description">
									<table class="table b-table">
										<thead>
										<tr>
											<th>Наименование услуги</th>
											<th>Цена (руб) *</th>
										</tr>
										</thead>
										<tbody>
										<tr>
											<td>
												<a href="#">
													Консультация стоматолога
												</a>
											</td>
											<td>700</td>
										</tr>
										<tr>
											<td>
												<a href="#">
													Пломбирование зубов
												</a>
											</td>
											<td>от 4 350</td>
										</tr>
										<tr>
											<td>
												<a href="#">
													Лечение кариеса
												</a>
											</td>
											<td>1 050</td>
										</tr>
										<tr>
											<td>
												<a href="#">
													Лечение пульпита
												</a>
											</td>
											<td>от 2 000</td>
										</tr>
										<tr>
											<td>
												<a href="#">
													Лечение периодонтита
												</a>
											</td>
											<td>420</td>
										</tr>
										<tr>
											<td>
												<a href="#">
													Лечение корневых каналов
												</a>
											</td>
											<td>1 580</td>
										</tr>
										<tr>
											<td>
												<a href="#">
													Профессиональная чистка
												</a>
											</td>
											<td>1 580</td>
										</tr>
										<tr>
											<td>
												<a href="#">
													Чистка Airflow
												</a>
											</td>
											<td>от 2 000</td>
										</tr>
										<tr>
											<td>
												<a href="#">
													Удаление зубного камня
												</a>
											</td>
											<td>700</td>
										</tr>
										<tr>
											<td>
												<a href="#">
													Фторирование зубов
												</a>
											</td>
											<td>от 4 350</td>
										</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>


					<div class="b-service">
						<h2 class="b-service__title">
							Терапевтическая стоматология и профилактика
						</h2>
						<div class="row">
							<div class="col-sm-6">
								<img class="b-service__img"
								     src="http://placehold.it/600x400">
							</div>
							<div class="col-sm-6">
								<div class="b-service__description">
									<table class="table b-table">
										<thead>
										<tr>
											<th>Наименование услуги</th>
											<th>Цена (руб) *</th>
										</tr>
										</thead>
										<tbody>
										<tr>
											<td>
												<a href="#">
													Консультация стоматолога
												</a>
											</td>
											<td>700</td>
										</tr>
										<tr>
											<td>
												<a href="#">
													Пломбирование зубов
												</a>
											</td>
											<td>от 4 350</td>
										</tr>
										<tr>
											<td>
												<a href="#">
													Лечение кариеса
												</a>
											</td>
											<td>1 050</td>
										</tr>
										<tr>
											<td>
												<a href="#">
													Лечение пульпита
												</a>
											</td>
											<td>от 2 000</td>
										</tr>
										<tr>
											<td>
												<a href="#">
													Лечение периодонтита
												</a>
											</td>
											<td>420</td>
										</tr>
										<tr>
											<td>
												<a href="#">
													Лечение корневых каналов
												</a>
											</td>
											<td>1 580</td>
										</tr>
										<tr>
											<td>
												<a href="#">
													Профессиональная чистка
												</a>
											</td>
											<td>1 580</td>
										</tr>
										<tr>
											<td>
												<a href="#">
													Чистка Airflow
												</a>
											</td>
											<td>от 2 000</td>
										</tr>
										<tr>
											<td>
												<a href="#">
													Удаление зубного камня
												</a>
											</td>
											<td>700</td>
										</tr>
										<tr>
											<td>
												<a href="#">
													Фторирование зубов
												</a>
											</td>
											<td>от 4 350</td>
										</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>

				</div>

				<? require "../services/note.php" ?>

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