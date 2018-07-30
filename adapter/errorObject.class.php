<?php

class errorObject
{
	private $_error;
	
	public function __construct($error)
	{
		$this->_error = $error;
	}
	
	public function getError()
	{
		return $this->_error;
	}
}

?>