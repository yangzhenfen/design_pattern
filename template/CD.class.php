<?php

class CD extends SaleItemTemplate
{
	public $band;
	public $title;
	
	public function __construct($band, $title, $price)
	{
		$this->band = $band;
		$this->title = $title;
		$this->price = $price;
	}
	
	protected function taxAddition()
	{
		return round($this->price * 0.05, 2);
	}
}