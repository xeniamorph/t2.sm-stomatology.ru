<div class="callback-form">
	<div class="container">
		<div class="callback-block">
			<div class="callback-block__form">
				<form class="js-feedback-submit" method="POST" action="">
					<div class="page-form__header">
						<div class="callback-block__title">Заказать обратный звонок</div>
						<div class="callback-block__text">Наш сотрудник ответит вам в ближайшее время.</div>
					</div>
					<div class="page-form__body">
						<div class="page-form__row">
							<div class="page-form__cell">
								<label class="page-form__label">Имя</label>
								<input class="page-form__input" type="text" name="name" placeholder="Имя">
							</div>
							<div class="page-form__cell">
								<label class="page-form__label">Телефон *</label>
								<input class="page-form__input" type="text" name="phone" placeholder="Телефон*">
							</div>
						</div>
					</div>
					<div class="callback-block__footer">
						<div class="page-form__cell">
							<button class="page-form__submit" type="submit">Заказать звонок</button>
						</div>
					</div>
					<div class="page-form__cell-2">
						<div class="page-form__agreement">Нажимая на кнопку, вы даете согласие
							на <a href="/about/obrabotka-dannykh/" target="_blank">обработку своих персональных данных</a>
						</div>
					</div>
					<input type="hidden" name="taoform" value="Callback">
					<input type="hidden" name="formtype" value="callback">
					<input type="hidden" name="analytics" value="OrderCall_Stat">
					<input type="hidden" name="recaptcha_response" class="recaptcha-response">
				</form>
			</div>
			<img class="callback-block__image" src="/local/templates/sm-new/img/main_cta_img.png">
		</div>
	</div>
</div>