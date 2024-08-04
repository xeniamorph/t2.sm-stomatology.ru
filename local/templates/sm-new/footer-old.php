
<? if(!SMClinicHelper::showNewTemplate()): ?>
				</div>
			</div>
		</div>
<? endif ?>
		<div class="footer">
			<footer>
				<div class="container-inner">
					<div class="footer__cols">
						<div class="footer__col">
							<div class="footer__title">СМ-Стоматология</div>
							<div class="footer__menu">
<?$APPLICATION->IncludeComponent("bitrix:menu", "footer-menu", Array(
	"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "footer_menu_1",
		"COMPONENT_TEMPLATE" => "main-menu",
		"DELAY" => "N",
		"MAX_LEVEL" => "2",
		"MENU_CACHE_GET_VARS" => "",
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "footer_menu_1",
		"USE_EXT" => "Y",
	),
	false
);?>
							</div>
						</div>
						<div class="footer__col">
							<div class="footer__title">Направления</div>
							<div class="footer__menu">
<?$APPLICATION->IncludeComponent("bitrix:menu", "footer-menu", Array(
	"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "footer_menu_2",
		"COMPONENT_TEMPLATE" => "main-menu",
		"DELAY" => "N",
		"MAX_LEVEL" => "2",
		"MENU_CACHE_GET_VARS" => "",
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "footer_menu_2",
		"USE_EXT" => "Y",
	),
	false
);?>
							</div>
						</div>
						<div class="footer__col">
							<div class="footer__title">Наши клиники</div>
							<div class="footer__menu">
<?$APPLICATION->IncludeComponent("bitrix:menu", "footer-menu", Array(
	"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "footer_menu_3",
		"COMPONENT_TEMPLATE" => "main-menu",
		"DELAY" => "N",
		"MAX_LEVEL" => "2",
		"MENU_CACHE_GET_VARS" => "",
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "footer_menu_3",
		"USE_EXT" => "Y",
	),
	false
);?>
							</div>
							<div class="footer__social">
								<div class="social">
									<?/*<div class="social__item"><a class="social__link social__link_inst" href="https://www.instagram.com/sm_stomatologiya/" target="_blank"></a></div>
									<div class="social__item"><a class="social__link social__link_fb" href="https://www.facebook.com/smclinic" target="_blank"></a></div>*/?>
									<div class="social__item"><a class="social__link social__link_vk" href="https://vk.com/smclinica" target="_blank"></a></div>
									<div class="social__item"><a class="social__link social__link_ok" href="https://ok.ru/smclinica" target="_blank"></a></div>
								</div>
							</div>
						</div>
						<div class="footer__col footer__col_text">
							<div class="footer__text text">
<?$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	"text", 
	array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "",
		"COMPONENT_TEMPLATE" => "text",
		"EDIT_TEMPLATE" => "",
		"PATH" => SITE_TEMPLATE_PATH."/include/template/footer_text.php"
	),
	false
);?>
							</div>
						</div>
					</div>
				</div>
				<noindex>
<div class="footer__warning"><?$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	"text", 
	array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "",
		"COMPONENT_TEMPLATE" => "text",
		"EDIT_TEMPLATE" => "",
		"PATH" => SITE_TEMPLATE_PATH."/include/template/footer_warning.php"
	),
	false
);?>
</div>
				</noindex>
			</footer>
		</div>
	</div>
