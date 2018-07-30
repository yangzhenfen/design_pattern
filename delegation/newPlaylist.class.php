<?php
class newPlaylist
{
	private $_songs;
	private $_typeObject;
	
	public function __construct($type)
	{
		$this->_songs = array();
		$object = "{$type}Playlist";
		$this->_typeObject = new $object;

	}
	
	public function addSong($location, $title)
	{
		$song = array('location'=>$location, 'title'=>$title);
		$this->_songs[] = $song;
	}
	
	public function getPlaylist()
	{
		$playlist = $this->_typeObject->getPlaylist($this->_songs);
		return $playlist;
	}
}
