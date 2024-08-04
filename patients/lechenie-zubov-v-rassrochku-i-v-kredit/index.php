<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("");

\TAO::App()->SetTitle('Лечение зубов в кредит в «СМ-Стоматология» в Москве');
\TAO::App()->SetPageProperty("description", "«СМ-Стоматология» предлагает своим пациентам лечение зубов и другие любые стомтаологические услуги в кредит. Простое оформление. Надежные финансовые партнеры.");
\TAO::App()->SetPageProperty("keywords", "лечение зубов в кредит москва стоматология");
?><div class="headline">
	<div class="container">
		<div class="headline__title">
			<h1>Лечение зубов в кредит</h1>
		</div>
	</div>
</div>
<div class="top-color__block">
	<div class="container">
		<div class="top-color__box">
			<div class="top-color__content">
				

				<p> Мы рады сообщить, что в «СМ-Стоматология» любые стоматологические услуги предоставляются в кредит.  Теперь не нужно откладывать лечение зубов «на потом». Если вы давно планировали посетить стоматолога и провести ряд сложных дорогостоящих процедур, но не имели финансовой возможности, то теперь в «СМ-Стоматология» вы сможете сделать это очень оперативно – в удобное для вас время.</p>
			</div>
			<div class="top-color__photo">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/mirror_teeth.jpg" loading="lazy"></div>
		</div>
	</div>
</div>

<? $services = \TAO::infoblock('address')->getItems([
	'filter' => [
		'ACTIVE' => 'Y',
		'!PROPERTY_credit' => false
	]
]);

foreach ($services as $key => $service) {
	$metroList = \TAO::infoblock('metro')->getItems([
		'filter' => ['ID' => $service['metro']->value()]
	]);
	$metro = array_shift($metroList);
	$services[$key]['metroData'] = $metro;

	$creditList = \TAO::infoblock('credit')->getItems([
		'filter' => ['ID' => $service['credit']->value()]
	]);
	$services[$key]['creditData'] = $creditList;
}

if(count($services)>0) {
	print TAO::frontend()->renderBlock('action/action-offers', [
		'items' => $services
	]);
}?>

<? $credit = \TAO::infoblock('credit')->getItems([
	'filter' => [
		'ACTIVE' => 'Y'
	],
	'order' => [
		'ID' => 'asc'
	]
]);

print TAO::frontend()->renderBlock('common/order-receipt', [
	'title' => 'Порядок получения кредита',
	'items' => $credit
]); ?>
<div class="b-text text">
	<div class="container">
		<div class="b-text__wrapper">
			<div class="b-text__text">
				<p>Мы рады сообщить, что в «СМ-Стоматология» любые стоматологические услуги предоставляются в кредит от АО «ОТП Банк». Теперь не нужно откладывать лечение зубов «на потом». Если вы давно планировали посетить стоматолога и провести ряд сложных дорогостоящих процедур, но не имели финансовой возможности, то теперь в «СМ-Стоматология» вы сможете сделать это очень оперативно – в удобное для вас время. </p>
				<p>Благодаря возможностям, предоставляемым центром «СМ-Стоматология» совместно с АО «ОТП Банк», теперь вам доступно стоматологическое лечение зубов любой сложности, включая имплантацию и протезирование зубов, а также ряд эстетических процедур, в кредит. Вы сможете выбрать лучшие материалы для коронок или вкладок, максимально надежные ортопедические конструкции и имплантаты ведущих мировых брендов. </p>
				<p><b>Порядок получения кредита на лечение зубов очень простой:</b></p>
				<ul>
					<li>На персональной консультации по итогам осмотра специалист «СМ-Стоматология» составит примерный план лечения.</li>
					<li>На основании составленного плана лечения будет определена сумма, необходимая для оплаты указанных услуг.</li>
					<li>После этого в регистратуре оформляется заявка на получение кредита по форме, предоставляемой АО «ОТП Банк».</li>
				</ul>
			</div>
		</div>
	</div>
</div>

<div class="b-text text">
	<div class="container">
		<div class="b-text__wrapper">
			<div class="b-text__text">
				<p>Записаться на консультацию и узнать подробнее об условиях АО «ОТП Банк» для получения кредита на оплату услуг «СМ-Стоматология» можно по телефону: +7 (495) 777-48-06.</p>
				<p>Кредит предоставляется АО «ОТП Банк» на основе Генеральной лицензии Банка России № 2766 от 27.11.2014 г.</p>
				<p>В случае оплаты медицинских услуг в кредит скидки по дисконтной программе «СМ-Клиника» не предоставляются. </p>
				<p>Оплата услуг стоматологии в кредит от АО «ОТП Банк» возможна только при обращении в отделение «СМ-Стоматология» на улице Клары Цеткин, д. 33, корп. 28 (метро «Войковская»).</p>
			</div>
		</div>
	</div>
</div>
<?= \TAO::Form('Callback')->setOption('layout','callback-in-text')->render();?>
<?= TAO::frontend()->renderBlock('common/licenses-block', [
	'items' => SMClinicHelper::getLicenses()
]);?><?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php"); ?>