</div>
<div class="mobile-panel slide-left">
	<div class="mobile-panel__overlay"></div>
	<div class="mobile-panel__wrap">
		<div class="mobile-panel__close-field js-panel-toggle"></div>
		<div class="mobile-panel__box">
			<div class="mobile-panel__container">
				<div class="mobile-panel__close js-panel-toggle"></div>
				<div class="mobile-panel__header"><a class="mobile-panel__logo" href="/"></a>
					<div class="mobile-panel__phone js-phone-call">
						<div class="mobile-panel__phone-svg"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 27 27"><path fill-rule="evenodd" clip-rule="evenodd" d="M5.161 2l-.45.225a.985.985 0 01-.044.02c-1.573.691-2.62 2.27-2.659 4.014v.008c-.133 4.303 1.372 8.486 4.129 11.79l.157.157c.022.021.042.044.062.067.659.79 1.463 1.552 2.303 2.297a.982.982 0 01.046.044l.205.206a17.658 17.658 0 0011.81 4.168c1.744-.039 3.326-1.086 4.015-2.656l.022-.046.224-.447a.263.263 0 00.013-.155.165.165 0 00-.052-.094L20.65 18.3l-.004-.004a.08.08 0 00-.093.011l-2.22 2.219c-.541.54-1.246.692-1.869.614a12.25 12.25 0 01-5.952-2.73 1.018 1.018 0 01-.058-.053l-.125-.124c-.493-.447-1.048-.95-1.516-1.514l-.106-.106a1 1 0 01-.057-.061 12.211 12.211 0 01-2.732-5.947c-.08-.623.073-1.33.615-1.87L8.75 6.518l.002-.002a.076.076 0 00.02-.05.063.063 0 00-.01-.044L8.76 6.42 5.456 2.128a1.007 1.007 0 01-.02-.027.236.236 0 00-.178-.1h-.097zm.068-2h.029C5.953 0 6.626.34 7.05.92l3.294 4.28c.641.83.549 2.007-.18 2.734h-.001L7.947 10.15a.143.143 0 00-.038.064.335.335 0 00-.009.126 10.213 10.213 0 002.247 4.886l.112.11c.024.025.047.05.07.077.368.45.83.874 1.36 1.354l.033.032.113.112a10.25 10.25 0 004.892 2.247c.06.006.102 0 .128-.008a.142.142 0 00.064-.038l2.218-2.217a2.08 2.08 0 012.734-.178l.003.002 4.298 3.303c.811.633 1.04 1.752.625 2.664a.89.89 0 01-.017.035l-.224.449c-1.015 2.283-3.296 3.772-5.794 3.827-4.821.1-9.496-1.54-13.18-4.672a.998.998 0 01-.06-.056l-.213-.214c-.844-.749-1.716-1.571-2.46-2.456l-.157-.158c-.02-.02-.04-.042-.06-.065C1.556 15.705-.14 11.037.01 6.21.067 3.714 1.556 1.438 3.839.424L4.253.22c.395-.23.834-.222.977-.22z" fill="#1B5773"/></svg></div></div><a class="mobile-panel__lk" href="https://lk.smclinic.ru" target="_blank"><svg width="29" height="29" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M19.852 22A5.616 5.616 0 009.1 22H7a7.66 7.66 0 0114.954 0h-2.102zm-5.38-16a4.5 4.5 0 110 9 4.5 4.5 0 010-9zm0 2a2.5 2.5 0 110 5 2.5 2.5 0 010-5z" fill="#1B5773"/><path fill-rule="evenodd" clip-rule="evenodd" d="M14.5 27C21.404 27 27 21.404 27 14.5S21.404 2 14.5 2 2 7.596 2 14.5 7.596 27 14.5 27zm0 2C22.508 29 29 22.508 29 14.5S22.508 0 14.5 0 0 6.492 0 14.5 6.492 29 14.5 29z" fill="#1B5773"/></svg></a><a class="mobile-panel__search" href="/search/"><svg width="22" height="22" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M9.23 16c4.042 0 7.232-3.181 7.232-7s-3.19-7-7.231-7C5.189 2 2 5.181 2 9s3.19 7 7.23 7zm0 2c5.099 0 9.232-4.03 9.232-9S14.329 0 9.23 0 0 4.03 0 9s4.133 9 9.23 9z" fill="#1B5773"/><path fill-rule="evenodd" clip-rule="evenodd" d="M20.33 21.235l-6.014-5.868 1.433-1.395 6.013 5.868-1.433 1.395z" fill="#1B5773"/></svg>
					</a>
				</div>
				<div class="mobile-panel__menu">
					<div class="mobile-menu">
						<div class="mobile-menu__box">
							<div class="mobile-panel__links">
