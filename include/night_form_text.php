<?
function isNight() {
	$current_hour = date('G');
	if($current_hour >= 22 || $current_hour < 7 ) {
		return true;
	}
	return false;
}
function getNighText() {
	$host = $_SERVER['HTTP_HOST'];
	if($host == 'smclinic.ru' || $host == 'www.smclinic.ru') {
		$night_form_text = '<div class="night-text">Уважаемый пациент, по всем заявкам, оставленным с 22.00 до 07.00 мы с Вами свяжемся до 12.00 следующего дня. Если ваш вопрос срочный, пожалуйста, позвоните в наш круглосуточный контактный центр<br /> <span>(495) 777-48-49</span></div><script>$(document).ready(function(){$(".night-text span").html($("#ct_phone_2").html());});</script>';
	} else if($host == 'smdoctor.ru' || $host == 'www.smdoctor.ru') {
		$night_form_text = '<div class="night-text">Уважаемый пациент, по всем заявкам, оставленным с 22.00 до 07.00 мы с Вами свяжемся до 12.00 следующего дня. Если ваш вопрос срочный, пожалуйста, позвоните в наш круглосуточный контактный центр<br /> <b>+7 (495)</b> <span>777-48-49</span></div><script>$(document).ready(function(){$(".night-text span").html($(".call_phone_2").html());});</script>';
	} else if($host == 'www.centr-hirurgii.ru' || $host == 'centr-hirurgii.ru') {
		$night_form_text = '<div class="night-text">Уважаемый пациент, по всем заявкам, оставленным с 22.00 до 07.00 мы с Вами свяжемся до 12.00 следующего дня. Если ваш вопрос срочный, пожалуйста, позвоните в наш круглосуточный контактный центр<br /> <span>777-48-49</span></div><script>$(document).ready(function(){$(".night-text span").html($(".call_phone_m2").html());});</script>';
	} else if($host == 'sm-eko.ru' || $host == 'www.sm-eko.ru') {
		$night_form_text = '<div class="night-text">Уважаемый пациент, по всем заявкам, оставленным с 22.00 до 07.00 мы с Вами свяжемся до 12.00 следующего дня. Если ваш вопрос срочный, пожалуйста, позвоните в наш круглосуточный контактный центр<br /> <span>777-48-49</span></div><script>$(document).ready(function(){$(".night-text span").html($(".call_phone_m2").html());});</script>';
	} else if($host == 'doctor03.ru' || $host == 'www.doctor03.ru') {
		$night_form_text = '<div class="night-text">Уважаемый пациент, по всем заявкам, оставленным с 22.00 до 07.00 мы с Вами свяжемся до 12.00 следующего дня. Если ваш вопрос срочный, пожалуйста, позвоните в наш круглосуточный контактный центр<br /> <span>777-48-49</span></div><script>$(document).ready(function(){$(".night-text span").html($(".call_phone_1").html());});</script>';
	} else if($host == 'sm-plastica.ru' || $host == 'www.sm-plastica.ru') {
		$night_form_text = '<div class="night-text">Уважаемый пациент, по всем заявкам, оставленным с 22.00 до 07.00 мы с Вами свяжемся до 12.00 следующего дня. Если ваш вопрос срочный, пожалуйста, позвоните в наш круглосуточный контактный центр<br /> <span>777-48-49</span></div><script>$(document).ready(function(){$(".night-text span").html($(".head-panel-phone-link").html());});</script>';
	} else if($host == 'sm-stomatology.ru' || $host == 'www.sm-stomatology.ru') {
		$night_form_text = '<div class="night-text">Уважаемый пациент, по всем заявкам, оставленным с 22.00 до 07.00 мы с Вами свяжемся до 12.00 следующего дня. Если ваш вопрос срочный, пожалуйста, позвоните в наш круглосуточный контактный центр<br /> <span>777-48-49</span></div><script>$(document).ready(function(){$(".night-text span").html($(".call_phone_1").html());});</script>';
	} else if($host == 'oncology-centr.ru' || $host == 'www.oncology-centr.ru') {
		$night_form_text = '<div class="night-text">Уважаемый пациент, по всем заявкам, оставленным с 22.00 до 07.00 мы с Вами свяжемся до 12.00 следующего дня. Если ваш вопрос срочный, пожалуйста, позвоните в наш круглосуточный контактный центр<br /> <span>777-48-49</span></div><script>$(document).ready(function(){$(".night-text span").html($(".contacts .phone").html());});</script>';
	}
	
	
	return $night_form_text;
}