<?php
namespace demo2;

class ConcreteAggregate extends Aggregate
{
	public function __construct($cont)
	{
		for ($i=0; $i<$cont; $i++) {
			$this->_objs[] = $i;
		}
	}
	
	public function createIterator()
	{
		return new ConcreteIterator($this);
	}
	
	public function getItem($idx = 0)
	{
		if ($idx < $this->getSize()) {
			return $this->_objs[$idx];
		} else {
			return false;
		}
	}
	
	public function getSize()
	{
		return count($this->_objs);
	}
}