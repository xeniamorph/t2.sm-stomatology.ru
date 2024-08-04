<?php
namespace App\Bundle\SMClinic\Entity;

class Articles extends \TAO\Entity
{
	public function prev(){
		$items = \TAO::infoblock($this->infoblock()->id())->getItems([
			'order' => ['DATE_CREATE' => 'DESC'],
			'filter' => [
				'<ID' => $this->id(),
				'ACTIVE' => 'Y'
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
			'order' => ['DATE_CREATE' => 'ASC'],
			'filter' => [
				'>ID' => $this->id(),
				'ACTIVE' => 'Y'
			],
		]);
		$item = array_shift($items);
		if($item){
			return $item;
		}
		return false;
	}

	public function getAuthorInfo(){
		$doctors = \TAO::infoblock('doctors')->getItems([
			'order' => ['DATE_CREATE' => 'ASC'],
			'filter' => [
				'ID' => $this->property('author')->value(),
				'ACTIVE' => 'Y'
			],
		]);
		$doctor = array_shift($doctors);
		if($doctor){
			return ['name'=> $doctor->title(), 'link'=> $doctor->url()];
		}
		return false;
	}


	public function dateChange(){
		return date('d.m.Y', strtotime($this['TIMESTAMP_X']));
	}

	public function dateCreate(){
		return date('d.m.Y', strtotime($this['DATE_CREATE']));
	}
}
?>
