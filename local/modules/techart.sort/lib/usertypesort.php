<?php 
class TechartSort_UserTypeSort extends CUserTypeString
{
	public static function GetUserTypeDescription()
	{
        return array(
            'USER_TYPE_ID' => 'techart_sort_price',
            'CLASS_NAME' => get_class(),
            'DESCRIPTION' => 'Комплекстная программа',
            'BASE_TYPE' => 'string',
			"ConvertToDB" => array(get_class(),"ConvertToDB"),
			"ConvertFromDB" => array(get_class(),"ConvertFromDB"),
			"CheckFields" => array(get_class(),"CheckFields"),
            'VERSION'        => '2',
            'PROPERTY_TYPE' => 'S',
            'USER_TYPE' => 'techart_complex',

        );
    }

    public function GetIBlockPropertyDescription()
    {
        return array(
            'PROPERTY_TYPE'        => 'S',
            'VERSION'        => '2',
            'USER_TYPE'            => 'techart_sort_price',
            'DESCRIPTION'          => 'Цены: с возможностью сортировки',
            'GetPropertyFieldHtml' => array(get_class(), 'GetPropertyFieldHtml'),
            'GetAdminListViewHTML' => array(get_class(), 'GetAdminListViewHTML'),
			"ConvertToDB" => array(get_class(),"ConvertToDB"),
			"ConvertFromDB" => array(get_class(),"ConvertFromDB"),
			"CheckFields" => array(get_class(),"CheckFields"),
        );
    }

    public function GetSettingsHTML($arUserField = false, $arHtmlControl, $bVarsFromForm)
    {
        return '';
    }

    public function GetEditFormHTML($arUserField, $arHtmlControl)
    {

    }

    public function GetPropertyFieldHtml($arProperty, $value, $strHTMLControlName)
    {
        global $APPLICATION;
		CModule::IncludeModule("iblock");
		$priceList = \TAO::infoblock('prices')->getItems([
			'filter' => ['ACTIVE' => 'Y']
		]);
		$str = '<select name="'.$strHTMLControlName['VALUE'].'[service]"><option></option>';
		foreach($priceList as $price){
			if(!empty($value['VALUE']) && $value['VALUE']['service'] == $price['ID']){
				$str .= '<option selected value="'.$price['ID'].'">'.$price['NAME'].'</option>';
			}else{
				$str .= '<option value="'.$price['ID'].'">'.$price['NAME'].'</option>';
			}
		}
		$str .= '</select>';
		return '
			<table>
				<tr>
				<td>'.$str.'</td>
				<td>
					<input name="'.$strHTMLControlName['VALUE'].'[sort]"
							value="'.(!empty($value['VALUE']) ? $value['VALUE']['sort'] : '').'">
				</td>
				</tr>
			</table>
		';
    }

    public function GetAdminListViewHTML($arUserField, $arHtmlControl)
    {
    }

    public function CheckFields($arUserField, $value)
    {
		return [];
    }
	function OnBeforeSave($arUserField, $value){
		return '';
	}
	function ConvertToDB($arProperty, $arValue){
		if(strlen($arValue['VALUE']['service'] > 0)){
			if(!(int)$arValue['VALUE']['sort']) {
				$arValue['VALUE']['sort'] = 100;
			}
			return serialize($arValue['VALUE']);
		}
		return false;
	}
	function ConvertFromDB($arProperty, $arValue){
		if($arValue['VALUE'] && unserialize($arValue['VALUE'])['service'] != ''){
			return [
						'VALUE' => unserialize($arValue['VALUE']),
						'DESCRIPTION' => 'price'
					];
		}
		return false;
	}
}
?>
