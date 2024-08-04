import $ from 'jquery';

$(function () {
	let $search = $('.b-header').find('.b-search--header'),
		$searchInput = $search.find('input'),
		$form = $search.find('form'),
		$searchToggle = $search.find('.b-search__toggle'),
		$searchBtnClose = $search.find('.b-search__btn-close');

	$searchToggle.on('click', () => {
		$search.toggleClass('b-search--open');
		$searchToggle.toggleClass('b-search__toggle--open');
		$searchInput.focus();
	});

	$searchBtnClose.on('click', () => {
		$search.removeClass('b-search--open');
		$searchToggle.removeClass('b-search__toggle--open');
	});

	$form.submit(() => !!$.trim($searchInput.val()));
});

$(function() {
	let $feedback_panel = $('.js-feedback-panel');
	$('.js-feedback-panel-btn').on('click', function(){
		$feedback_panel.toggleClass('active');
	});

	$('.js-feedback-panel .btn').on('click', function(){
		$feedback_panel.toggleClass('active');
	}); 
});
