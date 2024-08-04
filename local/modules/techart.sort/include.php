<?php
use Bitrix\Main\Loader;

Loader::registerAutoLoadClasses('techart.sort', array(
	'techart.sort'                 => 'install/index.php',
	
	'TechartSort_UserTypeSort' => 'lib/usertypesort.php',
));
