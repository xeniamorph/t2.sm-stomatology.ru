import $ from 'jquery';
import BEM from 'tao-bem';
import pickmeup from 'pickmeup/js/pickmeup';

var isMobile = {
    Android: function() {
        return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function() {
        return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function() {
        return navigator.userAgent.match(/iPhone|iPod/i);
    },
    Opera: function() {
        return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function() {
        return navigator.userAgent.match(/IEMobile/i);
    },
    any: function() {
        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
    }
};

class Form extends BEM.Block {

	static get blockName() {
		return 'b-form';
	}

	onInit() {
		let self = this;
		$(this.$el).find('.b-form__control').each(function () {
			let $control = $(this);
			$control.on('change', function () {
				self.checkEmptyControl($control);
			});
			self.checkEmptyControl($control);
		});

		$(this.$el).find('.b-form__group--date').on('click', function (e) {
			e.stopPropagation();
			$('.select-open').removeClass('select-open');
			$(this).find('.pickmeup').addClass('pickmeup--open');
		});

		$(this.$el).find('.b-form__control--date').on('click focus', function (e) {
			e.stopPropagation();
			$('.select-open').removeClass('select-open');
			$(this).siblings('.pickmeup').addClass('pickmeup--open');
		});

        if(!isMobile.any()) {
			$('.b-form__phone').mask('9 (999) 999-99-99');
		}

		$('.b-form__group--date').each(function () {
			let $control = $(this);
			pickmeup(this, {
				format: 'd-m-y',
				flat: true,
				prev: '',
				next: '',
				locale: 'ru'
			});
			this.addEventListener('pickmeup-change', function (e) {
				$control.find('.b-form__control--date').val(e.detail.formatted_date);
				$control.find('.pickmeup--open').removeClass('pickmeup--open');
			});
		});

		$('body').on('click', function () {
			$('.pickmeup--open').removeClass('pickmeup--open');
		});

		$('.b-form__control--date').on('blur', function () {
			setTimeout(function () {
				$('.pickmeup--open').removeClass('pickmeup--open');
			}, 100);
		});

		$('body').on('click', '.pickmeup', function (e) {
			e.stopPropagation();
		});
	}

	checkEmptyControl($control) {
		let empty = !$control.val();
		$control[empty ? 'addClass' : 'removeClass']('b-form__control--empty');
	}

	static get forced() {
		return true;
	}
}

Form.register();

export default Form;
