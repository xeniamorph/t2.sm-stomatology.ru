<?php 
namespace App\Bundle\SMClinic\Entity;

class BlockOnMain extends \TAO\Entity 
{
	public $image;
	public $text;

    public function __construct($fields = array(), $properties = array())
	{
		parent::__construct($fields,$properties);
	}

	public function image()
	{
		return $this->previewPicture()->url();
	}

	public function text()
	{
		return $this['PREVIEW_TEXT'];
	}
	public function getTitle()
	{
		return $this['HTML_TITLE'];
	}
}
