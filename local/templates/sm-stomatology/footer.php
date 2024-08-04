<?php if(\TAO::app()->GetCurPage(false) !== '/') { ?>
			</div>
		</div>
	</div>
<?php } ?>

<?
/*
 * Путь к изображению маркера карты захардкорен в js: /images/mapMarker.png
 */
?>
<div class="b-map" id="b-map">
	<div id="js-main-map" style="width: 100%;"></div>
	<div class="b-map__info">
		<div class="b-map__info-top">
			<img src="<?= TAO::frontendUrl("img/common/logo.png") ?>"
			     class="b-map__info-logo hidden-xs-down"
			     alt="СМ-Стоматология">
			<div class="b-map__info-phone call_phone_1">
				+7 (495) 777-48-06
			</div>
			<div class="b-map__info-work-time">
				9:00 — 21:00
			</div>
		</div>

		<div class="row b-map__info-row b-map__info-middle">
			<div class="col-sm-9">
				<div class="b-contacts-list">
					<div class="b-contacts-list__item b-contacts-list__item--7 b-contacts-list__item--selected"
					     data-id="7">
						<a>Старопетровский пр., 7А, стр. 22</a>
						<b class="b-icon-metro b-icon-metro--green"></b>
						Войковская, Балтийская (МЦК)
					</div>
					<?php /*
					<div class="b-contacts-list__item b-contacts-list__item--1"
					     data-id="1">
						<a>ул. Космонавта Волкова, 9/2</a>
						<b class="b-icon-metro b-icon-metro--green"></b>
						Войковская, Балтийская, Коптево (МЦК)
					</div>
					 */?>
					<div class="b-contacts-list__item b-contacts-list__item--2"
					     data-id="2">
						<a>ул. Клары Цеткин, д. 33 корп. 28</a>
						<b class="b-icon-metro b-icon-metro--green"></b>
						Войковская, Балтийская, Коптево (МЦК)
					</div>
					<div class="b-contacts-list__item b-contacts-list__item--8"
					     data-id="8">
						<a>ул. Ярцевская, д. 8</a>
						<b class="b-icon-metro b-icon-metro--blue"></b>
						Молодежная
					</div>
					<div class="b-contacts-list__item b-contacts-list__item--3"
					     data-id="3">
						<a>ул. Ярославская, дом 4, корп. 2</a>
						<b class="b-icon-metro b-icon-metro--orange"></b>
						Алексеевская, ВДНХ
					</div>
					<div class="b-contacts-list__item b-contacts-list__item--5"
					     data-id="5">
						<a>Волгоградский проспект, д.42, стр.12</a>
						<b class="b-icon-metro b-icon-metro--magenta"></b>
						Текстильщики, Угрешская (МЦК)
					</div>
					<?/*<div class="b-contacts-list__item b-contacts-list__item--4"
					     data-id="4">
						<a>Детская стоматология на ул. Приорова, д.36</a>
						<b class="b-icon-metro b-icon-metro--green"></b>
						Войковская, Балтийская, Коптево (МЦК)
					</div>*/?>
					<div class="b-contacts-list__item b-contacts-list__item--6"
					     data-id="6">
						<a>Детская стоматология на Волгоградскoм проспекте, д.42, стр.12</a>
						<b class="b-icon-metro b-icon-metro--magenta"></b>
						Текстильщики, Угрешская (МЦК)
					</div>
					<div class="b-contacts-list__item b-contacts-list__item--9"
					     data-id="9">
						<a>Детская стоматология на ул. Ярцевская, д. 8</a>
						<b class="b-icon-metro b-icon-metro--blue"></b>
						Молодежная
					</div>
					<div class="b-contacts-list__item b-contacts-list__item--10"
					     data-id="10">
						<a>Детская стоматология на ул. Космонавта Волкова, д. 9/2</a>
						<b class="b-icon-metro b-icon-metro--green"></b>
						Войковская
					</div>
					<div class="b-contacts-list__item b-contacts-list__item--11"
					     data-id="11">
						<a>Детская стоматология в 3-ем проезде Марьиной Рощи, д. 41</a>
						<b class="b-icon-metro b-icon-metro--green"></b>
						Марьина Роща
					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="b-socials">

					<a target="_blank" href="https://www.instagram.com/sm_stomatologiya/" class="b-socials__item">
						<span>
						<i class="fa fa-instagram"></i>
							</span>
					</a>
					<a target="_blank" href="https://www.facebook.com/smclinic" class="b-socials__item">
						<span>
						<i class="fa fa-facebook"></i>
							</span>
					</a>
					<a target="_blank" href="https://vk.com/smclinica" class="b-socials__item">
						<span>
						<i class="fa fa-vk"></i>
						</span>
					</a>
					<a target="_blank" href="https://ok.ru/smclinica" class="b-socials__item">
						<span>
						<i class="fa fa-odnoklassniki"></i>
						</span>
					</a>
				</div>
			</div>
		</div>

		<div class="b-map__info-footer">
			<strong><?= date('Y') ?> © «СМ-Стоматология»</strong>
			Web-дизайн сайта,
			создание сайта,
			продвижение сайта —
			<a rel="nofollow" href="https://techart.ru" target="_blank">Текарт</a>.
		</div>
	</div>
