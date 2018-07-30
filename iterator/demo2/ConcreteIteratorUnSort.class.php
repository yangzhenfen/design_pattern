<?php
namespace demo2;

class ConcreteIteratorUnSort extends Iterator
{
	public function __construct($ag, $idx=0)
	{
		$this->_ag = $ag;
		$this->_idx = $idx;
	}
	
	public function first()
	{
		$this->_idx = $this->_ag->getSize()-1;
	}
	
	public function next()
	{
		if ($this->_idx >= 0) {
			$this->_idx--;
		}
	}
	
	public function isDone()
	{
		if ($this->_idx <0) {
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