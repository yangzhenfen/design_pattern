<?php

include_once 'errorObject.class.php';
include_once 'logToConsole.class.php';
include_once 'logToCSV.class.php';
include_once 'logToCSVAdapter.class.php';


/** create the new 404 error object **/
//$error = new errorObject("404:Not Found");
$error = new logToCSVAdapter("404:Not Found");

/** write the error to the console **/
//$log = new logToConsole($error);
$log = new logToCSV($error);
$log->write();

?>