<!-- Записаться на прием -->
<div class="modal fade modal--hidden" id="modal-feedback">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<form action="">
				<div class="modal-header">
					<div class="close" data-dismiss="modal"></div>
					<h4 class="modal-title">
						Записаться на прием
					</h4>
				</div>
				<div class="modal-body">

					<div class="b-form">
						<div class="b-form__group b-form__group--float-label b-form__group--required">
							<!-- Порядок важен: сначала инпут, потом лэйбл -->
							<input type="text" class="form-control b-form__control b-form__control--error">
							<label for="">Имя<span class="required">*</span></label>
						</div>

						<div class="b-form__group b-form__group--float-label b-form__group--required">
							<!-- Порядок важен: сначала инпут, потом лэйбл -->
							<input type="text" class="form-control b-form__control b-form__control--correct">
							<label for="">Телефон<span class="required">*</span></label>
						</div>

						<div class="b-form__group b-form__group--date">
							<label for="">Желаемая дата приема</label>
							<input type="text" class="form-control b-form__control b-form__control--date">
						</div>

						<div class="b-form__group">
							<div class="b-form__select b-custom-select">
								<select name="" class="form-control b-form__control">
									<option value="1">Желаемое время приема</option>
									<option value="2">Сейчас</option>
									<option value="3">Сейчас</option>
									<option value="4">Сейчас</option>
									<option value="5">Сейчас</option>
								</select>
							</div>
						</div>

						<div class="b-form__group b-form__group--float-label">
							<!-- Порядок важен: сначала инпут, потом лэйбл -->
							<textarea type="text" class="form-control b-form__control"></textarea>
							<label for="">Комментарий</label>
						</div>

						<div class="b-form__group b-form__note">
							Запись через сайт является предварительной. Наш сотрудник свяжется с вами в ближайшее время
							для подтверждения записи на прием.
						</div>
					</div>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary">
						Отправить заявку
					</button>
				</div>
			</form>
		</div>
	</div>
</div>

<!-- Задать вопрос -->
<div class="modal fade modal--hidden" id="modal-ask-question">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<form action="">
				<div class="modal-header">
					<div class="close" data-dismiss="modal"></div>
					<h4 class="modal-title">
						Задать вопрос
					</h4>
				</div>
				<div class="modal-body">

					<div class="b-form">
						<div class="b-form__group b-form__group--float-label b-form__group--required">
							<!-- Порядок важен: сначала инпут, потом лэйбл -->
							<input type="text" class="form-control b-form__control">
							<label for="">Имя<span class="required">*</span></label>
						</div>

						<div class="b-form__group b-form__group--float-label b-form__group--required">
							<!-- Порядок важен: сначала инпут, потом лэйбл -->
							<input type="text" class="form-control b-form__control">
							<label for="">Телефон<span class="required">*</span></label>
						</div>

						<div class="b-form__group b-form__group--float-label">
							<!-- Порядок важен: сначала инпут, потом лэйбл -->
							<input type="text" class="form-control b-form__control">
							<label for="">E-mail</label>
						</div>

						<div class="b-form__group b-form__group--float-label">
							<!-- Порядок важен: сначала инпут, потом лэйбл -->
							<textarea type="text" class="form-control b-form__control"></textarea>
							<label for="">Вопрос</label>
						</div>

						<div class="b-form__group b-form__note">
							Наш сотрудник ответит вам в ближайшее время.
						</div>
					</div>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary">
						Отправить
					</button>
				</div>
			</form>
		</div>
	</div>
</div>

<!-- Заказать обратный звонок -->
<div class="modal fade modal--hidden" id="modal-callback">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<form action="">
				<div class="modal-header">
					<div class="close" data-dismiss="modal"></div>
					<h4 class="modal-title">
						Заказать обратный звонок
					</h4>
				</div>
				<div class="modal-body">

					<div class="b-form">
						<div class="b-form__group b-form__group--float-label b-form__group--required">
							<!-- Порядок важен: сначала инпут, потом лэйбл -->
							<input type="text" class="form-control b-form__control">
							<label for="">Имя<span class="required">*</span></label>
						</div>

						<div class="b-form__group b-form__group--float-label b-form__group--required">
							<!-- Порядок важен: сначала инпут, потом лэйбл -->
							<input type="text" class="form-control b-form__control">
							<label for="">Телефон<span class="required">*</span></label>
						</div>

						<div class="b-form__group">
							<div class="b-form__select b-custom-select">
								<select name="" class="form-control b-form__control">
									<option value="1">Удобное время для звонка</option>
									<option value="2">Сейчас</option>
									<option value="3">Сейчас</option>
									<option value="4">Сейчас</option>
									<option value="5">Сейчас</option>
								</select>
							</div>
						</div>

						<div class="b-form__group b-form__note">
							Наш сотрудник ответит вам в ближайшее время.
						</div>
					</div>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary">
						Отправить
					</button>
				</div>
			</form>
		</div>
	</div>
</div>

<!-- Написать руководителю Службы клиентской поддержки  -->
<div class="modal fade modal--hidden" id="modal-support">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<form action="">
				<div class="modal-header">
					<div class="close" data-dismiss="modal"></div>
					<h4 class="modal-title">
						Написать руководителю Службы клиентской поддержки
					</h4>
				</div>
				<div class="modal-body">

					<div class="b-form">
						<div class="b-form__group b-form__group--float-label b-form__group--required">
							<!-- Порядок важен: сначала инпут, потом лэйбл -->
							<input type="text" class="form-control b-form__control">
							<label for="">Ваше имя<span class="required">*</span></label>
						</div>

						<div class="b-form__group b-form__group--float-label b-form__group--required">
							<!-- Порядок важен: сначала инпут, потом лэйбл -->
							<input type="text" class="form-control b-form__control">
							<label for="">Ваша фамилия<span class="required">*</span></label>
						</div>

						<div class="b-form__group b-form__group--float-label b-form__group--required">
							<!-- Порядок важен: сначала инпут, потом лэйбл -->
							<input type="text" class="form-control b-form__control">
							<label for="">Ваша e-mail для ответа<span class="required">*</span></label>
						</div>

						<div class="b-form__group b-form__group--float-label b-form__group--required">
							<!-- Порядок важен: сначала инпут, потом лэйбл -->
							<textarea type="text" class="form-control b-form__control"
							          style="height: 120px !important;"></textarea>
							<label for="">Отзыв<span class="required">*</span></label>
						</div>
					</div>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary">
						Отправить
					</button>
				</div>
			</form>
		</div>
	</div>
</div>