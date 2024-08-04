import BEM from "tao-bem";
import $ from 'jquery';

class PageNavSticky extends BEM.Block {
	static get blockName() {
		return 'page-nav-sticky';
	}

	onInit() {
		$('.page-nav-sticky__button:not(.link)').click(function(e) {
			e.preventDefault();
			$("html, body").animate({
				scrollTop: $($(this).attr("href")).offset().top - 250 + "px"
			}, {
				duration: 500,
				easing: "swing"
			});
		})
	}
}

PageNavSticky.register();

export default PageNavSticky;