<?php

namespace App\Bundle\Vars;

class Bundle extends \TAO\Bundle
{
	public function cachedInit()
	{
        $this->infoblockType('settings', 'Настройки');
	}
	public function init()
	{
        $this->infoblockSchema('settings', 'vars', 'Vars');
		require(dirname(__FILE__).'/Vars.php');
	}
}
