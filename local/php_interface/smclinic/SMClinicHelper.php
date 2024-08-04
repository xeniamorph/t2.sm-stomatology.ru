<?php
/*use Bitrix\Main\Loader,
	Bitrix\Main,
	Bitrix\Iblock;

Loader::includeModule("iblock");*/

class SMClinicHelper{

	// Сопоставляем по ID метро и адреса для определения цвета ветки
	public function getMetroColorById($id = 0)
	{
		if(!$id) return false;

		$arMetroIds = [
			225 => 'green', // Войковская
			226 => 'orange', // ВДНХ, Алексеевская
			227 => 'violet', // Текстильщики
			2382 => 'pink', // МЦК Балтийская, Коптево, Угрешская
			10530 => 'blue', // Молодежная
			14342 => 'lime', // Марьина Роща
			25176 => 'orange', // Новые Черёмушки
			26518 => 'green', // Водный стадион
			26519 => 'pink', // МЦК Коптево
			47688 => 'orange', // в Сретенском тупике
			93400 => 'yellow', // Солнцево
		];

		if(!isset($arMetroIds[$id])) return false;

		return $arMetroIds[$id];
	}

	// Временная функция для перехода со старого шаблона на новый
	public function showNewTemplate()
	{
		global $APPLICATION;

		if(
			$APPLICATION->GetCurPage(false) !== '/' &&
			$APPLICATION->GetCurPage(false) !== '/services/ispravlenie-prikusa-ortodontiya/kappy-invisalign/')
		{
			return false;
		}
		else{
			return true;
		}

	}

	public function isNight(){
		$current_hour = date('G');
		if($current_hour >= 22 || $current_hour < 7 ) {
			return true;
		}
		return false;
	}

	public function getNightText(){
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

	public static function getLicenses() {
		$disclaimer = \TAO::infoblock('disclaimer')->getItems([
			'filter' => [
				'ACTIVE' => 'Y',
				'!PROPERTY_certificates' => false
			]
		]);

		$licenses = [];
		foreach ($disclaimer as $item) {
			if(count($licenses) > 15) {
				break;
			}
			foreach($item['certificates']->value() as $key=>$idImg) {
				if(count($licenses) > 15) {
					break;
				}
				$img = new \TAO\File($idImg);
				$licenses[$key]['img'] = $img;
				$licenses[$key]['imgResize'] = $img->resizedImage('fit272x386');
			}
		}

		return $licenses;
	}
}
