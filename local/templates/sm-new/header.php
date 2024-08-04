<?php
use Bitrix\Main\Page\Asset;
global $USER;
?>
<!DOCTYPE html>
<html>
<head>
	<!-- Google Tag Manager -->
	<script data-skip-moving="true">(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-5PJ856V');</script>
	<!-- End Google Tag Manager -->

	<script data-skip-moving="true">
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-47296181-14', 'auto');
	  ga(function(tracker) {
		ga('set', 'dimension1', tracker.get('clientId'));
		//ga('require', 'OWOXBIStreaming');
		ga('send', 'pageview');
		// OWOX BI Streaming plugin code
		/*(function(){function f(g){var c=g.get("sendHitTask"),f=function(){function e(b){var a=!1;try{var d=document.createElement("img");d.src=c(!0)+"?"+b;a=!0}catch(h){}return a}function c(b){var a="https://google-analytics.bi.owox.com/"+encodeURIComponent(g.get("trackingId"));b||(a+="?tid="+encodeURIComponent(g.get("trackingId")));return a}return{send:function(b){var a;if(!(a=2036>=b.length&&e(b))){a=!1;try{a=navigator.sendBeacon&&navigator.sendBeacon(c(),b)}catch(h){}}if(!a){a=!1;var d;try{window.XMLHttpRequest&&"withCredentials"in(d=
		new XMLHttpRequest)&&(d.open("POST",c(),!0),d.setRequestHeader("Content-Type","text/plain"),d.send(b),a=!0)}catch(h){}}return a||e(b)}}}();g.set("sendHitTask",function(e){try{c(e)}catch(k){}f.send(e.get("hitPayload"))})}var c=window[window.GoogleAnalyticsObject||"ga"];c&&c("provide","OWOXBIStreaming",f)})();*/
	});
	</script>
	<?/*
	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-HXRNV2DVSD" data-skip-moving="true"></script>
	<script data-skip-moving="true"> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'G-HXRNV2DVSD');
	</script>
	*/?>
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="telephone=no"/>
	<link rel="icon" type="image/ico" href="/favicon.svg">
	<title> <?php $APPLICATION->ShowTitle(); ?></title>

	<?php
		$APPLICATION->ShowHead();
	?>

	<?//<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>?>

	<?
	Asset::getInstance()->addCss("/css/style.css");

	Asset::getInstance()->addJs("/js/sourcebuster.min.js");
	Asset::getInstance()->addJs("/js/jquery.min.js");
	Asset::getInstance()->addJs("/js/jquery.easing.js");
	Asset::getInstance()->addJs("/js/script.js");

	//SMClinicBuild::addCssBuild('full');
	if ($USER->IsAdmin() ){
		?><link href="<?= SITE_TEMPLATE_PATH ?>/admin.css" type="text/css"  rel="stylesheet"><?
	}

	\TAO::frontendCss('index');
	\TAO::frontendJs('index');

	Asset::getInstance()->addCss("/css/fix.css");
	?>
	<?/*$isContacts = stristr($GLOBALS["_SERVER"]["REQUEST_URI"], '/contacts/');?>
	<?$isMain = $APPLICATION->GetCurPage(false) === '/';?>
	<? if(!SMClinicHelper::showNewTemplate()): ?>
		<?if($isContacts || $isMain):?> 
		<script defer src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&mode=release" type="text/javascript"></script>
	<?endif;?>
		<? TAO::frontendCss('index'); ?>
		<? Asset::getInstance()->addCss("/js/fancybox/jquery.fancybox.css"); ?>
		<? Asset::getInstance()->addCss("/css/youtube.min.css"); ?>
		<? Asset::getInstance()->addCss("/css/style.css"); ?>
	<? endif */?>

	<!-- calltouch -->
	<script type="text/javascript">
	(function(w,d,n,c){w.CalltouchDataObject=n;w[n]=function(){w[n]["callbacks"].push(arguments)};if(!w[n]["callbacks"]){w[n]["callbacks"]=[]}w[n]["loaded"]=false;if(typeof c!=="object"){c=[c]}w[n]["counters"]=c;for(var i=0;i<c.length;i+=1){p(c[i])}function p(cId){var a=d.getElementsByTagName("script")[0],s=d.createElement("script"),i=function(){a.parentNode.insertBefore(s,a)},m=typeof Array.prototype.find === 'function',n=m?"init-min.js":"init.js";s.type="text/javascript";s.async=true;s.src="https://mod.calltouch.ru/"+n+"?id="+cId;if(w.opera=="[object Opera]"){d.addEventListener("DOMContentLoaded",i,false)}else{i()}}})(window,document,"ct","a8b290ef");
	</script>
	<!-- calltouch -->


	<!-- Yandex.Metrika counter -->
	<script type="text/javascript">
		(function (d, w, c) {
			(w[c] = w[c] || []).push(function() {
				try {
					w.yaCounter42012629 = new Ya.Metrika({
						id:42012629,
						clickmap:true,
						trackLinks:true,
						accurateTrackBounce:true,
						webvisor:true,
						triggerEvent:true
					});
				} catch(e) { }
			});

			var n = d.getElementsByTagName("script")[0],
				s = d.createElement("script"),
				f = function () { n.parentNode.insertBefore(s, n); };
			s.type = "text/javascript";
			s.async = true;
			s.src = "https://mc.yandex.ru/metrika/watch.js";

			if (w.opera == "[object Opera]") {
				d.addEventListener("DOMContentLoaded", f, false);
			} else { f(); }
		})(document, window, "yandex_metrika_callbacks");
	</script>
	<noscript><div><img src="https://mc.yandex.ru/watch/42012629" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<!-- /Yandex.Metrika counter -->
</head>
<body>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5PJ856V" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<?$APPLICATION->ShowPanel();?>
	<div class="wrapper index-page">
		<div class="<?=($APPLICATION->GetCurPage(false) == '/')?:'wrapper__box'?>">
			<div id="_header"></div>
			<div class="n-header <?=($APPLICATION->GetCurPage(false) == '/')?'non-bg':'add-bg'?> js-header-stick wide" id="header">
				<div class="alert-toolbar">
					<div class="alert-toolbar__wrap">
						<a class="alert-toolbar__content" href="#">Уважаемые пациенты! В связи с техническими
							неполадками в настоящее время могут быть сложности с дозвоном в контакт-центр.</a>
					</div>
				</div>
				<div class="n-header__top">
					<div class="n-header__box">
						<?php if ($APPLICATION->GetCurPage(false) !== '/') {?>
							<a class="n-header__logo" href="/"><img src="<?=SITE_TEMPLATE_PATH.'/svg/logotype_pinc.svg'?>"></a>
						<?php } else {?>
							<div class="n-header__logo"><img src="<?=SITE_TEMPLATE_PATH.'/svg/logotype_pinc.svg'?>"></div>
						<?php }?>

						<div class="n-header__toolbar">
							<div class="n-header__toggle" data-label="Закрыть"><span>Меню</span>
								<div></div>
							</div>
							<div class="n-header__buttons">
								<a class="n-header__lk n-header__lk_pc" href="https://app.smclinic.ru/" target="_blank">
									<svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path class="<?=$APPLICATION->GetCurPage(false) == '/'?'lk_link_svg':''?>" fill="black" fill-rule="evenodd" clip-rule="evenodd" d="M19.852 22C19.5032 20.8456 18.7922 19.8342 17.824 19.1153C16.8558 18.3964 15.6819 18.0082 14.476 18.0082C13.2701 18.0082 12.0962 18.3964 11.128 19.1153C10.1598 19.8342 9.44876 20.8456 9.1 22H7C7.37858 20.2993 8.32567 18.7784 9.68499 17.6884C11.0443 16.5984 12.7346 16.0044 14.477 16.0044C16.2194 16.0044 17.9097 16.5984 19.269 17.6884C20.6283 18.7784 21.5754 20.2993 21.954 22H19.852ZM14.472 6C15.0629 6 15.6481 6.1164 16.1941 6.34254C16.74 6.56869 17.2361 6.90016 17.654 7.31802C18.0718 7.73588 18.4033 8.23196 18.6295 8.77792C18.8556 9.32389 18.972 9.90905 18.972 10.5C18.972 11.0909 18.8556 11.6761 18.6295 12.2221C18.4033 12.768 18.0718 13.2641 17.654 13.682C17.2361 14.0998 16.74 14.4313 16.1941 14.6575C15.6481 14.8836 15.0629 15 14.472 15C13.2785 15 12.1339 14.5259 11.29 13.682C10.4461 12.8381 9.972 11.6935 9.972 10.5C9.972 9.30653 10.4461 8.16193 11.29 7.31802C12.1339 6.47411 13.2785 6 14.472 6ZM14.472 8C15.135 8 15.7709 8.26339 16.2398 8.73223C16.7086 9.20107 16.972 9.83696 16.972 10.5C16.972 11.163 16.7086 11.7989 16.2398 12.2678C15.7709 12.7366 15.135 13 14.472 13C13.809 13 13.1731 12.7366 12.7042 12.2678C12.2354 11.7989 11.972 11.163 11.972 10.5C11.972 9.83696 12.2354 9.20107 12.7042 8.73223C13.1731 8.26339 13.809 8 14.472 8Z"/>
										<path class="<?=$APPLICATION->GetCurPage(false) == '/'?'lk_link_svg':''?>" fill="black" fill-rule="evenodd" clip-rule="evenodd" d="M14.5 27C21.404 27 27 21.404 27 14.5C27 7.596 21.404 2 14.5 2C7.596 2 2 7.596 2 14.5C2 21.404 7.596 27 14.5 27ZM14.5 29C22.508 29 29 22.508 29 14.5C29 6.492 22.508 0 14.5 0C6.492 0 0 6.492 0 14.5C0 22.508 6.492 29 14.5 29Z"/>
									</svg>
								</a>

								<a class="n-header__button n-header__button_white <?=$APPLICATION->GetCurPage(false) == '/'?'n-header__main-btn':''?> js-open-popup" href="#" data-target=".popup-form-feedback" data-analytics="OrderDoctor_Toolbar">Записаться на приём</a>
								<a class="n-header__button n-header__button_pink js-open-popup" href="#" data-target=".popup-form-callback" data-analytics="OrderCall_Toolbar">Обратный звонок</a>
							</div>
							<div class="n-header__call">
								<div class="n-header__contacts">
									<div class="n-header__phone">
										<div class="phone <?=$APPLICATION->GetCurPage(false) == '/'?:'phone-black'?>">
											<a href="tel:+74957774806">+7 (495) 777-48-06</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="n-header__bot">
					<div class="n-header__wrap">
						<div class="n-header__menu">
							<nav class="h-menu">
								<div class="h-menu__box">
									<?$APPLICATION->IncludeComponent(
										"bitrix:menu",
										"top-menu",
										array(
											"ALLOW_MULTI_SELECT" => "N",
											"COMPONENT_TEMPLATE" => "main-menu",
											"CHILD_MENU_TYPE" => "submenu",
											"DELAY" => "N",
											"MAX_LEVEL" => "2",
											"MENU_CACHE_GET_VARS" => array(
											),
											"MENU_CACHE_TIME" => "3600",
											"MENU_CACHE_TYPE" => "N",
											"MENU_CACHE_USE_GROUPS" => "Y",
											"ROOT_MENU_TYPE" => "main",
											"USE_EXT" => "Y"
										),
										false
									);?>
								</div>
							</nav>
							<div class="header__search">
								<?$APPLICATION->IncludeComponent(
									"bitrix:search.form",
									"poisk",
									array(
										"PAGE" => "/search/",
										"USE_SUGGEST" => "N",
										"COMPONENT_TEMPLATE" => "poisk"
									),
									false
								);?>
							</div>
						</div>
					</div>
				</div>
			</div>

			<?/*$APPLICATION->IncludeComponent(
				"bitrix:menu",
				"fix-bar",
				array(
					"ALLOW_MULTI_SELECT" => "N",
					"COMPONENT_TEMPLATE" => "fix-bar",
					"DELAY" => "N",
					"MAX_LEVEL" => "1",
					"MENU_CACHE_GET_VARS" => array(
					),
					"MENU_CACHE_TIME" => "3600",
					"MENU_CACHE_TYPE" => "N",
					"MENU_CACHE_USE_GROUPS" => "Y",
					"ROOT_MENU_TYPE" => "fix_bar",
				),
				false
			);*/?>

			<?php require_once($_SERVER["DOCUMENT_ROOT"] . '/include/top_banner.php');?>
			
			<? if($APPLICATION->GetCurPage(false) !== '/'): ?>
			<main class="<?=($APPLICATION->GetCurPage(false) == '/')?'main-page':'main-content'?>">
			<?= \TAO::navigation()->route()->render('breadcrumb'); ?>
			<? endif ?>
