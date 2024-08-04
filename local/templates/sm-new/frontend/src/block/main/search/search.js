import BEM from "tao-bem";
import $ from 'jquery';

class Search extends BEM.Block {
	static get blockName() {
		return 'search';
	}

	onInit() {
		$('.search__button').click(function(){
			$(this).closest('.search').toggleClass('active');
			$('.topmenu').toggleClass('search-open');
		});
	}
}

Search.register();

export default Search;