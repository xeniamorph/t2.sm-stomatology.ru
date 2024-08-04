<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

global $APPLICATION;

$aMenuLinksExt = $APPLICATION->IncludeComponent(
    "sm:menu.mixed",
    "",
    Array(
        "IBLOCK_ID" => "11", 
        "DEPTH_LEVEL" => "1", 
        "CACHE_TYPE" => "A", 
        "CACHE_TIME" => "3600",
        "FOLDER" => false,
        "INCLUDE_ELEMENTS" => false,
        "INCLUDE_SECTION" => true
    ),
    false,
    ["HIDE_ICONS"=>"Y"]
);

$aMenuLinks = array_merge($aMenuLinks, $aMenuLinksExt);
?>