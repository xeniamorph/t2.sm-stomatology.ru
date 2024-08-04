$(function(){
	$('.js-disease-search-select').on('change', function(){
		var idSymptom = $(this).find('option:selected').val();
		$.ajax({
			url: '/local/vendor/techart/bitrix.tao/api/elements-ajax.php',
			type: 'GET',
			dataType: 'html',
			data: {
				'filter':{ 
					'PROPERTY_symptoms': idSymptom,
					'ACTIVE' : 'Y'
				},
				'infoblock': 'disease'
			},
			success: function(response) {
				$('.b-content-dd__items').html(response);
			},
			error: function(response) {
				//error
			}
		});
	});
});
