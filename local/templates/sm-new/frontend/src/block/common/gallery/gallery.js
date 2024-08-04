import $ from 'jquery';

$(function () {
	$('.b-gallery__img-list').each(function(){
		$(this).magnificPopup({
			delegate: 'a',
			type: 'image',
			gallery: {
				enabled: true
			}
		});
	});
});
