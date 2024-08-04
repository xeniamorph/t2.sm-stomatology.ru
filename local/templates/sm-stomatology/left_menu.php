<?php
$section_site = explode('/',trim(\TAO::app()->GetCurPage(false),'/'));
$section_site = $section_site[0];

if($section_site == 'doctors') {
	$directionList = \TAO::infoblock('doctors')->getSections([
		'filter' => ['ACTION' => 'Y', 'DEPTH_LEVEL' => 1]
	]);
	include(\TAO::infoblock('doctors')->viewPath('left_menu.phtml'));
}

if($section_site == 'about') {
	if (\TAO::navigation()->level(1)) {
		print \TAO::navigation()->level(1)->render('left_menu', [
			'class' => ' visible'
		]);
	}
}

if($section_site == 'patients') {
	if (\TAO::navigation()->level(1)) {
		print \TAO::navigation()->level(1)->render('left_menu');
	}
}

if($section_site == 'contacts') {
	$metroList = \TAO::infoblock('metro')->getItems();
	include(\TAO::infoblock('address')->viewPath('left_menu.phtml'));
}
?>

