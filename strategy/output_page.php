<?php
$externalBand = 'Never Again';
$externalTitle = 'Waste of a Rib';

//include 'CD.class.php';
//$cd = new CD($externalTitle, $externalBand);
//print $cd->getAsXML();

include 'CDusesStrategy.class.php';
include 'CDAsXMLStrategy.class.php';
include 'CDAsJSONStrategy.class.php';

$cd = new CDusesStrategy($externalTitle, $externalBand);

//xml output
$cd->setStrategyContext(new CDAsXMLStrategy());
print $cd->get();

//json output
$cd->setStrategyContext(new CDAsJSONStrategy());
print $cd->get();
?>