<?php

class CDSearchByBandIterator implements Iterator
{
	public $_CDs = array();
	private $_valid = FALSE;
	
	public function __construct($bandName)
	{
		
		$db=mysqli_connect("localhost","root","","test"); 
		// 检查连接 
		if (!$db) 
		{ 
			die("连接错误: " . mysqli_connect_error()); 
		} 
		
		$sql = "select CD.id, CD.band, CD.title, tracks.tracknum,";
		$sql .= "tracks.title as tracktitle ";
		$sql .= "from CD left join tracks on CD.id=tracks.cid where band='";
		$sql .= mysqli_real_escape_string($db,$bandName);
		$sql .= "' order by tracks.tracknum";
		
		$results = mysqli_query($db,$sql);
		
		$cdID = 0;
		$cd = NULL;
		
		while ($result = mysqli_fetch_array($results)) {
			if ($result['id'] !== $cdID) {
				if (!is_null($cd)) {
					$this->_CDs[] = $cd;
				} else {
					$cdID = $result['id'];
				}
				$cd = new CD($result['band'], $result['title']);
				$cd->addTrack($result['tracktitle']);
				$this->_CDs[] = $cd;
			}
		}
	}
	
	public function next()
	{
		$this->_valid = (next($this->_CDs) === FALSE) ? FALSE : TRUE;
	}
	
	public function valid()
	{
		return $this->_valid;
	}
	
	public function current()
	{
		return current($this->CDs);
	}
	
	public function key()
	{
		return key($this->_CDs);
	}
	
	public function rewind()
	{
		//return true;
	}
}
