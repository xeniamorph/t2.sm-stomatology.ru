<?php

class SMClinicBuild{
	/*
	$mode [ page | full ] 
	page - только стили страницы (области контента)
	full - стили страницы + стили шаблона
	*/

	public function addCssBuild($mode = 'full')
	{
		global $APPLICATION;

		// путь к сборке на сервере
		$buildPath = SITE_TEMPLATE_PATH.'/build/prod';
		// файл по-умолчанию, подключается если никакая логика не сработала
		$default = SITE_TEMPLATE_PATH.'/build/prod/css/default.min.css';
		$documentRoot = realpath($_SERVER['DOCUMENT_ROOT']);

		// ресурсы для главной страницы лежат в корне сборки, без дополнительной вложенности
		$url = $APPLICATION->GetCurPage(false) === '/' ? '/css/' : $APPLICATION->GetCurPage(false);
		$path = $buildPath . $url;

		$src = $default;

		if($mode == 'full'){
			// подключаем файл страницы
			if(file_exists($documentRoot.$path.'style.min.css')){
				$src = $path.'style.min.css';
			}
			else{
				// если файла для страницы нет, подключаем по иерархии файл родителя
				$u = $url;
				$c = count(preg_split('/\//', $u, 0, PREG_SPLIT_NO_EMPTY));
				for(; $c > 1; $c--){
					$u = preg_replace('/[^\/]+\/?$/ius', '', $u);

					if(file_exists($documentRoot.$buildPath.$u.'style.min.css')){
						$src = $buildPath.$u.'style.min.css';
						break;
					}
				}
			}
		}
		elseif($mode == 'page'){
			if(file_exists($documentRoot.$path.'page_style.min.css')){
				$src = $path.'page_style.min.css';
			}
		}
		// метка времени для обновления кэша после перезаливки файлов
		$v = filemtime($documentRoot.$src);

		//Asset::getInstance()->addCss($src);
		echo '<link rel="stylesheet" href="'.$src.'?v='.$v.'">';
	}

	public function addJsBuild($mode = 'full')
	{
		global $APPLICATION;

		// путь к сборке на сервере
		$buildPath = SITE_TEMPLATE_PATH.'/build/prod';
		// файл по-умолчанию, подключается если ни какая логика неотработала
		$default = SITE_TEMPLATE_PATH.'/build/prod/js/default.js';
		$documentRoot = realpath($_SERVER['DOCUMENT_ROOT']);

		// ресурсы для главной страницы лежат в корне сборки, без дополнительной вложенности
		$url = $APPLICATION->GetCurPage(false) === '/' ? '/js/' : $APPLICATION->GetCurPage(false);
		$path = $buildPath . $url;

		$src = $default;

		// подключаем файл страницы
		if(file_exists($documentRoot.$path.'script.js')){
			$src = $path.'script.js';
		}
		else{
			// если файла для страницы нет, подключаем по иерархии файл родителя
			$u = $url;
			$c = count(preg_split('/\//', $u, 0, PREG_SPLIT_NO_EMPTY));
			for(; $c > 1; $c--){
				$u = preg_replace('/[^\/]+\/?$/ius', '', $u);

				if(file_exists($documentRoot.$buildPath.$u.'script.js')){
					$src = $buildPath.$u.'script.js';
					break;
				}
			}
		}

		if(file_exists($documentRoot.$src)){
			//Asset::getInstance()->addJs($src);
			// метка времени для обновления кэша после перезаливки файлов
			$v = filemtime($documentRoot.$src);
			echo '<script src="'.$src.'?v='.$v.'" type="text/javascript"></script>';
		}

	}
}