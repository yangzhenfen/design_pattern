<?php
include 'CD.class.php';
include 'buyCDNotifyStreamObserver.class.php';
include 'activityStream.class.php';

$observer = new buyCDNotifyStreamObserver();

$title = 'Waste of a Rib';
$band = 'Never Again';
$cd = new CD($title, $band);
$cd->attachObserver('purchased', $observer);
$cd->buy();

$title = 'Goodbye';
$band = 'Never night';
$cd = new CD($title, $band);

$cd->attachObserver('purchased', $observer);
$cd->buy();
?>