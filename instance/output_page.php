<?php
include 'InventoryConnection.class.php';
include 'CD.class.php';

$boughtCDs = array();
$boughtCDs[] = array('band'=>'Never Again', 'title'=>'Waste of a Rib');
$boughtCDs[] = array('band'=>'Therapee', 'title'=>'Long Road');

foreach ($boughtCDs as $boughtCD) {
	$cd = new CD($boughtCD['title'], $boughtCD['band']);
	$cd->buy();
}
?>