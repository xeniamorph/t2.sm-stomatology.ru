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
					Фото/Видео
					<a class="b-heading__link"
					   href="#">
						Есть вопросы?
					</a>
				</h1>

				<div class="b-tabs">

					<ul class="nav nav-tabs">
						<li class="nav-item">
							<a class="nav-link active"
							   data-toggle="tab" href="#photo-tab" role="tab">
								Фото
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link"
							   data-toggle="tab" href="#video-tab" role="tab">
								Видео
							</a>
						</li>
					</ul>


					<div class="tab-content">
						<div class="tab-pane active" id="photo-tab" role="tabpanel">
							<? require "tab1.php"; ?>
						</div>

						<div class="tab-pane" id="video-tab" role="tabpanel">
							<? require "tab2.php"; ?>
						</div>
					</div>

				</div>

			</div>
		</div>
	</div>

<?php require '../map.php' ?>

<?php require '../popups.php' ?>

<?php require '../footer.php' ?>