<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

$night = SMClinicHelper::isNight();

$time = '';

if($night){
	$title = 'Круглосуточная<br>консультация';
	$time = '
		<div class="popup-form__row">
			<select class="popup-form__select" name="time" placeholder="Время" autocomplete="off">
				<option></option>
				<option value="9:00">9:00</option>
				<option value="9:30">9:30</option>
				<option value="10:00">10:00</option>
				<option value="10:30">10:30</option>
				<option value="11:00">11:00</option>
				<option value="11:30">11:30</option>
				<option value="12:00">12:00</option>
				<option value="12:30">12:30</option>
				<option value="13:00">13:00</option>
				<option value="13:30">13:30</option>
				<option value="14:00">14:00</option>
				<option value="14:30">14:30</option>
				<option value="15:00">15:00</option>
				<option value="15:30">15:30</option>
				<option value="16:00">16:00</option>
				<option value="16:30">16:30</option>
				<option value="17:00">17:00</option>
				<option value="17:30">17:30</option>
				<option value="18:00">18:00</option>
				<option value="18:30">18:30</option>
				<option value="19:00">19:00</option>
				<option value="19:30">19:30</option>
				<option value="20:00">20:00</option>
				<option value="20:30">20:30</option>
				<option value="21:00">21:00</option>
				<option value="21:30">21:30</option>
			</select>
			<label class="popup-form__label">Время</label>
		</div>
	';
} else {
	$title = 'Хотите мы<br>Вам перезвоним?';
}

return '<div class="popup-form popup-form-recall">
	<div class="popup-form__wrap">
		<form class="popup-form__form js-feedback-submit" method="POST" action="">
			<div class="popup-form__header">
				<div class="popup-form__big-title clr-blue">'.$title.'</div>
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
					'.$time.'
				</div>
			</div>
			<div class="popup-form__footer">
				<div class="popup-form__submit">
					<button class="popup-form__button" type="submit">
						<div class="btn btn_dark">Отправить</div>
					</button>
					<input type="hidden" name="analytics" value="OrderCall_Leave">
					<input type="hidden" name="formtype" value="callback">
				</div>
				<div class="popup-form__row al-c">Мы поможем быстро найти то, что Вам нужно!</div>
				<div class="popup-form__private">Нажимая на кнопку, вы даете согласие<br> на <a rel="canonical" href="/about/obrabotka-dannykh/" target="_blank">обработку своих персональных данных</a></div>
			</div>
			<div class="form__loading">
				<div class="form__loading-bg">Отправка<br>данных...</div>
			</div>
		</form>
	</div>
</div>';