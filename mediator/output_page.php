<?php
include 'CD.class.php';
include 'MP3Archive.class.php';
include 'MusicContainerMediator.class.php';

$titleFromDB = 'Waste of a Rib';
$bandFromDB = 'Never Again';

$mediator = new MusicContainerMediator();

$cd = new CD($mediator);
$cd->title = $titleFromDB;
$cd->band = $bandFromDB;

$cd->changeBandName('Maybe Once More');