<?php
$technologies = \TAO::infoblock('technologies')->getItems([
	'filter' => ['ACTIVE'=> 'Y', 'PROPERTY_SHOW_LAB_VALUE' => 'Y']
]);
?>

<div class="m-equipment">
	<div class="container">
		<h2 class="m-equipment__main-title">Оборудование</h2>
		<div class="m-equipment__main-desc">
			<p>
				Постоянная коммуникация зубных техников с врачами (планирование,
				изменение конструкций на этапах лечения, применение новых технологий и материалов). <br>
				Все работы изготавливаются в полностью регулируемых артикуляторах Artex Amman Girbah.
				<br>
				Строгое соблюдение протокола и заявленных сроков изготовления.
			</p>
		</div>
		<div class="m-equipment__wrap">
			<div class="m-equipment__items">
				<?php $i = 0;?>
				<?php  foreach($technologies as $technology){ ?>
					<?php $i++; ?>
					<a class="m-equipment__item" href="<?= $technology->url() ?>">
						<div class="m-equipment__card">
							<div class="m-equipment__image"><img src="<?= $technology->previewPicture()->resizedImage(fit480x306) ?>"></div>
							<div class="m-equipment__desc">
								<div class="m-equipment__title"><?= $technology->title() ?></div>
								<div class="m-equipment__brand">
									<?php if(!empty($technology->property('country')->value())) {
										echo $technology->property('country')->value();
									}?>
									<?php if(!empty($technology->property('country')->value()) && !empty($technology->property('brand')->value())) {
										echo '/';
									}?>
									<?php if(!empty($technology->property('brand')->value())) {
										echo $technology->property('brand')->value();
									}?>
									<br>
									<?= $technology['PREVIEW_TEXT']?>
								</div>
							</div>
						</div>
					</a>
				<?php } ?>
			</div>
		</div>
	</div>
</div>

