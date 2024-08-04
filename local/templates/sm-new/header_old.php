<?php
use Bitrix\Main\Page\Asset;
global $USER;

?>
<!DOCTYPE html>
<html>
<head>
	<script data-skip-moving="true">
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-47296181-14', 'auto');
	  ga(function(tracker) {
		ga('set', 'dimension1', tracker.get('clientId'));
		ga('require', 'OWOXBIStreaming');
		ga('send', 'pageview');
		// OWOX BI Streaming plugin code
		(function(){function f(g){var c=g.get("sendHitTask"),f=function(){function e(b){var a=!1;try{var d=document.createElement("img");d.src=c(!0)+"?"+b;a=!0}catch(h){}return a}function c(b){var a="https://google-analytics.bi.owox.com/"+encodeURIComponent(g.get("trackingId"));b||(a+="?tid="+encodeURIComponent(g.get("trackingId")));return a}return{send:function(b){var a;if(!(a=2036>=b.length&&e(b))){a=!1;try{a=navigator.sendBeacon&&navigator.sendBeacon(c(),b)}catch(h){}}if(!a){a=!1;var d;try{window.XMLHttpRequest&&"withCredentials"in(d=
		new XMLHttpRequest)&&(d.open("POST",c(),!0),d.setRequestHeader("Content-Type","text/plain"),d.send(b),a=!0)}catch(h){}}return a||e(b)}}}();g.set("sendHitTask",function(e){try{c(e)}catch(k){}f.send(e.get("hitPayload"))})}var c=window[window.GoogleAnalyticsObject||"ga"];c&&c("provide","OWOXBIStreaming",f)})();
	});
	</script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="telephone=no"/>
	<link rel="icon" type="image/ico" href="/favicon.svg">
	<title> <?php $APPLICATION->ShowTitle(); ?></title>

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800&amp;subset=cyrillic" crossorigin>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=PT+Serif:ital@1&display=swap">

	<?/* if(!SMClinicHelper::showNewTemplate()): ?>
		<link rel="preload" href="/local/templates/sm-stomatology/builds/prod/font/Waldorf/WaldorfTLPro-LightItalic.woff" as="font" type="font/woff" crossorigin>
		<link rel="preload" href="/local/templates/sm-stomatology/builds/prod/font/Waldorf/WaldorfTLPro-Italic.woff" as="font" type="font/woff" crossorigin>
		<link rel="preload" href="/local/templates/sm-stomatology/builds/prod/font/waldorftlpro-regular-webfont.woff" as="font" type="font/woff" crossorigin>
		<link rel="preload" href="/local/templates/sm-stomatology/builds/prod/node_modules/font-awesome/fonts/fontawesome-webfont.woff2" as="font" type="font/woff2" crossorigin>
		<link rel="preload" href="/local/templates/sm-stomatology/builds/prod/font/blissPro/BlissPro-Bold.otf" as="font" type="font/otf" crossorigin>	
		<link rel="preload" href="/local/templates/sm-stomatology/builds/prod/font/blissPro/BlissPro-Light.otf" as="font" type="font/otf" crossorigin>
		<link rel="preload" href="/local/templates/sm-stomatology/builds/prod/font/blissPro/BlissPro-Regular.otf" as="font" type="font/otf" crossorigin>
	<? else: ?>
		<? $fontPath = SITE_TEMPLATE_PATH.'/build/prod/src/fonts' ?>
		<link rel="preload" href="<?= $fontPath ?>/WaldorfTLPro-LightItalic.woff" as="font" type="font/woff" crossorigin>
		<link rel="preload" href="<?= $fontPath ?>/WaldorfTLPro-Italic.woff" as="font" type="font/woff" crossorigin>
		<link rel="preload" href="<?= $fontPath ?>/WaldorfTLPro-Italic.otf" as="font" type="font/otf" crossorigin>
		<link rel="preload" href="<?= $fontPath ?>/BlissPro-Bold.otf" as="font" type="font/otf" crossorigin>	
		<link rel="preload" href="<?= $fontPath ?>/BlissPro-Light.otf" as="font" type="font/otf" crossorigin>
		<link rel="preload" href="<?= $fontPath ?>/BlissPro-Regular.otf" as="font" type="font/otf" crossorigin>
	<? endif */?>
	<?php
	
	$APPLICATION->ShowHead();
	?>
	
	<?//<link href="/css/style.css?v12" type="text/css" rel="stylesheet" />?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	
	<?
	SMClinicBuild::addCssBuild('full');
	//Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/build/prod/libs/jquery-ui.min.js');
	//Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/build/prod/libs/slick.min.js');
	if ($USER->IsAdmin() ){
		?><link href="<?= SITE_TEMPLATE_PATH ?>/admin.css" type="text/css"  rel="stylesheet"><?
		//Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/admin.css");
	}



	?>
	<? /*****************************************/ ?>
	<? /*****************************************/ ?>
	<? /*****************************************/ ?>
	<? /*****************************************/ ?>
	<? /* добавить на старый шаблон */ ?>
	<?$isContacts = stristr($GLOBALS["_SERVER"]["REQUEST_URI"], '/contacts/');?>
	<?$isMain = $APPLICATION->GetCurPage(false) === '/';?>
	<? if(!SMClinicHelper::showNewTemplate()): ?>
		<?if($isContacts || $isMain):?> 
		<script defer src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&mode=release" type="text/javascript"></script>
	<?endif;?>
		<? TAO::frontendCss('index'); ?>
		<? Asset::getInstance()->addCss("/js/fancybox/jquery.fancybox.css"); ?>
		<?/* Asset::getInstance()->addCss("/css/owl.carousel.min.css"); */?>
		<?/* Asset::getInstance()->addCss("/css/owl.theme.default.min.css"); */?>
		<?/* Asset::getInstance()->addCss("/css/jquery.bxslider.css"); */?>
		<? Asset::getInstance()->addCss("/css/youtube.min.css"); ?>
		<? Asset::getInstance()->addCss("/css/style.css"); ?>
	<? endif ?>
	<? /******************************/ ?>
	<? /*****************************************/ ?>
	<? /*****************************************/ ?>
	<? /*****************************************/ ?>
	<? /*****************************************/ ?>

    
	<?/* Перенес в файл script.js шаблона
    <script type="text/javascript" defer>
        (function($){$.fn.replaceText=function(b,a,c){return this.each(function(){var f=this.firstChild,g,e,d=[];if(f){do{if(f.nodeType===3){g=f.nodeValue;e=g.replace(b,a);if(e!==g){if(!c&&/</.test(e)){$(f).before(e);d.push(f)}else{f.nodeValue=e}}}}while(f=f.nextSibling)}d.length&&$(d).remove()})}})(jQuery);
        jQuery(document).ready(function() {
            $(".col-sm-12 *").replaceText( /777.48.06/gi, "<span class='call_phone_2'>777-48-06</span>" );
            //$(".col-sm-12 *").replaceText( /.7 .495. 777.48.06/gi, "<span class='call_phone_1'>+7 (495) 777-48-06</span>" );
        });
    </script>
    */?>
