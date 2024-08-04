import $ from 'jquery';

$(function () {
	$('.b-images-in-cols').magnificPopup({
		delegate: '.b-images-in-cols__link',
		type: 'image',
		gallery: {
			enabled: true
		},
	});
});
