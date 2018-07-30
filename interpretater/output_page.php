<?php
include 'User.class.php';
include 'UserCD.class.php';
include 'UserCDInterpreter.class.php';

$username = 'aaron';

$user = new User($username);
$interpreter = new userCDInterpreter();
$interpreter->setUser($user);

print "<h1> {$username}'s Profile </h1>";
print $interpreter->getInterpreted();
?>