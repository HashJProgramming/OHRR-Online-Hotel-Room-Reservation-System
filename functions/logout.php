<?php
// Start a session
session_start();

$username = $_SESSION['username'];
$level = $_SESSION['type'];

if ($level == 0) {
$type = 'Admin';
} else if ($level == 1) {
$type = 'Cashier';
}

// Destroy the session
session_destroy();
// Redirect the user to the login page 
header('Location: ../index.php');

?>