import BEM from "tao-bem";
import $ from 'jquery';

class VideoBlock extends BEM.Block {
	static get blockName() {
		return 'video-block';
	}

	onInit() {
		var winW = (window.innerWidth > 0) ? window.innerWidth : screen.width;
		if(($('.video-block__slide').length > 1 || winW < 1240) && $('.video-block__slide').length != 1){
			$('.video-block__slider').slick({
				infinite: false,
				autoplay: false,
				swipe:true,
				pauseOnHover: false,
				touchMove:true,
				slide: '.video-block__slide',
				slidesToShow: 3,
				slidesToScroll: 1,
				arrows: true,
				prevArrow: '.video-block__prev',
				nextArrow: '.video-block__next',
				dots: false,
				appendDots: '.video-block__dots',
				fade: false,
				responsive: [
					{
						breakpoint: 1240,
						settings: {
							slidesToShow: 2,
						}
					},
					{
						breakpoint: 768,
						settings: {
							dots: false,
							slidesToShow: 1,
							slidesToScroll: 1,
						}
					}
				]
			});
		}
	}
}

VideoBlock.register();

export default VideoBlock;