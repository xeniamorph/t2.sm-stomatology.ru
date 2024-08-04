import BEM from "tao-bem";
import $ from 'jquery';

class ArticleSimilar extends BEM.Block {
	static get blockName() {
		return 'article-similar';
	}

	onInit() {
		$('.article-similar__slider').slick({
			infinite: false,
			autoplay: false,
			swipe:true,
			pauseOnHover: false,
			touchMove:true,
			slide: '.article-similar__slide',
			slidesToShow: 4,
			slidesToScroll: 1,
			arrows: true,
			prevArrow: '.article-similar__prev',
			nextArrow: '.article-similar__next',
			dots: false,
			fade: false,
			appendDots: '.article-similar__dots',
			responsive: [
				{
					breakpoint: 1240,
					settings: {
						slidesToShow: 3,
					}
				},
				{
					breakpoint: 768,
					settings: {
						slidesToShow: 2,
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

ArticleSimilar.register();

export default ArticleSimilar;