<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"mobile-menu", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "submenu",
		"COMPONENT_TEMPLATE" => "mobile-menu",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "main",
		"USE_EXT" => "N"
	),
	false
);?>
							</div>
						</div>
					</div>
				</div>
				<div class="mobile-panel__feed">
					<div class="btn js-open-popup" data-target=".popup-form-feedback" data-analytics="OrderDoctor_Toolbar">Записаться на прием</div>
					<div class="btn btn_snd js-open-popup" data-target=".popup-form-callback" data-analytics="OrderCall_Toolbar">Обратный звонок</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="popup-win">
	<div class="popup-win__overlay"></div>
	<div class="popup-win__wrap">
		<div class="popup-win__box">
			<div class="popup-win__close-field js-popup-close"></div>
			<div class="popup-form popup-form-callback">
				<div class="popup-form__wrap">
					<form class="popup-form__form js-feedback-submit" method="POST" action="">
						<div class="popup-form__header">
							<div class="popup-form__title">Обратный звонок</div>
							<div class="popup-form__close js-popup-close">
								<div></div>
							</div>
						</div>
						<div class="popup-form__body">
							<div class="popup-form__box">
								<div class="popup-form__row">
									<input class="popup-form__input _name" name="name" value="">
									<label class="popup-form__label">Ваше имя</label>
								</div>
								<div class="popup-form__row">
									<input class="popup-form__input _phone" name="phone" value="">
									<label class="popup-form__label">Ваш телефон <span>*</span></label>
								</div>
								<div class="popup-form__row">
									<div class="popup-form__footnote">Запись через сайт является предварительной. Наш сотрудник свяжется с вами в ближайшее время	для подтверждения записи на прием.</div>
								</div>
							</div>
						</div>
						<div class="popup-form__footer">
							<div class="popup-form__submit">
								<button class="popup-form__button" type="submit">
									<div class="btn btn_dark">Отправить</div>
								</button>
								<input type="hidden" name="formtype" value="callback">
								<input type="hidden" name="analytics" value="OrderCall_Toolbar">
							</div>
							<div class="popup-form__private">Нажимая на кнопку, вы даете согласие<br> на <a rel="canonical" href="/about/obrabotka-dannykh/" target="_blank">обработку своих персональных данных</a></div>
						</div>
						<div class="form__loading">
							<div class="form__loading-bg">Отправка<br>данных...</div>
						</div>
					</form>
				</div>
			</div>
			<div class="popup-form popup-form-feedback">
				<div class="popup-form__wrap">
					<form class="popup-form__form js-feedback-submit" method="POST" action="">
						<div class="popup-form__header">
							<div class="popup-form__title">Записаться на прием</div>
							<div class="popup-form__close js-popup-close">
								<div></div>
							</div>
						</div>
						<div class="popup-form__body">
							<div class="popup-form__box">
								<div class="popup-form__row">
									<input class="popup-form__input _name" name="name" value="">
									<label class="popup-form__label">Ваше имя</label>
								</div>
								<div class="popup-form__row">
									<input class="popup-form__input _phone" name="phone" value="">
									<label class="popup-form__label">Ваш телефон <span>*</span></label>
								</div>
								<div class="popup-form__row">
									<div class="popup-form__date">
										<div class="popup-form__date-select">
											<input class="popup-form__input js-popup-select-date" name="date" value="" autocomplete="off">
											<label class="popup-form__label">Желаемая дата приема</label>
											<div class="popup-form__date-button">
												<div class="i-calendar"></div>
											</div>
											<div class="form-popup-calendar">
												<div class="form-popup-calendar__box">
													<div id="js-popup-calendar"></div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="popup-form__row">
									<select class="popup-form__select" name="time" placeholder="Время" autocomplete="off">
										<option></option>
										<option value="9:00">9:00</option>
										<option value="9:30">9:30</option>
										<option value="10:00">10:00</option>
										<option value="10:30">10:30</option>
										<option value="11:00">11:00</option>
										<option value="11:30">11:30</option>
										<option value="12:00">12:00</option>
										<option value="12:30">12:30</option>
										<option value="13:00">13:00</option>
										<option value="13:30">13:30</option>
										<option value="14:00">14:00</option>
										<option value="14:30">14:30</option>
										<option value="15:00">15:00</option>
										<option value="15:30">15:30</option>
										<option value="16:00">16:00</option>
										<option value="16:30">16:30</option>
										<option value="17:00">17:00</option>
										<option value="17:30">17:30</option>
										<option value="18:00">18:00</option>
										<option value="18:30">18:30</option>
										<option value="19:00">19:00</option>
										<option value="19:30">19:30</option>
										<option value="20:00">20:00</option>
										<option value="20:30">20:30</option>
										<option value="21:00">21:00</option>
										<option value="21:30">21:30</option>
									</select>
									<label class="popup-form__label">Время</label>
								</div>
								<div class="popup-form__row">
									<div class="popup-form__footnote">Запись через сайт является предварительной. Наш сотрудник свяжется с вами в ближайшее время	для подтверждения записи на прием.</div>
								</div>
							</div>
						</div>
						<div class="popup-form__footer">
							<div class="popup-form__submit">
								<button class="popup-form__button" type="submit">
									<div class="btn btn_dark">Отправить</div>
								</button>
								<input type="hidden" name="formtype" value="appointment">
								<input type="hidden" name="analytics" value="OrderDoctor_Toolbar">
							</div>
							<div class="popup-form__private">Нажимая на кнопку, вы даете согласие<br> на <a rel="canonical" href="/about/obrabotka-dannykh/" target="_blank">обработку своих персональных данных</a></div>
						</div>
						<div class="form__loading">
							<div class="form__loading-bg">Отправка<br>данных...</div>
						</div>
					</form>
				</div>
			</div>
			<? if(preg_match('/zubotekhnicheskaya-laboratoriya\/.+/i', $APPLICATION->GetCurPage(false))===1): ?>
			<div class="popup-form popup-form-lab">
				<div class="popup-form__wrap">
					<form class="popup-form__form js-feedback-submit" method="POST" action="">
						<div class="popup-form__header">
							<div class="popup-form__title">Заказать</div>
							<div class="popup-form__close js-popup-close">
								<div></div>
							</div>
						</div>
						<div class="popup-form__body">
							<div class="popup-form__box">
								<div class="popup-form__row">
									<input class="popup-form__input" name="name" value="">
									<label class="popup-form__label">Имя</label>
								</div>
								<div class="popup-form__row">
									<input class="popup-form__input" name="phone" value="">
									<label class="popup-form__label">Телефон <span>*</span></label>
								</div>
								<div class="popup-form__row">
									<input class="popup-form__input" name="email" value="">
									<label class="popup-form__label">E-mail <span>*</span></label>
								</div>
								<div class="popup-form__row">
									<select class="popup-form__select" name="delivery" value="">
										<option value="Самовывоз">Самовывоз</option>
									</select>
								</div>
								<input type="hidden" name="product" value="Бюгельный протез">
								<input type="hidden" name="amount" value="1">
							</div>
						</div>
						<div class="popup-form__footer">
							<div class="popup-form__submit">
								<button class="popup-form__button" type="submit">
									<div class="btn btn_dark">Отправить</div>
								</button>
								<input type="hidden" name="formtype" value="lab">
							</div>
							<div class="popup-form__private">Нажимая на кнопку, вы даете согласие<br> на <a rel="canonical" href="/about/obrabotka-dannykh/" target="_blank">обработку своих персональных данных</a></div>
						</div>
						<div class="form__loading">
							<div class="form__loading-bg">Отправка<br>данных...</div>
						</div>
					</form>
				</div>
			</div>
			<? endif ?>
		</div>
	</div>
	<div class="loading loading_big">
		<div class="loading__anim">
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
		</div><span>Загрузка</span>
	</div>
