<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Зуботехническая лаборатория «SMD LAB» | Стоматологическая клиника «СМ-Стоматология»");
\TAO::App()->SetTitle('Зуботехническая лаборатория «SMD LAB» | Стоматологическая клиника «СМ-Стоматология»');
\TAO::App()->SetPageProperty("description", "Изготовление зубных конструкций, коронок, виниров, вкладок, протезов и т. д. Собственные литейные установки и современные печи, бесплатный выезд зубного техника, льготные условия для партнеров.");
\TAO::App()->SetPageProperty("keywords", "Зуботехническая лаборатория");
?>

<div class="headline">
	<div class="container">
		<div class="headline__title">
			<h1>Зуботехническая лаборатория  «SMD LAB»</h1>
		</div>
	</div>
</div>

<div class="lab-tabs">
	<div class="page-nav-sticky__wrapper">
		<div class="container">
			<div class="page-nav-sticky">
				<div class="page-nav-sticky__buttons">
					<a class="page-nav-sticky__button link lab-tabs__button active" href="#about">О нас</a>
					<a class="page-nav-sticky__button link lab-tabs__button" href="#services">Услуги</a>
					<a class="page-nav-sticky__button link lab-tabs__button" href="#prices">Цены</a>
					<a class="page-nav-sticky__button link lab-tabs__button" href="#work">Наши работы</a>
					<a class="page-nav-sticky__button link lab-tabs__button" href="#contact">Контакты</a>
				</div>
			</div>
		</div>
	</div>

	<div class="lab__img-block">
		<div class="container">
			<div class="lab__img-block__box">
				<div class="lab__img-block__photo">
					<img src="<?=SITE_TEMPLATE_PATH?>/img/laboratory_tech.jpg" loading="lazy">
				</div>
			</div>
		</div>
	</div>

	<div class="lab-tabs__content active" id="about">
		<?php require($_SERVER["DOCUMENT_ROOT"] . "/zubotekhnicheskaya-laboratoriya/about.php");?>
	</div>

	<div class="lab-tabs__content" id="services">
		<?php $APPLICATION->IncludeComponent("sm:text", ".default", ['IBLOCK_ID' => 23,'ELEMENT_ID' => 14687], false); ?>
	</div>

	<div class="lab-tabs__content" id="prices">
		<?php $APPLICATION->IncludeComponent("sm:text", ".default", ['IBLOCK_ID' => 23,'ELEMENT_ID' => 14688], false); ?>
	</div>

	<div class="lab-tabs__content" id="work">
		<?php require($_SERVER["DOCUMENT_ROOT"] . "/zubotekhnicheskaya-laboratoriya/work.php");?>
	</div>

	<div class="lab-tabs__content" id="contact">
		<?php $APPLICATION->IncludeComponent("sm:text", ".default", ['IBLOCK_ID' => 23,'ELEMENT_ID' => 14689], false); ?>
	</div>

	<?= \TAO::Form('Callback')->setOption('layout','callback-in-text')->render();?>
	<div class="details-block">
		<div class="container">
			<div class="details-block__wrapper">
				<div class="details-block__text">
					<span>Узнать подробности о перечне услуг, стоимости, <br> </span>
					порядке оплаты и сроках исполнения можно по телефону:
				</div>
				<div class="details-block__number">
					<a href="tel:+74997041104">+7 (499) 704-11-04</a>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
$json[] = [
	'coords' => [55.825507068917425,37.49865349999996],
	'zoom' => 13,
	'options' => [
		[
			'id' => 1,
			'departament' => '',
			"iconImages" => [
				SITE_TEMPLATE_PATH.'/build/prod/src/i/map-point-gray.svg?v=7',
				SITE_TEMPLATE_PATH.'/build/prod/src/i/map-point-green.svg?v=7'	// Активная иконка
			],
			'hintContent' => 'г. Москва, Старопетровский проезд, 7А,стр. 19',
			'balloonContent' => 'г. Москва, Старопетровский проезд, 7А,стр. 19',
		],
		[
			'iconLayout' => 'default#image',
			'iconImageHref' => SITE_TEMPLATE_PATH.'/build/prod/src/i/map-point-green.svg?v=7',
			"iconImageSize" => [49, 62],
			"iconImageOffset" => [-25, -55],
			"hideIconOnBalloonOpen" => false
		]
	]
];
?>
<script type="text/javascript">
	window.mapPoints = <?= json_encode($json, JSON_UNESCAPED_UNICODE) ?>;
</script>

<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
