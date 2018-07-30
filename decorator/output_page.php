<?php
include 'CD.class.php';
include 'CDTrackListDecoratorCaps.class.php';

$tracksFromExternalSource = array('What It Means','Brr','Goodbye');

$myCD = new CD();

foreach ($tracksFromExternalSource as $track) {
	$myCD->addTrack($track);
}

$myCDCaps = new CDTrackListDecoratorCaps($myCD);
$myCDCaps->makeCaps();

print_r($myCD->getTrackList());
?>