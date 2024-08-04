import $ from 'jquery';
import BEM from 'tao-bem';

class News extends BEM.Block {

	static get blockName() {
		return 'b-news';
	}

	onInit() {
		var $owl = $(this.$el).find(".owl-carousel");
		$owl.owlCarousel({
			autoWidth: true,
			navText: ['', ''],
			responsive: {
				0: {
					autoWidth: false,
					autoHeight: false,
					items: 1,
					nav: false,
					dots: true,
					margin: 0
				},
				575: {
					autoWidth: false,
					autoHeight: true,
					items: 2,
					nav: false,
					dots: false,
					margin: 30
				},
				1070: {
					items: 3,
					nav: false,
					dots: false,
					margin: 30
				},
			}
		});
	}

	static get forced() {
		return true;
	}
}

News.register();

export default News;