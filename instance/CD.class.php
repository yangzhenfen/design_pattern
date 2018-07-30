<?php
class CD
{
	protected $_title = '';
	protected $_band = '';
	
	public function __construct($title, $band)
	{
		$this->_title = $title;
		$this->_band = $band;
	}
	
	public function buy()
	{
		$inventory = InventoryConnection::getInstance();
		$inventory->updateQuantity($this->_band, $this->_title, -1);
	}
}
