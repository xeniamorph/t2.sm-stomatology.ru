<?
/*
 * Путь к изображению маркера карты захардкорен в js: /images/mapMarker.png
 */
?>
<div class="b-map">
	<div id="js-main-map" style="width: 100%;"></div>
	<div class="b-map__info">
		<div class="b-map__info-top">
			<img src="/<?= TAO::frontendUrl("img/common/logo.png") ?>"
			     class="b-map__info-logo hidden-xs-down"
			     alt="СМ-Стоматология">
			<div class="b-map__info-phone">
				+7 (495) 480-82-04
			</div>
			<div class="b-map__info-work-time">
				9:00 — 21:00
			</div>
		</div>

		<div class="row b-map__info-row b-map__info-middle">
			<div class="col-sm-9">
				<?php require 'contacts-list.php'; ?>
			</div>
			<div class="col-sm-3">
				<div class="b-socials">
					<a href="#" class="b-socials__item">
						<span>
						<i class="fa fa-facebook"></i>
							</span>
					</a>
					<a href="#" class="b-socials__item">
						<span>
						<i class="fa fa-vk"></i>
						</span>
					</a>
					<a href="#" class="b-socials__item">
						<span>
						<i class="fa fa-odnoklassniki"></i>
						</span>
					</a>
				</div>
			</div>
		</div>

		<div class="b-map__info-footer">
			<strong>2016 © «СМ-Стоматология»</strong>
			Web-дизайн сайта, создание сайта — <a href="http://techart.ru">Текарт</a>.
		</div>
	</div>
</div>