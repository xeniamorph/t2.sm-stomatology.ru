<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="telephone=no"/>
	<link rel="icon" type="image/ico" href="/favicon.ico">
	<title></title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<script src="https://api-maps.yandex.ru/2.1/?lang=tr_TR" type="text/javascript"></script>


</head>
<body>

<div class="b-header">
	<div class="row">
		<div class="col-xs-12 col-md-5 col-lg-3 b-header-col b-header-col--1">
			<div class="b-logo">
				<a href="/" class="b-logo__link">
					<img src="/<?= TAO::frontendUrl('img/common/logo.png'); ?>" alt="" class="b-logo__img">
				</a>
			</div>
		</div>
		<div class="col-xs-12 col-md-3 col-lg-5 col-xl-4 b-header-col b-header-col--2">
			<div class="b-header-buttons">
				<a href=# class="hidden-md-down btn btn-primary b-btn--ask-question"
				   data-toggle="modal" data-target="#modal-ask-question">
					Задать вопрос
				</a>
				<a href=# class="hidden-md-down btn btn-primary b-btn--form hidden-md-down"
				   data-toggle="modal" data-target="#modal-feedback">
					Записаться на прием
				</a>
				<a href=# class="hidden-lg-up btn btn-primary b-btn--form"
				   data-toggle="modal" data-target="#modal-feedback">
					<i class="fa fa-plus"></i>
					Обратная связь
				</a>
			</div>
		</div>
		<div class="col-xs-12 col-md-4 col-lg-4 col-xl-5 b-header-col b-header-col--3">
			<div class="b-phone b-phone--header">
				+7 495 241 89 49
			</div>

			<div class="b-text-line">
				Запись круглосуточно
			</div>

			<a href="#" class="b-callback b-callback--header hidden-md-down"
			   data-toggle="modal" data-target="#modal-callback">
				Заказать обратный звонок
			</a>

			<a href="#"
			   title="Личный кабинет"
			   class="b-lk">
			</a>

			<div class="b-search b-search--header">
				<i class="fa fa-search b-search__toggle"></i>
				<div class="b-search__form">
					<form action="">
						<div class="b-search__input">
							<button class="fa fa-search b-search__btn"></button>
							<div class="b-search__btn-close"></div>
							<input type="text">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>