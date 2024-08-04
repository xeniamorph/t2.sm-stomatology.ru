import $ from 'jquery';

$(function () {
	$('.b-diseases__letters--select').change(function () {
		let letter = $(this).val();
		setTimeout(function () {
			window.location.hash = letter;
		}, 10);
	});
});