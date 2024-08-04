<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

return '<div class="popup-form popup-form-consultation">
	<div class="popup-form__wrap">
		<form class="popup-form__form js-feedback-submit" method="POST" action="">
			<div class="popup-form__header">
				<div class="popup-form__small-title clr-blue">Оставьте заявку и наш специалист подберет удобное время для сеанса связи с нужным вам врачом</div>
				<div class="popup-form__close js-popup-close">
					<div></div>
				</div>
			</div>
			<div class="popup-form__body">
				<div class="popup-form__box">
					<div class="popup-form__row">
						<input class="popup-form__input _name" name="name" value="">
						<label class="popup-form__label">Ваше имя</label>
					</div>
					<div class="popup-form__row">
						<input class="popup-form__input _phone" name="phone" value="">
						<label class="popup-form__label">Ваш телефон <span>*</span></label>
					</div>
				</div>
			</div>
			<div class="popup-form__footer">
				<div class="popup-form__submit">
					<button class="popup-form__button" type="submit">
						<div class="btn btn_dark">Оставить заявку</div>
					</button>
					<input type="hidden" name="analytics" value="GetConsult_StockTime">
					<input type="hidden" name="formtype" value="consultation">
					<input type="hidden" name="spec" value="">
				</div>
				<div class="popup-form__private">Нажимая на кнопку, вы даете согласие<br> на <a rel="canonical" href="/about/obrabotka-dannykh/" target="_blank">обработку своих персональных данных</a></div>
			</div>
			<div class="form__loading">
				<div class="form__loading-bg">Отправка<br>данных...</div>
			</div>
		</form>
	</div>
</div>';