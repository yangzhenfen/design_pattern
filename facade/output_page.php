<?php

include 'CD.class.php';
include 'CDUpperCase.class.php';
include 'CDMakeXML.class.php';
include 'WebServiceFacade.class.php';

$tracksFromExternalSource = array('What It Means', 'Brr', 'Goodbye');

$title = 'Waste of a Rib';
$band = 'Never Again';

$cd = new CD($title, $band, $tracksFromExternalSource);

/*
CDUpperCase::makeString($cd, 'title');
CDUpperCase::makeString($cd, 'band');
CDUpperCase::makeArray($cd, 'tracks');

print CDMakeXML::create($cd);
*/

print WebServiceFacade::makeXMLCall($cd);
?>