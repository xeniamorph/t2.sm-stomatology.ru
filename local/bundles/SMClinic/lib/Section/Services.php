<?php
namespace App\Bundle\SMClinic\Section;

class Services extends \TAO\Section
{
	public function getMinSum()
	{
		$elementList = $this->infoblock()->getItems([
			'filter' => [
				'ACTIVE' => 'Y',
				'SECTION_ID' => $this->id()
			]
		]);
		$minSum = null;
		foreach ($elementList as $element) {
			$elementSum = str_replace(' ', '', $element->getMinSum());
			if((int)$elementSum < (int)$minSum || is_null($minSum)) {
				$minSum = $elementSum;
			}
		}

		return number_format($minSum, 0, '.', ' ');
	}
}

