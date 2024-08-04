<?php
$images = array(
	"Бюгельный протез на замковых креплениях (верхняя челюсть)",
	"Бюгельный протез на замковых креплениях (нижняя челюсть)",
	"Бюгельный протез на кламмерной системе фиксации (верхняя челюсть)",
	"Бюгельный протез на кламмерной системе фиксации (нижняя челюсть)",
	"Каппа для отбеливания",
	"Каркасы металлокерамических коронок с опорой на имплантаты",
	"Металлокераические одиночные коронки с опорой на зубы и на имплантаты",
	"Несъемные цельнокерамические мостовидные протезы (оксид циркония) с опорой на имплантаты № 1",
	"Протезирование при полном отсутствии зубов с опорой на имплантаты",
	"Эстетическое протезирование цельнокерамическими винирами",
	"Стабилизирующая брукс шина на верхнюю челюсть",
	"","","","","","","","",""
);
$path = "/upload/gallery/zubotekhnicheskaya-laboratoriya/portfolio2/";
?>

<div class="lab-works">
	<div class="container">
		<div class="lab-works__title">Наши работы</div>
		<div class="lab-works__items">
			<?php foreach ($images as $index => $image): ?>
				<?php $source = $_SERVER["DOCUMENT_ROOT"] . $path . ($index + 1) . ".jpg" ?>
				<a class="lab-works__item js-fancybox" href="<?= $path ?><?= ($index + 1) ?>.jpg" data-fancybox="work">
					<div class="lab-works__image"><img src="<?= $path ?><?= ($index + 1)?>_small.jpg"></div>
					<?php if( $images[$index] ) {?>
						<div class="lab-works__desc">
							<div class="lab-works__caption"><?= $images[$index] ?></div>
						</div>
					<?php }?>
				</a>
			<?php endforeach; ?>
		</div>
	</div>
</div>