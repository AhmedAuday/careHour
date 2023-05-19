<?php
session_start();

// Destroy all session variables
session_destroy();

// Redirect to the login page
header("Location: sign-in.php");
exit();
?>