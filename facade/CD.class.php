<?php

class CD
{
	public $tracks = array();
	public $band = '';
	public $title = '';
	
	public function __construct($title, $band, $tracks)
	{
		$this->title = $title;
		$this->band = $band;
		$this->tracks = $tracks;
	}
}