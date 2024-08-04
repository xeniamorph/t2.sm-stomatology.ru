$(function(){
	$('.js-symptoms').on('change', function(){
		var symptomId = $(this).val();
		if(symptomId != '') {
			var url = $(this).closest('.js-form-symptoms').attr('action');
			url = 'http://' + window.location.hostname + url + '?symptom=' + symptomId;
			window.location = url;
		}
	});
});
