<?php
include 'SaleItemTemplate.class.php';
include 'CD.class.php';
include 'BandEndorsedCaseOfCereal.class.php';

$externalTitle = 'Waste of a Rib';
$externalBand = 'Never Again';
$externalCDPrice = 12.99;
$externalCerealPrice = 90;

$cd = new CD($externalBand, $externalTitle, $externalCDPrice);
$cd->setPriceAdjustments();

print 'The total cose for CD item is: $'. $cd->price .'<br/>';

$cereal = new BandEndorsedCaseOfCereal($externalBand, $externalCerealPrice);
$cereal->setPriceAdjustments();

print 'The total cost for the Cereal case is: $'. $cereal->price;

?>