</div>
<div class="cookies-agree">
	<div class="cookies-agree__wrap">
		<div class="cookies-agree__content">
			<div class="cookies-agree__text"><a href="/about/obrabotka-dannykh/#privacy_policy" target="_blank">Мы используем cookie. Это позволяет нам анализировать взаимодействие посетителей с сайтом и делать его лучше. Продолжая пользоваться сайтом, вы соглашаетесь с использованием <u>файлов cookie</u>.</a></div>
			<div class="cookies-agree__button">
				<div class="cookies-agree__link btn" id="cookies-agree">Принять</div>
			</div>
		</div>
	</div>
</div>

<?php if($APPLICATION->GetCurPage(false) !== '/') { ?>

	<?/*
			</div>
		</div>
	</div>

	*/?>
<?php } ?>


<?php



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
<?// $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/analytic.js'); ?>

<?SMClinicBuild::addJsBuild();?>
<script type="text/javascript">
<?// скрипт для отложенной загрузки изображений с параметрами ?>
var lazyload={instance:{},images:[],wrapperClass:"lazy-img-wrap",init:function(){this.instance=this.scroll.bind(this),window.addEventListener?(window.addEventListener("load",this.ready.bind(this),!1),window.addEventListener("scroll",this.instance,!1)):window.attachEvent?(window.attachEvent("onload",this.ready.bind(this)),window.attachEvent("scroll",this.instance)):(window.onload=this.ready.bind(this),window.onscroll=this.instance)},ready:function(){var e,t=document.getElementsByTagName("img"),n=[],i=this;if(t.length){for(var s=0;s<t.length;s++)if(t[s].dataset.origin||t[s].dataset.src){var a=document.createElement("div");e=t[s].dataset.src?t[s].dataset.src:t[s].dataset.origin,a.classList.add(i.wrapperClass),a.dataset.src=e,t[s].parentNode.insertBefore(a,t[s]),a.appendChild(t[s]),n.push(a)}return n.length?(i.images=n,void this.scroll()):void(window.removeEventListener?window.removeEventListener("scroll",this.instance,!1):window.detachEvent&&window.detachEvent("onload",this.instance))}},scroll:function(){for(var e,t,n=window.innerHeight>0?window.innerHeight:screen.height,i=window.innerWidth>0?window.innerWidth:screen.width,s=document.documentElement.scrollTop||document.body&&document.body.scrollTop||0,a=!1,o=s+n,r=s-n,d=0;"object"==typeof this.images[d];){if(e=this.findPosY(this.images[d]),a=!1,o>=e&&e>r){if(t=this.images[d].getElementsByTagName("img")[0],t.dataset.params){var c=this.params(t.dataset.params);if(c.responsive.length)for(var h=0;h<c.responsive.length;h++)i<=c.responsive[h].breakpoint&&c.responsive[h].hide&&(a=!0)}a?(t.src="",t.style.display="none"):t.src=this.images[d].dataset.src,this.images[d].parentNode.insertBefore(t,this.images[d].nextSibling),this.images[d].parentNode.removeChild(this.images[d]),this.images.splice(d,1),d--,this.images.length||(window.removeEventListener?window.removeEventListener("scroll",this.instance,!1):window.detachEvent&&window.detachEvent("onload",this.instance))}d++}},params:function(e){return JSON.parse(e.replace(/&q;/g,'"'))},findPosX:function(e){var t=0;if(e.offsetParent)for(;;){if(t+=e.offsetLeft,!e.offsetParent)break;e=e.offsetParent}else e.x&&(t+=e.x);return t},findPosY:function(e){var t=0;if(e.offsetParent)for(;;){if(t+=e.offsetTop,!e.offsetParent)break;e=e.offsetParent}else e.y&&(t+=e.y);return t}};lazyload.init(),window.addEventListener?document.addEventListener("DOMContentLoaded",lazyload.init(),!1):document.onreadystatechange=lazyload.init();
</script>
</body>
</html>
