<?php
session_start(); 
if (isset($_SESSION['username'])) {
    if ($_SESSION['type'] == 1) {
        header('location: ./dashboard.php');
    } else if ($_SESSION['type'] == 0) {
        header('location: ./admin-dashboard.php');
    }
}

?>
