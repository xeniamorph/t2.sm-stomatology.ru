import BEM from "tao-bem";
import $ from 'jquery';

class ContactsContent extends BEM.Block {
	static get blockName() {
		return 'contacts-content';
	}

	onInit() {
		$('.contacts-content__link').click(function(e) {
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

ContactsContent.register();

export default ContactsContent;