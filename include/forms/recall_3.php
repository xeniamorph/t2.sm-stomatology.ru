<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");?>
<? include_once($_SERVER["DOCUMENT_ROOT"]."/include/night_form_text.php"); ?>
<div class="mainform_box">
	<div class="mainform_img"></div>
	<div class="popup_title">Хотите, мы<br /> вам перезвоним?</div>
	<?/*<div class="popup_title_small">в течение 29 секунд?</div>*/?>
	<div class="popup_msg" style="display: none;"><br />Спасибо за оставленную заявку.<br /> Наш оператор свяжется с вами с 8:00 до 22:00<br /><br /> Заявки, поступившие после 22:00, будут обработаны на следующий день.
	</div>
	<form id="mainform" action="" method="POST">
		<div class="form_box clearfix">
			<input name="name" type="text" class="name_mainform" placeholder="Ваше имя">		
		</div><!-- /.form_box -->		
		<div class="form_box clearfix">
			<input name="phone" type="tel" class="phone_mainform" placeholder="Ваш телефон*">
		</div><!-- /.form_box -->
		<div class="form_separator"></div>
		
		<input type="submit" class="submit_mainform" value="Жду звонка">
		<div class="agreement">Нажимая на кнопку, вы даете согласие<br> на <a rel="canonical" href="/about/obrabotka-dannykh/" target="_blank">обработку своих персональных данных</a></div>
	</form><!-- /.popup_ambulance -->
	<div class="popup_text_big">Мы поможем быстро найти то,<br /> что Вам нужно!</div>
</div>
<style>
.mainform_box {
	text-align: center;
	width: 380px;
	height: 460px;
	overflow: hidden;
    background-color: #f3f3f1;
    border: 2px solid #a03339;
}
.mainform_box .popup_title {
  color: #1b5773;
  font-size: 27px;
  line-height: 27px;
  margin-bottom: 15px;
  padding-top: 10px;
  text-transform: uppercase;
}
.mainform_box .popup_title_small {
  color: #384e41;
  font-size: 19px;
  margin-bottom: 15px;
}
.mainform_box .popup_text_big {
  padding: 18px 0;
}
.mainform_box .popup_msg {
  padding: 0 43px;
  font-size: 20px;
}
#mainform {
	display: block;
}
.mainform_img {
    background: url("/local/templates/sm-stomatology/builds/prod/img/common/logo.png") no-repeat scroll 0 0;
    height: 58px;
    margin: 0 auto;
    width: 58px;
    margin-top: 20px;
}
#mainform input[type="text"], #mainform input[type="tel"] {
    border: 0 none;
    border-radius: 3px;
    padding: 8px;
    width: 210px;
    border: 2px solid #a03339;
    color: #406251;
    font-size: 15px;
}
#mainform .form_box {
  margin: 0 auto 20px;
}
#mainform .submit_mainform {
    background-color: #a03339;
    border: 0 none;
    color: #fff;
    cursor: pointer;
    font-size: 20px;
    height: 53px;
    line-height: 3px;
    text-transform: uppercase;
    width: 246px;
}
#mainform .submit_mainform:hover {
	opacity: 0.8;
}
.fancybox-item.fancybox-close {
  background: url("/images/btn_close.png") no-repeat scroll 0 0;
  height: 15px;
  width: 15px;
  right: 18px;
  top: 18px;
}
.not_valid {
  color: red !important;
}
.fancybox-inner {
  overflow: hidden !important;
}
.fancybox-skin {
  border-radius: 0px;
}
</style>
<script type="text/javascript" src="/js/jquery.maskedinput.min.js"></script>
<script type="text/javascript">
    if(!isMobile.any()) {
        $('.mainform_box .phone_mainform').mask('9 (999) 999-99-99');
    }
	$('.mainform_box input, .mainform_box textarea').placeholder();
	var send_mainform = true;
	$('.mainform_box #mainform').submit(function(){
		var go = true;
		var name = $('.mainform_box .name_mainform').val();
		var phone = $('.mainform_box .phone_mainform').val();     
		
		if(phone == '')	{
		    $(".mainform_box .phone_mainform").addClass("not_valid").focus();	    
		    go = false;
		}			

		if(go && send_mainform) {
			send_mainform = false;
			$.ajax({
				url: "/include/forms/recall_ajax2.php",
				type: "POST",
				data: { name: name, phone: phone, source: sources_form },
				dataType: "html",
				success: function(jsondata){
					$(".mainform_box #mainform").hide();
					$(".mainform_box .popup_msg").show();
					try {dataLayer.push({'event': 'myTrackEvent', 'eventCategory': 'Form', 'eventAction': 'Send', 'eventLabel': 'OrderCall_Leave'});} catch (error) {}
					ga('send', 'event', 'Form', 'Send', 'OrderCall_Leave');
					yaCounter42012629.reachGoal('FormSend');
				}
			});
		}
		return false;
	});
</script>
