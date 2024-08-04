<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle('Акция «Добро пожаловать!»');
$APPLICATION->SetPageProperty("description", "Акция «Добро пожаловать!»");
$APPLICATION->SetPageProperty("keywords", "Акция «Добро пожаловать!»");
$APPLICATION->AddChainItem("Акции", "/stock/");
$APPLICATION->SetAdditionalCSS('/local/templates/sm-new/build/prod/stock/aktsiya-dobro-pozhalovat/style.min.css');
$APPLICATION->SetAdditionalCSS('/stock/custom.css');
?>
<div class="container">
<?// <div class="b-sale__warning">Акция закончилась</div>?>
<div class="wl-page">
	<div class="wl-intro">
		<div class="wl-intro__top"></div>
		<div class="wl-intro__box">
			<h1 class="wl-intro__header">
				<div>Добро пожаловать!</div>
			</h1>
			<div class="wl-intro__body">
				<div class="wl-intro__left"><img src="/local/templates/sm-new/build/prod/stock/aktsiya-dobro-pozhalovat/i/wl_intro.png"></div>
				<div class="wl-intro__right">
					<div class="wl-intro__form">
						<form class="wl-form js-feedback-submit" method="POST" action="">
							<div class="form__body">
								<div class="wl-form__date">c <b>06.04.2024</b> по <b>31.05.2024</b></div>
								<div class="wl-form__header">
									<div class="wl-form__title">Бесплатная</div>
									<div class="wl-form__subtitle">консультация врача-стоматолога в отделении «СМ-Стоматология» на ул. Богданова 52.</div>
								</div>
								<div class="wl-form__row">
									<div class="wl-form__input">
										<input type="text" name="name" placeholder="Имя">
									</div>
									<div class="wl-form__input">
										<input type="tel" name="phone" placeholder="Телефон">
									</div>
								</div>
								<div class="wl-form__submit">
									<button type="sumbit">Записаться на прием</button>
								</div>
								<input type="hidden" name="formtype" value="appointment">
								<input type="hidden" name="analytics" value="OrderCall_Stat">
								<input type="hidden" name="question" value="Добро пожаловать! Бесплатная консультация стоматолога">
							</div>
						</form>
					</div>
					<div class="wl-intro__footnote">
						<p class="clr-blue">Запись через сайт является предварительной. Наш сотрудник свяжется с вами в ближайшее время для подтверждения записи на прием.</p>
						<p>Нажимая на кнопку, вы даете согласие<br>на <a rel="canonical" href="/about/obrabotka-dannykh/" target="_blank">обработку своих персональных данных</a></p>
					</div>
				</div>
			</div>
			<div class="wl-intro__footer"></div>
		</div>
	</div>
	<div class="wl-advantages">
		<div class="wl-advantages__items">
			<div class="wl-advantages__item">
				<div class="wl-advantages__header"><img src="/local/templates/sm-new/build/prod/stock/aktsiya-dobro-pozhalovat/i/wl-advantages-1.png"></div>
				<div class="wl-advantages__text">
					<div><b>С 2002 года</b> на рынке</div>
				</div>
			</div>
			<div class="wl-advantages__item">
				<div class="wl-advantages__header"><img src="/local/templates/sm-new/build/prod/stock/aktsiya-dobro-pozhalovat/i/wl-advantages-2.png"></div>
				<div class="wl-advantages__text">
					<div>Терапия, <br>хирургия, <br>имплантация, <br>ортопедия, <br>ортодонтия</div>
				</div>
			</div>
			<div class="wl-advantages__item">
				<div class="wl-advantages__header"><img src="/local/templates/sm-new/build/prod/stock/aktsiya-dobro-pozhalovat/i/wl-advantages-3.png"></div>
				<div class="wl-advantages__text text">
					<div><b>Более 100 врачей</b>, в том числе кандидаты медицинских наук и врачи с международными сертификатами:</div>
					<ul>
						<li>стоматологи-терапевты</li>
						<li>имплантологи</li>
						<li>пародонтологи</li>
						<li>ортопеды гнатологи</li>
						<li>хирурги</li>
						<li>ортодонты.</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<?$APPLICATION->IncludeComponent(
		"bitrix:news.list", 
		"map-stock", 
		array(
			"ACTIVE_DATE_FORMAT" => "d.m.Y",
			"ADD_SECTIONS_CHAIN" => "N",
			"AJAX_MODE" => "N",
			"AJAX_OPTION_ADDITIONAL" => "",
			"AJAX_OPTION_HISTORY" => "N",
			"AJAX_OPTION_JUMP" => "N",
			"AJAX_OPTION_STYLE" => "Y",
			"CACHE_FILTER" => "N",
			"CACHE_GROUPS" => "Y",
			"CACHE_TIME" => "36000000",
			"CACHE_TYPE" => "A",
			"CHECK_DATES" => "Y",
			"COMPONENT_TEMPLATE" => "map",
			"DETAIL_URL" => "",
			"DISPLAY_BOTTOM_PAGER" => "N",
			"DISPLAY_DATE" => "Y",
			"DISPLAY_NAME" => "Y",
			"DISPLAY_PICTURE" => "Y",
			"DISPLAY_PREVIEW_TEXT" => "Y",
			"DISPLAY_TOP_PAGER" => "N",
			"FIELD_CODE" => array(
				0 => "DETAIL_PICTURE",
				1 => "",
			),
			"FILTER_NAME" => "",
			"HIDE_LINK_WHEN_NO_DETAIL" => "N",
			"IBLOCK_ID" => "5",
			"IBLOCK_TYPE" => "clinic",
			"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
			"INCLUDE_SUBSECTIONS" => "Y",
			"MESSAGE_404" => "",
			"NEWS_COUNT" => "20",
			"PAGER_BASE_LINK_ENABLE" => "N",
			"PAGER_DESC_NUMBERING" => "N",
			"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
			"PAGER_SHOW_ALL" => "N",
			"PAGER_SHOW_ALWAYS" => "N",
			"PAGER_TEMPLATE" => ".default",
			"PAGER_TITLE" => "Новости",
			"PARENT_SECTION" => "",
			"PARENT_SECTION_CODE" => "",
			"PREVIEW_TRUNCATE_LEN" => "",
			"PROPERTY_CODE" => array(
				0 => "address",
				1 => "map_address",
				2 => "link_to_site",
				3 => "personal_transport",
				4 => "public_transport",
				5 => "time",
				6 => "metro",
				7 => "",
			),
			"SET_BROWSER_TITLE" => "N",
			"SET_LAST_MODIFIED" => "N",
			"SET_META_DESCRIPTION" => "N",
			"SET_META_KEYWORDS" => "N",
			"SET_STATUS_404" => "N",
			"SET_TITLE" => "N",
			"SHOW_404" => "N",
			"SORT_BY1" => "SORT",
			"SORT_BY2" => "SORT",
			"SORT_ORDER1" => "ASC",
			"SORT_ORDER2" => "ASC",
			"STRICT_SECTION_CHECK" => "N"
		),
		false
	);?>
	<div class="wl-service">
		<div class="wl-service__header">
			<div class="h2">К услугам пациентов</div>
		</div>
		<div class="wl-service__box">
			<div class="wl-service__items">
				<div class="wl-service__item">
					<div class="wl-service__icon"><img src="/local/templates/sm-new/build/prod/stock/aktsiya-dobro-pozhalovat/i/wl-service-1.png"></div>
					<div class="wl-service__text">
						<div><b>Эффективные технологии:</b> лечение зубов под микроскопом, конусно-лучевая компьютерная томография.</div>
					</div>
				</div>
				<div class="wl-service__item">
					<div class="wl-service__icon"><img src="/local/templates/sm-new/build/prod/stock/aktsiya-dobro-pozhalovat/i/wl-service-2.png"></div>
					<div class="wl-service__text">
						<div><b>Комплексный междисциплинарный подход</b> к профилактике и лечению зубов и полости рта.</div>
					</div>
				</div>
				<div class="wl-service__item">
					<div class="wl-service__icon"><img src="/local/templates/sm-new/build/prod/stock/aktsiya-dobro-pozhalovat/i/wl-service-3.png"></div>
					<div class="wl-service__text">
						<div><b>Оборудование и материалы известных мировых брендов:</b> компьютерные томографы Vatech и Galileos, микроскопы Leica, имплантологические системы ведущих производителей, рентген-аппарат нового поколения, аппараты для профессионального отбеливания зубов ZOOM4, компьютерная анестезия и компьютерная диагностика тканей пародонта.</div>
					</div>
				</div>
				<div class="wl-service__item">
					<div class="wl-service__icon"><img src="/local/templates/sm-new/build/prod/stock/aktsiya-dobro-pozhalovat/i/wl-service-4.png"></div>
					<div class="wl-service__text">
						<div>При лечении, удалении и восстановлении зубов используются щадящие технологии и препараты, которые помогают свести дискомфорт к минимуму. Предусмотрено использование премедикации, чтобы избавить пациентов от тревоги, помочь расслабиться и успокоиться при подготовке к процедуре, а <b>лечение под наркозом</b> позволяет за один визит пролечить много зубов, что особенно актуально для детей.</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="wl-about">
		<div class="wl-about__title">
			<div>Преимущества «СМ-Стоматология»</div>
		</div>
		<div class="wl-about__items">
			<div class="wl-about__item">
				<div class="wl-about__num">1</div>
				<div class="wl-about__text">Собственная зуботехническая лаборатория.</div>
			</div>
			<div class="wl-about__item">
				<div class="wl-about__num">2</div>
				<div class="wl-about__text">Соблюдение норм стерилизации и хранения медицинских инструментов, использование одноразовых средств защиты зубов и десен от повреждения.</div>
			</div>
			<div class="wl-about__item">
				<div class="wl-about__num">3</div>
				<div class="wl-about__text">Приём пациентов ведется ежедневно, без перерывов и выходных.</div>
			</div>
		</div>
	</div>
	<div class="wl-exp">
		<div class="wl-exp__box">
			<div class="wl-exp__icon"><img src="/local/templates/sm-new/build/prod/stock/aktsiya-dobro-pozhalovat/i/wl-exp.png"></div>
			<div class="wl-exp__text">Опыт специалистов, а также применение сертифицированного оборудования и материалов ведущих мировых брендов позволяет гарантировать качество работ, соответствующее высоким требованиям и современным медицинским протоколам.</div>
		</div>
	</div>
	<div class="wl-offer">
		<div class="wl-offer__box">
			<div class="wl-offer__icon"><img src="/local/templates/sm-new/build/prod/stock/aktsiya-dobro-pozhalovat/i/wl-offer.png"></div>
			<div class="wl-offer__text text">
				<h2>Акция «Добро пожаловать»</h2>
				<p><b>Акция проводится с 06.04.2024 по 31.05.2024</b><br>
				Только с 6 апреля по 31 мая 2024 года пациенты, впервые обратившиеся в «СМ-Стоматология», смогут получить купоны на бесплатную консультацию взрослого и детского врача-стоматолога. Акция действует только в «СМ-Стоматология» на ул. Богданова, д.52.</p>

				<p>В рамках акции вы получаете не просто консультацию - врач составит для вас индивидуальный план лечения с соответствующими рекомендации. И все это — бесплатно! «Так бывает?» — спросите Вы. «Конечно, да!» — ответим мы. Хотите иметь здоровую и красивую улыбку, загляните в «СМ-Стоматология».</p>
				<p><b>«СМ-Стоматология» — Ваш повод улыбаться чаще!</b></p>
				<p><b>*Внимание!</b></p>
				<ul>
					<li>Акция по выдаче купонов на бесплатную консультацию стоматолога для взрослых и детей действует в период с 6 апреля по 31 мая 2024 года только в «СМ-Стоматология» на ул. Богданова, д.52.</li>
					<li>Воспользоваться купоном можно только в клинике по адресу ул. Богданова 52.</li>
					<li>Воспользоваться спецпредложением можно только один раз и только пациентам, ранее не обращавшимся в стоматологические клиники и отделения «СМ-Стоматология».</li>
					<li>Бесплатная консультация стоматолога предоставляется только при предъявлении купона.</li>
					<li>Акция распространяется на услуги взрослой и детской стоматологии.</li>
					<li>Скидка по данному предложению не суммируется с другими скидками и акциями, действующими в «СМ-Стоматология», «СМ-Клиника».</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="wl-phone">
		<div class="wl-phone__box">
			<div class="wl-phone__icon"><img src="/local/templates/sm-new/build/prod/stock/aktsiya-dobro-pozhalovat/i/phone.png"></div>
			<div class="wl-phone__text">Узнать подробности акции и записаться на прием к врачу-стоматологу<br>вы можете по телефону <a href="tel:+74957774806">+7 (495) 777-48-06</a></div>
		</div>
	</div>
</div>
</div>
<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>