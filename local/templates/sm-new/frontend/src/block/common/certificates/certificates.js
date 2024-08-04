import BEM from "tao-bem";
import $ from 'jquery';

class Certificates extends BEM.Block {
	static get blockName() {
		return 'certificates';
	}

	onInit() {
		$('.certificates__slider').not('.slick-initialized').slick({
			infinite: false,
			swipe:true,
			pauseOnHover: false,
			touchMove:true,
			slide: '.certificates__slide',
			slidesToShow: 5,
			slidesToScroll: 1,
			//autoplay: true,
			//autoplaySpeed: 2000,
			arrows: true,
			prevArrow: '<div class="certificates__prev"></div>',
			nextArrow: '<div class="certificates__next"></div>',
			dots: true,
			appendDots: '.certificates__dots',
			fade: false,
			responsive: [
				{
					breakpoint: 1240,
					settings: {
						slidesToShow: 5,
						arrows: false,
					}
				},
				{
					breakpoint: 768,
					settings: {
						arrows: false,
						slidesToShow: 3,
						slidesToScroll: 1,
					}
				},
				{
					breakpoint: 480,
					settings: {
						arrows: false,
						slidesToShow: 2,
						slidesToScroll: 1,
					}
				}
			]
		});
	}
}

Certificates.register();

export default Certificates;