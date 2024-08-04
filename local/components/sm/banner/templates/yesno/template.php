<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die(); ?>
<link href="<?= $this->GetFolder();?>/style.css" type="text/css" rel="stylesheet">
<?
$detect = new Mobile_Detect;
$form_size = 'style="width: 580px; border: 14px solid #3b6a57;"';
$btn_block = '<div class="webinar-btn-group"><a class="webinar-yes webinar-btn" target="_blank" href="'.$arResult['PROPERTY_BANNER_HREF_VALUE'].'">Да</a><a class="webinar-no webinar-btn" href="">Нет</a></div>';

if(!empty($arResult['PROPERTY_BANNER_HTML_VALUE']['TEXT'])): ?>
	<? $text_form = $arResult['~PROPERTY_BANNER_HTML_VALUE']['TEXT'];
	if($text_form === '#ACTIONFORM#'):
		require($_SERVER["DOCUMENT_ROOT"] . "/include/footer/offers_1.php");
	else:
		if(!$detect->isMobile()) { $text_form = str_replace('box-webinar"', 'box-webinar" '.$form_size, $text_form); }
		echo str_replace('#BTNBLOCK#', $btn_block, $text_form);
		?>
		<script>
		$('.webinar-no').click(function () {
			parent.$.fancybox.close();
			return false;
		});
		$('.webinar-yes').click(function () {
			ga('send', 'event', 'webinar', 'webinar_click');
			parent.$.fancybox.close();
		});
		</script>
	<? endif; ?>
<? endif; ?>