</div>


<div class="l-footer">
	<div class="b-footer">
		<div class="row b-footer__cols">
			<div class="col-sm-9 b-footer__col-left">
				<div class="b-footer-menu owl-carousel">

					<div class="b-footer-menu-group">
						<p class="b-footer-menu-group__title">
							СМ-Стоматология
						</p>
						<?=
						\TAO::frontend()->renderBlock('custom/footer-menu', [
							'links' => \TAO::navigation('footer_main')->links()
						]);
						?>
					</div>

					<div class="b-footer-menu-group">
						<p class="b-footer-menu-group__title">
							Направления
						</p>
						<?=
						\TAO::frontend()->renderBlock('custom/footer-menu', [
							'links' => \TAO::navigation('footer_direction')->links()
						]);
						?>
					</div>

					<div class="b-footer-menu-group">
						<p class="b-footer-menu-group__title">
							Наши клиники
						</p>
						<?=
						\TAO::frontend()->renderBlock('custom/footer-menu', [
							'links' => \TAO::navigation('footer_link')->links(),
							'target_blank' => 'true'
						]);
						?>
					</div>
				</div>
			</div>
			<div class="col-sm-3 b-footer__col-right">
				<p class="b-footer__text">
					Материалы, размещенные на данной странице, носят информационный характер и предназначены для
					образовательных целей. Посетители сайта не должны использовать их в качестве медицинских
					рекомендаций.
					Определение диагноза и выбор методики лечения остается исключительной прерогативой вашего лечащего
					врача!
				</p>
				<p class="b-footer__text">
					ООО «СМ-Клиника» не несёт ответственности за возможные негативные последствия, возникшие в
					результате
					использования информации, размещенной на сайте smclinic.ru
				</p>
				<p class="b-footer__text">
					OOO «Дэрайс» Лицензия № ЛО-77-01-018637 от 26 августа 2019 г.
				</p>
				<p class="b-footer__text">
					<a href="/about/legal-info/">
						Политика СМ-Клиника в отношении обработки
						персональных данных
					</a>
				</p>
			</div>
		</div>


		<div class="b-footer__contraindications">
			<img src="<?= TAO::frontendUrl('img/common/footer/contraindications-xs-up.png'); ?>"
			     class="hidden-xs-down b-contradiction b-contradiction--large"
			     alt="">
			<img src="<?= TAO::frontendUrl('img/common/footer/contraindications-xs-down.png'); ?>"
			     class="hidden-sm-up b-contradiction b-contradiction--small"
			     alt="">
		</div>
	</div>
</div>
<?php /**** forms start ****/?>
<?=
	\TAO::Form('Appointment')->setOption('layout','popup-appointment')->render();
?>
<?=
	\TAO::Form('Question')->setOption('layout','popup-question')->render();
?>
<?=
	\TAO::Form('Callback')->setOption('layout','popup-callback')->render();
?>
<?=
	\TAO::Form('Administration')->setOption('layout','popup-administration')->render();
?>
<?=
	\TAO::Form('Review')->setOption('layout','popup-review')->render();
?>


<div class="modal fade modal--hidden b-modal-map" id="modal-map">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<div class="close" data-dismiss="modal"></div>
				<p class="modal-title">
					Местоположение
				</p>
				<p>
					Уточнитe ваше местоположение, кликнув мышью по карте.
				</p>
			</div>
		</div>
	</div>
</div>


<?php /**** forms end ****/?>
<?php
TAO::frontendJs('index');

