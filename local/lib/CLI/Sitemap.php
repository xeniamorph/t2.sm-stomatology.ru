<?php
namespace App\CLI;

use App\Bundle\SMClinic\SitemapGenerator;

class Sitemap extends \TAO\CLI
{
	public function sitemap()
	{
		$sg = new SitemapGenerator();
		$sg->generate();
	}
}
