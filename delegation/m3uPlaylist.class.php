<?php

class m3uPlaylist
{
	public function getPlaylist($songs)
	{
		$m3u = "#EXTM3U\n\n";
		
		foreach ($songs as $song) {
			$m3u .= "#EXTINF:-1,{$song['title']}\n";
			$m3u .= "{$song['location']}\n";
		}
		
		return $m3u;
	}
}
