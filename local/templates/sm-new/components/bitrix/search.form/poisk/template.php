<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
$this->setFrameMode(true);?>

<form class="search" action="<?=$arResult["FORM_ACTION"]?>" method="GET">
	<div class="search__box">
		<div class="search__row">
			<input class="search__input" name="q" type="text" placeholder="Поиск по сайту">
			<div class="search__button">
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 19 18">
					<path class="s_img" d="M18.841 16.83l-5.252-5.23a7.069 7.069 0 001.596-4.475C15.185 3.196 11.975 0 8.028 0 4.082 0 .872 3.196.872 7.125s3.21 7.125 7.156 7.125a7.14 7.14 0 004.496-1.589l5.252 5.23a.378.378 0 00.532 0l.533-.531a.374.374 0 000-.53zM8.028 12.75c-3.115 0-5.65-2.523-5.65-5.625S4.914 1.5 8.029 1.5c3.116 0 5.65 2.523 5.65 5.625s-2.534 5.625-5.65 5.625z"/></svg>
			</div>
		</div>
	</div>
</form>

<script type="application/ld+json">
	{
		"@context": "https://schema.org",
		"@type": "WebSite",
		"url": "https://sm-stomatology.ru/",
		"potentialAction": {
			"@type": "SearchAction",
			"target": {
				"@type": "EntryPoint",
				"urlTemplate": "https://sm-stomatology.ru/search/?q={query}"
			},
			"query-input": "required name=query"
		}
	}
</script>

