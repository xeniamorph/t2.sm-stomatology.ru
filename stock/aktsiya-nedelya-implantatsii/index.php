<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
//\TAO::App()->SetTitle('Акция «Неделя имплантации»');
//\TAO::App()->SetPageProperty("description", "Акция «Неделя имплантации»");
//\TAO::App()->SetPageProperty("keywords", "Акция «Неделя имплантации»");
//$APPLICATION->AddHeadScript('/js/promopage.js');
//$APPLICATION->SetAdditionalCSS('/stock/aktsiya-nedelya-implantatsii/style.css');

$APPLICATION->SetTitle('Акция «Неделя имплантации»');
$APPLICATION->SetPageProperty("description", "Акция «Неделя имплантации»");
$APPLICATION->SetPageProperty("keywords", "Акция «Неделя имплантации»");
$APPLICATION->AddChainItem("Акции", "/stock/");
$APPLICATION->SetAdditionalCSS('/local/templates/sm-new/build/prod/stock/aktsiya-nedelya-implantatsii/style.min.css');
$APPLICATION->SetAdditionalCSS('/stock/custom.css');
?>
<div class="container">
<div class="b-sale__warning">Акция закончилась</div>
<div class="iz-page">
	<div class="iz-intro">
		<div class="iz-intro__top">
			<div class="iz-intro__box">
				<h1 class="iz-intro__header">
					<div>Имплантация зубов</div>
				</h1>
				<div class="iz-intro__body">
					<div class="iz-intro__i-left"><img src="/local/templates/sm-new/build/prod/stock/aktsiya-nedelya-implantatsii/i/iz-left.png" loading="lazy">
						<div class="iz-intro__caption">
							<div>Выгода до</div>
							<div><span>16 000</span> <div>рублей</div></div>
						</div>
					</div>
					<div class="iz-intro__i-right"><img src="/local/templates/sm-new/build/prod/stock/aktsiya-nedelya-implantatsii/i/iz-right.png" loading="lazy">
						<div class="iz-intro__caption">
							<div>Предложение года</div>
							<div>с 15 по 25 апреля 2021 года</div>
						</div>
					</div>
				</div>
			</div><img class="iz-intro__image" src="/local/templates/sm-new/build/prod/stock/aktsiya-nedelya-implantatsii/i/iz-intro.png">
		</div>
		<div class="iz-intro__bot">
			<div class="iz-intro__footer">
				<div class="iz-intro__left">
					<div class="iz-intro__title"><div>Имплантация</div> — это самый прогрессивный метод протезирования в стоматологии.</div>
					<div class="iz-intro__text">При протезировании на имплантатах полностью восстанавливается функция и эстетика зуба.</div>
				</div>
				<div class="iz-intro__right">
					<div class="iz-intro__form">
						<form class="js-feedback-submit" method="POST" action="">
							<div class="form__body">
								<div class="iz-intro__row">
									<input type="text" name="name" placeholder="Имя">
								</div>
								<div class="iz-intro__row">
									<input type="tel" name="phone" placeholder="Телефон">
								</div>
								<div class="iz-intro__submit">
									<button type="sumbit">Получить скидку</button>
								</div>
								<input type="hidden" name="formtype" value="appointment">
								<input type="hidden" name="analytics" value="OrderCall_Stat">
								<input type="hidden" name="question" value="Имплантация зубов">
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="iz-intro__footnote">Нажимая на кнопку, вы даете согласие на <a rel="canonical" href="/about/obrabotka-dannykh/" target="_blank">обработку своих персональных данных</a></div>
		</div>
	</div>
	<div class="iz-offer">
		<div class="iz-offer__box">
			<div class="iz-offer__header">
				<div>В рамках акции вы получаете: <div>БЕСПЛАТНО</div></div>
			</div>
			<div class="iz-offer__items">
				<div class="iz-offer__item">
					<div class="iz-offer__num">1</div>
					<div class="iz-offer__content">
						<div class="iz-offer__text"><div class="bold">Консультацию</div> стоматолога-имплантолога <div class="bold">с составлением плана лечения</div></div>
						<div class="iz-offer__price">
							<div class="iz-offer__caption">Бесплатно</div>
							<div class="iz-offer__cost">1 500 руб.</div>
						</div>
					</div>
					<div class="iz-offer__image"><img src="/local/templates/sm-new/build/prod/stock/aktsiya-nedelya-implantatsii/i/icon-1.png" loading="lazy"></div>
				</div>
				<div class="iz-offer__item">
					<div class="iz-offer__num">2</div>
					<div class="iz-offer__content">
						<div class="iz-offer__text">
							<div class="bold">Дополнительные бонусы:</div>
							консультации врачей
							<ul>
								<li>стоматолога-терапевта</li>
								<li>стоматолога-ортопеда</li>
								<li>стоматолога-пародонтолога</li>
							</ul>
						</div>
						<div class="iz-offer__price">
							<div class="iz-offer__caption">Бесплатно</div>
							<div class="iz-offer__cost">4 500 руб.</div>
						</div>
					</div>
					<div class="iz-offer__image"><img src="/local/templates/sm-new/build/prod/stock/aktsiya-nedelya-implantatsii/i/icon-2.png" loading="lazy"></div>
				</div>
				<div class="iz-offer__item">
					<div class="iz-offer__num">3</div>
					<div class="iz-offer__content">
						<div class="iz-offer__text"><div class="bold">Компьютерную <br>томографию</div> челюстно-лицевой <br>области</div>
						<div class="iz-offer__price">
							<div class="iz-offer__caption">Бесплатно</div>
							<div class="iz-offer__cost">5 100 руб.</div>
						</div>
					</div>
					<div class="iz-offer__image"><img src="/local/templates/sm-new/build/prod/stock/aktsiya-nedelya-implantatsii/i/icon-3.png" loading="lazy"></div>
				</div>
				<div class="iz-offer__item iz-offer__item_last">
					<div class="iz-offer__text"><div class="bold">Сертификат на скидку</div> на операцию в размере</div>
					<div class="iz-offer__price">
						<div class="iz-offer__cost"><div>5000</div>руб.</div>
					</div>
					<div class="iz-offer__discount">
						<div>Ваша выгода</div>
						<div class="iz-offer__row">до <div>16 000</div></div>
						<div>рублей</div>
					</div>
					<div class="iz-offer__image"><img src="/local/templates/sm-new/build/prod/stock/aktsiya-nedelya-implantatsii/i/icon-4.png" loading="lazy"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="iz-callback">
		<div class="iz-callback__box">
			<div class="iz-callback__content">
				<div class="iz-callback__title">Узнать подробнее</div>
				<div class="iz-callback__form">
					<form class="js-feedback-submit" method="POST" action="">
						<div class="form__body">
							<div class="iz-callback__row">
								<div class="iz-callback__cell">
									<input type="text" name="name" placeholder="Имя">
								</div>
								<div class="iz-callback__cell">
									<input type="tel" name="phone" placeholder="Телефон">
								</div>
							</div>
							<div class="iz-callback__row">
								<div class="iz-callback__cell">Оставьте заявку, и мы оперативно ответим на все Ваши вопросы!</div>
								<div class="iz-callback__cell">
									<button type="sumbit">Жду звонка</button>
								</div>
							</div>
							<input type="hidden" name="formtype" value="appointment">
							<input type="hidden" name="analytics" value="OrderCall_Stat">
							<input type="hidden" name="question" value="Имплантация зубов">
						</div>
					</form>
				</div>
				<div class="iz-callback__footnote">Нажимая на кнопку, вы даете согласие на <a rel="canonical" href="/about/obrabotka-dannykh/" target="_blank">обработку своих персональных данных</a></div>
			</div>
			<div class="iz-callback__image"><img src="/local/templates/sm-new/build/prod/stock/aktsiya-nedelya-implantatsii/i/form-image.png"></div>
		</div>
	</div>
	<div class="iz-cert">
		<div class="iz-cert__box">
			<div class="iz-cert__title">Сертификат на скидку</div>
			<div class="iz-cert__subtitle">
				<div>В размере <div>5 000</div> руб. можно потратить на следующие операции:</div>
			</div>
		</div>
		<div class="iz-cert__items">
			<div class="iz-cert__item">
				<div class="iz-cert__top">
					<div class="iz-cert__image"><img src="/local/templates/sm-new/build/prod/stock/aktsiya-nedelya-implantatsii/i/cert-1.png"></div>
					<div class="iz-cert__name">Установка импланта
						<div class="bold">MIS</div>
						<div class="small">(Израиль)</div>
					</div>
					<div class="iz-cert__o-cost">Стоимость - <div>32 000</div> руб.</div>
				</div>
				<div class="iz-cert__bot">
					<div class="iz-cert__price">
						<div class="iz-cert__caption">с сертификатом</div>
						<div class="iz-cert__cost"><div>27 000</div> руб.</div>
					</div>
				</div>
			</div>
			<div class="iz-cert__item">
				<div class="iz-cert__top">
					<div class="iz-cert__image"><img src="/local/templates/sm-new/build/prod/stock/aktsiya-nedelya-implantatsii/i/cert-2.png"></div>
					<div class="iz-cert__name">Установка импланта
						<div class="bold">«Super Line»</div>
						<div class="small">(Южная Корея)</div>
					</div>
					<div class="iz-cert__o-cost">Стоимость - <div>40 000</div> руб.</div>
				</div>
				<div class="iz-cert__bot">
					<div class="iz-cert__price">
						<div class="iz-cert__caption">с сертификатом</div>
						<div class="iz-cert__cost"><div>35 000</div> руб.</div>
					</div>
				</div>
			</div>
			<div class="iz-cert__item">
				<div class="iz-cert__top">
					<div class="iz-cert__image"><img src="/local/templates/sm-new/build/prod/stock/aktsiya-nedelya-implantatsii/i/cert-3.png"></div>
					<div class="iz-cert__name">Установка импланта
						<div class="bold">«Astra Tech»</div>
						<div class="small">(Швеция)</div>
					</div>
					<div class="iz-cert__o-cost">Стоимость - <div>54 400</div> руб.</div>
				</div>
				<div class="iz-cert__bot">
					<div class="iz-cert__price">
						<div class="iz-cert__caption">с сертификатом</div>
						<div class="iz-cert__cost"><div>49 400</div> руб.</div>
					</div>
				</div>
			</div>
		</div>
		<div class="iz-cert__box">
			<div class="iz-cert__footer">
				<div><img src="/local/templates/sm-new/build/prod/stock/aktsiya-nedelya-implantatsii/i/mark.png"></div>
			</div>
		</div>
	</div>
	<?
	$arrDoctorsFilter = ['ID' => [80,106,19786,94,14153,13418,17394,13982,7066,21373,11839,15554]];
	?>
	<?$APPLICATION->IncludeComponent("bitrix:news.list", "stock-doctors", Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
			"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
			"AJAX_MODE" => "N",	// Включить режим AJAX
			"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
			"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
			"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
			"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
			"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
			"CACHE_GROUPS" => "Y",	// Учитывать права доступа
			"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
			"CACHE_TYPE" => "A",	// Тип кеширования
			"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
			"COMPONENT_TEMPLATE" => "main-doctors",
			"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
			"DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
			"DISPLAY_DATE" => "Y",	// Выводить дату элемента
			"DISPLAY_NAME" => "Y",	// Выводить название элемента
			"DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
			"DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
			"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
			"FIELD_CODE" => array(	// Поля
				0 => "DETAIL_PICTURE",
				1 => "",
			),
			"FILTER_NAME" => "arrDoctorsFilter",	// Фильтр
			"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
			"IBLOCK_ID" => "6",	// Код информационного блока
			"IBLOCK_TYPE" => "clinic",	// Тип информационного блока (используется только для проверки)
			"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
			"INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
			"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
			"NEWS_COUNT" => "20",	// Количество новостей на странице
			"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
			"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
			"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
			"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
			"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
			"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
			"PAGER_TITLE" => "Новости",	// Название категорий
			"PARENT_SECTION" => "",	// ID раздела
			"PARENT_SECTION_CODE" => "",	// Код раздела
			"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
			"PROPERTY_CODE" => array(	// Свойства
				0 => "specialization",
				1 => "SQUARE_PHOTO",
				2 => "",
			),
			"SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
			"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
			"SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
			"SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
			"SET_STATUS_404" => "N",	// Устанавливать статус 404
			"SET_TITLE" => "N",	// Устанавливать заголовок страницы
			"SHOW_404" => "N",	// Показ специальной страницы
			"SORT_BY1" => "NAME",	// Поле для первой сортировки новостей
			"SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
			"SORT_ORDER1" => "ASC",	// Направление для первой сортировки новостей
			"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
			"STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
		),
		false
	);?>
	<div class="iz-callback">
		<div class="iz-callback__box">
			<div class="iz-callback__content">
				<div class="iz-callback__title">Остались вопросы?</div>
				<div class="iz-callback__form">
					<form class="js-feedback-submit" method="POST" action="">
						<div class="form__body">
							<div class="iz-callback__row">
								<div class="iz-callback__cell">
									<input type="text" name="name" placeholder="Имя">
								</div>
								<div class="iz-callback__cell">
									<input type="tel" name="phone" placeholder="Телефон">
								</div>
							</div>
							<div class="iz-callback__row">
								<div class="iz-callback__cell">Оставьте заявку, и мы оперативно ответим на все Ваши вопросы!</div>
								<div class="iz-callback__cell">
									<button type="sumbit">Жду звонка</button>
								</div>
							</div>
							<input type="hidden" name="formtype" value="appointment">
							<input type="hidden" name="analytics" value="OrderCall_Stat">
							<input type="hidden" name="question" value="Имплантация зубов">
						</div>
					</form>
				</div>
				<div class="iz-callback__footnote">Нажимая на кнопку, вы даете согласие на <a href="/about/obrabotka-dannykh/" target="_blank">обработку своих персональных данных</a></div>
			</div>
			<div class="iz-callback__image-2"><img src="/local/templates/sm-new/build/prod/stock/aktsiya-nedelya-implantatsii/i/form-image-2.png"></div>
		</div>
	</div>
	<div class="iz-footnote">
		<div class="iz-footnote__box"><img class="iz-footnote__icon" src="/local/templates/sm-new/build/prod/stock/aktsiya-nedelya-implantatsii/i/footnote-icon.png">
			<div class="iz-footnote__text">
				Акция действует с 15.04.2021 по 25.04.2021 при обращении во взрослые отделения «СМ-Стоматология»:<br>
				на Волгоградском пр-те, д. 42, корп. 12 (м. Текстильщики);<br>
				на ул. Клары Цеткин, д. 33, корп. 28 (м. Войковская);<br>
				на Старопетровском проезде, 7А, строение 22, 2 этаж (м. Войковская);<br>
				на ул. Ярославская, д. 4, корп. 2 (м. ВДНХ, Алексеевская).<br>
				-  В бесплатную услугу проведения КТ не входит выдача на руки диска (диск можно приобрести отдельно).<br>
				-  Скидка 5000 руб. действует с 15.04.2021 по 25.04.2021 и предоставляется 1 персоне на 1 установку 1 имплантата при внесении предоплаты в размере 20 000 рублей до 25.04.2021. Воспользоваться услугой можно до 31.07.2021 года.<br>
				-  Скидка по данному предложению не суммируется с другими скидками и акциями, действующими в «СМ-Стоматология» и «СМ-Клиника». <br>
				Необходима предварительная запись.
			</div>
		</div>
	</div>
</div>
</div>
<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>