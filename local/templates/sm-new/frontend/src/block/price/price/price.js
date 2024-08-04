import BEM from "tao-bem";
import $ from 'jquery';

class PriceBlock extends BEM.Block {
	static get blockName() {
		return 'price';
	}

	onInit() {
		$('.price-btn').click(function(){
			$(this).closest('.price__tab').find('.additional').toggleClass('hide');
			$(this).toggleClass('show');
		});

		$('.price__toggle').click(function(){
			var indx = $(this).index();

			$('.price__toggle, .price__tab').removeClass('active');
			$(this).addClass('active');
			$('.price__tab').eq(indx).addClass('active');
		});

		$('.section-menu__toggle').click(function(){
			if($(this).closest('.section-menu').hasClass('active')){
				$(this).closest('.section-menu').removeClass('active');
			} else {
				$(this).closest('.section-menu').addClass('active');
			}
		});
	}
}

PriceBlock.register();

export default PriceBlock;