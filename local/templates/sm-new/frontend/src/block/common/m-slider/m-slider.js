$(document).ready(function() {
	console.log(1);
	if(typeof isMobile == 'undefined'){
		var isMobile = {
			Android: function () {
				return navigator.userAgent.match(/Android/i);
			},
			BlackBerry: function () {
				return navigator.userAgent.match(/BlackBerry/i);
			},
			iOS: function () {
				return navigator.userAgent.match(/iPhone|iPod/i);
			},
			Opera: function () {
				return navigator.userAgent.match(/Opera Mini/i);
			},
			Windows: function () {
				return navigator.userAgent.match(/IEMobile/i);
			},
			any: function () {
				return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
			}
		};
	}

	$('.m-slider__slider').slick({
		infinite: true,
		autoplay: false,
		swipe:true,
		pauseOnHover: false,
		touchMove:true,
		slide: '.m-slider__slide',
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: true,
		prevArrow: '.m-slider__prev',
		nextArrow: '.m-slider__next',
		dots: true,
		fade: false,
		appendDots: '.m-slider__dots',
	});

	$('.m-advantages__item').hover(
		function(){
			$(this).addClass('active').siblings().removeClass('active');
		}
	);

	$('.m-clinics__top li').hover(
		function(){
			var indx = $(this).index();
			$('.m-clinics__top li, .m-clinics__right .m-clinics__items').removeClass('active');
			$('.m-clinics__right .m-clinics__items').eq(indx).addClass('active');
			$(this).addClass('active');
		},
		function(){

		}
	);

	$('.m-equipment__items').slick({
		infinite: false,
		autoplay: false,
		swipe:true,
		pauseOnHover: false,
		touchMove:true,
		slide: '.m-equipment__item',
		slidesToShow: 4,
		slidesToScroll: 1,
		arrows: false,
		dots: true,
		fade: false,
		appendDots: '.m-equipment__dots',
		responsive: [
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: 2,
				}
			},
			{
				breakpoint: 660,
				settings: {
					slidesToShow: 1,
				}
			}
		]
	});

	$('.m-news__items').slick({
		infinite: false,
		autoplay: false,
		swipe:true,
		pauseOnHover: false,
		touchMove:true,
		slide: '.m-news__item',
		slidesToShow: 4,
		slidesToScroll: 1,
		arrows: false,
		dots: true,
		fade: false,
		appendDots: '.m-news__dots',
		responsive: [
			{
				breakpoint: 1250,
				settings: {
					slidesToShow: 3,
				}
			},
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: 2,
				}
			},
			{
				breakpoint: 660,
				settings: {
					slidesToShow: 1,
				}
			}
		]
	});

	$('.m-partners__items').slick({
		infinite: false,
		autoplay: false,
		swipe:true,
		pauseOnHover: false,
		touchMove:true,
		slide: '.m-partners__slide',
		slidesToShow: 6,
		slidesToScroll: 1,
		arrows: true,
		prevArrow: '.m-partners__prev',
		nextArrow: '.m-partners__next',
		dots: true,
		fade: false,
		appendDots: '.m-partners__dots',
		responsive: [
			{
				breakpoint: 1150,
				settings: {
					slidesToShow: 5,
				}
			},
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: 4,
				}
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 3,
				}
			},
			{
				breakpoint: 640,
				settings: {
					slidesToShow: 2,
				}
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 1,
				}
			},
		]
	});

	$('.m-doctors__slider').slick({
		infinite: false,
		autoplay: false,
		swipe:true,
		pauseOnHover: false,
		touchMove:true,
		slide: '.m-doctors__slide',
		slidesToShow: 4,
		slidesToScroll: 1,
		arrows: true,
		prevArrow: '.m-doctors__prev',
		nextArrow: '.m-doctors__next',
		dots: true,
		fade: false,
		appendDots: '.m-doctors__dots',
		responsive: [
			{
				breakpoint: 1300,
				settings: {
					slidesToShow: 3,
				}
			},
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: 2,
				}
			},
			{
				breakpoint: 660,
				settings: {
					slidesToShow: 1,
					arrows: false
				}
			}
		]
	});

	$('.licenses-block-2__slider').slick({
		infinite: false,
		autoplay: false,
		swipe:true,
		pauseOnHover: false,
		touchMove:true,
		slide: '.licenses-block-2__slide',
		slidesToShow: 6,
		slidesToScroll: 1,
		arrows: true,
		prevArrow: '.licenses-block-2__prev',
		nextArrow: '.licenses-block-2__next',
		dots: false,
		fade: false,
		appendDots: '.licenses-block-2__dots',
		responsive: [
			{
				breakpoint: 1024,
				settings: {
					dots: true,
					arrows: false,
					slidesToShow: 4,
				}
			},
			{
				breakpoint: 480,
				settings: {
					dots: true,
					arrows: false,
					slidesToShow: 2,
				}
			}
		]
	});

	$('.m-ctrl__button').click(function(){
		var indx = $(this).index(),
			indxInner = $('.m-tabs__toggle').index(),
			winW = window.innerWidth > 0 ? window.innerWidth : screen.width;

		if(winW < 768){
			if($(this).hasClass('active')){
				$('.m-tabs__body').height(0);
				$(this).removeClass('active');
			} else {
				$(this).addClass('active').siblings().removeClass('active');
				$('.m-tabs__body').height($('.m-tabs__body .m-tabs__tab').eq(indx).innerHeight());
			}
		} else {
			$(this).addClass('active').siblings().removeClass('active');
			$('.m-tabs-inner .m-tabs-inner__tab').eq(indxInner).addClass('active').siblings().removeClass('active');
		}

		$('.m-tabs__body .m-tabs__tab').eq(indx).addClass('active').siblings().removeClass('active');
	});

	$('.m-tabs__toggle').click(function(){
		var indx = $(this).index();

		if(!$(this).is('a')){
			$(this).addClass('active').siblings().removeClass('active');
			$(this).closest('.m-tabs__tab').find('.m-tabs-inner__tab').eq(indx).addClass('active').siblings().removeClass('active');
		}
	});

	var winW = window.innerWidth > 0 ? window.innerWidth : screen.width;

	if(winW < 768){
		$('.m-ctrl__button').removeClass('active');
	}
});
