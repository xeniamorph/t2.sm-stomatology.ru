<?php
namespace App\Bundle\SMClinic\Entity;

class Services extends \TAO\Entity
{
	public function getMinSum()
	{
		$sum = 0;
		if ($this['price_to_list']->value()) {
			$sum = $this['price_to_list']->value();
		} elseif ($this['prices']->value()) {
			$pricesIDList = [];
			foreach($this['prices']->value() as $priceInfo) {
				$pricesIDList[] = $priceInfo['service'];
			}
			$prices = \TAO::infoblock('prices')->getItems([
				'filter' => ['ACTIVE' => 'Y', 'ID' => $pricesIDList]
			]);
			$sum = $prices[0]['sum']->value();
			foreach ($prices as $price_p) {
				if ($price_p['sum']->value() < $sum) {
					$sum = $price_p['sum']->value();
				}
			}
		} else {
			$sum = 0;
		}
		return $sum;
	}

	public function getPriceToList()
	{
		return $this['price_to_list']->value();
	}
}
