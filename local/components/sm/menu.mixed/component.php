<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
/** @var CBitrixComponent $this */
/** @var array $arParams */
/** @var array $arResult */
/** @var string $componentPath */
/** @var string $componentName */
/** @var string $componentTemplate */
/** @global CDatabase $DB */
/** @global CUser $USER */
/** @global CMain $APPLICATION */


if(!isset($arParams["CACHE_TIME"]))
	$arParams["CACHE_TIME"] = 36000000;

$arParams["IBLOCK_ID"] = intval($arParams["IBLOCK_ID"]) ? intval($arParams["IBLOCK_ID"]) : false;

$arParams["DEPTH_LEVEL"] = intval($arParams["DEPTH_LEVEL"]);
if($arParams["DEPTH_LEVEL"] <= 0)
	$arParams["DEPTH_LEVEL"] = 1;

if(!isset($arParams["INCLUDE_ELEMENTS"]) || $arParams["INCLUDE_ELEMENTS"] !== false) $arParams["INCLUDE_ELEMENTS"] = true;
if(!isset($arParams["INCLUDE_SECTIONS"]) || $arParams["INCLUDE_SECTIONS"] !== false) $arParams["INCLUDE_SECTIONS"] = true;

$arParams["FOLDER"] = $arParams["FOLDER"] ? $arParams["FOLDER"] : false;

$aMenuLinksExt = [];

/*
if($this->StartResultCache())
{
	if(!CModule::IncludeModule("iblock"))
	{
		$this->AbortResultCache();
	}
	else
	{
*/
		// если инфоблок передан
		if($arParams["IBLOCK_ID"]){
			$arFilter = array(		
				'ACTIVE' => 'Y',
				'GLOBAL_ACTIVE'=>'Y',
				"IBLOCK_ID"=>$arParams["IBLOCK_ID"],
				"IBLOCK_ACTIVE"=>"Y",
				"<="."DEPTH_LEVEL" => $arParams["DEPTH_LEVEL"],
			);

			$arItems = CIBlockSection::GetList(
				Array('LEFT_MARGIN' => "ASC", "SORT" => "ASC"),
				$arFilter,
				false,
				["ID", "DEPTH_LEVEL", "NAME", "SECTION_PAGE_URL"]
			);
			
			$depth_level = 1;
			$prevLvl = 1;
			$i = 0;
			$section = ['ID' => 0, 'KEY' => 0, 'DEPTH_LEVEL' => 0];
			//$noSections = true;

			while($arItem = $arItems->GetNext()){
				//$noSections = false;

				$depth_level = $arItem['DEPTH_LEVEL'];

				$aMenuLinksExt[] = [
					$arItem['NAME'],
					$arItem['SECTION_PAGE_URL'],
					Array(), 
					Array(
						"FROM_IBLOCK"=>true, 
						"IS_PARENT"=>false, 
						"DEPTH_LEVEL" => $arItem['DEPTH_LEVEL']), 
					""
				];
				$section['KEY'] = $i;
				$section['DEPTH_LEVEL'] = $arItem['DEPTH_LEVEL'] + 1;
				
				if($arItem['DEPTH_LEVEL'] > $prevLvl){
					$aMenuLinksExt[$i-1][3]["IS_PARENT"] = true;
					$depth_level++;
				} else
				if($arItem['DEPTH_LEVEL'] < $prevLvl){
					$depth_level--;
				}
				
				$i++;
				$prevLvl = $arItem['DEPTH_LEVEL'];
				if($arParams["INCLUDE_ELEMENTS"] === false) continue;

				$arElements = CIBlockElement::GetList(
					Array("SORT" => "ASC"),
					array(
						'ACTIVE' => 'Y',
						'IBLOCK_ID' => $arParams["IBLOCK_ID"],
						'SECTION_GLOBAL_ACTIVE'=>'Y',
						'SECTION_ID' => $arItem['ID'],
					),
					false
				);
				
				while($element = $arElements->GetNext()){
					$aMenuLinksExt[] = [
						$element['NAME'],
						$element['DETAIL_PAGE_URL'],
						Array(), 
						Array(
							"FROM_IBLOCK"=>true, 
							"IS_PARENT"=>false, 
							"DEPTH_LEVEL" => $section['DEPTH_LEVEL']), 
						""
					];
					
					$aMenuLinksExt[$section['KEY']][3]["IS_PARENT"] = true;
					$i++;
				}

			}
			
			//if($noSections){
			if($arParams["INCLUDE_ELEMENTS"]){
				$arElements = CIBlockElement::GetList(
					Array("SORT" => "ASC"),
					array(
						'ACTIVE' => 'Y',
						'IBLOCK_ID' => $arParams["IBLOCK_ID"],
					),
					false
				);
				
				while($element = $arElements->GetNext()){
					$aMenuLinksExt[] = [
						$element['NAME'],
						$element['DETAIL_PAGE_URL'],
						Array(), 
						Array(
							"FROM_IBLOCK"=>true, 
							"IS_PARENT"=>false, 
							"DEPTH_LEVEL" => 1), 
						""
					];
					
				}
			}
			//}
		}

		$arLinks = [];
		if($arParams["FOLDER"]){
			// добавление статичных страниц
			$curDir = dirname( $arParams["FOLDER"] );

			if(!function_exists('findDirs')) {
				function findDirs($dir, $curDir, $startDir){
					$result = [];

					$files = scandir( $dir );

					foreach($files as $f){
						if($f == '.' | $f == '..') continue;
						if(!is_dir($dir.'/'.$f) && $f != 'index.php') continue;

						// пропускаем начальный пункт меню, чтобы избежать дубля
						if($startDir.'/index.php' == $dir.'/'.$f) continue;

						// если index.php есть, то страница по данному адресу существует
						if($f == 'index.php'){
							$result[] = $dir;
						}

						if(is_dir($dir.'/'.$f)){
							$result = array_merge($result, findDirs($dir.'/'.$f, $curDir, $startDir));
						}
					}

					return $result;
				}
			}



			$result = findDirs($arParams["FOLDER"], $curDir, $arParams["FOLDER"]);

			// убираем из результатов абсолютный путь и добавляешь /
			foreach($result as $dir){
				$dir = str_replace($curDir, '', $dir);
				$url = $dir.'/';
				$url = preg_replace('/\/+/', '/', $url);

				$depth = substr_count($url, '/') - 2;

				// парсинг заголовка страницы
				$page = CFileman::ParseFileContent( $APPLICATION->GetFileContent($_SERVER['DOCUMENT_ROOT'].$url.'index.php') );
				
				if(empty($page['TITLE'])) continue;

				$arLinks[] = [
								$page['TITLE'],
								$url,
								[], 
								[
									"FROM_IBLOCK"=>false, 
									"IS_PARENT"=>false, 
									"DEPTH_LEVEL" => $depth
								], 
								""
							];
			}
		}

		$aMenuLinksExt = array_merge($aMenuLinksExt, $arLinks);

		/*
		$this->EndResultCache();
	}
}
*/

return $aMenuLinksExt;
?>
