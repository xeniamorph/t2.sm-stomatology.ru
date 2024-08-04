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
					Заболевания
					<a class="b-heading__link"
					   href="#">
						Есть вопросы?
					</a>
				</h1>

				<div class="b-diseases">

					<div class="b-diseases__top">
						<div class="b-diseases__letters hidden-md-down">
							<a href="#А">А</a>
							<a href="#Б">Б</a>
							<a href="#В">В</a>
							<a href="#" class="empty">Г</a>
							<a href="#" class="empty">Д</a>
							<a href="#">Е</a>
							<a href="#" class="empty">Ж</a>
							<a href="#">З</a>
							<a href="#">И</a>
							<a href="#" class="empty">К</a>
							<a href="#" class="empty">Л</a>
							<a href="#" class="empty">М</a>
							<a href="#" class="empty">Н</a>
							<a href="#">О</a>
							<a href="#">П</a>
							<a href="#" class="empty">Р</a>
							<a href="#" class="empty">С</a>
							<a href="#">Т</a>
							<a href="#" class="empty">У</a>
							<a href="#">Ф</a>
						</div>
						<div class="b-diseases__letters hidden-lg-up b-custom-select">
							<select class="b-diseases__letters--select" data-theme="select-theme-style2">
								<option value="А">Начинаются на букву "А"</option>
								<option value="Б">Начинаются на букву "Б"</option>
								<option value="В">Начинаются на букву "В"</option>
								<option value="Г">Начинаются на букву "Г"</option>
								<option value="Д">Начинаются на букву "Д"</option>
							</select>
						</div>
					</div>

					<div class="b-diseases__groups">

						<div class="b-diseases__group">
							<div class="b-diseases__letter" id="А">А</div>
							<div class="row b-diseases__list">
								<div class="col-sm-4">
									<a href="#">Абсцесс зуба</a>
								</div>
							</div>
						</div>

						<div class="b-diseases__group">
							<div class="b-diseases__letter" id="Б">Б</div>
							<div class="row b-diseases__list">
								<div class="col-sm-4">
									<a href="#">Гингивит</a>
								</div>
								<div class="col-sm-4">
									<a href="#">Гингивит длинное название болезни</a>
								</div>
							</div>
						</div>

						<div class="b-diseases__group">
							<div class="b-diseases__letter" id="В">В</div>
							<div class="row b-diseases__list">
								<div class="col-sm-4">
									<a href="#">Кариес</a>
								</div>
								<div class="col-sm-4">
									<a href="#">Киста зуба</a>
								</div>
								<div class="col-sm-4">
									<a href="#">Кариес</a>
								</div>
								<div class="col-sm-4">
									<a href="#">Киста зуба</a>
								</div>
							</div>
						</div>

						<div class="b-diseases__group">
							<div class="b-diseases__letter" id="Г">Г</div>
							<div class="row b-diseases__list">
								<div class="col-sm-4">
									<a href="#">Пародонтит</a>
								</div>
								<div class="col-sm-4">
									<a href="#">Пародонтоз</a>
								</div>
								<div class="col-sm-4">
									<a href="#">Периодонтит</a>
								</div>
								<div class="col-sm-4">
									<a href="#">Пульпит</a>
								</div>
							</div>
						</div>

					</div>

				</div>

				<br>

				<? require "../services/form.php" ?>

			</div>
		</div>
	</div>

<?php require '../map.php' ?>

<?php require '../popups.php' ?>

<?php require '../footer.php' ?>