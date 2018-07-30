<?php

class DallasNOCCDProxy extends CD
{
	protected function _connect()
	{
		$this->_handle = mysqli_connect('192.168.0.130','root','root','test');
	}
}