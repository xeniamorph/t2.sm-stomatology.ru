import $ from 'jquery';

$(function () {
	$('body').magnificPopup({
		delegate: '.b-lightbox',
		type: 'image',
		gallery: {
			enabled: true
		},
	});
});
