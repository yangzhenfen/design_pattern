<?php

class Playlist
{
	private $_songs;
	
	public function __construct()
	{
		$this->_songs = array();
	}
	
	public function addSong($location, $title)
	{
		$song = array('location'=>$location, 'title'=>$title);
		$this->_songs[] = $song;
	}
	
	public function getM3U()
	{
		$m3u = "#EXTM3U\n\n";
		
		foreach ($this->_songs as $song) {
			$m3u .= "#EXTINF:-1,{$song['title']}\n";
			$m3u .= "{$song['location']}\n";
		}
		
		return $m3u;
	}
	
	public function getPLS()
	{
		$pls = "[playlist]\nNumberOfEntries=".count($this->_songs)."\n\n";
		
		foreach ($this->_songs as $songCount => $song) {
			$counter = $songCount + 1;
			$pls .= "File{$counter}={$song['location']}\n";
			$pls .= "Title{$counter}={$song['title']}\n";
			$pls .= "Length{$counter}=-1\n\n";
		}
		return $pls;
	}
}