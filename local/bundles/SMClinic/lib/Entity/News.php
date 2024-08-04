<?php
namespace App\Bundle\SMClinic\Entity;

class News extends \TAO\Entity
{
	public function getFormatedDate()
	{
		$date = ParseDateTime($this['DATE_ACTIVE_FROM'], FORMAT_DATETIME);
		$date['MM'] = ToLower(GetMessage("MONTH_".intval($date['MM'])."_S"));
		return $date;
	}

	public function prev(){
		$items = \TAO::infoblock($this->infoblock()->id())->getItems([
			'order' => ['DATE_ACTIVE_FROM' => 'DESC'],
			'filter' => [
				'<DATE_ACTIVE_FROM' => $this->fieldsData['DATE_ACTIVE_FROM'],
				'ACTIVE' => 'Y',
				'SECTION_ID' => $this['IBLOCK_SECTION_ID']
			],
		]);
		$item = array_shift($items);
		if($item){
			return $item;
		}
		return false;
	}

	public function next(){
		$items = \TAO::infoblock($this->infoblock()->id())->getItems([
			'order' => ['DATE_ACTIVE_FROM' => 'ASC'],
			'filter' => [
				'>DATE_ACTIVE_FROM' => $this->fieldsData['DATE_ACTIVE_FROM'],
				'ACTIVE' => 'Y',
				'SECTION_ID' => $this['IBLOCK_SECTION_ID']
			],
		]);
		$item = array_shift($items);
		if($item){
			return $item;
		}
		return false;
	}
}
?>
