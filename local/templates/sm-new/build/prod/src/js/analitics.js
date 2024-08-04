function analitic() {
	yaCounter42012629.reachGoal('FormSend');
	if ($('.js-analytic-question').hasClass('header')) {
		try {dataLayer.push({'event': 'myTrackEvent', 'eventCategory': 'Form', 'eventAction': 'Send', 'eventLabel': 'AskQuestion_Toolbar'});} catch (error) {}
		ga('send', 'event', 'Form', 'Send', 'AskQuestion_Toolbar');
	} else {
		try {dataLayer.push({'event': 'myTrackEvent', 'eventCategory': 'Form', 'eventAction': 'Send', 'eventLabel': 'AskQuestion_H1'});} catch (error) {}
		ga('send', 'event', 'Form', 'Send', 'AskQuestion_H1');
	}
}