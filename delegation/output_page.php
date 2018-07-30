<?php
include 'newPlaylist.class.php';
include 'm3uPlaylist.class.php';
include 'plsPlaylist.class.php';

$type = 'm3u';

$playlist = new newPlaylist($type);
$playlist->addSong('/var/www/html/music.m3u','muisc');

$playlistContent = $playlist->getPlaylist();

var_dump($playlistContent);
?>