<?php $APPLICATION->IncludeComponent("sm:text", ".default", ['IBLOCK_ID' => 23,'ELEMENT_ID' => 14686], false); ?>

<div class="advantages-block">
	<div class="container">
		<div class="advantages__title">
			<h2>Наши преимущества:</h2>
		</div>
		<div class="advantages__wrapper">
			<div class="advantages__wrapper-top">
				<div class="advantages__wrapper-item">
					<div class="advantages__img-wrapp">
						<img src="<?=SITE_TEMPLATE_PATH?>/svg/credit-card.svg" alt="">
					</div>
					<div class="advantages__text-wrapper">
						<b>Оплата услуг </b> за <br> наличный и безналичный <br> расчет
					</div>
				</div>

				<div class="advantages__wrapper-item">
					<div class="advantages__img-wrapp">
						<img src="<?=SITE_TEMPLATE_PATH?>/svg/delivery.svg" alt="">
					</div>
					<div class="advantages__text-wrapper">
						<b>Бесплатная курьерская</b> <br> доставка в пределах МКАД
					</div>
				</div>

				<div class="advantages__wrapper-item">
					<div class="advantages__img-wrapp">
						<img src="<?=SITE_TEMPLATE_PATH?>/svg/partnership.svg" alt="">
					</div>
					<div class="advantages__text-wrapper">
						<b>Индивидуальный подход</b> <br> к каждому партнеру
					</div>
				</div>

			</div>

			<div class="advantages__wrapper-bottom">

				<div class="advantages__wrapper-item">
					<div class="advantages__img-wrapp">
						<img src="<?=SITE_TEMPLATE_PATH?>/svg/doctor.svg" alt="">
					</div>
					<div class="advantages__text-wrapper">
						<b>Бесплатный выезд зубного</b> техника при <br> планировании,
						коррекции конструкции <br> (от четырех единиц или при эстетических работах)
					</div>
				</div>

				<div class="advantages__wrapper-item">
					<div class="advantages__img-wrapp">
						<img src="<?=SITE_TEMPLATE_PATH?>/svg/discount.svg" alt="">
					</div>
					<div class="advantages__text-wrapper">
						<b>Льготные условия для партнеров</b>
						на проведение <br> конусно-лучевой
						компьютерной томографии и <br> консультаций врачей-стоматологов
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php require($_SERVER["DOCUMENT_ROOT"] . "/zubotekhnicheskaya-laboratoriya/equipment.php");?>
