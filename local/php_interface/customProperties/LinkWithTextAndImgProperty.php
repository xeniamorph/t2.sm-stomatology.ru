<?php
namespace CustomProperties;
include_once 'Base.php';
use CustomProperties\Base as Base;

class LinkWithTextAndImgProperty extends Base
{
	function GetPropsDescription()
	{
		return array(
			"PROPERTY_TYPE" => "S",
			"USER_TYPE" => "link_with_text_and_img_property",
			"DESCRIPTION" => "Ссылка с текстом и файлом",
			//optional handlers
			"GetPublicViewHTML" => array("CustomProperties\LinkWithTextAndImgProperty", "getPropsPublicViewHTML"),
			"GetPropertyFieldHtml" => array("CustomProperties\LinkWithTextAndImgProperty", "getPropertyFieldHtml"),
			"GetMultiplePropertyFieldHtml" => array("CustomProperties\LinkWithTextAndImgProperty", "getMultiplePropertyFieldHtml"),
			"ConvertFromDB" => array("CustomProperties\LinkWithTextAndImgProperty", "convertFromDB"),
			"ConvertToDB" => array("CustomProperties\LinkWithTextAndImgProperty", "prepareValues"),
		);
	}

	// Показ в публичной части (DISPLAY_VALUE)
	function getPropsPublicViewHTML($arProperty, $value, $strHTMLControlName)
	{
		if (is_array($value["VALUE"])) {
			if ($value['VALUE']['image']['VALUE']) {
				$value['VALUE']['image'] = \CFile::GetFileArray($value['VALUE']['image']['VALUE']);
			} else {
				$value['VALUE']['image'] = '';
			}

			if ($value['VALUE']['file']['VALUE']) {
				$value['VALUE']['file'] = \CFile::GetFileArray($value['VALUE']['file']['VALUE']);
			} else {
				$value['VALUE']['file'] = '';
			}
			return $value["VALUE"];
		}
		return '';
	}

	protected static function getAdminEditHtml($value, $htmlControlName, $index = false)
	{
		/* [
				'image' => 24,
				'title' => 'sfdsdf',
				'text' => 'sfdsdf',
				'file' => '34',
				'linkText' => 'sfdsdf',
		 ] */
		ob_start();
		?>
		<div>
			<div style="margin-bottom: 15px">
				<label>Код видео</label><br>
				<input name="<?= $htmlControlName["VALUE"] ?>[code]" type="text" size="60"  value="<?=$value["VALUE"]["code"]?>"/>
			</div>
			<div style="margin-bottom: 15px">
				<label>Картинка</label>
				<?= self::createFileHtmlControl($value['VALUE']['image'], $htmlControlName['VALUE'] . '[image]', $index = false) ?>
			</div>
			<div style="margin-bottom: 15px">
				<label>Дата</label><br>
				<input name="<?= $htmlControlName["VALUE"] ?>[date]" type="date" size="60"  value="<?=$value["VALUE"]["date"]?>"/>
			</div>
			<div style="margin-bottom: 15px">
				<label>Текст</label><br>
				<? self::addHTMLEditorFrame(
					$htmlControlName["VALUE"] . '[text]',
					$value["VALUE"]["text"],
					false,
					'html',
					["height"=>50]
				) ?>
			</div>
		</div>
		<br><hr><br>
		<?
		$return = ob_get_contents();
		ob_end_clean();
		return $return;
	}

	function convertFromDB($arProperty, $value)
	{
		$value["VALUE"] = unserialize($value["VALUE"]);
		return $value;
	}

	public static function prepareValues($propertyFields, $propertyValue)
	{
		if (is_array($propertyValue['VALUE'])) {
			if ($propertyValue['VALUE']['code']) {
				$propertyValue['VALUE']['image'] = self::processFilledFormValue($propertyFields, $propertyValue['VALUE']['image']);
				$propertyValue['VALUE'] = serialize($propertyValue['VALUE']);
				return $propertyValue;
			}
		}
		return '';
	}
}

AddEventHandler("iblock", "OnIBlockPropertyBuildList", array("CustomProperties\LinkWithTextAndImgProperty", "GetPropsDescription"));
