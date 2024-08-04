<?php

namespace App\Bundle\SMClinic;

class Bundle extends \TAO\Bundle
{
	// public function cachedInit()
	// {
	// 	$this->infoblockType('info', [
    //         'NAME' => 'Информация',
    //         'SECTIONS' => 'Y',
	// 	]);
    //     $this->infoblockType('services', [
    //         'NAME' => 'Услуги',
    //         'SECTIONS' => 'Y',
    //     ]);
    //     $this->infoblockType('clinic', [
    //         'NAME' => 'Клиники',
    //         'SECTIONS' => 'Y',
    //     ]);
    //     $this->infoblockType('disease_c', 'Раздел заболеваний');
    //     $this->infoblockType('feedback', 'Обратная связь');
	// }

	public function init()
	{
        $this->infoblockSchema('info', 'news', 'News');
        $this->infoblockSchema('info', 'articles', 'Articles');
        $this->infoblockSchema('info', 'technologies', 'Technologies');
        $this->infoblockSchema('info', 'stock', 'Stock');
        $this->infoblockSchema('info', 'gallery', 'Gallery');
		$this->infoblockSchema('info', 'block_on_main', 'BlockOnMain');
		$this->infoblockSchema('info', 'disclaimer', 'Disclaimer');
		$this->infoblockSchema('info', 'banners', 'Banners');
		$this->infoblockSchema('info', 'credit', 'Credit');

        $this->infoblockSchema('clinic', 'address', 'Address');
        $this->infoblockSchema('clinic', 'doctors', 'Doctors');
        $this->infoblockSchema('clinic', 'metro', 'Metro');

        $this->infoblockSchema('services', 'services', 'Services');
        $this->infoblockSchema('services', 'prices', 'Prices');

        $this->infoblockSchema('disease_c', 'symptoms', 'Symptoms');
        $this->infoblockSchema('disease_c', 'disease', 'Disease');
		\TAO::setOption('infoblock.disease.elements.ajax');

        $this->infoblockSchema('feedback', 'review', 'Review');
		$this->infoblockSchema('feedback', 'callback', 'Callback');
		$this->infoblockSchema('feedback', 'appointments', 'Appointments');
		$this->infoblockSchema('feedback', 'administration', 'Administration');
		$this->useScript('form.js');

	}

