<?php
require 'includes/autoloader.php';
require 'includes/exceptions.php';
session_start();

$u = isset($_GET['u'])?$_GET['u']:'';
lib::setitem('controller',new controller($u));

$view = new view();
lib::getitem('controller')->render();
$content = $view->finish();
echo view::show('shell', array('body'=>$content));

?>