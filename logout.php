<?php

include_once $_SERVER["DOCUMENT_ROOT"].'/includes/autoloader.inc.php';
include_once $_SERVER["DOCUMENT_ROOT"].'/includes/secuerity.inc.php';
include_once $_SERVER["DOCUMENT_ROOT"].'/includes/time.inc.php';

$patint=new Patients();
// Redirect to the login page
$patint->deleteAuthority();
header("Location: sign-in.php");
exit();
?>