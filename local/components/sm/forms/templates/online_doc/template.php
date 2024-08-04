<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die(); ?>
<div class="onlinedocform-form">
	<div class="onlinedocform-text">Для вас мы разработали форму предварительного заполнения данных онлайн, благодаря чему  мы сможем подготовить все необходимые документы к вашему приходу в стоматологию. Нам останется только сверить данные и распечатать для вас все необходимые бумаги, что займет не более двух минут и позволит максимально сократить время оформления всех необходимых документов перед приемом у стоматолога.</div>

	<div class="onlinedocform-subtitle"><a href="/about/mery-bezopasnosti-v-klinikakh/">Мы заботимся о вашей безопасности и ценим время!</a></div>

</div>
<div id="onlinedocform-start" class="anchor"></div>
<div class="onlinedocform-msg"><br />Спасибо за оставленную заявку. Мы свяжемся с вами в ближайшее время.<br /><br />
		Заявки, поступившие после 22:00, будут обработаны на следующий день после 8:00.</div>
	<form id="onlinedocform" action="" method="POST" class="">
		<div class="onlinedocform-msg-required">Обязательные поля отмечены звездочкой <red>*</red></div>
		<div class="onlinedocform-form-field onlinedocform-form-box">
			<div class="onlinedocform-subtitle">Отделение СМ-Стоматология:</div>
			<div class="b-form__select b-custom-select b-custom-select--style-2">
				<select id="onlinedocform-dep" name="dep" class="onlinedocform-dep form-control b-form__control">
					<optgroup label="Взрослые отделения"> 
						<option value="Взрослое отделение СМ-Стоматология ул.Старопетровский проезд (м.Войковская)">СМ-Стоматология ул.Старопетровский проезд (м.Войковская)</option>
						<option value="Взрослое отделение СМ-Стоматология ул.Клары Цеткин (м.Войковская)">СМ-Стоматология ул.Клары Цеткин (м.Войковская)</option>
						<option value="Взрослое отделение СМ-Стоматология ул.Ярославская (м.ВДНХ)">СМ-Стоматология ул.Ярославская (м.ВДНХ)</option>
						<option value="Взрослое отделение СМ-Стоматология ул.Ярцевская (м.Ярцевская)">СМ-Стоматология ул.Ярцевская (м.Ярцевская)</option>
						<option value="Взрослое отделение СМ-Стоматология Волгоградский проспект (м.Текстильщики)">СМ-Стоматология Волгоградский проспект (м.Текстильщики)</option>
					</optgroup>
					<optgroup label="Детские отделения">
						<option value="Детское отделение СМ-Стоматология ул.Космонавта Волкова (м.Войковская)">СМ-Стоматология ул.Космонавта Волкова (м.Войковская)</option>
						<option value="Детское отделение СМ-Стоматология ул.3-ий проезд Марьиной Рощи (м.Марьина Роща)">СМ-Стоматология ул.3-ий проезд Марьиной Рощи (м.Марьина Роща)</option>
						<option value="Детское отделение СМ-Стоматология ул.Ярцевская (м.Ярцевская)">СМ-Стоматология ул.Ярцевская (м.Ярцевская)</option>
						<option value="Детское отделение СМ-Стоматология ул.Волгоградский проспект (м.Текстильщики)">СМ-Стоматология ул.Волгоградский проспект (м.Текстильщики)</option>
					</optgroup>
				</select>
			</div>
		</div>
		<div class="onlinedocform-text"><red>Важно!</red> При визите в СМ-Стоматология, <red>обязательно возьмите с собой документы удостоверяющие личность</red> (паспорт, свидетельство о рождении ребенка), для несовершеннолетних пациентов обязательно присутствие родителя или законного представителя (опекуны, усыновители или попечители), так как именно они подписывают все документы перед посещением врача.</div><br />
		<div class="onlinedocform-form-box">
			<div class="onlinedocform-subtitle">Ваши данные</div>
			<div class="row">
				<div class="col-md-12 col-lg-12">
					<div class="onlinedocform-form-field">
						<div class="onlinedocform-label">ФИО<red>*</red>:</div>
						<input id="onlinedocform-name" name="name" type="text" class="onlinedocform-name form-control b-form__control onlinedocform-required">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-lg-4">
					<div class="onlinedocform-form-field">
						<div class="onlinedocform-label">Дата рождения<red>*</red>:</div>
						<input id="onlinedocform-dob" name="dob" type="date" class="onlinedocform-dob form-control b-form__control onlinedocform-required">
					</div>
				</div>
				<div class="col-md-4 col-lg-4">
					<div class="onlinedocform-form-field">
						<div class="onlinedocform-label">Email:</div>
						<input id="onlinedocform-email" name="email" type="email" class="onlinedocform-email form-control b-form__control">
					</div>
				</div>
				<div class="col-md-4 col-lg-4">
					<div class="onlinedocform-form-field">
						<div class="onlinedocform-label">Ваш телефон<red>*</red>:</div>
						<input id="onlinedocform-phone" name="phone" type="tel" class="onlinedocform-phone form-control b-form__control onlinedocform-required">
					</div>
				</div>
			</div>
			<div class="onlinedocform-form-field">
				<div class="onlinedocform-label">Паспортные данные<red>*</red>:</div>
				<input id="onlinedocform-passport" name="passport" type="text" class="onlinedocform-passport form-control b-form__control onlinedocform-required">
			</div>
			<div class="onlinedocform-form-field">
				<div class="onlinedocform-label">Кем выдан, когда выдан<red>*</red>:</div>
				<input id="onlinedocform-issued" name="issued" type="text" class="onlinedocform-issued form-control b-form__control onlinedocform-required">
			</div>

			<div class="onlinedocform-form-field onlinedocform-form-checkbox">
				<input id="onlinedocform-parent" name="parent" type="checkbox" class="onlinedocform-parent"><label for="onlinedocform-parent">Законный представитель (родитель, опекун)</label>
			</div>
		</div>
		<div class="onlinedocform-form-box">
			<div class="onlinedocform-subtitle">Данные ребенка</div>
			<div class="onlinedocform-form-field">
				<div class="onlinedocform-label">ФИО ребенка:</div>
				<input id="onlinedocform-cname" name="cname" type="text" class="onlinedocform-cname form-control b-form__control">
			</div>
			<div class="onlinedocform-form-field">
				<div class="onlinedocform-label">Дата рождения ребенка:</div>
				<input id="onlinedocform-cdob" name="cdob" type="date" class="onlinedocform-cdob form-control b-form__control">
			</div>
			<div class="onlinedocform-form-field">
				<div class="onlinedocform-label">Свидетельство о рождении / паспорт:</div>
				<input id="onlinedocform-cpassport" name="cpassport" type="text" class="onlinedocform-cpassport form-control b-form__control">
			</div>
			<div class="onlinedocform-form-field">
				<div class="onlinedocform-label">Кем выдан, когда выдан:</div>
				<input id="onlinedocform-cissued" name="cissued" type="text" class="onlinedocform-cissued form-control b-form__control">
			</div>
		</div>
		<div class="onlinedocform-form-box">
			<div class="onlinedocform-form-field">
				<div class="onlinedocform-label">Адрес регистрации<red>*</red>:</div>
				<textarea id="onlinedocform-address" name="address" class="onlinedocform-address form-control b-form__control onlinedocform-required"></textarea>
			</div>
			<div class="onlinedocform-form-field onlinedocform-form-checkbox">
				<input id="onlinedocform-match" name="match" type="checkbox" class="onlinedocform-match"><label for="onlinedocform-match">совпадает с адресом регистрации</label>
			</div>
			<div class="onlinedocform-form-field onlinedocform-form-field-addressr">
				<div class="onlinedocform-label">Адрес проживания:</div>
				<textarea id="onlinedocform-addressr" name="addressr" class="onlinedocform-addressr form-control b-form__control"></textarea>
			</div>
		</div>
		<div class="onlinedocform-form-box">
			<?/*<div class="onlinedocform-form-field">
				<div class="onlinedocform-label">Бывают ли аллергические реакции:</div>
				<textarea id="onlinedocform-allergic" name="allergic" class="onlinedocform-allergic form-control b-form__control"></textarea>
			</div>*/?>
			<div class="onlinedocform-form-field">
				<div class="onlinedocform-label">Дополнительная информация:</div>
				<textarea id="onlinedocform-addinfo" name="addinfo" class="onlinedocform-addinfo form-control b-form__control"></textarea>
			</div>
		</div>
		<div class="onlinedocform-form-field">
			<input id="onlinedocform-accept" name="accept" type="checkbox" class="onlinedocform-accept"><label for="onlinedocform-accept" class="onlinedocform-form-obrabotka">выражаю свое согласие на <a href="/about/obrabotka-dannykh/" target="_blank">обработку своих персональных данных</a></label>
		</div>

		<button class="btn btn-primary btn-lg" disabled="disabled">Отправить</button>
	</form>
	<br />
	<div class="onlinedocform-text">
		<b>Документы для ознакомления:</b><br /><br />
		<div class="onlinedocform-pdf flex">
			<a target="_blank" href="/upload/pdf/Dogovor-vzroslyy.pdf">Договор<br /> взрослый</a>
			<a target="_blank" href="/upload/pdf/Dogovor-detskiy.pdf">Договор<br /> детский</a>
			<a target="_blank" href="/upload/pdf/Dogovor-3kh-storonniy.pdf">Договор<br /> 3-х сторонний</a>
			<a target="_blank" href="/upload/pdf/Informirovannoe-dobrovolnoe-soglasie-na-vidy-med-vmeshatelstv.pdf">Информированное<br /> добровольное<br /> согласие на виды<br /> мед. вмешательств</a>
			<a target="_blank" href="/upload/pdf/Soglasie-na-obrabotku-personalnykh-dannykh.pdf">Согласие на<br /> обработку<br /> персональных<br /> данных</a>
		</div>
	</div>
</div>
