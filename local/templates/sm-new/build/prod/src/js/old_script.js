function get_cookie(cookie_name) {
	var results = document.cookie.match('(^|;) ?' + cookie_name + '=([^;]*)(;|$)');
	if (results)
		return (unescape(results[2]));
	else
		return null;
}
$(document).ready(function () {
	$('.owl-carousel-lab').owlCarousel({
		loop: true,
		margin: 10,
		nav: true,
		dots: false,
		responsive:{
			0:{
				items:3
			},
			600:{
				items:3
			},
			1000:{
				items:5
			}
		}
	});
});

var toolbar_tel = false;
var toolbar_call_form = false;
if (isMobile.any()) {
	/*function toolbarToggle() {
		$('#mobileToolbar').slideDown("fast");
		if (toolbar_tel == false) {
			toolbar_tel = true;
		}
	}*/
	$(document).ready(function () {
		$('body').append('<div id="mobileToolbar"><span class="call_phone_buton1"><a class="right-bottom" href="tel:+74957774806"><div><span></span>Позвонить</div></a></span><a data-toggle="modal" data-target="#modal-callback" href="" class="left-bottom">Заказать звонок</a></div>');
		$('#mobileToolbar').css('display', 'block');
		/*var toolbar_timer = setTimeout(toolbarToggle, 1500);
		$(window).scroll(function () {
			toolbar_visible = false;
			$('#mobileToolbar').css('display', 'none');
			clearTimeout(toolbar_timer);
			toolbar_timer = setTimeout(toolbarToggle, 500);
		});*/
		$('#mobileToolbar .right-bottom').click(function (e) {
			var mob_tel = $('.b-header .b-phone--header').text();
			if (mob_tel != undefined) {
				mob_tel = 'tel:+' + (mob_tel.replace(/[^.\d]+/g, ''));
				//console.log(mob_tel);
				$('#mobileToolbar .right-bottom').attr('href', mob_tel);
			}

			//yaCounter28272836.reachGoal('call_mob');
			//ga('send', 'event', 'call_mob', 'call_mob_sent');
		});
		$('#mobileToolbar .left-bottom').click(function (e) {
			toolbar_call_form = true;
			$('#modal-callback').modal('show');
			$('body,html').animate({scrollTop: 0}, 500);
			//}
			return false;
		});
	});
}

if (!isMobile.any()) {

	$(document).ready(function () {
		if (get_cookie('out_body') == null) {
			document.cookie = "out_body=false; path=/";
		}

		$('body').mouseleave(function (e) {
			if (e.clientY < 0 && get_cookie('out_body') == 'false') {

				var date = new Date;
				date.setDate(date.getDate() + 1);
				document.cookie = 'out_body=true; path=/; expires=' + date.toUTCString();
				if (date.getHours() >= 22 || date.getHours() <= 7) {
					$.fancybox.open(
							{href: '/include/forms/recall_night.php'},
							{
								openEffect: 'none',
								closeEffect: 'none',
								type: 'ajax',
								maxWidth: 530,
								minHeight: 590
							}
					);
				} else {
					$.fancybox.open(
							{href: '/include/forms/recall_3.php'},
							{
								openEffect: 'none',
								closeEffect: 'none',
								type: 'ajax',
								maxWidth: 380,
								minHeight: 460,
								padding: 0
							}
					);
				}
			}
		});
	});

	function callBtnMove() {
		var scrolled = window.pageYOffset || document.documentElement.scrollTop;
		var win_height = $(window).height();
		height_move = (win_height - 50) + scrolled;
		$('#call-btn .img-circle').addClass('rotate360');

		$('#call-btn').animate({
			top: (win_height - 50) + scrolled,
		}, 700, 'easeInOutBack', function () {
			$('#call-btn .img-circle').removeClass('rotate360');
		});
	}
	$(document).ready(function () {
		$('body').append('<a href="#" id="call-btn" onclick="return false;"><div class="circlephone" style="transform-origin: center;"></div><div class="circle-fill" style="transform-origin: center;"></div><div class="img-circle" style="transform-origin: center;"><div class="img-circleblock" style="transform-origin: center;"></div></div></a>');
		callBtnMove();
		var call_btn_timer = setTimeout(callBtnMove, 0);
		$(window).scroll(function () {
			clearTimeout(call_btn_timer);
			call_btn_timer = setTimeout(callBtnMove, 500);
		});

		$('#call-btn').click(function () {
			var date = new Date;
			date.setDate(date.getDate() + 1);
			document.cookie = 'out_body=true; path=/; expires=' + date.toUTCString();
			if (date.getHours() >= 22 || date.getHours() <= 7) {
				$.fancybox.open(
						{href: '/include/forms/recall_btncall_night.php'},
						{
							openEffect: 'none',
							closeEffect: 'none',
							type: 'ajax',
							maxWidth: 530,
							minHeight: 590
						}
				);
			} else {
				$.fancybox.open(
						{href: '/include/forms/recall_btncall.php'},
						{
							openEffect: 'none',
							closeEffect: 'none',
							type: 'ajax',
							maxWidth: 380,
							minHeight: 460,
							padding: 0
						}
				);
			}
		});
	});
}
/*
var sources_form;
$(document).ready(function() {
	sbjs.init({
		session_length: 1,
		domain: {
			host: 'sm-stomatology.ru',
			isolate: true
		},
		timezone_offset: 3
	});
    try {
        ga(function(tracker) {
            var referrer = sbjs.get.current_add.rf;
            if(sbjs.get.current.src == 'yandex') {
                var referrer = sbjs.get.current.src;
            }
            sources_form = {
                'clientId': tracker.get('clientId'),
                'type': sbjs.get.current.typ,
                'referrer': referrer,
                'source': sbjs.get.current.src,
                'medium': sbjs.get.current.mdm,
                'campaign': sbjs.get.current.cmp,
                'keyword': sbjs.get.current.trm
            }
        });
    } catch (err) {}
});

function addSourcesForm(formId) {
	var field = $('<div>', {
		class: 'field sources-form-field',
	});

	$.each(sources_form, function (key, value) {
		field.append($('<input>', {
			type: 'hidden',
			name: 'source[' + key + ']',
			value: value,
		}));
	});

	$(formId).append(field);
}
*/

function seconds15Start() {
    if (get_cookie('15_seconds_on') == 'true') {
        var one_timer = setInterval(function() {
            var date_min = new Date().getMinutes();
            var date_sec = new Date().getSeconds();
            var date_all_sec = (date_min * 60) + date_sec;
            if (get_cookie('15_seconds_sec') < date_all_sec) {
				var date = new Date;
				date.setMinutes(date.getMinutes() + 30);
    			document.cookie = "15_seconds_on=false; path=/; expires=" + date.toUTCString();
				try {
					//gtag('event', location.pathname, { 'event_category': '15_seconds'});
					ga('send', 'event', '15_seconds', location.pathname);
				} catch (err) {}
				clearInterval(one_timer);
            }
        }, 1000);
    }
}

if (get_cookie('15_seconds_on') == null) {
    document.cookie = "15_seconds_on=true; path=/";
}
if (get_cookie('15_seconds_on') == 'true') {
    var date_min = new Date().getMinutes();
    var date_sec = new Date().getSeconds();
    document.cookie = "15_seconds_sec=" + ((date_min * 60) + date_sec + 15) + "; path=/";
    seconds15Start();
}