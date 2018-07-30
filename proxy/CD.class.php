<?php
class CD
{
	protected $_title = '';
	protected $_band = '';
	
	protected $_handle = null;
	
	public function __construct($title, $band)
	{
		$this->_title = $title;
		$this->_band = $band;
	}
	
	public function buy()
	{
		$this->_connect();
		
		$query = "update CDs set bought=1 where band='";
		$query .=mysqli_real_escape_string($this->_handle, $this->_band);
		$query .="' and title='";
		$query .=mysqli_real_escape_string($this->_handle, $this->_title);
		$query .="'";
		
		mysqli_query($this->_handle, $query);		
	}
	
	protected function _connenct()
	{
		
		$this->_handle = mysqli_connect('localhost','root','','test');
	}
}