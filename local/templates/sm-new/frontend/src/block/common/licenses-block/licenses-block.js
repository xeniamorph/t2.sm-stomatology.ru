import BEM from "tao-bem";
import $ from 'jquery';

class LicensesBlock extends BEM.Block {
	static get blockName() {
		return 'licenses-block';
	}

	onInit() {
		var winW = (window.innerWidth > 0) ? window.innerWidth : screen.width;


		if(($('.licenses-block__slide').length > 4 || winW < 1240) && $('.licenses-block__slide').length != 1){
			$('.licenses-block__slider').slick({
				infinite: true,
				autoplay: false,
				swipe:true,
				pauseOnHover: false,
				touchMove:true,
				slide: '.licenses-block__slide',
				slidesToShow: 4,
				slidesToScroll: 1,
				arrows: true,
				prevArrow: '.licenses-block__prev',
				nextArrow: '.licenses-block__next',
				dots: false,
				appendDots: '.licenses-block__dots',
				fade: false,
				responsive: [
					{
						breakpoint: 1240,
						settings: {
							slidesToShow: 5,
						}
					},
					{
						breakpoint: 991,
						settings: {
							dots: true,
							arrows: false,
							slidesToShow: 3,
							slidesToScroll: 1,
						}
					},
					{
						breakpoint: 768,
						settings: {
							dots: true,
							arrows: false,
							slidesToShow: 3,
							slidesToScroll: 1,
						}
					},
					{
						breakpoint: 480,
						settings: {
							dots: true,
							arrows: false,
							slidesToShow: 2,
							slidesToScroll: 1,
						}
					}
				]
			});
		}
	}
}

LicensesBlock.register();

export default LicensesBlock;