<?php

class CD
{
	public $band = '';
	public $title = '';
	public $trackList = array();
	
	public function __construct($band, $title)
	{
		$this->band = $band;
		$this->title = $title;
	}
	
	public function addTrack($track)
	{
		$this->trackList[] = $track;
	}
}