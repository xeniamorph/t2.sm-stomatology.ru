import $ from 'jquery';
import BEM from 'tao-bem';

class Nav extends BEM.Block {

	static get blockName() {
		return 'b-nav';
	}

	onInit() {
		var $toggler = $(".b-nav-toggler");
		$toggler.on("click", () => {
			$toggler.find(".fa").toggleClass('fa-bars fa-times');
			this.$el.toggleClass('b-nav--open');
		});
	}

	static get forced() {
		return true;
	}
}

Nav.register();

export default Nav;