$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/analytic.js');
?>
<?/*
	<script type="text/javascript">
    (function($){$.fn.replaceText=function(b,a,c){return this.each(function(){var f=this.firstChild,g,e,d=[];if(f){do{if(f.nodeType===3){g=f.nodeValue;e=g.replace(b,a);if(e!==g){if(!c&&/</.test(e)){$(f).before(e);d.push(f)}else{f.nodeValue=e}}}}while(f=f.nextSibling)}d.length&&$(d).remove()})}})(jQuery);
        jQuery(document).ready(function() {
            $(".col-sm-12 *").replaceText( /.7 .495. 777.48.06/gi, "<span class='call_phone_2'>+7 (495) 777-48-06</span>" );
        });
    </script>

    <!-- calltouch code -->
    <script type="text/javascript">
    (function (w, d, nv, ls){
        var cid  = function () { try { var m1 = d.cookie.match('(?:^|;)\\s*_ga=([^;]*)');if (!(m1 && m1.length > 1)) return null; var m2 = decodeURIComponent(m1[1]).match(/(\d+\.\d+)$/); if (!(m2 && m2.length > 1)) return null; return m2[1]} catch (err) {}}();
            var ct = function (w, d, e, c, n){ var a = 'all', b = 'tou', src = b + 'c' + 'h';  src = 'm' + 'o' + 'd.c' + a + src;
                var jsHost = "https://" + src, p = d.getElementsByTagName(e)[0],s = d.createElement(e);
                s.async = 1; s.src = jsHost + "." + "r" + "u/d_client.js?param;" + (c ? "client_id" + c + ";" : "") + "ref" + escape(d.referrer) + ";url" + escape(d.URL) + ";cook" + escape(d.cookie) + ";attrs" + escape("{\"attrh\":" + n + ",\"ver\":170310}") + ";";
                if (!w.jQuery) { var jq = d.createElement(e); jq.src = jsHost + "." + "r" + 'u/js/jquery-1.7.min.js'; jq.onload = function () {
                    p.parentNode.insertBefore(s, p);};
                    p.parentNode.insertBefore(jq, p);}else{
                    p.parentNode.insertBefore(s, p);}};
            var gaid = function(w, d, o, ct, n){ if (!!o){ w.ct_timer = 0; w.ct_max_iter = (navigator.userAgent.match(/Opera|OPR\//) ? 10 : 20); w.ct_interval = setInterval(function(){
            w.ct_timer++; if (w.ct_timer>=w.ct_max_iter) { clearInterval(w.ct_interval); ct(w, d, 'script', null, n); }},200);
                w[o](function (){ var clId = null; try { var cnt = w[o] && w[o].getAll ? w[o].getAll() : null; clId = cnt && cnt.length > 0 && !!cnt[0] && cnt[0].get ? cnt[0].get('clientId') : null;} catch(e){ console.warn("Unable to get clientId, Error: "+e.message);} clearInterval(w.ct_interval); if(w.ct_timer < w.ct_max_iter){ct(w, d, 'script', clId, n);}});}else{ct(w, d, 'script', null, n);}};
            if (cid === null && !!w.GoogleAnalyticsObject){
                if (w.GoogleAnalyticsObject=='ga_ckpr') w.ct_ga='ga'; else w.ct_ga = w.GoogleAnalyticsObject;
                if (typeof Promise !== "undefined" && Promise.toString().indexOf("[native code]") !== -1){new Promise(function (resolve) {var db, on = function () {  resolve(true)  }, off = function () {  resolve(false)}, tryls = function tryls() { try { ls && ls.length ? off() : (ls.x = 1, ls.removeItem("x"), off());} catch (e) { nv.cookieEnabled ? on() : off(); }};w.webkitRequestFileSystem ? webkitRequestFileSystem(0, 0, off, on) : "MozAppearance" in d.documentElement.style ? (db = indexedDB.open("test"), db.onerror = on, db.onsuccess = off) : /constructor/i.test(w.HTMLElement) ? tryls() : !w.indexedDB && (w.PointerEvent || w.MSPointerEvent) ? on() : off();}).then(function (pm){
                    if (pm){gaid(w, d, w.ct_ga, ct, 2);}else{gaid(w, d, w.ct_ga, ct, 3);}})}else{gaid(w, d, w.ct_ga, ct, 4);}
            }else{ct(w, d, 'script', cid, 1);}})(window, document, navigator, localStorage);
    </script>
    <!-- /calltouch code -->
*/?>
<?/*
<!-- Sape -->
<script type="text/javascript">(window.Image ? (new Image()) : document.createElement('img')).src = 'https://vk.com/rtrg?p=VK-RTRG-228713-zttX';</script>
<!-- Rating@Mail.ru counter -->
<script type="text/javascript">
var _tmr = window._tmr || (window._tmr = []);
_tmr.push({id: "2761756", type: "pageView", start: (new Date()).getTime()});
(function (d, w, id) {
  if (d.getElementById(id)) return;
  var ts = d.createElement("script"); ts.type = "text/javascript"; ts.async = true; ts.id = id;
  ts.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//top-fwz1.mail.ru/js/code.js";
  var f = function () {var s = d.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ts, s);};
  if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); }
})(document, window, "topmailru-code");
</script><noscript><div>
<img src="//top-fwz1.mail.ru/counter?id=2761756;js=na" style="border:0;position:absolute;left:-9999px;" alt="" />
</div></noscript>
<!-- //Rating@Mail.ru counter -->
<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '707059116146789');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=707059116146789&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
<!-- end Sape -->
*/?>
<script src="/js/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
<script src="/js/jquery.bxslider.min.js" type="text/javascript"></script>
<script src="/js/jquery.placeholder.js" type="text/javascript"></script>
<script src="/js/jquery.easing.js" type="text/javascript"></script>
<script src="/js/sourcebuster.min.js" type="text/javascript"></script>
<script src="/js/youtube.min.js" type="text/javascript"></script>
<script src="/js/script.js?v4" type="text/javascript"></script>
<?$APPLICATION->ShowPanel();?>
</body>
</html>
