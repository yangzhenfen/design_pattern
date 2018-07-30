<?php

class logToConsole
{
	private $_errorObject;
	
	public function __construct($errorObject)
	{
		$this->_errorObject = $errorObject;
	}
	
	public function write()
	{
		fwrite(STDERR,$this->_errorObject->getError());
	}
	
}
?>