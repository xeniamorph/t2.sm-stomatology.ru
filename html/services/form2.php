<div class="b-form b-form--inline">
	<form action="">
		<div class="row">
			<div class="col-md-6 col-lg-4">
				<div class="b-form__group b-form__group--float-label">
					<!-- Порядок важен: сначала инпут, потом лэйбл -->
					<input type="text" class="form-control b-form__control">
					<label for="">Имя</label>
				</div>
			</div>

			<div class="col-md-6 col-lg-4">
				<div class="b-form__group b-form__group--float-label b-form__group--required">
					<!-- Порядок важен: сначала инпут, потом лэйбл -->
					<input type="text" class="form-control b-form__control">
					<label for="">Телефон<span class="required">*</span></label>
				</div>
			</div>

			<div class="col-md-12 col-lg-4">

			</div>
		</div>

		<div class="row">
			<div class="col-md-6 col-lg-4">
				<div class="b-form__group b-form__group--date">
					<label for="">Желаемая дата приема</label>
					<input type="text" class="form-control b-form__control b-form__control--date">
				</div>
			</div>

			<div class="col-md-6 col-lg-4">
				<div class="b-form__group">
					<div class="b-form__select b-custom-select b-custom-select--style-2">
						<select name="" class="form-control b-form__control"
						        data-theme="select-theme-style2">
							<option value="1">Желаемое время приема</option>
							<option value="2">Сейчас</option>
							<option value="3">Сейчас</option>
							<option value="4">Сейчас</option>
							<option value="5">Сейчас</option>
						</select>
					</div>
				</div>
			</div>

			<div class="col-md-12 col-lg-4">
				<div class="b-form__group b-form__buttons">
					<button class="btn btn-primary btn-lg">
						Отправить заявку
					</button>
				</div>
			</div>
		</div>

		<div class="b-form__group b-form__note">
			Запись через сайт является предварительной. Наш сотрудник свяжется с вами в ближайшее время для
			подтверждения записи на прием.
		</div>

	</form>
</div>