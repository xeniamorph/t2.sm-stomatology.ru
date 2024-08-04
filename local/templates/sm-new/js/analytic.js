$(function() {
	$('.js-analytic-appoiment').on('submit', function() {
		yaCounter42012629.reachGoal('FormSend');
		if ($(this).hasClass('header')) {
			try {dataLayer.push({'event': 'myTrackEvent', 'eventCategory': 'Form', 'eventAction': 'Send', 'eventLabel': 'OrderDoctor_Toolbar'});} catch (error) {}
			ga('send', 'event', 'Form', 'Send', 'OrderDoctor_Toolbar');
		} else {
			try {dataLayer.push({'event': 'myTrackEvent', 'eventCategory': 'Form', 'eventAction': 'Send', 'eventLabel': 'OrderDoctor_Page'});} catch (error) {}
			ga('send', 'event', 'Form', 'Send', 'OrderDoctor_Page');
		}
	});

	$('.js-analytic-callback').on('submit', function() {
		yaCounter42012629.reachGoal('FormSend');
		if ($(this).hasClass('header')) {
			try {dataLayer.push({'event': 'myTrackEvent', 'eventCategory': 'Form', 'eventAction': 'Send', 'eventLabel': 'OrderCall_Toolbar'});} catch (error) {}
			ga('send', 'event', 'Form', 'Send', 'OrderCall_Toolbar');
		} else {
			try {dataLayer.push({'event': 'myTrackEvent', 'eventCategory': 'Form', 'eventAction': 'Send', 'eventLabel': 'OrderCall_Mobile'});} catch (error) {}
			ga('send', 'event', 'Form', 'Send', 'OrderCall_Mobile');
		}
	});

	
	$('.js-analytic-callback-in-text').on('submit', function() {
		try {dataLayer.push({'event': 'myTrackEvent', 'eventCategory': 'Form', 'eventAction': 'Send', 'eventLabel': 'OrderCall_Stat'});} catch (error) {}
		ga('send', 'event', 'Form', 'Send', 'OrderCall_Stat');
		yaCounter42012629.reachGoal('FormSend');
	});
	
	$('.js-analytic-appoiment-in-text').on('submit', function() {
		try {dataLayer.push({'event': 'myTrackEvent', 'eventCategory': 'Form', 'eventAction': 'Send', 'eventLabel': 'OrderDoctor_Stat'});} catch (error) {}
		ga('send', 'event', 'Form', 'Send', 'OrderDoctor_Stat');
		yaCounter42012629.reachGoal('FormSend');
	});
	
	$('.modal').on('show.bs.modal', function(e){
		var $btn = $(e.relatedTarget);
		var $wnd = $(e.target);
		if ($btn.data('position') === 'header') {
			$wnd.find('form').addClass('header');
		} else {
			$wnd.find('form').removeClass('header');
		}
	});
});
