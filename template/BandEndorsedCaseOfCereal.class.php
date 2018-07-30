<?php

class BandEndorsedCaseOfCereal extends SaleItemTemplate
{
	public $band;
	
	public function __construct($band, $price)
	{
		$this->band = $band;
		$this->price = $price;
	}
	
	protected function taxAddition()
	{
		return 0;
	}
	
	protected function oversizedAddition()
	{
		return round($this->price * 0.20, 2);
	}
}