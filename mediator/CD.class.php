<?php

class CD
{
	public $band = '';
	public $title = '';
	protected $_mediator;
	
	public function __construct($mediator = null)
	{
		$this->_mediator = $mediator;
	}
	
	public function save()
	{
		// stub - writes data back to database - use this to verify
		var_dump($this);
	}
	
	public function changeBandName($newName)
	{
		if (!is_null($this->_mediator)) {
			$this->_mediator->change($this, array('band'=>$newName));
		}
		$this->band = $newName;
		$this->save();
	}
}