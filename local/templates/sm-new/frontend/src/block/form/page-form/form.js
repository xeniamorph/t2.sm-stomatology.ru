import $ from 'jquery';
import sbjs from 'sourcebuster';

/* global ga */
/* global yaCounter42012629*/
$(document).ready(function() {
	if (typeof isMobile == 'undefined') {
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
	}

	if (!isMobile.any()) {
		$('form input[name="phone"]').mask('+7 (999) 999-99-99', {
			placeholder: "+7 (___) ___-__-__",
			autoclear: false
		});
	}

	$.datepicker.setDefaults({
		closeText: "Закрыть",
		prevText: "&#x3C;Пред",
		nextText: "След&#x3E;",
		currentText: "Сегодня",
		monthNames: ["Январь", "Февраль", "Март", "Апрель", "Май", "Июнь",
			"Июль", "Август", "Сентябрь", "Октябрь", "Ноябрь", "Декабрь"],
		monthNamesShort: ["Янв", "Фев", "Мар", "Апр", "Май", "Июн",
			"Июл", "Авг", "Сен", "Окт", "Ноя", "Дек"],
		dayNames: ["воскресенье", "понедельник", "вторник", "среда", "четверг", "пятница", "суббота"],
		dayNamesShort: ["вск", "пнд", "втр", "срд", "чтв", "птн", "сбт"],
		dayNamesMin: ["Вс", "Пн", "Вт", "Ср", "Чт", "Пт", "Сб"],
		weekHeader: "Нед",
		dateFormat: "dd-mm-yy",
		firstDay: 1,
		isRTL: false,
		showMonthAfterYear: false,
		yearSuffix: ""
	});

	$('body')
		.on('focus', '.popup-form input, .popup-form select, .popup-form textarea', function () {
			$(this).addClass('active');
		})
		.on('blur', '.popup-form input, .popup-form select, .popup-form textarea', function () {
			if ($(this).val().trim() == '') {
				$(this).removeClass('active');
			} else if ($(this).val().trim().replace(/\+7\s*\(___\)\s*___-__-__/, '').length == 0) {
				$(this).removeClass('active');
			}
		})
		.on('change', '.popup-form select', function () {
			if ($(this).val().trim() == '') {
				$(this).removeClass('active');
			}
		})

	// для старых форм
	$('input.b-form__control--date').prop('autocomplete', 'off');
	$('input.b-form__control--date').datepicker({minDate: new Date()});
	$('input.b-form__control--date').prev('label').click(function () {
		$(this).next('input').focus();
	});


	$("#js-popup-calendar").datepicker({
		minDate: new Date(),
		onSelect: function (dateText) {
			$('.js-popup-select-date').val(dateText).addClass('active');
			$(this).parent().removeClass('active');
		}
	});

	$('.js-popup-select-date')
		.click(function (e) {
			e.preventDefault();
			$(this).parent().addClass('active');
		})
		.focus(function (e) {
			e.preventDefault();
			$(this).parent().addClass('active');
		})
		.keypress(function (e) {
			e.preventDefault();
		});

	$(document).mouseup(function (e) {
		var container = $(".form-popup-calendar");
		if ($(this).find(".form-popup-calendar").hasClass('active')) {
			if (!container.is(e.target) && container.has(e.target).length === 0) {
				container.removeClass('active');
			}
		}
	});

	var formSender = {
		formData: {},
		locker: false,
		domain: 'sm-stomatology.ru',
		url: '/local/templates/sm-new/ajax/form.php',
		action: 'feedback',
		sourcesData: {},
		init: function () {
			var self = this;
			$('body').on('submit', '.form-feedback, .js-feedback-submit, .tao-form-Appointment, .tao-form-Callback, .tao-form-Review, .tao-form-Lab, #question-online-mainform, #mainform, .form-callback', function (e) {
				e.preventDefault();
				var form = $(this);

				if (self.locker) return;

				if (!self.validate(form)) return;

				self.sources(form);

				self.send(form);
			});
		},
		sources: function () {
			var self = this;

			sbjs.init({
				session_length: 1,
				domain: {
					host: self.domain,
					isolate: true
				},
				timezone_offset: 3
			});

			try {
				ga(function (tracker) {
					var referrer = sbjs.get.current_add.rf;
					if (sbjs.get.current.src == 'yandex') {
						referrer = sbjs.get.current.src;
					}
					self.sourcesData = {
						'clientid': tracker.get('clientId'),
						'type': sbjs.get.current.typ,
						'referrer': referrer,
						'source': sbjs.get.current.src,
						'medium': sbjs.get.current.mdm,
						'campaign': sbjs.get.current.cmp,
						'keyword': sbjs.get.current.trm
					}
				});
			} catch (err) {
				console.log('err');
			}
		},
		submit: function () {

		},
		validate: function (form) {
			form.find('.error').removeClass('error');

			if (form.find('input[name="phone"]').length) {
				if (form.find('input[name="phone"]').val().replace(/[^\d]/ig, '').length < 10) {
					form.find('input[name="phone"]').addClass('error');
					return false;
				} else {
					form.find('input[name="phone"]').removeClass('error');
				}
			}

			return true;

		},
		send: function (form) {
			var self = this;
			//formtype = form.find('input[name="formtype"]').val(),
			//formAnalytic = form.find('input[name="analytic"]').length ? form.find('input[name="analytic"]').val() : false;

			// костыль для старых форм
			self.crutch(form);

			$.ajax({
				type: 'POST',
				dataType: 'JSON',
				url: self.url,
				data: form.serialize() + '&action=' + self.action + '&' + $.param(self.sourcesData),
				beforeSend: function () {
					form.addClass('sending');
					form.find('button[type="submit"], input[type="submit"]').prop('disabled');
					self.locker = true;
					setTimeout(function () {
						self.locker = false;
					}, 5000);
				},
				success: function (data) {
					if (data.success) {
						if (form.find('input[name="analytics"]').length) {
							var analytics = form.find('input[name="analytics"]').val();
							if (analytics != '') {
								try {dataLayer.push({'event': 'myTrackEvent', 'eventCategory': 'Form', 'eventAction': 'Send', 'eventLabel': analytics});} catch (error) {}
								ga('send', 'event', 'Form', 'Send', analytics);
							}
						}
						yaCounter42012629.reachGoal('FormSend');
						// сообщение об успешной отправке
						self.success(form, data.message);
					} else {
						for (var prop in data.errors) {
							form.find('input[name="' + prop + '"]').addClass('error');
						}
					}
					form.find('.reviews-form__body').html('<div class="reviews-form__success">' + data.message + '</div>');
					form.removeClass('sending');
					form.find('button[type="submit"], input[type="submit"]').removeAttr('disabled');
					self.locker = false;
				}
			});
		},
		success: function (form, message) {
			if (form.hasClass('popup-form__form')) {
				form.find('.popup-form__title, .popup-form__body, .popup-form__footer').empty();
				form.find('.popup-form__body').append('<div class="popup-form__success">' + message + '</div>');
			} else if (form.hasClass('modal-form')) {
				form.empty();
				form.append('<div class="modal-form__success">' + message + '</div>');
			} else {
				form.find('.form__header, .form__body, .form__footer').empty();
				form.find('.form__body').append('<div class="popup-form__success">' + message + '</div>');
				form.find('.page-form__body').html('<div class="page-form__success">' + message + '</div>');
			}
		},
		crutch: function (form) {
			// костыль для некоторых старых форм
			if (form.attr('id') == 'question-online-mainform') {
				form.append('<input type="hidden" name="formtype" value="consultation">');
				form.append('<input type="hidden" name="analytic" value="consultation">');
			}
		}
	}

	formSender.init();
});