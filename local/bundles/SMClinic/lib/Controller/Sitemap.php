<?php
namespace App\Bundle\SMClinic\Controller;

use App\Bundle\SMClinic\SitemapGenerator;

class Sitemap extends \TAO\Controller
{
	public function generate()
	{
		$this->noLayout();
		$sg = new SitemapGenerator();
		$result = $sg->generate();
		$result  = preg_match('{/services/}', "/services/anesteziya/");
		return print_r($result, true);
	}
}
