<?php
namespace demo2;

class ConcreteIteratorSort extends Iterator
{
	public function __construct($ag, $idx=0)
	{
		$this->_ag = $ag;
		$this->_idx = $idx;
	}
	
	public function first()
	{
		$this->_idx = 0;
	}
	
	public function next()
	{
		if ($this->_idx < $this->_ag->getSize()) {
			$this->_idx++;
		}
	}
	
	public function isDone()
	{
		if ($this->_idx == $this->_ag->getSize()) {
			return true;
		} else {
			return false;
		}
	}
	
	public function currentItem()
	{
		return $this->_ag->getItem($this->_idx);
	}
}