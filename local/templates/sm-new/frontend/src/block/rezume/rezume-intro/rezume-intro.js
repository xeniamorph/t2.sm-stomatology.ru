import BEM from "tao-bem";
import $ from 'jquery';

class RezumeIntro extends BEM.Block {
	static get blockName() {
		return 'rezume-intro';
	}

	onInit() {
		$('.rezume-intro__btn:not(.link)').click(function(e) {
			e.preventDefault();
			$("html, body").animate({
				scrollTop: $($(this).attr("href")).offset().top - 200 + "px"
			}, {
				duration: 500,
				easing: "swing"
			});
		})
	}
}

RezumeIntro.register();

export default RezumeIntro;