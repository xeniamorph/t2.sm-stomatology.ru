<div class="b-tabs">

	<ul class="nav nav-tabs">
		<li class="nav-item">
			<a class="nav-link active"
			   data-toggle="tab" href="#tab1" role="tab">
				Лечение
			</a>
		</li>
		<li class="nav-item">
			<a class="nav-link nav-link--selected"
			   data-toggle="tab" href="#tab2" role="tab">
				Цены
			</a>
		</li>
		<li class="nav-item">
			<a class="nav-link"
			   data-toggle="tab" href="#tab3" role="tab">
				Заболевания
			</a>
		</li>
		<li class="nav-item">
			<a class="nav-link"
			   data-toggle="tab" href="#tab4" role="tab">
				Врачи
			</a>
		</li>
		<li class="nav-item">
			<a class="nav-link"
			   data-toggle="tab" href="#tab5" role="tab">
				Преимущества
			</a>
		</li>
		<li class="nav-item">
			<a class="nav-link"
			   data-toggle="tab" href="#tab6" role="tab">
				Оборудование
			</a>
		</li>
	</ul>


	<div class="tab-content">
		<div class="tab-pane active" id="tab1" role="tabpanel">
			<? require "tab1.php"; ?>
		</div>

		<div class="tab-pane" id="tab2" role="tabpanel">
			<? require "tab2.php"; ?>
		</div>

		<div class="tab-pane" id="tab3" role="tabpanel">
			<? require "tab3.php"; ?>
		</div>

		<div class="tab-pane" id="tab4" role="tabpanel">
			<? require "tab4.php"; ?>
		</div>

		<div class="tab-pane" id="tab5" role="tabpanel">
			<? require "tab5.php"; ?>

		</div>

		<div class="tab-pane" id="tab6" role="tabpanel">
			<? require "tab6.php"; ?>
		</div>

	</div>

</div>