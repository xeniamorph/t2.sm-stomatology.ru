<?php
namespace App\Bundle\SMClinic\Entity;

class Doctors extends \TAO\Entity
{
	public function experience()
	{
		if(!$this->property('experience')->value()) {
			return false;
		}

		foreach ($this->property('experience')->valueData() as $itemEx) {
			$experienceDesc = $itemEx['DESCRIPTION'];
			$experience = $itemEx['VALUE'];
		}
		return ['val' => $experience, 'desc' => $experienceDesc];
	}
}
