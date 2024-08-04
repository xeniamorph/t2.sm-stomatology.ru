(function() {
	$(document).ready(function () {
		if(!isMobile.any()) {
			$('.form-block .form-phone, .form-block-question .form-phone').mask('9 (999) 999-99-99');
		}
		$('.form-block form').submit(function() {
			var form_valid = true;
			
			var form_serialize = $(this).serialize();
			var phone = $(this).find('.form-phone').val();
			
			$(this).find('.not-valid').removeClass('not-valid');
			
			if(phone == '') {
				$(this).find('.form-phone').addClass('not-valid');
				form_valid = false;
			}
			
			if(form_valid) {
				send_mainform = false;
				$.ajax({
					url: "/include/forms/promopage_ajax.php",
					type: "POST",
					data: form_serialize,
					dataType: "html",
					success: function(jsondata){
						$('.form-block form').hide();
						$('.form-block .form-submit').hide();
						$('.form-block .form-msg').show();
						try {dataLayer.push({'event': 'myTrackEvent', 'eventCategory': 'Form', 'eventAction': 'Send', 'eventLabel': 'OrderCall_Stat'});} catch (error) {}
						ga('send', 'event', 'Form', 'Send', 'OrderCall_Stat');
						yaCounter42012629.reachGoal('FormSend');
					}
				});
			} else {
				//check.parent().addClass('not-valid');
			}
			return false;
		});
		
		$('.form-block-question form').submit(function() {
			var form_valid = true;
			
			var form_serialize = $(this).serialize();
			var phone = $(this).find('.form-phone').val();
			
			$(this).find('.not-valid').removeClass('not-valid');
			
			if(phone == '') {
				$(this).find('.form-phone').addClass('not-valid');
				form_valid = false;
			}
			
			if(form_valid) {
				send_mainform = false;
				$.ajax({
					url: "/include/forms/promopage_ajax.php",
					type: "POST",
					data: form_serialize,
					dataType: "html",
					success: function(jsondata){
						$('.form-block-question form').hide();
						$('.form-block-question .form-submit').hide();
						$('.form-block-question .form-msg').show();
						try {dataLayer.push({'event': 'myTrackEvent', 'eventCategory': 'Form', 'eventAction': 'Send', 'eventLabel': 'OrderCall_Stat'});} catch (error) {}
						ga('send', 'event', 'Form', 'Send', 'OrderCall_Stat');
						yaCounter42012629.reachGoal('FormSend');
					}
				});
			} else {
				//check.parent().addClass('not-valid');
			}
			return false;
		});
	});
})();
