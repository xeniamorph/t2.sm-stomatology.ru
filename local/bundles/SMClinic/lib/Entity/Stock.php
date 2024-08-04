<?php
namespace App\Bundle\SMClinic\Entity;

class Stock extends \TAO\Entity
{
	public function prev($isActive = true){
		$active_date = $isActive ? 'ACTIVE_DATE' : '!ACTIVE_DATE';
		$items = \TAO::infoblock($this->infoblock()->id())->getItems([
			'order' => ['DATE_ACTIVE_FROM' => 'DESC'],
			'filter' => [
				'<DATE_ACTIVE_FROM' => $this->fieldsData['DATE_ACTIVE_FROM'],
				'>=DATE_ACTIVE_TO' => array(false, ConvertTimeStamp(false, "FULL")),
				'<=DATE_ACTIVE_FROM' => array(false, ConvertTimeStamp(false, "FULL")),
				'ACTIVE' => 'Y',
				$active_date => 'Y',
				'SECTION_ID' => $this['IBLOCK_SECTION_ID']
			],
		]);
		$item = array_shift($items);
		if($item){
			return $item;
		}
		return false;
	}

	public function next($isActive = true){
		$active_date = $isActive ? 'ACTIVE_DATE' : '!ACTIVE_DATE';
		$items = \TAO::infoblock($this->infoblock()->id())->getItems([
			'order' => ['DATE_ACTIVE_FROM' => 'ASC'],
			'filter' => [
				'>DATE_ACTIVE_FROM' => $this->fieldsData['DATE_ACTIVE_FROM'],
				'>=DATE_ACTIVE_TO' => array(false, ConvertTimeStamp(false, "FULL")),
				'<=DATE_ACTIVE_FROM' => array(false, ConvertTimeStamp(false, "FULL")),
				'ACTIVE' => 'Y',
				$active_date => 'Y',
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
