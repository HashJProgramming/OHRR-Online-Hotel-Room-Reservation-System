<?php

// Connect to the database
$db = new PDO('mysql:host=localhost;dbname=db_hashing', 'root', '');

// Get the form data
$id = $_POST['data_id'];

// Check if the data exists 
$sql = "SELECT * FROM lists WHERE id = :id";
$stmt = $db->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();

if ($stmt->rowCount() === 0) {
  echo "The user does not exist.";
  exit;
}

// Remove the data from the database
$sql = "DELETE FROM lists WHERE id = :id";
$stmt = $db->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();

// Redirect the user to the home page
header('Location: ../admin-dashboard.php');

?>