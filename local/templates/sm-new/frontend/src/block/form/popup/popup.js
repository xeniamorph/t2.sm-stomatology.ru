import BEM from "tao-bem";
import $ from 'jquery';

class Popup extends BEM.Block {
	static get blockName() {
		return 'popup-win';
	}

	onInit() {
		var self = this;

		$('body').on('click', '.js-open-popup', function(e){
			e.preventDefault();

			self.showWin($('.popup-win'));
			self.showForm($(this).data('target'));
		});

		$('body').on('click', '.js-popup-close', function(e){
			e.preventDefault();

			self.showWin($('.popup-win'), true);
			$('.popup-form').removeClass('active');
		});

		$('a[href="#"]').click(function(e){
			var target = $(this).data('target');
			// совместимость со старым дизайном
			if(target == '#modal-ask-question'){
				e.preventDefault();
				self.showWin($('.popup-win'));
				self.showForm('.popup-form-question');
			}
			else if(target == '#modal-support'){
				e.preventDefault();
				self.showWin($('.popup-win'));
				self.showForm('.popup-form-administration');
			}
			else if(target == '#modal-feedback'){
				e.preventDefault();
				self.showWin($('.popup-win'));
				self.showForm('.popup-form-feedback');
			}
			else if(target == '#modal-callback'){
				e.preventDefault();
				self.showWin($('.popup-win'));
				self.showForm('.popup-form-callback');
			}
			else if(target == '#modal-lab'){
				e.preventDefault();

				if($('#product-name').length){
					$('.popup-form-lab').find('.popup-form__title').text('Купить "'+$('#product-name'+'"').val());
				}
				if($('input.lab-amount').length){
					$('.popup-form-lab').find('input[name="amount"]').val($('input.lab-amount').val());
				}

				self.showWin($('.popup-win'));
				self.showForm('.popup-form-lab');
			}
		});
	}

	showWin(el, close){
		close = close ? true : false;

		if(el.hasClass('active') && !close) return;

		if(el.hasClass('active')){
			$('body').removeClass('pop-up-enabled');

			///$('body').scrollTop($('body').data('scrolltop'));
			///$(window).scrollTop($('body').data('scrolltop'));

			el.removeClass('active').addClass('unactive');
			setTimeout(function(){
				el.removeClass('unactive');
			},200);
		} else {
			// var scrolltop = $('body').scrollTop() ? $('body').scrollTop() : $(window).scrollTop();
			// $('body').data('scrolltop', scrolltop);
			// $('body').css('top', -scrolltop);

			el.removeClass('unactive');
			el.addClass('active');
			//$('body').addClass('pop-up-enabled');
		}
	}

	showForm(cls){
		var self = this;
		// если формы нет в теле страницы, пробуем ее подгрузить
		if(!$(cls).length){
			self.get(cls);
		} else {
			cls = $(cls);

			if($('.popup-form.active').length){
				if($('.popup-form.active').hasClass(cls)){
					$('.popup-form.active').removeClass('active');
				} else {
					$('.popup-form.active').removeClass('active');
					$(cls).addClass('active');
				}
			} else {
				$(cls).addClass('active');
			}
		}
	}

	get(selector) {
		var self = this,
			container = $('.popup-win');

		if (container.find(selector).length) return;

		self.params.target = selector;

		$.ajax({
			type: 'POST',
			dataType: 'JSON',
			url: self.url,
			data: self.params,
			beforeSend: function () {
				container.addClass('sending');
				self.locker = true;
				setTimeout(function () {
					self.locker = false;
				}, 5000);
			},
			success: function (data) {
				if (data.success) {
					$('.popup-win__box').append(data.html);
					self.showForm(selector);
				}

				container.removeClass('sending');
				self.locker = false;
			}
		});
	}
}

Popup.register();

export default Popup;