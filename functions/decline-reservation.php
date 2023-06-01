<?php

// Get the data from
$id = $_POST['data_id'];

// Connect to the database
$db = new PDO('mysql:host=localhost;dbname=db_hashing', 'root', '');


// Check if the data exists 
$sql = "SELECT * FROM transactions WHERE id = :id AND status = 'pending'";
$stmt = $db->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();

if ($stmt->rowCount() === 0) {
    header('Location: ../staff-reservation-list.php');
  exit;
}

// Update the status of the transaction
$sql = "UPDATE transactions SET status = 'decline' WHERE id = :id AND status = 'pending'";
$stmt = $db->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();

// Redirect the user to the home page
header('Location: ../staff-reservation-list.php');

?>