<?php
namespace App\Bundle\SMClinic;

class SitemapGenerator
{
	const DEFAULT_CHANGEFREQ = 'weekly';
	const DEFAULT_PRIORITY = 0.6;

	public function __construct()
	{
		\TAO\Events::addListener(\TAO\Sitemap::getAddNavLinkEventName(), [static::class, 'setPriorityAndChangeReq']);
		\TAO\Events::addListener(\TAO\Sitemap::getAddEventName(), [static::class, 'setPriorityAndChangeReq']);
		\TAO\Events::addListener(\TAO\Sitemap::getAddItemEventName(), [static::class, 'setPriorityAndChangeReq']);
		\TAO\Events::addListener(\TAO\Sitemap::getAddSectionEventName(), [static::class, 'setPriorityAndChangeReq']);
	}

	public function generate()
	{
		\TAO::sitemap('sitemap.xml')
			->protocol('https')
			->domain('www.sm-stomatology.ru')
			->makeByAdminSettings(1)
			->addNavigation(\TAO::navigation('navigation_xml'))
		->finish();

		return 'yes';
	}

	public function setPriorityAndChangeReq(&$info, $item) {
		foreach (self::map() as $reg => $data) {
			if(preg_match($reg, $info['url'])) {
				$info['priority'] = $data['priority'];
				$info['changefreq'] = $data['changefreq'];
				break;
			} else {
				$info['priority'] = self::DEFAULT_PRIORITY;
				$info['changefreq'] = self::DEFAULT_CHANGEFREQ;
			}
		}
	}

	protected static function map()
	{
		return [
			'{^/$}' => [
				'priority' => '1.0',
				'changefreq' => 'daily'
			],
			'{/stock/}' => [
				'priority' => '1.0',
				'changefreq' => self::DEFAULT_CHANGEFREQ
			],
			'{/services/}' => [
				'priority' => '1.0',
				'changefreq' => self::DEFAULT_CHANGEFREQ
			],
			'{/doctors/}' => [
				'priority' => '1.0',
				'changefreq' => self::DEFAULT_CHANGEFREQ
			],
			'{/about/legal-info/}' => [
				'priority' => self::DEFAULT_PRIORITY,
				'changefreq' => self::DEFAULT_CHANGEFREQ
			],
			'{/about/obrabotka-dannykh/}' => [
				'priority' => self::DEFAULT_PRIORITY,
				'changefreq' => self::DEFAULT_CHANGEFREQ
			],
			'{/about/technologies/}' => [
				'priority' => self::DEFAULT_PRIORITY,
				'changefreq' => self::DEFAULT_CHANGEFREQ
			],
			'{/about/}' => [
				'priority' => '0.8',
				'changefreq' => self::DEFAULT_CHANGEFREQ
			],
			'{/contacts/}' => [
				'priority' => '0.8',
				'changefreq' => self::DEFAULT_CHANGEFREQ
			],
			'{/about/gallery/}' => [
				'priority' => '0.8',
				'changefreq' => self::DEFAULT_CHANGEFREQ
			],
			'{/patients/diseases/}' => [
				'priority' => '0.8',
				'changefreq' => self::DEFAULT_CHANGEFREQ
			],
			'{/patients/find-disease/}' => [
				'priority' => '0.8',
				'changefreq' => self::DEFAULT_CHANGEFREQ
			],
			'{/patients/lechenie-zubov-v-rassrochku-i-v-kredit/}' => [
				'priority' => '0.7',
				'changefreq' => self::DEFAULT_CHANGEFREQ
			],
			'{/reviews-site/$}' => [
				'priority' => '0.7',
				'changefreq' => self::DEFAULT_CHANGEFREQ
			],
		];
	}
}
