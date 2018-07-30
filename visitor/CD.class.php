<?php

class CD
{
	public $band;
	public $title;
	public $price;
	
	public function __construct($band, $title, $price)
	{
		$this->band = $band;
		$this->title = $title;
		$this->price = $price;
	}
	
	public function buy()
	{
		//stub
	}
	
	public function acceptVisitor($visitor)
	{
		$visitor->visitCD($this);
	}
}