	public function routes()
	{
		return [

			'{^/services/(ispravlenie-prikusa-ortodontiya/kappy-invisalign)/$}' => ['{1}', 'controller' => 'Cleaneyes', 'action' => 'getElement'],
			'{^/services/(ispravlenie-prikusa-ortodontiya/kappy-3d-smile)/$}' => ['{1}', 'controller' => 'Cleaneyes', 'action' => 'getElement'],

			'{^/about/news/$}' => [
				'elements_of' => 'news',
				'order' => ['sort' => 'ASC', 'DATE_ACTIVE_FROM' => 'DESC'],
				'filter' => [
					'ACTIVE' => 'Y',
					'<=DATE_ACTIVE_FROM' => array(false, ConvertTimeStamp(false, "FULL")),
				],
				'per_page' => '12',
				'pager_var' => 'page'
			],
			'{^/about/news/([^/]+)/$}' => ['id_or_code' => '{1}', 'element_of' => 'news'],

			'{^/about/articles/$}' => [
				'elements_of' => 'articles',
				'order' => ['sort' => 'ASC', 'DATE_CREATE' => 'DESC'],
				'per_page' => '12',
				'pager_var' => 'page'
			],
			'{^/about/articles/([^/]+)/$}' => ['id_or_code' => '{1}', 'element_of' => 'articles'],

			'{^/about/legal-info/$}' => ['elements_of' => 'disclaimer'],
			'{^/about/technologies/$}' => ['elements_of' => 'technologies'],
			'{^/about/technologies/([^/]+)/$}' => ['id_or_code' => '{1}', 'element_of' => 'technologies'],

			'{^/about/gallery/$}' => ['sections_of' => 'gallery'],
			'{^/about/gallery/([^/]+)/$}' => ['id_or_code' => '{1}', 'element_of' => 'gallery'],

			'{^/services/$}' => ['sections_of' => 'services'],
			'{^/services/(.*)/$}' => ['{1}', 'controller' => 'Services', 'action' => 'getElement'],

			'{^/stock/$}' => [
				'elements_of' => 'stock',
				'filter' => [
					'ACTIVE' => 'Y',
					//'>=DATE_ACTIVE_TO' => array(false, ConvertTimeStamp(false, "FULL")),
					//'<=DATE_ACTIVE_FROM' => array(false, ConvertTimeStamp(false, "FULL")),
					'!PROPERTY_archive_VALUE' => 'Y'
				],
				'order' => ['sort' => 'ASC', 'DATE_ACTIVE_FROM' => 'DESC'],
				'page_mode' => 'list',
			],
			'{^/stock/archive/$}' => [
				'elements_of' => 'stock',
				'filter' => [
					'ACTIVE' => 'Y',
					//'<DATE_ACTIVE_TO' => array(false, ConvertTimeStamp(false, "FULL")),
					'PROPERTY_ARCHIVE_VALUE' => "Y"
				],
				'order' => ['sort' => 'ASC', 'DATE_ACTIVE_FROM' => 'DESC'],
				'page_mode' => 'archive',
				'per_page' => '8',
				'pager_var' => 'page'
			],
			'{^/stock/([^/]+)/$}' => ['id_or_code' => '{1}', 'element_of' => 'stock', 'filter' => [
				'ACTIVE' => 'Y',
			]],

			'{^/doctors/$}' => ['sections_of' => 'doctors'],
			'{^/doctors/([^/]+)/$}' => ['{1}', 'controller' => 'Doctors', 'action' => 'getPage'],
			//'{^/doctors/([^/]+)/$}' => ['id_or_code' => '{1}', 'section_of' => 'doctors'],
			// '{^/doctors/(.*)/$}' => ['id_or_code' => '{1}', 'element_of' => 'doctors'],

			'{^/patients/find-disease/$}' => ['elements_of' => 'symptoms'],
			'{^/patients/diseases/$}' => ['controller' => 'Disease', 'action' => 'getAlphabetDiseaseList'],
			'{^/patients/diseases/([^/]+)/$}' => ['id_or_code' => '{1}', 'element_of' => 'disease'],

			'{^/reviews-site/$}' => ['{1}', 'controller' => 'Reviews', 'action' => 'getReviewFromSite'],
			'{^/reviews-clinic/$}' => ['{1}', 'controller' => 'Reviews', 'action' => 'getReviewFromClinic'],

			'{^/contacts/$}' => ['elements_of' => 'address'],
			'{^/contacts/([^/]+)/$}' => ['id_or_code' => '{1}', 'element_of' => 'address'],
			'{^/generate-sitemap/$}' => ['controller' => 'Sitemap', 'action' => 'generate']
		];
	}

	public function serviceMenu()
	{
		$directionList = \TAO::Infoblock('services')->getSections([
			'filter' => ['ACTIVE' => 'Y', 'DEPTH_LEVEL' => '1'],
			'select' => ['ID', 'NAME', 'SECTION_PAGE_URL', 'UF_ICO']
		]);
		$linkList = [];
		foreach($directionList as $direction) {
			$ico = new \TAO\File($direction['UF_ICO']);
			$linkList[] = [
					'url' => $direction['SECTION_PAGE_URL'],
					'title' => $direction['NAME'],
					'ico' => $ico->url()
			];
		}
		$servicesList = \TAO::Infoblock('services')->getItems([
			'filter' => ['ACTIVE' => 'Y', 'SECTION_ID' => false],
		]);
		foreach($servicesList as $service) {
			$ico = new \TAO\File($service['menu_ico']->value());
			$linkList[] = [
					'url' => $service['DETAIL_PAGE_URL'],
					'title' => $service['NAME'],
					'ico' => $ico->url()
			];
		}
		return $linkList;
	}
}
?>
