<?php
IncludeModuleLangFile(__FILE__);

use Bitrix\Main\ModuleManager;

class techart_sort extends CModule
{
	public $MODULE_ID = "techart.sort";
	public $MODULE_VERSION;
	public $MODULE_VERSION_DATE;
	public $MODULE_NAME;
	public $MODULE_DESCRIPTION;
	public $MODULE_CSS;

	protected $module_path = '';

	function __construct()
	{
		$arModuleVersion = array();

		$path = str_replace("\\", "/", __FILE__);
		$path = substr($path, 0, strlen($path) - strlen("/index.php"));
		include($path."/version.php");

		if (is_array($arModuleVersion) && array_key_exists("VERSION", $arModuleVersion))
		{
			$this->MODULE_VERSION = $arModuleVersion["VERSION"];
			$this->MODULE_VERSION_DATE = $arModuleVersion["VERSION_DATE"];
		}

		$this->MODULE_NAME = "Сортировка привязанных элементов";
		$this->MODULE_DESCRIPTION = "Сортировка привязанных элементов: добаления свойства для сортировки";

		$this->module_path = realpath(__DIR__) .'/../';
		$this->bitrix_path = getLocalPath('');
	}

	public function DoInstall()
	{
		$this->InstallFiles();
		$this->InstallDB();
	}

	public function InstallFiles($arParams = array())
	{
		return true;
	}

	public function InstallDB()
	{
		ModuleManager::registerModule($this->MODULE_ID);
		RegisterModuleDependences("main", "OnUserTypeBuildList", $this->MODULE_ID, "TechartSort_UserTypeSort", "GetUserTypeDescription");
		RegisterModuleDependences("iblock", "OnIBlockPropertyBuildList", $this->MODULE_ID, "TechartSort_UserTypeSort", "GetIBlockPropertyDescription");
	}

	public function DoUnInstall()
	{
		$this->UnInstallFiles();
		$this->UnInstallDB();
	}

	public function UnInstallDB($arParams = array())
	{
		ModuleManager::unRegisterModule($this->MODULE_ID);
	}
}
