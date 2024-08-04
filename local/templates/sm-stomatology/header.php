<?php
use Bitrix\Main\Page\Asset;
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
	<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&mode=release" type="text/javascript"></script>
	<link rel="preload" href="/local/templates/sm-stomatology/builds/prod/font/Waldorf/WaldorfTLPro-LightItalic.woff" as="font" type="font/woff" crossorigin>
	<link rel="preload" href="/local/templates/sm-stomatology/builds/prod/font/Waldorf/WaldorfTLPro-Italic.woff" as="font" type="font/woff" crossorigin>
	<link rel="preload" href="/local/templates/sm-stomatology/builds/prod/font/waldorftlpro-regular-webfont.woff" as="font" type="font/woff" crossorigin>
	<link rel="preload" href="/local/templates/sm-stomatology/builds/prod/node_modules/font-awesome/fonts/fontawesome-webfont.woff2" as="font" type="font/woff2" crossorigin>

	<link rel="preload" href="/local/templates/sm-stomatology/builds/prod/font/blissPro/BlissPro-Bold.otf" as="font" type="font/otf" crossorigin>	
	<link rel="preload" href="/local/templates/sm-stomatology/builds/prod/font/blissPro/BlissPro-Light.otf" as="font" type="font/otf" crossorigin>
	<link rel="preload" href="/local/templates/sm-stomatology/builds/prod/font/blissPro/BlissPro-Regular.otf" as="font" type="font/otf" crossorigin>
	<?php
	TAO::frontendCss('index');
	$APPLICATION->ShowHead();
	?>
	
	<?//<link href="/css/style.css?v12" type="text/css" rel="stylesheet" />?>



	<? Asset::getInstance()->addCss("/js/fancybox/jquery.fancybox.css"); ?>
	<? Asset::getInstance()->addCss("/css/owl.carousel.min.css"); ?>
	<? Asset::getInstance()->addCss("/css/owl.theme.default.min.css"); ?>
	<? Asset::getInstance()->addCss("/css/jquery.bxslider.css"); ?>
	<? Asset::getInstance()->addCss("/css/youtube.min.css"); ?>
	<? Asset::getInstance()->addCss("/css/style.css"); ?>
    <script type="text/javascript" defer>
        (function($){$.fn.replaceText=function(b,a,c){return this.each(function(){var f=this.firstChild,g,e,d=[];if(f){do{if(f.nodeType===3){g=f.nodeValue;e=g.replace(b,a);if(e!==g){if(!c&&/</.test(e)){$(f).before(e);d.push(f)}else{f.nodeValue=e}}}}while(f=f.nextSibling)}d.length&&$(d).remove()})}})(jQuery);
        jQuery(document).ready(function() {
            $(".col-sm-12 *").replaceText( /777.48.06/gi, "<span class='call_phone_2'>777-48-06</span>" );
            //$(".col-sm-12 *").replaceText( /.7 .495. 777.48.06/gi, "<span class='call_phone_1'>+7 (495) 777-48-06</span>" );
        });
    </script>

<!-- calltouch -->
<script type="text/javascript">
(function(w,d,n,c){w.CalltouchDataObject=n;w[n]=function(){w[n]["callbacks"].push(arguments)};if(!w[n]["callbacks"]){w[n]["callbacks"]=[]}w[n]["loaded"]=false;if(typeof c!=="object"){c=[c]}w[n]["counters"]=c;for(var i=0;i<c.length;i+=1){p(c[i])}function p(cId){var a=d.getElementsByTagName("script")[0],s=d.createElement("script"),i=function(){a.parentNode.insertBefore(s,a)},m=typeof Array.prototype.find === 'function',n=m?"init-min.js":"init.js";s.type="text/javascript";s.async=true;s.src="https://mod.calltouch.ru/"+n+"?id="+cId;if(w.opera=="[object Opera]"){d.addEventListener("DOMContentLoaded",i,false)}else{i()}}})(window,document,"ct","a8b290ef");
</script>
<!-- calltouch -->

<?/* 31.10.22
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
*/?>

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
<div class="l-header l-container container">
	<div class="b-header">
		<div class="row">
			<div class="col-xs-12 col-md-5 col-lg-3 b-header-col b-header-col--1">
				<div class="b-logo">
					<a <?= (\TAO::app()->GetCurPage(false) !== '/') ? ' href="/" ' : '' ?>class="b-logo__link">
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

				<a href="https://app.smclinic.ru" target="_blank"
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
<?php $APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
		"AREA_FILE_SHOW" => "file",
		"PATH" => "/include/top_banner.php",
		"EDIT_TEMPLATE" => "standard.php"
	),
	false
);?>

<div class="l-nav l-container container">
	<?= \TAO::navigation()->render('top_menu'); ?>
</div>

<?php $APPLICATION->IncludeComponent("sm:text", "", ['IBLOCK_ID' => 20,'ELEMENT_ID' => 11636], false); ?>
<?php if(\TAO::app()->GetCurPage(false) !== '/') { ?>
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
<?php } ?>
