<?php

class CD
{
	public $band = '';
	public $title = '';
	public $trackList = array();
	public function __construct($id)
	{
		$handle = mysqli_connect('localhost','root','','test');
		
		$sql = "select band, title from CDs where id={$id}";
		
		$results = mysqli_query($handle,$sql);
		
		if ($results && $row = mysqli_fetch_array($results,MYSQLI_ASSOC)) {
			$this->band = $row['band'];
			$this->title = $row['title'];
		}
	}
	
	public function buy()
	{
		//cd buying magic here
		var_dump($this);
	}
}