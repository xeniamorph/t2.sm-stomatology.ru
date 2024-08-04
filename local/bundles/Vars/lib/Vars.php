<?php
namespace TAO\Ext;

class Vars
{
	public static function get($code)
	{
		return \TAO::infoblock('vars')->loadItem($code);
	}
}
?>
