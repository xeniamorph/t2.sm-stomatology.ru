import BEM from "tao-bem";
import $ from 'jquery';

class PatientLinks extends BEM.Block {
	static get blockName() {
		return 'patient-links';
	}

	onInit() {
		$('.patient-links__item:not(.link)').click(function(e) {
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

PatientLinks.register();

export default PatientLinks;