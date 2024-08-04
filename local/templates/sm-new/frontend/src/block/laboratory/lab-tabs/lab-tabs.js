import BEM from "tao-bem";
import $ from 'jquery';

class labTabs extends BEM.Block {
	static get blockName() {
		return 'lab-tabs';
	}

	onInit() {
		$('.lab-tabs__button').click(function(e) {
			e.preventDefault();
			let id = $(this).attr("href");
			$('.lab-tabs__button').not($(this)).removeClass('active');
			$(this).addClass('active');
			$('.lab-tabs__content').removeClass('active');
			$(id).addClass('active');
			$("html, body").animate({
				scrollTop: $(this).offset().top + 150 + "px"
			}, 'linear');
		})
	}
}

labTabs.register();

export default labTabs;