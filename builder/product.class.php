<?php

class product
{
	protected $_type = '';
	protected $_size = '';
	protected $_color = '';
	
	public function setType($type)
	{
		$this->_type = $type;
	}
	
	public function setSize($size)
	{
		$this->_size = $size;
	}
	
	public function setColor($color)
	{
		$this->_color = $color;
	}
}
