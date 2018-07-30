<?php
//include 'product.class.php';

// our product configuration received from other functionality

$productConfigs = array('type'=>'shirt','size'=>'XL','color'=>'red');

/*
$product = new product();

$product->setType($productConfigs['type']);
$product->setSize($productConfigs['size']);
$product->setColor($productConfigs['color']);
*/

include 'productBuilder.class.php';

$builder = new productBuilder($productConfigs);
$builder->build();
$product = $builder->getProduct();

?>