import BEM from "tao-bem";
import $ from 'jquery';

class ArticleTopic extends BEM.Block {
	static get blockName() {
		return 'article-topic';
	}

	onInit() {
		$('.article-topic__slider').slick({
			infinite: false,
			autoplay: false,
			swipe:true,
			pauseOnHover: false,
			touchMove:true,
			slide: '.article-topic__slide',
			slidesToShow: 4,
			slidesToScroll: 1,
			arrows: true,
			prevArrow: '.article-topic__prev',
			nextArrow: '.article-topic__next',
			dots: false,
			fade: false,
			appendDots: '.article-topic__dots',
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
						slidesToShow: 1,
					}
				},
				{
					breakpoint: 480,
					settings: {
						slidesToShow: 1,
					}
				}
			]
		});
	}
}

ArticleTopic.register();

export default ArticleTopic;