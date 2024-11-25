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
					Грант здоровья 2016
					<a class="b-heading__link"
					   href="#">
						Есть вопросы?
					</a>
				</h1>

				<div class="b-sale b-sale--card">
					<div class="row">
						<div class="col-sm-3 b-sale__left">
							<a href="#">
								<img class="b-sale__img"
								     src="/html/images/sale1.jpg">
							</a>
						</div>
						<div class="col-sm-9 b-sale__right">

							<div class="b-sale__date">
								15 декабря – 15 февраля
							</div>

							<div class="b-sale__text">
								Пациентам, которые получили с 15 декабря 2016 г. по 15 февраля 2017 г. в медицинских
								центрах холдинга «СМ-Доктор» услуги на определенную сумму, полагается грант на
								бесплатное медицинское обслуживание в 2016 году.*
							</div>
						</div>
					</div>

					<div class="b-sale__content">
						<p>
							Этим грантом вы можете распорядиться по собственному усмотрению: использовать самим, либо
							передать родственникам и друзьям. Грантом можно воспользоваться в любое удобное время,
							предварительно записавшись на прием к врачу и указав, что являетесь обладателем программы
							«Грант».
						</p>

						<br>

						<h2>
							Условия получения программы «Грант Здоровья — 25»:
						</h2>

						<p>
							При оплате медицинских услуг в клиниках для детей и подростков «СМ-Доктор» на сумму 25 000
							рублей, вы можете выбрать один из четырех «Грантов Здоровья - 25» («Умный», «Сердечный»,
							«Иммунитет», «Здоровый животик»), воспользовавшись которым вы можете бесплатно получить
							следующий перечень услуг.
						</p>

						<blockquote class="blockquote blockquote--left">
							<div class="c-danger">
								*Внимание!
							</div>
							Условия и ограничения действия программы «Грант здоровья 2016»:
						</blockquote>

						<p>
							1. Воспользоваться программами «Грант Здоровья 2016» можно с 1 марта 2016 года по 31 декабря
							2016 года.
						</p>

						<p>
							2. Программы «Грант Здоровья - 25», «Грант Здоровья - 50» - это программы медицинского
							обслуживания пациентов в детских клиниках «СМ-Доктор», которые дают право на обслуживание
							только
							в рамках предоставления услуг на базе «СМ-Доктор» в Москве. По факту накопления суммы,
							достаточной для получения программы Грант, пациент может получить интересующую его программу
							или
							программы. Необходимая сумма должна быть оплачена за одного пациента (с 15 декабря 2016 года
							по
							15 февраля 2017 года).
						</p>

						<p>
							При этом они могут отказаться от «Гранта Здоровья 2016» по результатам обслуживания в период
							с
							21.02.2015 по 14.12.2015, если в накопительный период с 15.12.2016 по 16.02.2017 сумма
							оплаченных медицинских услуг будет выше, в пользу номинала программы в большую сторону. В
							этом
							случае они получают «Грант Здоровья 2016» на общих основаниях.
						</p>

						Обладатели «Грант Здоровья 2015», которые по тем или иным причинам не воспользовались своим
						правом на бесплатное медицинское обслуживание в соответствии с Грантом, либо оплатили в период с
						21.02.2015 по 14.12.2015 в «СМ-Доктор» услуги на сумму ниже суммы, по которой им был
						предоставлен «Грант Здоровья» (например, был предоставлен «Грант Здоровья 50», а услуги в 2015
						году были оплачены на сумму менее 50 000 руб.), могут стать обладателями на бесплатное
						медицинское обслуживание «Грант Здоровья 2016» на общих основаниях при накоплении нужной суммы в
						период с 15.12.2016 по 15.02.2017.
					</div>

					<div class="b-shale__share">
						<script src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
						<script src="//yastatic.net/share2/share.js"></script>
						<div class="ya-share2"
						     data-services="collections,vkontakte,facebook,odnoklassniki,moimir,twitter"
						     data-counter=""></div>
					</div>

					<div class="b-sale__pager">
						<a href="" class="b-sale__link-next">
							Следующая
							<br>
							статья
						</a>
						<a href="" class="b-sale__link-prev">
							Предыдущая
							<br>
							статья
						</a>
					</div>

				</div>

				<h3 class="b-heading--secondary b-heading--black">
					Записаться по акции
				</h3>

				<? require "../services/form2.php" ?>

			</div>
		</div>
	</div>

<?php require '../map.php' ?>

<?php require '../popups.php' ?>

<?php require '../footer.php' ?>