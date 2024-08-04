import $ from 'jquery';

$(function () {
	$('.b-address-gallery').owlCarousel({
		items: 2,
		nav: true,
		navText: ['', ''],
		responsive: {
			0: {
				items: 1,
				center: true
			},
			1199 : {
				items: 2,
				margin: 20
			}
		}
	});
});
