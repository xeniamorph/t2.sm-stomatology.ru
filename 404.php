<?php  include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

$url = preg_replace('/\?.*/', '', $_SERVER['REQUEST_URI']);
$url = preg_split('/\//', $url, 0, PREG_SPLIT_NO_EMPTY);

if($url[0] == 'doctors' && count($url) == 2){

	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
	// проверяем существует ли такой элемент
	$id = CIBlockElement::GetList(Array(), ['IBLOCK_CODE' => $url[0], 'CODE' => $url[1], '!ACTIVE' => 'Y'], false, false, ['ID'])->fetch();
	if(isset($id['ID'])){
		LocalRedirect("/doctors/", false, "301 Moved permanently");
	}
}

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("404 Not Found");
?>
<div class="headline">
	<div class="container">
		<div class="headline__title">
			<h1>Страница не найдена</h1>
		</div>
	</div>
</div>
<div class="error-block">
	<div class="container">
		<div class="error-block__box">
			<div class="error-block__content">
				<div class="error-block__content-title">
					<span>Ошибка 404:</span> <br>
					Страница не найдена
				</div>

				<div class="error-block__content-descr">
					Неправильно набран адрес или такой страницы на сайте не существует. <br>
					Попробуйте воспользоваться поиском или перейдите на главную страницу.
				</div>

				<p>Мы работаем ежедневно, включая выходные и праздничные дни:</p>
				<p>Часы работы клиники - с 09:00 до 21:00 в будни, с 08:00 до 21:00 в выходные и праздничные дни.
					<br>
					Работа процедурного кабинета (забор анализов) - с 08:00 ежедневно.
				</p>
				<p>Круглосуточная запись на прием - +7 (4912) 77-67-51.</p>

				<div class="error-block__content-btn">
					<a class="error-block__btn" href="/">Вернуться на главную</a>
				</div>
			</div>
			<div class="error-block__photo">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/jaw.png" loading="lazy"></div>
		</div>
	</div>
</div>
<?= TAO::frontend()->renderBlock('common/licenses-block', [
	'items' => SMClinicHelper::getLicenses()
]);?>
<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
