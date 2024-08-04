import BEM from "tao-bem";
import $ from 'jquery';

class RezumeContent extends BEM.Block {
	static get blockName() {
		return 'rezume-content';
	}

	onInit() {
		$('.rezume-content__readmore .rezume-btn').click(function(){
			var hidden = $(this).closest('.rezume-content__body').find('.rezume-content__hidden');
			if(hidden.hasClass('active')){
				hidden.removeClass('active');
				$(this).find('span').text('Читать полностью');
			} else {
				hidden.addClass('active');
				$(this).find('span').text('Скрыть');
			}
		});
	}
}

RezumeContent.register();

export default RezumeContent;