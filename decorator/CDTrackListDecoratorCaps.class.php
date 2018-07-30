<?php

class CDTrackListDecoratorCaps
{
	private $_cd;
	
	public function __construct(CD $cd)
	{
		$this->_cd = $cd;
	}
	
	public function makeCaps()
	{
		foreach ($this->_cd->trackList as &$track) {
			$track = strtoupper($track);
		}
	}
}