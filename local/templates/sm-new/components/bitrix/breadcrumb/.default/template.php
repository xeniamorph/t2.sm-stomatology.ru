<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/**
 * @global CMain $APPLICATION
 */

global $APPLICATION;

//delayed function must return a string
if(empty($arResult))
	return "";


$abs =  SITE_SERVER_NAME ? 'https://'. SITE_SERVER_NAME : 'https://'.$_SERVER['HTTP_HOST'];
$json = [
    "@context" => "http://schema.org",
    "@type" => "BreadcrumbList",
    "itemListElement" => []
];
$jsonItem = [
    "@type" => "ListItem",
    "position" => "",
    "name" => "",
    "item" => ""
];
$mainPage = ["@type" => "ListItem", "position" => 0, "name" => "Главная", "item" => $abs];


$strReturn = '<div class="breadcrumbs">';
$strReturn .= '<div class="container">';

//we can't use $APPLICATION->SetAdditionalCSS() here because we are inside the buffered function GetNavChain()
$strReturn .= '<div class="breadcrumbs__wrap">';
$strReturn .= '<ul class="breadcrumbs__list">';
$strReturn .= '<li class="breadcrumbs__home"><a class="breadcrumbs__link breadcrumbs__link_home" href="/">Главная</a></li>';

$itemSize = count($arResult);
for($index = 0; $index < $itemSize; $index++)
{
	$title = htmlspecialcharsex($arResult[$index]["TITLE"]);
	$arrow = ($index > 0? '<i class="fa fa-angle-right"></i>' : '');

	if($arResult[$index]["LINK"] <> "" && $index != $itemSize-1)
	{
		$strReturn .= '
			<li class="breadcrumbs__item">
				<a class="breadcrumbs__link" href="'.$arResult[$index]["LINK"].'"> ' . $title . '</a>
			</li>';
	}
	else
	{
		$strReturn .= '
			<li class="breadcrumbs__item">
				<span class="breadcrumbs__current">'.$title.'</span>
			</li>';
	}

	$jsonItem['position'] = $index;
	$jsonItem['name'] = $title;
	if(!preg_match('/^https?:\/\//iu', $arResult[$index]["LINK"]))
		$jsonItem['item'] = $abs.$arResult[$index]["LINK"];
	else
		$jsonItem['item'] = $arResult[$index]["LINK"];
	$json['itemListElement'][] = $jsonItem;
}

$strReturn .= '</ul>';
$strReturn .= '</div>';
$strReturn .= '</div>';
$strReturn .= '</div>';

// если первый элемент не главная страница
if($json['itemListElement'][0]['item'] != $abs){

	foreach($json['itemListElement'] as &$item){
		$item['position']++;
	}
	unset($item);

	array_unshift($json['itemListElement'], $mainPage);
}

$strReturn .= '<script type="application/ld+json">'.json_encode($json, JSON_UNESCAPED_UNICODE).'</script>';

return $strReturn;
