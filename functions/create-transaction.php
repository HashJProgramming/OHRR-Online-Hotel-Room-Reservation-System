<?php

// Get the data from the form
session_start();
if (isset($_SESSION['id'])){
    $user_id = $_SESSION['id'];
}
$data_id = $_POST['data_id'];
$check_in = $_POST['check_in'];
$check_out = $_POST['check_out'];
$instructions = $_POST['instructions'];

// Connect to the database
$db = new PDO('mysql:host=localhost;dbname=db_hashing', 'root', '');

// Start a transaction
$db->beginTransaction();

// Get the price
$sql = "SELECT price FROM lists WHERE id = $data_id";
$stmt = $db->prepare($sql);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
$price = $row['price'];

// Get the data from the form 
$check_in = $_POST['check_in'];
$check_out = $_POST['check_out'];

// Convert the data to datetime
$check_in_datetime = new DateTime($check_in);
$check_out_datetime = new DateTime($check_out);

// Get the difference between the two datetime objects
$diff = $check_out_datetime->diff($check_in_datetime);

// Get the number of days
$days = $diff->days;

// Calculate the total price
$total_price = $price * $days;

// Check if the user already has a transaction in progress
$sql = "SELECT * FROM transactions WHERE user_id = $user_id AND status = 'processing'";
$stmt = $db->prepare($sql);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

// If the user already has a transaction in progress, redirect them to the transaction page
if (count($rows) > 0) {
    header('Location: ../history.php');
    exit;
}

// Insert the transaction data into the database
$sql = "INSERT INTO transactions (user_id, lists_id, check_in, check_out, amount, total_price, status, instructions)
        VALUES ('$user_id' ,'$data_id', '$check_in', '$check_out', '0', '$total_price', 'processing', '$instructions')";
$stmt = $db->prepare($sql);
$stmt->execute();

// Commit the transaction
$db->commit();

// Redirect the user to the success page
header('Location: ../history.php');

?>