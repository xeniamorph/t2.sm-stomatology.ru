var isMobile = {
	Android: function () {
		return navigator.userAgent.match(/Android/i);
	},
	BlackBerry: function () {
		return navigator.userAgent.match(/BlackBerry/i);
	},
	iOS: function () {
		return navigator.userAgent.match(/iPhone|iPod/i);
	},
	Opera: function () {
		return navigator.userAgent.match(/Opera Mini/i);
	},
	Windows: function () {
		return navigator.userAgent.match(/IEMobile/i);
	},
	any: function () {
		return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
	}
};

function get_cookie(cookie_name) {
	var results = document.cookie.match('(^|;) ?' + cookie_name + '=([^;]*)(;|$)');
	if (results)
		return (unescape(results[2]));
	else
		return null;
}

var toolbar_tel = false;
var toolbar_call_form = false;
(function ($) {
  if (isMobile.any()) {
    $(document).ready(function () {
        $('body').append('<div id="mobileToolbar2"><div class="mobile-toolbar"><a class="right-bottom" href="tel:+74957774806"><div><span></span>Позвонить</div></a><a href="" data-form-id="popup-callback" class="left-bottom js-open-popup" data-type-form="round" data-target=".popup-form-callback" data-analytics="OrderCall_Mobile">Заказать звонок</a></div></div>');
        $('#mobileToolbar2').css('display', 'block');      
        $('#mobileToolbar2 .right-bottom').click(function (e) {
        var mob_tel = $('.header__contacts-phone a').attr('href');
        if (mob_tel != undefined)
            $('#mobileToolbar .right-bottom').attr('href', mob_tel);
        });

        /*$('#mobileToolbar .left-bottom').click(function (obj) {
            var btn = $(this);
            var overlay = $('.pop-up-overlay');
            var form = $('#' + btn.data('form-id'));
            type_form = btn.data('type-form');

            overlay.removeClass('hidden');
            $('.popup-form').addClass('hidden');
            form.removeClass('hidden');

            return false;
        });*/
    });
  }
}(jQuery));

if (!isMobile.any()) {

	function callBtnMove() {
		var scrolled = window.pageYOffset || document.documentElement.scrollTop;
		var win_height = $(window).height();
		height_move = (win_height - 20) + scrolled;
		$('#call-btn .img-circle').addClass('rotate360');
  
		$('#call-btn').animate({
			top: (win_height - 20) + scrolled,
		}, 700, 'easeInOutBack', function() {
			$('#call-btn .img-circle').removeClass('rotate360');
		});
	}
	$(document).ready(function() {
	  $('body').append('<a href="#" data-form-id="popup-callback" data-type-form="round" id="call-btn" class="js-open-popup" data-target=".popup-form-callback" data-analytics="OrderCall_Toolbar"><div class="circlephone" style="transform-origin: center;"></div><div class="circle-fill" style="transform-origin: center;"></div><div class="img-circle" style="transform-origin: center;"><div class="img-circleblock" style="transform-origin: center;"></div></div></a>');
	  var call_btn_timer = setTimeout(callBtnMove, 0);
	  $(window).scroll(function() {
		  clearTimeout(call_btn_timer);
		  call_btn_timer = setTimeout(callBtnMove, 500);
	  });
  
	  /*$('#call-btn').click(function (obj) {
		  var btn = $(this);
		  var overlay = $('.pop-up-overlay');
		  var form = $('#' + btn.data('form-id'));
		  type_form = btn.data('type-form');
  
		  overlay.removeClass('hidden');
		  $('.popup-form').addClass('hidden');
		  form.removeClass('hidden');
  
		  return false;
	  });*/
  
	  //$('body').append('<a href="/appointment/" id="call-btn-online"><div class="circlephone-online" style="transform-origin: center;"></div><div class="circle-fill-online" style="transform-origin: center;"></div><div class="img-circle-online" style="transform-origin: center;"><div class="img-circleblock-online">Запись<br />онлайн</div></div></a>');
  
	  // form leave
	  if (get_cookie('out_body') == null) {
		  document.cookie = "out_body=false; path=/;";
	  }
	
	  $('body').mouseleave(function(e) {
		if (e.clientY < 0 && get_cookie('out_body') == 'false') {
		  var date = new Date;
		  date.setDate(date.getDate() + 1);
		  document.cookie = 'out_body=true; path=/; expires=' + date.toUTCString();
  
		  /*var overlay = $('.pop-up-overlay');
		  var form = $('#popup-callback');
		  type_form = 'leave';
  
		  $('#popup-callback .popup-form-title').text('Хотите мывам перезвоним?');
  
		  overlay.removeClass('hidden');
		  $('.popup-form').addClass('hidden');
		  form.removeClass('hidden');*/
		}
	  });
	});
  }

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
					try {dataLayer.push({'event': '15_seconds', 'eventCategory': 'Interaction', 'eventAction': 'Timer', 'eventLabel': location.pathname});} catch (error) {}
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