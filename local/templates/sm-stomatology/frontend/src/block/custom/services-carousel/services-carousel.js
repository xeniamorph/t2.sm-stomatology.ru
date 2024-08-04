import $ from 'jquery';
import BEM from 'tao-bem';

class ServicesCarousel extends BEM.Block {

	static get blockName() {
		return 'b-services-carousel';
	}

	onInit() {
		$.fn.andSelf = $.fn.addBack;
		var $el = this.$el;
		$el.owlCarousel({
			navText: ['', ''],
			pullDrag: true,
			autoWidth: false,
			responsive: {
				0: {
					nav: true,
					items: 2,
					margin: 5,
					dots: true
				},
				460: {
					nav: true,
					items: 3,
					margin: 20,
				},
				720: {
					nav: true,
					items: 4,
					margin: 40,
				},
				992: {
					nav: true,
					items: 6,
					margin: 10,
				},
				1200: {
					nav: false,
					items: 8,
					margin: 10,
				},
			}
		});
	}

	static get forced() {
		return true;
	}
}

ServicesCarousel.register();

export default ServicesCarousel;
