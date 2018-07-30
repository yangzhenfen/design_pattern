<?php
include 'baseDAO.class.php';
include 'userDAO.class.php';

define(DB_USER, 'root');
define(DB_PASS, 'root');
define(DB_HOST, '127.0.0.1');
define(DB_DATABASE, 'test');

$user = new userDAO();
$userDetailsArray = $user->fetch(1);

$updates = array('id'=>1, 'firstName'=>'aaron');
$user->update($updates);

$allAarons = $user->getUserByFirstName('aaron');
?>