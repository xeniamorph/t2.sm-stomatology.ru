import $ from 'jquery';
import BEM from 'tao-bem';

class FooterMenu extends BEM.Block {

	static get blockName() {
		return 'b-footer-menu';
	}

	onInit() {
		var $owl = $(this.$el);
		$owl.owlCarousel({
			navText: ['', ''],
			responsive: {
				0: {
					autoWidth: false,
					autoHeight: true,
					items: 1,
					nav: false,
					dots: true,
					margin: 0,
					touchDrag: true,
					mouseDrag: true
				},
				575: {
					autoWidth: false,
					items: 3,
					nav: false,
					dots: false,
					margin: 30,
					touchDrag: false,
					mouseDrag: false
				}
			}
		});
	}

	static get forced() {
		return true;
	}
}

FooterMenu.register();

export default FooterMenu;
