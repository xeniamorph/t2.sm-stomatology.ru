<?php
namespace App\Bundle\SMClinic\Controller;

class Doctors extends \TAO\Controller
{
	protected $urlList;

	public function getPage($code) {
		$item = $this->getItem($code);
		if($item && \TAO\Urls::isCurrent($item['DETAIL_PAGE_URL'])){
			return $item->render(['mode' => 'full']);
		}

		$section = $this->getSection($code);
		if($section && \TAO\Urls::isCurrent($section['SECTION_PAGE_URL'])){
			return $section->render();
		}
	}

	public function getSection($code){
		$sectionList = \TAO::infoblock('doctors')->getSections([
			'filter' => [
				'=CODE' => $code,
				'ACTIVE'=>'Y'
			]
		]);
		return array_shift($sectionList);
	}

	public function getItem($code){
		$itemList = \TAO::infoblock('doctors')->getItems([
			'filter' => [
				'=CODE' => $code,
				'ACTIVE'=>'Y'
			]
		]);
		return array_shift($itemList);
	}

}
?>
