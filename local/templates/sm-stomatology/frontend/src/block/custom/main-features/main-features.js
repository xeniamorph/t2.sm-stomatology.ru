import $ from 'jquery';
import BEM from 'tao-bem';

class MainFeatures extends BEM.Block {

	static get blockName() {
		return 'b-main-features';
	}

	onInit() {
		var $owl = $(this.$el).find(".owl-carousel");
		$owl.owlCarousel({
			items: 1,
			nav: true,
			navText: ['', ''],
			dots: true,
		});
	}

	static get forced() {
		return true;
	}
}

MainFeatures.register();

export default MainFeatures;