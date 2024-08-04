<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");?>
<? include_once($_SERVER["DOCUMENT_ROOT"]."/include/night_form_text.php"); ?>
<div class="mainform_box">
	<div class="mainform_img"></div>
	
	<div class="popup_red_text">Акция!</div>
	<div class="popup_title">Имплантация зубов с выгодой до 16 000 рублей!</div>
	<div class="popup_title">Записаться на бесплатную консультацию имплантолога</div>
	<br />
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
		<button name="submit" value="main" type="submit" class="submit_mainform">Получить <br />бесплатную консультацию</button>
		<div class="agreement">Нажимая на кнопку, вы даете согласие<br> на <a rel="canonical" href="/about/obrabotka-dannykh/" target="_blank">обработку своих персональных данных</a></div>
		<div class="mainform_datetime">Акция действует с 19 по 29 апреля 2018 года</div>
		<br />
		<div class="mainform_datetime"><a target="_blank" href="/stock/aktsiya-predlozhenie-goda-ot-sm-stomatologiya/">Узнать подробнее об акции</a></div>
	</form><!-- /.popup_ambulance -->
</div>
<style>
.mainform_box {
	text-align: center;
	width: 380px;
	height: 540px;
	overflow: hidden;
	background-color: #f3f3f1;
	border: 2px solid #a03339;
	padding: 0 20px;
}
.mainform_box .popup_red_text {
	color: #ff3254;
	font-size: 19px;
	position: absolute;
	top: 70px;
	padding-left: 10px;
}
.mainform_box .popup_title {
	color: #1b5773;
	font-size: 22px;
	line-height: 27px;
	margin-bottom: 15px;
	padding-top: 10px;
	text-transform: uppercase;
	margin: 0 10px;
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
	line-height: 24px;
	text-transform: uppercase;
	width: 320px;
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
   .mainform_box_offer .mainform_datetime {
        margin-top: 5px;
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
				url: "/include/forms/offers_time_ajax.php",
				type: "POST",
				data: { name: name, phone: phone, source: sources_form },
				dataType: "html",
				success: function(jsondata){
					$(".mainform_box #mainform").hide();
					$(".mainform_box .popup_msg").show();
					try {dataLayer.push({'event': 'myTrackEvent', 'eventCategory': 'Form', 'eventAction': 'SendForm', 'eventLabel': 'GetConsult_StockTime'});} catch (error) {}
					ga('send', 'event', 'Form', 'SendForm', 'GetConsult_StockTime');
					yaCounter42012629.reachGoal('FormSend');
				}
			});
		}
		return false;
	});
</script>
