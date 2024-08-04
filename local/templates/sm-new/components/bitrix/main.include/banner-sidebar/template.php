<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
global $USER;
$admin = $USER->isAdmin() ? true : false;

require_once($_SERVER["DOCUMENT_ROOT"] . '/include/Mobile_Detect.php');

if($arResult["FILE"] <> ''){
	$content = trim(file_get_contents($arResult["FILE"]));
	$detect = new Mobile_Detect;
	if(!empty($content) && !$detect->isMobile()){
		echo $content;
	}
	elseif($admin) {
		echo '<div style="display:flex; text-align:center; justify-content:center; align-items:center; border:1px solid #ccc; height:400px; width:240px; font-size:24px; line-height:30px; font-weight:bold; color:#ccc;">Место под баннер<br>240х400</div>';
	}
}