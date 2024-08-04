import $ from 'jquery';
import BEM from 'tao-bem';

class ContentSlider extends BEM.Block {

	static get blockName() {
		return 'b-content-dd';
	}

	onInit() {
		let $el = $(this.$el);
		$el.find('.b-content-dd__links').on('click', '.b-content-dd-link', function () {
			if ($(this).hasClass('b-content-dd-link--not-desc')) {
				return false;
			}
			let stat = !$(this).hasClass('b-content-dd-link--open'),
				id = $(this).attr('href');
			$el.find('.b-content-dd-link--open').removeClass('b-content-dd-link--open');
			$el.find('.b-content-dd-item--open').removeClass('b-content-dd-item--open');
			if (stat) {
				$(this).addClass('b-content-dd-link--open');
				$(id).addClass('b-content-dd-item--open');
			}
			return false;
		});
	}

	static get forced() {
		return true;
	}
}

ContentSlider.register();

export default ContentSlider;
