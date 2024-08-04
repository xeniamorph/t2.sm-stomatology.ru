<?php
namespace App\Bundle\SMClinic\Controller;

class Cleaneyes extends \TAO\Controller
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
			return $this->render('services/cleaneyes', ['item' => $item, 'route' => $route]);
		}

/*		$section = $this->getSection($code);
		if($section && \TAO\Urls::isCurrent($section['SECTION_PAGE_URL'])){
			if(count($this->urlList) > 0){
				$route = $this->getRoute($section);
			}
			return $this->render('services/section_page', ['item' => $section, 'route' => $route]);
		}*/

		//return $this->render('services/test');

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
