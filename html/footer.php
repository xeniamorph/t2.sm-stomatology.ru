<div class="b-footer">
	<div class="row b-footer__cols">
		<div class="col-sm-9 b-footer__col-left">
			<?php require 'footer-menu.php' ?>
		</div>
		<div class="col-sm-3 b-footer__col-right">
			<p class="b-footer__text">
				Материалы, размещенные на данной странице, носят информационный характер и предназначены для
				образовательных целей. Посетители сайта не должны использовать их в качестве медицинских рекомендаций.
				Определение диагноза и выбор методики лечения остается исключительной прерогативой вашего лечащего
				врача!
			</p>
			<p class="b-footer__text">
				ООО «СМ-Клиника» не несёт ответственности за возможные негативные последствия, возникшие в результате
				использования информации, размещенной на сайте smclinic.ru
			</p>
			<p class="b-footer__text">
				<a href="#">
					Политика СМ-Клиника в отношении обработки
					персональных данных
				</a>
			</p>
		</div>
	</div>

	<div class="b-footer__contraindications">
		<img src="/<?= TAO::frontendUrl('img/common/footer/contraindications-xs-up.png'); ?>"
		     class="hidden-xs-down b-contradiction b-contradiction--large"
		     alt="">
		<img src="/<?= TAO::frontendUrl('img/common/footer/contraindications-xs-down.png'); ?>"
		     class="hidden-sm-up b-contradiction b-contradiction--small"
		     alt="">
	</div>
</div>

</body>
</html>