<!-- calltouch code -->
<script type="text/javascript">
(function (w, d, nv, ls, yac){
    var lwait = function (w, on, trf, dly, ma, orf, osf) { var pfx = "ct_await_", sfx = "_completed";  if(!w[pfx + on + sfx]) { var ci = clearInterval, si = setInterval, st = setTimeout , cmld = function () { if (!w[pfx + on + sfx]) {  w[pfx + on + sfx] = true; if ((w[pfx + on] && (w[pfx + on].timer))) { ci(w[pfx + on].timer);  w[pfx + on] = null;   }  orf(w[on]);  } };if (!w[on] || !osf) { if (trf(w[on])) { cmld();  } else { if (!w[pfx + on]) { w[pfx + on] = {  timer: si(function () { if (trf(w[on]) || ma < ++w[pfx + on].attempt) { cmld(); } }, dly), attempt: 0 }; } } }   else { if (trf(w[on])) { cmld();  } else { osf(cmld); st(function () { lwait(w, on, trf, dly, ma, orf); }, 0); } }} else {orf(w[on]);}};
    var ct = function (w, d, e, c, n) { var a = 'all', b = 'tou', src = b + 'c' + 'h';  src = 'm' + 'o' + 'd.c' + a + src; var jsHost = "https://" + src, s = d.createElement(e); var jsf = function (w, d, s, h, c, n, yc) { if (yc !== null) { lwait(w, 'yaCounter'+yc, function(obj) { return (obj && obj.getClientID ? true : false); }, 50, 100, function(yaCounter) { s.async = 1; s.src = jsHost + "." + "r" + "u/d_client.js?param;" + (yaCounter  && yaCounter.getClientID ? "ya_client_id" + yaCounter.getClientID() + ";" : "") + (c ? "client_id" + c + ";" : "") + "ref" + escape(d.referrer) + ";url" + escape(d.URL) + ";cook" + escape(d.cookie) + ";attrs" + escape("{\"attrh\":" + n + ",\"ver\":170523}") + ";"; p = d.getElementsByTagName(e)[0]; p.parentNode.insertBefore(s, p); }, function (f) { if(w.jQuery) {  w.jQuery(d).on('yacounter' + yc + 'inited', f ); }}); } else { s.async = 1; s.src = jsHost + "." + "r" + "u/d_client.js?param;" + (c ? "client_id" + c + ";" : "") + "ref" + escape(d.referrer) + ";url" + escape(d.URL) + ";cook" + escape(d.cookie) + ";attrs" + escape("{\"attrh\":" + n + ",\"ver\":170523}") + ";"; p = d.getElementsByTagName(e)[0]; p.parentNode.insertBefore(s, p); } }; if (!w.jQuery) { var jq = d.createElement(e); jq.src = jsHost + "." + "r" + 'u/js/jquery-1.7.min.js'; jq.onload = function () { lwait(w, 'jQuery', function(obj) { return (obj ? true : false); }, 30, 100, function () { jsf(w, d, s, jsHost, c, n, yac); }); }; p = d.getElementsByTagName(e)[0]; p.parentNode.insertBefore(jq, p); } else { jsf(w, d, s, jsHost, c, n, yac); } };
    var gaid = function (w, d, o, ct, n) { if (!!o) { lwait(w, o, function (obj) {  return (obj && obj.getAll ? true : false); }, 200, (nv.userAgent.match(/Opera|OPR\//) ? 10 : 20), function (gaCounter) { var clId = null; try {  var cnt = gaCounter && gaCounter.getAll ? gaCounter.getAll() : null; clId = cnt && cnt.length > 0 && !!cnt[0] && cnt[0].get ? cnt[0].get('clientId') : null; } catch (e) { console.warn("Unable to get clientId, Error: " + e.message); } ct(w, d, 'script', clId, n); }, function (f) { w[o](function () {  f(w[o]); })});} else{ ct(w, d, 'script', null, n); }};
    var cid  = function () { try { var m1 = d.cookie.match('(?:^|;)\\s*_ga=([^;]*)');if (!(m1 && m1.length > 1)) return null; var m2 = decodeURIComponent(m1[1]).match(/(\d+\.\d+)$/); if (!(m2 && m2.length > 1)) return null; return m2[1]} catch (err) {}}();
    if (cid === null && !!w.GoogleAnalyticsObject){
        if (w.GoogleAnalyticsObject=='ga_ckpr') w.ct_ga='ga'; else w.ct_ga = w.GoogleAnalyticsObject;
        if (typeof Promise !== "undefined" && Promise.toString().indexOf("[native code]") !== -1){new Promise(function (resolve) {var db, on = function () {  resolve(true)  }, off = function () {  resolve(false)}, tryls = function tryls() { try { ls && ls.length ? off() : (ls.x = 1, ls.removeItem("x"), off());} catch (e) { nv.cookieEnabled ? on() : off(); }};w.webkitRequestFileSystem ? webkitRequestFileSystem(0, 0, off, on) : "MozAppearance" in d.documentElement.style ? (db = indexedDB.open("test"), db.onerror = on, db.onsuccess = off) : /constructor/i.test(w.HTMLElement) ? tryls() : !w.indexedDB && (w.PointerEvent || w.MSPointerEvent) ? on() : off();}).then(function (pm){
            if (pm){gaid(w, d, w.ct_ga, ct, 2);}else{gaid(w, d, w.ct_ga, ct, 3);}})}else{gaid(w, d, w.ct_ga, ct, 4);}
    }else{ct(w, d, 'script', cid, 1);}})
(window, document, navigator, localStorage, "42012629");
</script>
<!-- /calltouch code -->

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
<?$APPLICATION->ShowPanel();?>
	<div class="wrapper index-page">
		<div class="wrapper__box">
			<div class="header" id="header">
				<div class="container">
					<header>
						<div class="header__top">
							<div class="header__left">
								<div class="header__cell_logo"><a class="header__logo" href="/"><img src="<?= SITE_TEMPLATE_PATH ?>/build/prod/src/i/logo.svg?v=2"></a></div>
							</div>
							<div class="header__right">
								<div class="header__flex">
									<div class="header__cell"><a class="header__lk" href="https://lk.smclinic.ru" target="_blank"><svg width="29" height="29" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M19.852 22A5.616 5.616 0 009.1 22H7a7.66 7.66 0 0114.954 0h-2.102zm-5.38-16a4.5 4.5 0 110 9 4.5 4.5 0 010-9zm0 2a2.5 2.5 0 110 5 2.5 2.5 0 010-5z" fill="#1B5773"/><path fill-rule="evenodd" clip-rule="evenodd" d="M14.5 27C21.404 27 27 21.404 27 14.5S21.404 2 14.5 2 2 7.596 2 14.5 7.596 27 14.5 27zm0 2C22.508 29 29 22.508 29 14.5S22.508 0 14.5 0 0 6.492 0 14.5 6.492 29 14.5 29z" fill="#1B5773"/></svg></a></div>
									<div class="header__buttons">
										<div class="header__feed">
											<div class="btn btn_red js-open-popup" data-target=".popup-form-callback" data-analytics="OrderCall_Toolbar"><span>Обратный звонок</span></div>
											<div class="btn btn_snd js-open-popup" data-target=".popup-form-feedback" data-analytics="OrderDoctor_Toolbar"><span>Записаться на прием</span></div>
										</div>
									</div>
									<div class="header__cell">
										<div class="header__phone">
											<div class="header__phone-svg js-phone-call"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 27 27"><path fill-rule="evenodd" clip-rule="evenodd" d="M5.161 2l-.45.225a.985.985 0 01-.044.02c-1.573.691-2.62 2.27-2.659 4.014v.008c-.133 4.303 1.372 8.486 4.129 11.79l.157.157c.022.021.042.044.062.067.659.79 1.463 1.552 2.303 2.297a.982.982 0 01.046.044l.205.206a17.658 17.658 0 0011.81 4.168c1.744-.039 3.326-1.086 4.015-2.656l.022-.046.224-.447a.263.263 0 00.013-.155.165.165 0 00-.052-.094L20.65 18.3l-.004-.004a.08.08 0 00-.093.011l-2.22 2.219c-.541.54-1.246.692-1.869.614a12.25 12.25 0 01-5.952-2.73 1.018 1.018 0 01-.058-.053l-.125-.124c-.493-.447-1.048-.95-1.516-1.514l-.106-.106a1 1 0 01-.057-.061 12.211 12.211 0 01-2.732-5.947c-.08-.623.073-1.33.615-1.87L8.75 6.518l.002-.002a.076.076 0 00.02-.05.063.063 0 00-.01-.044L8.76 6.42 5.456 2.128a1.007 1.007 0 01-.02-.027.236.236 0 00-.178-.1h-.097zm.068-2h.029C5.953 0 6.626.34 7.05.92l3.294 4.28c.641.83.549 2.007-.18 2.734h-.001L7.947 10.15a.143.143 0 00-.038.064.335.335 0 00-.009.126 10.213 10.213 0 002.247 4.886l.112.11c.024.025.047.05.07.077.368.45.83.874 1.36 1.354l.033.032.113.112a10.25 10.25 0 004.892 2.247c.06.006.102 0 .128-.008a.142.142 0 00.064-.038l2.218-2.217a2.08 2.08 0 012.734-.178l.003.002 4.298 3.303c.811.633 1.04 1.752.625 2.664a.89.89 0 01-.017.035l-.224.449c-1.015 2.283-3.296 3.772-5.794 3.827-4.821.1-9.496-1.54-13.18-4.672a.998.998 0 01-.06-.056l-.213-.214c-.844-.749-1.716-1.571-2.46-2.456l-.157-.158c-.02-.02-.04-.042-.06-.065C1.556 15.705-.14 11.037.01 6.21.067 3.714 1.556 1.438 3.839.424L4.253.22c.395-.23.834-.222.977-.22z" fill="#1B5773"></path></svg></div>
											<div class="call_phone_1">
												<a href="tel:+74957774806">
													<p>+7 (495) 777-48-06</p>
												</a>
											</div>
											<div class="header__caption">Круглосуточная запись</div>
										</div>
									</div>
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
								<div class="menu-toggle js-panel-toggle">
									<div class="menu-toggle__lines"></div><span></span>
								</div>
							</div>
						</div>
					</header>
					<div class="header__menu">
<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"main-menu", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "submenu",
		"COMPONENT_TEMPLATE" => "main-menu",
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
				</div>
<?php $APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
		"AREA_FILE_SHOW" => "file",
		"PATH" => "/include/alert_toolbar.php",
		"EDIT_TEMPLATE" => "standard.php"
	),
	false
);?>

			</div>
<?php require_once($_SERVER["DOCUMENT_ROOT"] . '/include/top_banner.php');?>








<? if(0): ?>

<div class="l-header l-container container">
	<div class="b-header">
		<div class="row">
			<div class="col-xs-12 col-md-5 col-lg-3 b-header-col b-header-col--1">
				<div class="b-logo">
					<a <?= ($APPLICATION->GetCurPage(false) !== '/') ? ' href="/" ' : '' ?>class="b-logo__link">
						<img src="/images/sm-stomatology.svg" alt="" class="b-logo__img">
					</a>
				</div>
			</div>
			<div class="col-xs-12 col-md-3 col-lg-5 col-xl-4 b-header-col b-header-col--2">
				<div class="b-header-buttons">
					<div class="b-header-buttons__panel js-feedback-panel">
						<?/*<a href="#" class="btn btn-primary b-btn--ask-question"
							data-toggle="modal" data-target="#modal-ask-question" data-position="header">
							Задать вопрос
						</a>*/?>
						<a target="_blank" href="/services/online-konsultatsiya-vracha/" class="btn btn-primary opros" data-position="header">
							Бесплатно<br /> онлайн
						</a>
						<a href="#" class="btn btn-primary <?/*b-btn--form*/?> opros"
							data-toggle="modal" data-target="#modal-feedback" data-position="header">
							Записаться<br /> на прием
						</a>
						<?/*
						<a target="_blank" href="/patients/onlayn-dokumenty/" class="btn btn-primary opros" data-position="header">
							Документы<br /> онлайн 
						</a>
						*/?>
						<a href="#" class="btn btn-primary b-btn--form hidden-lg-up"
							data-toggle="modal" data-target="#modal-callback" data-position="header">
							Заказать обратный звонок
						</a>
						<?/*<a target="_blank" href="/opros/" class="btn btn-primary opros" data-position="header">
							Оцените<br /> работу клиник
						</a>*/?>
					</div>
					<a href="#" class="hidden-lg-up btn btn-primary b-btn--form b-header-buttons__btn-feedback js-feedback-panel-btn" data-position="header">
						<i class="fa fa-plus"></i>
						Обратная связь
					</a>
				</div>
			</div>
			<div class="col-xs-12 col-md-4 col-lg-4 col-xl-5 b-header-col b-header-col--3">
		        <?
		        require_once($_SERVER["DOCUMENT_ROOT"] . '/include/Mobile_Detect.php');
        		$detect = new Mobile_Detect;
        		?>
        		<? if ($detect->isMobile()): ?>
				<div class="b-phone b-phone--header call_phone_1">
					<a href="+74957774806">+7 (495) 777-48-06</a>
				</div>
				<? else: ?>
				<div class="b-phone b-phone--header call_phone_1">
					+7 (495) 777-48-06
				</div>
				<? endif; ?>
				<div class="b-text-line">
					Запись круглосуточно
				</div>

				<a href="#" class="b-callback b-callback--header hidden-md-down"
				   data-toggle="modal" data-target="#modal-callback" data-position="header">
					Заказать обратный звонок
				</a>

				<a href="https://lk.smclinic.ru/#/auth" target="_blank"
				   title="Личный кабинет"
				   class="b-lk">
				</a>

				<div class="b-search b-search--header">
					<i class="fa fa-search b-search__toggle"></i>
					<div class="b-search__form">
						<form action="/search/">
							<div class="b-search__input">
								<button class="fa fa-search b-search__btn"></button>
								<div class="b-search__btn-close"></div>
								<input type="text" name="q">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
		"AREA_FILE_SHOW" => "file",
		"PATH" => "/include/alert_toolbar.php",
		"EDIT_TEMPLATE" => "standard.php"
	),
	false
);?>

<div class="l-nav l-container container">
	<?= \TAO::navigation()->render('top_menu'); ?>
</div>
*/?>
<?/*php $APPLICATION->IncludeComponent("sm:text", "", ['IBLOCK_ID' => 20,'ELEMENT_ID' => 11636], false);*/ ?>
<? if(SMClinicHelper::showNewTemplate()): ?>

	<? /*
	<div class="l-container l-container--page container">
		<div class="row">
			<div class="col-md-3">
				<hr>
				<?php require dirname(__FILE__).'/left_menu.php' ?>
				<?php include(\TAO::infoblock('services')->viewPath('left_menu.phtml')) ?>
				<?php include(\TAO::infoblock('symptoms')->viewPath('left_form.phtml')) ?>
				<?php require_once($_SERVER["DOCUMENT_ROOT"] . '/include/left_banner.php');?>
			</div>
			<div class="col-sm-12 col-md-9">
				<?= \TAO::navigation()->route()->render('breadcrumb'); ?>
	*/?>
<? endif ?>

<? endif ?>

<? if(!SMClinicHelper::showNewTemplate()): ?>

	<div class="l-container l-container--page container">
		<div class="row">
			<div class="col-md-3">
				<?php if(stripos($_SERVER["REDIRECT_URL"], 'patients/diseases/')) { ?>
					<noindex>
				<?php } ?>
				<hr>
				<?php require dirname(__FILE__).'/left_menu.php' ?>
				<?php include(\TAO::infoblock('services')->viewPath('left_menu.phtml')) ?>
				<?php include(\TAO::infoblock('symptoms')->viewPath('left_form.phtml')) ?>
				<?php require_once($_SERVER["DOCUMENT_ROOT"] . '/include/left_banner.php');?>
				<?php if(stripos($_SERVER["REDIRECT_URL"], 'patients/diseases/')) { ?>
					</noindex>
				<?php } ?>
			</div>
			<div class="col-sm-12 col-md-9 text">
			<? if($APPLICATION->GetCurPage(false) !== '/stock/aktsiya-nedelya-implantatsii/'): ?>
			<?= \TAO::navigation()->route()->render('breadcrumb'); ?>
			<? endif ?>

<? else: ?>
	<? // Новый шаблон ?>
	<? if($APPLICATION->GetCurPage(false) !== '/'): ?>
	<?$APPLICATION->IncludeComponent(
		"bitrix:breadcrumb",
		".default",
		Array(
			"PATH" => "",
			"SITE_ID" => "s1",
			"START_FROM" => "0"
		)
	);?>
	<? endif ?>
<? endif ?>
