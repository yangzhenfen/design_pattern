<?php

class InventoryConnection
{
	protected static $_instance = null;
	
	protected $_handle = NULL;
	
	public static function getInstance()
	{
		if (!self::$_instance instanceof self) {
			self::$_instance = new self;
		}
		
		return self::$_instance;
	}
	
	protected function __construct()
	{
		$this->_handle = mysqli_connect('localhost','root','','test');
	}
	
	public function updateQuantity($band, $title, $number)
	{
		$query = "update CDs set amount=amount+" . intval($number);
		$query .= " where band='" . mysqli_real_escape_string($this->_handle, $band) . "'";
		$query .= " where title='" . mysqli_real_escape_string($this->_handle, $title) . "'";
		
		mysqli_query($this->_handle, $query);
	}
}