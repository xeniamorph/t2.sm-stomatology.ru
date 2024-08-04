			<? if($APPLICATION->GetCurPage(false) !== '/'): ?>
			</main>
			<?php endif;?>
			<div class="footer">
				<footer>
                    <div class="footer__top">
						<div class="container">
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
								</div>
								<div class="footer__col">
                                    <div class="footer__title">Контакты</div>
                                    <a href="#" class="footer-bottom__tel">+7 495 126 49 21</a>
                                    <div class="footer-bottom__socials">
                                        <a href="#" class="footer-bottom__soc">
                                            <img src="/local/templates/sm-new/img/footer-soc-vk.svg">
                                        </a>
                                        <a href="#" class="footer-bottom__soc">
                                            <img src="/local/templates/sm-new/img/footer-soc-tel.svg">
                                        </a>
                                        <a href="#" class="footer-bottom__soc">
                                            <img src="/local/templates/sm-new/img/footer-soc-ok.svg">
                                        </a>
                                    </div>
                                    <div class="footer-bottom__stores">
                                        <a href="#" class="footer-bottom__store footer-bottom__store_apple ">
                                        </a>
                                        <a href="#" class="footer-bottom__store footer-bottom__store_gallery">
                                        </a>
                                        <a href="#" class="footer-bottom__store footer-bottom__store_google">
                                        </a>
<!--                                        <a href="#" class="footer-bottom__store footer-bottom__store_rustore">-->
<!--                                        </a>-->
                                    </div>
                                    <div class="footer-bottom__payments">
                                            <div class="footer-bottom__headline">Мы принимаем к оплате</div>
                                            <div class="footer-bottom__cards">
                                            <div class="footer-bottom__card footer-bottom__card_mir">
                                            </div>
                                            <div class="footer-bottom__card footer-bottom__card_visa">
                                            </div>
                                            <div class="footer-bottom__card footer-bottom__card_master">
                                            </div>
                                            <div class="footer-bottom__card footer-bottom__card_mastercard">
                                            </div>
                                        </div>
                                    </div>

<!--                                    <div class="footer__24">-->
<!--										<div class="footer__text-block">-->
<!--											<div class="footer__text-item">-->
<!--												--><?//$APPLICATION->IncludeComponent(
//													"bitrix:main.include",
//													"text",
//													array(
//														"AREA_FILE_SHOW" => "file",
//														"AREA_FILE_SUFFIX" => "",
//														"COMPONENT_TEMPLATE" => "text",
//														"EDIT_TEMPLATE" => "",
//														"PATH" => SITE_TEMPLATE_PATH."/include/template/footer_recommendation.php"
//													),
//													false
//												);?>
<!--											</div>-->
<!---->
<!--											<div class="footer__text-item">-->
<!--												--><?//$APPLICATION->IncludeComponent(
//													"bitrix:main.include",
//													"text",
//													array(
//														"AREA_FILE_SHOW" => "file",
//														"AREA_FILE_SUFFIX" => "",
//														"COMPONENT_TEMPLATE" => "text",
//														"EDIT_TEMPLATE" => "",
//														"PATH" => SITE_TEMPLATE_PATH."/include/template/footer_responsibility.php"
//													),
//													false
//												);?>
<!--											</div>-->
<!---->
<!--											<div class="footer__text-item">-->
<!--												--><?//$APPLICATION->IncludeComponent(
//													"bitrix:main.include",
//													"text",
//													array(
//														"AREA_FILE_SHOW" => "file",
//														"AREA_FILE_SUFFIX" => "",
//														"COMPONENT_TEMPLATE" => "text",
//														"EDIT_TEMPLATE" => "",
//														"PATH" => SITE_TEMPLATE_PATH."/include/template/footer_policy.php"
//													),
//													false
//												);?>
<!--											</div>-->
<!--										</div>-->
<!--									</div>-->
								</div>
							</div>
						</div>
                    </div>
                    <div class="footer-bottom">
                        <div class="container">
                            <div class="footer-bottom__cols">
                                <div class="footer-bottom__col">
                                    <div class="footer-bottom__logo">
                                        <img src="/local/templates/sm-new/img/bot_logo.png" alt="">
                                    </div>
                                </div>
                                <div class="footer-bottom__col">
                                    <div class="footer-bottom__text">
                                        <p>Администрация клиники принимает все меры по своевременному обновлению размещенного на сайте прайс-листа, однако во избежание возможных недоразумений, советуем уточнять стоимость услуг в регистратуре или в контакт-центре по телефону +7 (495) 266-44-01. Размещенный прайс не является офертой. Медицинские услуги оказываются на основании договора</p>
                                        <p><b>This site is protected by reCAPTCHA and the <a href="#">Google Privacy Policy</a> and <a href="#">Terms of Service</a> apply.</b></p>
                                        <p>2024 © «Дэрайс» - СМ Стоматология <a class="footer-bottom__link" href="#">Политика конфиденциальности</a></p>
                                    </div>
                                </div>
                                <div class="footer-bottom__col">
                                    <div class="footer-bottom__buttons">
                                        <a href="#" class="footer-bottom__button footer-bottom__button_call">Обратный звонок</a>
                                        <a href="#" class="footer-bottom__button footer-bottom__button_sign">Записаться на прием</a>
                                    </div>
                                </div>
                            </div>
                            <div class="footer__warning">
                                <div>Имеются противопоказания. Необходимо проконсультироваться со специалистом</div>
                            </div>
                        </div>
                    </div>
				</footer>
			</div>
			<?$APPLICATION->IncludeComponent(
				"bitrix:main.include",
				"text",
				array(
					"AREA_FILE_SHOW" => "file",
					"AREA_FILE_SUFFIX" => "",
					"COMPONENT_TEMPLATE" => "text",
					"EDIT_TEMPLATE" => "",
					"PATH" => SITE_TEMPLATE_PATH."/include/template/popup-form.php"
				),
				false
			);?>
		</div>
	</div>
