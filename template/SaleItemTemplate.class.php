<?php
abstract class SaleItemTemplate
{
	public $price = 0;
	
	public final function setPriceAdjustments()
	{
		$this->price += $this->taxAddition();
		$this->price += $this->oversizedAddition();
	}
	
	protected function oversizedAddition()
	{
		return 0;
	}
	abstract protected function taxAddition();
	
}