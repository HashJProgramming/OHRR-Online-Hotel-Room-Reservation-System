<?php

// Connect to the database
$db = new PDO('mysql:host=localhost;dbname=db_hashing', 'root', '');

// Get the form data
$id = $_POST['data_id'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$repeatPassword = $_POST['repeat-password'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$phone = $_POST['phone'];
$address = $_POST['address'];

// Check if the username already exists
$sql = "SELECT * FROM users WHERE username = :username AND id != :id";
$stmt = $db->prepare($sql);
$stmt->bindParam(':username', $username);
$stmt->bindParam(':id', $id);
$stmt->execute();

if ($stmt->rowCount() > 0) {
  echo "The username already exists.";
  exit;
}

// Check if the email address already exists
$sql = "SELECT * FROM users WHERE email = :email AND id != :id";
$stmt = $db->prepare($sql);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':id', $id);
$stmt->execute();

if ($stmt->rowCount() > 0) {
  echo "The email address already exists.";
  exit;
}

// Check if the passwords match
if ($password !== $repeatPassword) {
  echo "The passwords do not match.";
  exit;
}

// Hash the password 
$password = password_hash($password, PASSWORD_DEFAULT);

// Update the user in the database
$sql = "UPDATE users SET username = :username, email = :email, password = :password, firstname = :firstname, lastname = :lastname, phone = :phone, address = :address WHERE id = :id";
$stmt = $db->prepare($sql);
$stmt->bindParam(':username', $username);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':password', $password);
$stmt->bindParam(':firstname', $firstname);
$stmt->bindParam(':lastname', $lastname);
$stmt->bindParam(':phone', $phone);
$stmt->bindParam(':address', $address);
$stmt->bindParam(':id', $id);
$stmt->execute();

// Redirect the user to the home page
header('Location: ../admin-dashboard.php');

?>