<?php
namespace demo2;

abstract class Aggregate
{
	protected $_objs;
	protected $_size;
	
	public function createIterator()
	{
		
	}
	
	public function getItem()
	{
		
	}
	
	public function getSize()
	{
		return $this->_size;
	}
}
