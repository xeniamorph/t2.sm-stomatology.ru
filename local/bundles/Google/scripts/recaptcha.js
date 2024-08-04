(function () {
	let widgetIDList = [];

	let siteKey = '6LdSzJoUAAAAAD-7veqZo_L69_QDmw07JSArFnup';

	self.onloadCaptchaCallback = function () {
		initForms();
	};

	function initForms() {
		$('.recaptchaForm').each(function () {
			widgetIDList[$(this).attr('id')] = grecaptcha.render($(this).attr('id'), {
				'sitekey': siteKey,
				'callback': $(this).data('method'),
			});
		});
	}

	self.captchaFormSubmit = function (formName) {
		let $form = $('#tao-form-' + formName);

		$form.submit();
	};

	self.captchaFormProcess = function (formName, widgetID, options) {
		let $formContainer = $('div.tao-form-' + formName);
		let $form = $('#tao-form-' + formName);
		let $shadow = $('<div>').addClass('shadow');

		$formContainer.append($shadow);

		$.ajax({
			url: $form.attr('action'),
			type: 'POST',
			dataType: 'json',
			data: $form.serialize() + '&ajax=y',
			success: function (response) {
				$shadow.remove();
				if (response.result == 'ok') {
					var std = true;
					var funcName = response.on_ok;
					if (typeof funcName == 'string') {
						var func = window[funcName];
						if (typeof func == 'function') {
							var r = func(response, void 0, options);
							if (r === false) {
								std = false;
							}
						}
					}
					if (std) {
						responseOk(response);
					}
				} else {
					var std = true;
					var funcName = response.on_error;
					if (typeof funcName == 'string') {
						var func = window[funcName];
						if (typeof func == 'function') {
							var r = func(response, void 0, options);
							if (r === false) {
								std = false;
							}
						}
					}
					if (std) {
						responseError(widgetID, response);
					}
				}
			},
			error: function (response) {
				//self.form.html("Ошибка при отправке формы");
			},
		});

		function responseOk(response) {
			var ok = $('<div>').addClass('ok-message').html(response.ok_message);
			$('div.tao-form-' + formName).empty().append(ok);
		}

		function responseError(widgetID, response) {
			grecaptcha.reset(widgetIDList[widgetID]);
			var e = $('div.tao-form-' + formName + ' ul.tao-form-errors').empty();
			$.each(response.errors, function (field, message) {
				if (message.length > 1) {
					var li = $('<li>').attr('data-field', field).addClass('error-field-' + field).html(message);
					e.append(li);
				}
				$('div.tao-form-' + formName + ' .tao-form-field-' + field).addClass('tao-error-field');
			});
			e.show();
		}
	};
})();
