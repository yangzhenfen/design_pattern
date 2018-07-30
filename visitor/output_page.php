<?php
include 'CD.class.php';
include 'CDVisitorLogPurchase.class.php';
include 'CDVisitorPopulateDiscountList.class.php';


$externalBand = 'Never Again';
$externalTitle = 'Waste of a Rib';
$externalPrice = 9.99;

$cd = new CD($externalBand, $externalTitle, $externalPrice);
$cd->buy();
$cd->acceptVisitor(new CDVisitorLogPurchase());
$cd->acceptVisitor(new CDVisitorPopulateDiscountList());