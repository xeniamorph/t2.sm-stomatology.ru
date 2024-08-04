<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");?>
<? include_once($_SERVER["DOCUMENT_ROOT"]."/include/night_form_text.php"); ?>
<div class="mainform_box">
	<div class="mainform_img"></div>
	<div class="popup_title">Круглосуточная<br /> консультация</div>
		
		<div class="msg_mainform" style="display: none;"><br />Спасибо за оставленную заявку.<br /> Наш оператор свяжется с вами с 8:00 до 22:00<br /><br /> Заявки, поступившие после 22:00, будут обработаны на следующий день.
		</div>
		<form id="mainform" action="" method="POST">
			<div class="form_box clearfix">
				<input name="name" type="text" class="name_mainform" placeholder="Ваше имя">		
			</div><!-- /.form_box -->		
			<div class="form_box clearfix">
				<input name="phone" type="tel" class="phone_mainform" placeholder="Ваш телефон*">
			</div><!-- /.form_box -->
			
			<div class="form_box time_box clearfix">
				<input name="time" type="text" class="time_mainform" placeholder="Желательное время звонка" readonly>
				<div class="time_dropbox_mainform">
					<?/*<div class="time_now" data-value="Сейчас">Сейчас</div>*/?>
					<?
					for($i = 8; $i <= 21; $i++) {
						echo '<div class="time_point" data-value="'.$i.':00">'.$i.'<sup>00</sup></div>';
						echo '<div class="time_point" data-value="'.$i.':30">'.$i.'<sup>30</sup></div>';
					}
					?>
					<div class="time_point" data-value="22:00">22<sup>00</sup></div>
					<div style="clear: both;"></div>
				</div>
			</div><!-- /.form_box -->
			
			<input type="submit" class="submit_mainform" value="Отправить заявку">
			<div class="agreement">Нажимая на кнопку, вы даете согласие<br> на <a rel="canonical" href="/about/obrabotka-dannykh/" target="_blank">обработку своих персональных данных</a></div>
			<div class="popup_text_small">Круглосуточный контакт-центр проконсультирует Вас по ценам, услугам, времени работы клиник, запишет Вас к врачу.</div>
		</form><!-- /.popup_ambulance -->
</div>
<style>
.mainform_box {
	text-align: center;
	width: 497px;
	height: 590px;
	overflow: hidden;
    background-color: #f3f3f1;
    border: 2px solid #a03339;
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
#mainform .time_mainform[type="text"] {
    cursor: pointer;
    font-size: 13px;
    width: 210px;
}
.mainform_img {
  background: url("/local/templates/sm-stomatology/builds/prod/img/common/logo.png") no-repeat scroll 0 0;
  height: 58px;
  margin: 0 auto;
  width: 58px;
  margin-top: 20px;
}
#mainform .form_box {
  margin: 20px auto 20px;
}
#mainform .form_box.time_box {
  position: relative;
  width: 210px;
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
.popup_text_big {
  font-size: 22px;
  font-weight: 100;
  line-height: 26px;
  padding: 10px;
  color: #406251;
}
.popup_text_small {
    font-size: 16px;
    font-weight: 100;
    line-height: 21px;
    margin-bottom: 10px;
    padding: 0 53px;
    color: #696969;
    margin-top: 10px;
}
.not_valid {
  color: red !important;
}
.mainform_box .popup_title {
  color: #c82550;
  font-size: 38px;
  font-weight: bold;
  line-height: 38px;
  margin-bottom: 0;
  padding-top: 15px;
  text-transform: uppercase;
  line-height: 1.2;
  letter-spacing: 2px;
}
.mainform_box .time_dropbox_mainform {
    background-color: #fff;
    border-color: #a03339;
    border-style: solid;
    border-width: 2px 2px 1px;
    display: none;
    margin: 0 auto;
    position: absolute;
    top: -127px;
    width: 210px;
}
.mainform_box .time_point {
  float: left;
  padding: 4px 0;
  width: 40px;
  cursor: pointer;
  height: 21px;
 color: #1b5773;
}
.mainform_box .time_now {
  padding: 5px 0;
  cursor: pointer;
  height: 21px;
}
.time_point:hover, .time_now:hover {
  background-color: #7f966c;
  color: #fff;
}
.mainform_box .msg_mainform {
  font-size: 20px;
  padding: 0 43px;
}
.fancybox-item.fancybox-close {
  background: url("/images/btn_close.png") no-repeat scroll 0 0;
  height: 15px;
  right: 28px;
  top: 28px;
  width: 15px;
}
.fancybox-opened .fancybox-skin {
	box-shadow: none;
}
.fancybox-skin {
 background-color: transparent;
}

.fancybox-inner {
  border-radius: 0px;
}

</style>
<script type="text/javascript">
    if(!isMobile.any()) {
        $('.phone_mainform').mask('9 (999) 999-99-99');
    }
	$('input, textarea').placeholder();
	$('.time_mainform').click(function() {
		$('.time_dropbox_mainform').show();
	});
	$('.time_dropbox_mainform div').click(function() {
		//console.log($(this).data('value'));
		$('.time_mainform').val($(this).data('value'));
	});
	$(document).mouseup(function (e){
		var time_mainform = $('.time_mainform');
		var time_dropbox_mainform = $('.time_dropbox_mainform');
		if (!time_mainform.is(e.target) &&
			time_mainform.has(e.target).length === 0) {
			$('.time_dropbox_mainform').hide();
		}
	});
	var send_mainform = true;
	$('#mainform').submit(function(){
		var go = true;
		var name = $('.name_mainform').val();
		var phone = $('.phone_mainform').val();
		var time = $('.time_mainform').val();
		
		if(phone == '')	{
		    $(".phone_mainform").addClass("not_valid").focus();	    
		    go = false;
		}			

		if(go && send_mainform) {
			send_mainform = false;
			$.ajax({
				url: "/include/forms/recall_ajax_night.php?v2",
				type: "POST",
				data: { name: name, phone: phone, time: time, source: sources_form },
				dataType: "html",
				success: function(jsondata){
					$("#mainform").hide();
					$(".msg_mainform").show();
          try {dataLayer.push({'event': 'myTrackEvent', 'eventCategory': 'Form', 'eventAction': 'Send', 'eventLabel': 'OrderCall_Leave'});} catch (error) {}
					ga('send', 'event', 'Form', 'Send', 'OrderCall_Leave');
					yaCounter42012629.reachGoal('FormSend');
				}
			});
		}
		return false;
	});
</script>
