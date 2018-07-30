<?php
include 'CD.class.php';
include 'enhancedCD.class.php';
include 'CDFactory.class.php';

$title = 'waste of a Rib';
$band = 'Never Again';
$tracksFromExternalSource = array('What It Means','Brr', 'Goodbye');

//$cd = new CD();
$type = 'enhanced';
$cd = CDFactory::create($type);

$cd->setTitle($title);
$cd->setBand($band);
foreach ($tracksFromExternalSource as $track) {
	$cd->addTrack($track);
}
