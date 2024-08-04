<?php
namespace App\Bundle\SMClinic\Controller;
use TAO\File;

class Services extends \TAO\Controller
{
	protected $urlList;

	public function getElement($url) {
		$this->urlList = explode('/',trim($url,'/'));
		$code = array_pop($this->urlList);
		$item = $this->getItem($code);
		if($item && \TAO\Urls::isCurrent($item['DETAIL_PAGE_URL'])){
			if(count($this->urlList) > 0){
				$route = $this->getRoute($item);
			}
			//return $this->render('services/full', ['item' => $item, 'route' => $route]);
			
			$sectionID = $item->fieldsData['IBLOCK_SECTION_ID'];
			$iblockID = $item->fieldsData['IBLOCK_ID'];
			$sectionParams = [
				'filter' => [
					'IBLOCK_ID' => $iblockID,
					'ID' => $sectionID
				],
				'select' => [
					'UF_SECTION_ICON',
				]
			];

			$currentSection = $relatedElements = \TAO::infoblock('services')->getSections($sectionParams);
			$arCurrentSectionProperties = array_shift($currentSection)->getUserFields();
			$currentSectionIconID = $arCurrentSectionProperties['UF_SECTION_ICON']['VALUE'];
			$fileIcon = new File($currentSectionIconID);
			$relatedElements = $item['RELATED_ELEMENTS']->value();

			if($relatedElements) {
				$relatedElements = \TAO::infoblock('services')->getItems([
					'filter' => [
						'ACTIVE'=>'Y',
						'ID' => $item['RELATED_ELEMENTS']->value()
					]
				]);
			}

			foreach ($relatedElements as $relatedItem) {
				$arRelatedElements[] = [
					'NAME' => $relatedItem->fieldsData['NAME'],
					'DETAIL_PAGE_URL' => $relatedItem->fieldsData['DETAIL_PAGE_URL'],
					'ICON' => $fileIcon->url(),
				];
			}

			return $this->render('services/full', ['item' => $item, 'route' => $route, 'arRelatedElements' => $arRelatedElements]);
		}

		$section = $this->getSection($code);
		if($section && \TAO\Urls::isCurrent($section['SECTION_PAGE_URL'])){
			$sectionParams = [
				'filter' => [
					'IBLOCK_ID' => $section['IBLOCK_ID'],
					'ID' => $section['ID']
				],
				'select' => [
					'UF_SECTION_ICON',
				]
			];
			$currentSectionData = \TAO::infoblock('services')->getSections($sectionParams);
			$arCurrentSectionProperties = array_shift($currentSectionData)->getUserFields();
			if(count($this->urlList) > 0){
				$route = $this->getRoute($section);
			}
			return $this->render('services/section_page', ['item' => $section, 'route' => $route, 'userField' => $arCurrentSectionProperties]);
		}
	}

	public function getRoute($item)
	{
		$route[] = ['url' => $item['LIST_PAGE_URL'], 'title' => 'Услуги и цены'];
		foreach($this->urlList as $sectionCode) {
			$section = $this->getSection($sectionCode);
			$route[] = ['url' => $section->url(), 'title' => $section->title()];
		}
		$route[] = ['url' => $item->url(), 'title' => $item->title()];
		return $route;
	}

	public function getItem($code){
		$itemList = \TAO::infoblock('services')->getItems([
			'filter' => [
				'=CODE' => $code,
				'ACTIVE'=>'Y'
			]
		]);
		return array_shift($itemList);
	}

	public function getSection($code){
		$sectionList = \TAO::infoblock('services')->getSections([
			'filter' => [
				'=CODE' => $code,
				'ACTIVE'=>'Y'
			]
		]);
		return array_shift($sectionList);
	}
}
?>
