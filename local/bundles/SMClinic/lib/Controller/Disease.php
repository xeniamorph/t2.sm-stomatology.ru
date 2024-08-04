<?php
namespace App\Bundle\SMClinic\Controller;

class Disease extends \TAO\Controller
{
	public function getAlphabetDiseaseList()
	{
		$diseaseList = \TAO::infoblock('disease')->getItems([
			'order' => ['sort' => 'ASC', 'name' => 'ASC']
		]);

		$alphabet = [];
		$lastLetter = '';
		$sortDiseaseList = [];
		foreach($diseaseList as $disease) {
			$letter = mb_strtoupper(mb_substr($disease->title(),0,1, 'UTF-8'), 'UTF-8');
			if($letter != $lastLetter) {
				$alphabet[] = $letter;
				$lastLetter = $letter;
			}
			$sortDiseaseList[count($alphabet) -1][$disease->id()] = $disease;
		}
		return $this->render( 'disease/list',
			[
				'alphabet' => $alphabet,
				'sortDiseaseList' => $sortDiseaseList,
			]
		);
	}
}