<script src="https://www.google.com/recaptcha/api.js?render=6Lfw1yUkAAAAANtfLDR7ChF7uhp6tvkQrGTsa-pY"></script>
<script type="text/javascript">
	<?// скрипт для отложенной загрузки изображений с параметрами ?>
	var lazyload={instance:{},images:[],wrapperClass:"lazy-img-wrap",init:function(){this.instance=this.scroll.bind(this),window.addEventListener?(window.addEventListener("load",this.ready.bind(this),!1),window.addEventListener("scroll",this.instance,!1)):window.attachEvent?(window.attachEvent("onload",this.ready.bind(this)),window.attachEvent("scroll",this.instance)):(window.onload=this.ready.bind(this),window.onscroll=this.instance)},ready:function(){var e,t=document.getElementsByTagName("img"),n=[],i=this;if(t.length){for(var s=0;s<t.length;s++)if(t[s].dataset.origin||t[s].dataset.src){var a=document.createElement("div");e=t[s].dataset.src?t[s].dataset.src:t[s].dataset.origin,a.classList.add(i.wrapperClass),a.dataset.src=e,t[s].parentNode.insertBefore(a,t[s]),a.appendChild(t[s]),n.push(a)}return n.length?(i.images=n,void this.scroll()):void(window.removeEventListener?window.removeEventListener("scroll",this.instance,!1):window.detachEvent&&window.detachEvent("onload",this.instance))}},scroll:function(){for(var e,t,n=window.innerHeight>0?window.innerHeight:screen.height,i=window.innerWidth>0?window.innerWidth:screen.width,s=document.documentElement.scrollTop||document.body&&document.body.scrollTop||0,a=!1,o=s+n,r=s-n,d=0;"object"==typeof this.images[d];){if(e=this.findPosY(this.images[d]),a=!1,o>=e&&e>r){if(t=this.images[d].getElementsByTagName("img")[0],t.dataset.params){var c=this.params(t.dataset.params);if(c.responsive.length)for(var h=0;h<c.responsive.length;h++)i<=c.responsive[h].breakpoint&&c.responsive[h].hide&&(a=!0)}a?(t.src="",t.style.display="none"):t.src=this.images[d].dataset.src,this.images[d].parentNode.insertBefore(t,this.images[d].nextSibling),this.images[d].parentNode.removeChild(this.images[d]),this.images.splice(d,1),d--,this.images.length||(window.removeEventListener?window.removeEventListener("scroll",this.instance,!1):window.detachEvent&&window.detachEvent("onload",this.instance))}d++}},params:function(e){return JSON.parse(e.replace(/&q;/g,'"'))},findPosX:function(e){var t=0;if(e.offsetParent)for(;;){if(t+=e.offsetLeft,!e.offsetParent)break;e=e.offsetParent}else e.x&&(t+=e.x);return t},findPosY:function(e){var t=0;if(e.offsetParent)for(;;){if(t+=e.offsetTop,!e.offsetParent)break;e=e.offsetParent}else e.y&&(t+=e.y);return t}};lazyload.init(),window.addEventListener?document.addEventListener("DOMContentLoaded",lazyload.init(),!1):document.onreadystatechange=lazyload.init();

	$('body').on('click', '.js-open-popup', function(e){
	try {$('.popup-form-feedback input[name="analytics"], .popup-form-callback input[name="analytics"]').val($(this).data('analytics'));} catch (error) {}
	});

	grecaptcha.ready(function () {
		grecaptcha.execute('6Lfw1yUkAAAAANtfLDR7ChF7uhp6tvkQrGTsa-pY', { action: 'contact' }).then(function (token) {
		   $('.recaptcha-response').val(token);
		});
	});
</script>
</body>
</html>