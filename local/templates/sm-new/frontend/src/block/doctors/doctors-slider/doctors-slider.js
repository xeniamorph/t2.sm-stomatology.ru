$(document).ready(function() {
	$('.doctors-slider__slider').slick({
		infinite: false,
		autoplay: false,
		swipe:true,
		pauseOnHover: false,
		touchMove:true,
		slide: '.doctors-slider__slide',
		slidesToShow: 3,
		slidesToScroll: 3,
		arrows: true,
		prevArrow: '.doctors-slider__prev',
		nextArrow: '.doctors-slider__next',
		dots: true,
		fade: false,
		appendDots: '.doctors-slider__dots',
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
					slidesToScroll: 1,
					centerMode: true,
					infinite: true,
				}
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
					dots: true,
					centerMode: true,
					infinite: true,
				}
			} ,
			{
				breakpoint: 360,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
					dots: true,
				}
			}
		]
	});
});
