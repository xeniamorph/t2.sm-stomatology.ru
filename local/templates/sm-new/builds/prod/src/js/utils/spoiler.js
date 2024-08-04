export function spoiler(){

	$('.js-spoiler-toggle').click(function(){
		var box = $(this).closest('.js-spoiler-box'),
			label = $(this).data('label') ? $(this).data('label') : false;

		if(box.hasClass('active')){
			box.removeClass('active');
		} else {
			box.addClass('active');
		}

		if(label) $(this).data('label', $(this).text());
		$(this).text(label);
	});
	
}