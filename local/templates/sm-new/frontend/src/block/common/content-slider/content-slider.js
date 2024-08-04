import $ from 'jquery';
import BEM from 'tao-bem';

class ContentSlider extends BEM.Block {

	static get blockName() {
		return 'b-content-slider';
	}

	onInit() {
		$(this.$el).owlCarousel({
			items: 1
		});
	}

	static get forced() {
		return true;
	}
}

ContentSlider.register();

export default ContentSlider;