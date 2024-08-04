<?php
namespace App\Bundle\SMClinic\Controller;

class Reviews extends \TAO\Controller
{
	public function getReviewFromSite()
	{
		$count = \TAO::infoblock('review')->getCount([
			'filter' => [
				//'SECTION_CODE' => 'site',
				'ACTIVE' => 'Y',
				'PREVIEW_PICTURE' => false
				
			],
		]);

		$reviewList = \TAO::infoblock('review')->getItems([
			'order' => ['active_from' => 'DESC'],
			'filter' => [
				//'SECTION_CODE' => 'site',
				'ACTIVE' => 'Y',
				'PREVIEW_PICTURE' => false
			],
			'per_page' => 5,
			'page' => $_GET['page'] ? $_GET['page'] : 1
		]);

		return $this->render(
			'review/list',
			[
				'reviewList' => $reviewList,
				'pagination' => \TAO::pager('page')->setType('common')->setUrl($_SERVER['REQUEST_URI']),
				'numPage' => ceil($count/5)
			]
		);
	}

	public function getReviewFromClinic()
	{
		$count = \TAO::infoblock('review')->getCount([
			'filter' => [
				//'SECTION_CODE' => 'clinic',
				'ACTIVE' => 'Y',
				'!PREVIEW_PICTURE' => false
			],
		]);

		$reviewList = \TAO::infoblock('review')->getItems([
			'order' => ['active_from' => 'DESC'],
			'filter' => [
				//'SECTION_CODE' => 'clinic',
				'ACTIVE' => 'Y',
				'!PREVIEW_PICTURE' => false
			],
			'per_page' => 5,
			'page' => $_GET['page'] ? $_GET['page'] : 1
		]);

		return $this->render(
			'review/list',
			[
				'reviewList' => $reviewList,
				'pagination' => \TAO::pager('page')->setType('common')->setUrl($_SERVER['REQUEST_URI']),
				'numPage' => ceil($count/5)
			]
		);
	}
}
