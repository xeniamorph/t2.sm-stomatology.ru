import $ from 'jquery';
import BEM from 'tao-bem';

class MainInfo extends BEM.Block {

	static get blockName() {
		return 'b-main-carousel';
	}

	onInit() {
	}

	static get forced() {
		return true;
	}
}

MainInfo.register();

export default MainInfo;