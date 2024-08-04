import $ from 'jquery';

$(function(){
	$('.select').each(function(){
		$(this).select2({
			placeholder: $(this).attr('placeholder'),
			minimumResultsForSearch: -1,
			allowClear: true
		});
	});
})