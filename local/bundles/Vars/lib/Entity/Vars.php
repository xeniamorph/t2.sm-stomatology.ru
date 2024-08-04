<?php
namespace App\Bundle\Vars\Entity;

class Vars extends \TAO\Entity
{
	public function previewText()
	{
		return $this['PREVIEW_TEXT'];
	}
}
