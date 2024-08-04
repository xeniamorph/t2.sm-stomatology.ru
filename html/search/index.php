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
				<?php require '../services/aside.php' ?>
			</div>
			<div class="col-sm-12 col-md-9">
				<?php require '../services/breadcrumbs.php' ?>


				<h1 class="b-heading">
					Результаты поиска
					<a class="b-heading__link"
					   href="#">
						Есть вопросы?
					</a>
				</h1>

				<div class="b-search-results">
					<div class="b-search-results__top">
						51 &mdash; 100 из 117
					</div>

					<div class="b-search-results__list">
						<div class="b-search-results__item b-search-result">
							<a class="b-search-result__link"
							   href="#">
								Стоматолог
							</a>
							<div class="b-search-result__text">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin cursus auctor ipsum sit
								amet
								rhoncus. Morbi leo nisi, rhoncus eu leo vitae, mattis lacinia orci. Nunc vestibulum
								ligula
								id lorem vulputate imperdiet. Suspendisse potenti. Sed dictum a purus vel feugiat. Nam a
								risus vitae nisl pulvinar gravida. Maecenas eu magna suscipit...
							</div>
						</div>

						<div class="b-search-results__item b-search-result">
							<a class="b-search-result__link"
							   href="#">
								Стоматолог
							</a>
							<div class="b-search-result__text">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin cursus auctor ipsum sit
								amet
								rhoncus. Morbi leo nisi, rhoncus eu leo vitae, mattis lacinia orci. Nunc vestibulum
								ligula
								id lorem vulputate imperdiet. Suspendisse potenti. Sed dictum a purus vel feugiat. Nam a
								risus vitae nisl pulvinar gravida. Maecenas eu magna suscipit...
							</div>
						</div>

						<div class="b-search-results__item b-search-result">
							<a class="b-search-result__link"
							   href="#">
								Стоматолог
							</a>
							<div class="b-search-result__text">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin cursus auctor ipsum sit
								amet
								rhoncus. Morbi leo nisi, rhoncus eu leo vitae, mattis lacinia orci. Nunc vestibulum
								ligula
								id lorem vulputate imperdiet. Suspendisse potenti. Sed dictum a purus vel feugiat. Nam a
								risus vitae nisl pulvinar gravida. Maecenas eu magna suscipit...
							</div>
						</div>
					</div>
				</div>

				<?php require 'pager.php' ?>

				<h3 class="b-heading b-heading--secondary b-heading--black">
					Записаться на прием
				</h3>

				<?php require '../services/form2.php' ?>

			</div>
		</div>

	</div>


<?php require '../map.php' ?>

<?php require '../popups.php' ?>

<?php require '../footer.php' ?>