<div id="openModal-1" class="modal">

	<!--<a href="#close" title="Close" class="close">×</a> -->

	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
				<div class="modal-skin">
					<div class="modal-outer">
						<div class="modal-inner">
							<div class="modalform_box">
								<div class="modalform_img">
									<img src="/images/modal-logo.svg" alt="">
								</div>
								<div class="modal-popup_title">ХОТИТЕ, МЫ ВАМ ПЕРЕЗВОНИМ?</div>
								<div class="msg_modalform">
									<form id="modalform" action method="POST">
										<div class="form_box clearfix">
											<input placeholder="Ваше имя" class="name_modalform" name="name" type="text">
										</div>

										<div class="form_box clearfix">
											<input placeholder="Ваш номер телефона *" class="phone_modalform" name="phone" type="text">
										</div>
										<input type="hidden" name="recaptcha_response" class="recaptcha-response">
										<div class="modal-btn-submit">
											<input type="submit" class="submit_modalform lilac-bg" value="Жду звонка">
										</div>
										<div class="modal-agreement">
											Нажимая на кнопку, вы даете согласие <br>
											на обработку своих <a href="#">персональных данных</a>.
										</div>

										<div class="modal-popup_text">
											Мы поможем быстро найти то, что Вам нужно!
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="modal-dialog modal-ask-question">
		<div class="modal-content">
			<div class="modal-body">
				<div class="modal-skin">
					<div class="modal-outer">
						<div class="modal-inner">
							<div class="modalform_box">
								<div class="modalform_img">
									<img src="/images/modal-logo.svg" alt="">
								</div>
								<div class="modal-popup_title">Задать вопрос</div>
								<div class="msg_modalform">
									<form class="form-callback modal-form" action method="POST">
										<div class="form_box clearfix">
											<input placeholder="Ваше имя" class="name_modalform _name" name="name" type="text">
										</div>

										<div class="form_box clearfix">
											<input placeholder="Ваш номер телефона *" class="phone_modalform _phone" name="phone" type="text">
										</div>

										<div class="form_box clearfix">
											<textarea class="" name="question" value=""></textarea>
										</div>
										<input type="hidden" name="formtype" value="question">
										<input type="hidden" name="analytics" value="AskQuestion_H1">
										<input type="hidden" name="recaptcha_response" class="recaptcha-response">
										<div class="modal-btn-submit">
											<input type="submit" class="submit_modalform" value="ОТПРАВИТЬ ЗАЯВКУ">
										</div>
										<div class="modal-agreement">
											Нажимая на кнопку, вы даете согласие <br>
											на обработку своих <a href="/about/obrabotka-dannykh/" target="_blank">персональных данных</a>.
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="modal-dialog__close"></div>
	</div>

	<div class="modal-dialog modal-administration">
		<div class="modal-content">
			<div class="modal-body">
				<div class="modal-skin">
					<div class="modal-outer">
						<div class="modal-inner">
							<div class="modalform_box">
								<div class="modalform_img">
									<img src="/images/modal-logo.svg" alt="">
								</div>
								<div class="modal-popup_title">Написать руководителю Службы клиентской поддержки</div>
								<div class="msg_modalform">
									<form class="js-feedback-submit modal-form " action method="POST">
										<div class="form_box clearfix">
											<input placeholder="Ваше имя" class="name_modalform _name" name="name" type="text">
										</div>

										<div class="form_box clearfix">
											<input placeholder="Ваша фамилия" class="name_modalform _lastname" name="lastname" type="text">
										</div>

										<div class="form_box clearfix">
											<input placeholder="Ваш e-mail" class="name_modalform _email" name="email" value="" type="text">
										</div>

										<div class="form_box clearfix">
											<textarea placeholder="Отзыв" class="" name="review" value=""></textarea>
										</div>
										<input type="hidden" name="formtype" value="administration">
										<input type="hidden" name="analytics" value="">
										<input type="hidden" name="recaptcha_response" class="recaptcha-response">
										<div class="modal-btn-submit">
											<input type="submit" class="submit_modalform" value="ОТПРАВИТЬ ЗАЯВКУ">
										</div>
										<div class="modal-agreement">
											Нажимая на кнопку, вы даете согласие <br>
											на обработку своих <a href="/about/obrabotka-dannykh/" target="_blank">персональных данных</a>.
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="modal-dialog__close"></div>
	</div>

	<div class="modal-dialog popup-form-callback">
		<div class="modal-content">
			<div class="modal-body">
				<div class="modal-skin">
					<div class="modal-outer">
						<div class="modal-inner">
							<div class="modalform_box">
								<div class="modalform_img">
									<img src="/images/modal-logo.svg" alt="">
								</div>
								<div class="modal-popup_title">ОБРАТНЫЙ ЗВОНОК</div>
								<div class="msg_modalform">
									<form class="form-callback modal-form" action method="POST">
										<div class="form_box clearfix">
											<input placeholder="Ваше имя" class="name_modalform _name" name="name" type="text">
										</div>

										<div class="form_box clearfix">
											<input placeholder="Ваш номер телефона *" class="phone_modalform _phone" name="phone" type="text">
										</div>
										<input type="hidden" name="formtype" value="callback">
										<input type="hidden" name="analytics" value="OrderCall_Toolbar">
										<input type="hidden" name="recaptcha_response" class="recaptcha-response">
										<div class="modal-btn-submit">
											<input type="submit" class="submit_modalform" value="ОТПРАВИТЬ ЗАЯВКУ">
										</div>
										<div class="modal-agreement">
											Нажимая на кнопку, вы даете согласие <br>
											на обработку своих <a href="/about/obrabotka-dannykh/" target="_blank">персональных данных</a>.
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="modal-dialog__close"></div>
	</div>

	<div class="modal-dialog continue">
		<div class="modal-content">
			<div class="modal-body">
				<div class="modal-skin">
					<div class="modal-outer">
						<div class="modal-inner">
						<div class="modalform_box">
								<div class="modalform_img">
									<img src="/images/modal-logo.svg" alt="">
								</div>
								<div class="modal-popup_title title-min">Вы действительно хотите прервать запись?</div>
								<div class="modalform__center-text">
									Если у вас возникли вопросы,
									позвоните нам по телефону: <br>
									<a href="tel:+74957774806">+7 (495) 777-48-06</a>
								</div>

								<div class="modalform__buttons">
									<a class="modalform__btn close" href="#"><div>ПРЕРВАТЬ</div></a>

									<a class="modalform__btn continue-btn" href="#"> <div>ПРОДОЛЖИТЬ</div></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="modal-dialog popup-form-feedback">
		<div class="modal-content">
			<div class="modal-body">
				<div class="modal-skin">
					<div class="modal-outer">
						<div class="modal-inner">
							<div class="modalform_box">
								<div class="modalform_img">
									<img src="/images/modal-logo.svg" alt="">
								</div>
								<div class="modal-popup_title mb-10">ЗАПИСЬ К СПЕЦИАЛИСТУ</div>

								<?/*<div class="modalform__subtitle">
									<span>Акция!</span> <br>
									Бесплатная консультация хирурга по поводу операции.
									<a href="#">Подробнее...</a>
								</div>*/?>

								<div class="msg_modalform">
									<form class="modal-form form-feedback" action method="POST">
										<div class="form_box clearfix">
											<input placeholder="Ваше имя" class="name_modalform _name" name="name" type="text">
										</div>

										<div class="form_box clearfix">
											<input placeholder="Ваш номер телефона *" class="phone_modalform _phone" name="phone" type="text">
										</div>

										<?/*<div class="form_box clearfix">
											<select onchange="this.setAttribute('data-selected', true)">
												<option disabled selected hidden>Выбрать специалиста</option>
												<option>Стоматологи-терапевты</option>
												<option>Стоматологи-хирурги</option>
												<option>Стоматологи-имплантологи</option>
												<option>Стоматологи-ортодонты</option>
												<option>Стоматологи-ортопеды</option>
												<option>Стоматологи-пародонтологи</option>
											</select>
										</div>


										<div class="form_box clearfix">
											<div class="form_box_calendar">
												<input type="text" placeholder="Желательная дата приема" class="form-control js-popup-select-date"  autocomplete="off" name="date" value="">
												<div id="js-popup-calendar" class="js-popup-calendar"></div>
											</div>
										</div>

										<div class="form_box clearfix">
											<select class="select" onchange="this.setAttribute('data-selected', true)"  name="time">
												<option disabled selected hidden>Время приема</option>
												<option>08:00</option>
												<option>09:00</option>
												<option>10:00</option>
												<option>11:00</option>
												<option>12:00</option>
												<option>13:00</option>
												<option>14:00</option>
												<option>15:00</option>
												<option>16:00</option>
												<option>17:00</option>
												<option>18:00</option>
												<option>19:00</option>
												<option>20:00</option>
												<option>21:00</option>
												<option>22:00</option>
											</select>
										</div>

										<div class="form_box clearfix">
											<select class="select" name="age">
												<option disabled selected hidden>Возраст пациента</option>
												<?php for($i=1; $i<100; $i++) {
													echo '<option>'.$i.'</option>';
												}?>
											</select>
										</div>


										<div class="modalform__sub">
											Запись через сайт является предварительной. <br>
											Наш сотрудник свяжется с Вами для подтверждения записи к специалисту.
										</div>*/?>
										<div class="modal-btn-submit">
											<input type="submit" class="submit_modalform" value="ОТПРАВИТЬ ЗАЯВКУ">
											<input type="hidden" name="formtype" value="appointment">
											<input type="hidden" name="analytics" value="OrderDoctor_Toolbar">
											<input type="hidden" name="recaptcha_response" class="recaptcha-response">
										</div>

										<div class="modal-agreement">
											Нажимая на кнопку, вы даете согласие <br>
											на обработку своих <a href="/about/obrabotka-dannykh/" target="_blank">персональных данных</a>.
										</div>

										<?/*<div class="modal-agreement dark-text">
											Мы гарантируем неразглашение персональных данных и отсутствие
											рекламных рассылок по указанному вами телефону. Ваши данные
											необходимы для обеспечения обратной связи и организации
											записи к специалисту клиники.
										</div>*/?>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="modal-dialog__close"></div>
	</div>

</div>