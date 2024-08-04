import $ from 'jquery';
import BEM from 'tao-bem';

class TreeList extends BEM.Block {

	static get blockName() {
		return 'b-tree-list';
	}

	onInit() {
		this.$list = $(this.$el);
		this.$list.find("> li").click(function () {
			$(this).toggleClass('open');
		});
		this.$list.find("> li > *").click(function (e) {
			e.stopPropagation();
		});
	}

	static get forced() {
		return true;
	}
}

TreeList.register();

export default TreeList;