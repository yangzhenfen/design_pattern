<?php

class plsPlaylist
{
	public function getPlaylist($songs)
	{
		$pls = "[playlist]\nNumberOfEntries=".count($songs)."\n\n";
		
		foreach ($songs as $songCount => $song) {
			$counter = $songCount + 1;
			$pls .= "File{$counter}={$song['location']}\n";
			$pls .= "Title{$counter}={$song['title']}\n";
			$pls .= "Length{$counter}=-1\n\n";
		}
		return $pls;
	}
}