<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die(); ?>
<link href="<?= $this->GetFolder() ?>/style.css" type="text/css"  rel="stylesheet" />
<div class="mainform-box" style="max-width: 360px;">
    <div class="mainform-box-title">Оставьте заявку и наш специалист подберет удобное время для сеанса связи с нужным вам врачом</div>
	<div class="mainform-box-msg"><br />Спасибо за оставленную заявку. Мы свяжемся с вами в ближайшее время.<br /><br />
		Заявки, поступившие после 22:00, будут обработаны на следующий день после 8:00.</div>
	<form id="mainform" action="" method="POST">
		<div class="mainform-box-form-field">
			<input id="mainform-box-name" name="name" type="name" class="mainform-box-name" placeholder="Ваше имя">
		</div>
		<div class="mainform-box-form-field">
			<input id="mainform-box-phone" name="phone" type="tel" class="mainform-box-phone" placeholder="Ваш телефон*">
		</div>
		<input name="spec" type="hidden" class="mainform-box-spec" value="<?= $arParams['SPEC']; ?>">
		<button class="btn btn--green">Отправить заявку</button>
		<div class="header-popup__notice form-notice">Нажимая на кнопку, вы даете согласие<br /> на <a href="/about/obrabotka-dannykh/" target="_blank">обработку своих персональных данных</a></div>
	</form>
</div>
<script src="<?= $this->GetFolder()?>/script.js"></script>
