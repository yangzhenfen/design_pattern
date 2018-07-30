<?php

class productBuilder
{
	protected $_product = Null;
	protected $_configs = array();
	
	public function __construct($configs)
	{
		$this->_product = new product();
		$this->_xml = $configs;
	}
	
	public function build()
	{
		$this->product->setSize($configs['size']);
		$this->product->setType($configs['type']);
		$this->product->setColor($configs['color']);
	}
	
	public function getProduct()
	{
		return $this->_product;
	}
}