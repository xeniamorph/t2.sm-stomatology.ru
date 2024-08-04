import BEM from "tao-bem";
import $ from 'jquery';

class Modal extends BEM.Block {
	static get blockName() {
		return 'modal';
	}

	onInit() {
		var self = this;
		document.addEventListener("DOMContentLoaded", function () {
			var scrollbar = document.body.clientWidth - window.innerWidth + 'px';
			console.log(scrollbar);
			document.querySelector('[href="#openModal-1"]').addEventListener('click', function () {
				document.body.classList.add('pop-up-enabled');
				document.querySelector('#openModal-1').style.marginLeft = scrollbar;
			});
			document.querySelector('[href="#close"]').addEventListener('click', function () {
				document.body.classList.remove('pop-up-enabled');
				document.querySelector('#openModal-1').style.marginLeft = '0px';
			});
		});


		$('.mask-date').mask('9999-99-99');

		$('body').on('click', '.js-open-popup', function (e) {
			e.preventDefault();

			self.showWin($('.modal'));
			self.showForm($(this).data('target'));
		});

		$('body').on('click', '.modal-dialog__close', function (e) {
			e.preventDefault();
			if($(this).closest('.popup-form-feedback').length > 0 && $(this).closest('.popup-form-feedback').find('.modal-form__success').length != 1) {
				self.showForm('.continue');
			} else {
				self.showWin($('.modal'), true);
				$('.modal').removeClass('active');
			}
		});

		$('body').on('click', '.modalform__btn.continue-btn', function (e) {
			e.preventDefault();

			self.showForm('.popup-form-feedback');
		});

		$('body').on('click', '.modalform__btn.close', function (e) {
			e.preventDefault();

			self.showWin($('.modal'), true);
			$('.modal').removeClass('active');
		});
	}

	showWin(el, close){
		// var scrollbar = document.body.clientWidth - window.innerWidth + 'px';
		close = close ? true : false;

		if(el.hasClass('active') && !close) return;

		if(el.hasClass('active')){
			document.body.classList.remove('pop-up-enabled');
			el.removeClass('active');
			el.css('margin-left', 0);
		} else {
			//document.body.classList.add('pop-up-enabled');
			el.addClass('active');
			//el.css('margin-left', scrollbar);
		}
	}

	showForm(cls){
		var self = this;
		// если формы нет в теле страницы, пробуем ее подгрузить
		if(!$(cls).length){
			self.get(cls);
		} else {
			cls = $(cls);

			if($('.modal-dialog.active').length){
				if($('.modal-dialog.active').hasClass(cls)){
					$('.modal-dialog.active').removeClass('active');
				} else {
					$('.modal-dialog.active').removeClass('active');
					$(cls).addClass('active');
				}
			} else {
				$(cls).addClass('active');
			}
		}
	}
}

Modal.register();

export default Modal;
