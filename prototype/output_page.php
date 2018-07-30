<?php
include 'CD.class.php';
include 'MixtapeCD.class.php';

$externalPurchaseInfoBandID = 12;
$bandMixProto = new MixtapeCD($externalPurchaseInfoBandID);

$externalPurchaseInfo = array();
$externalPurchaseInfo[] = array('brrr','goodbye');
$externalPurchaseInfo[] = array('what it means','brrr');

foreach ($externalPurchaseInfo as $mixed) {
	$cd = clone $bandMixProto;
	$cd->trackList = $mixed;
	$cd->buy();
}