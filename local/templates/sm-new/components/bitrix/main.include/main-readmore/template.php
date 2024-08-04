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

if($arResult["FILE"] <> ''): ?>
<div class="main-content__readmore js-spoiler-box">
	<div class="main-content__hidden js-spoiler-hidden">
		<div class="js-spoiler-content">
		<? include($arResult["FILE"]); ?>
		</div>
	</div>
	<div class="main-content__toggle js-spoiler-toggle" data-label="Скрыть">
		 Подробнее
	</div>
</div>
<? endif ?>