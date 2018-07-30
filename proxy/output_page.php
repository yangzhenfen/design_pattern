<?php
include 'CD.class.php';
include 'DallasNOCCDProxy.class.php';

$externalTitle = 'Waste of a Rib';
$externalBand = 'Never Again';

$cd = new CD($externalTitle, $externalBand);
$cd->buy();

$cd = new DallasNOCCDProxy($externalTitle, $externalBand);
$cd->buy();
?>