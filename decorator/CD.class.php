<?php
class CD
{
	public $trackList;
	
	public function __construct()
	{
		$this->trackList = array();
	}
	
	public function addTrack($track)
	{
		$this->trackList[] = $track;
	}
	
	public function getTrackList()
	{
		$output = '';
		
		foreach ($this->trackList as $num=>$track) {
			$output .= ($num + 1) . ") {$track}. ";
		}
		return $output;
	}
}