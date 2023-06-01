<?php

// Connect to the database
$db = new PDO('mysql:host=localhost;dbname=db_hashing', 'root', '');

// Sanitize the user input
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$repeatPassword = $_POST['repeat-password'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$phone = $_POST['phone'];
$address = $_POST['address'];

// Check if the username already exists 
$sql = "SELECT * FROM users WHERE username = :username";
$stmt = $db->prepare($sql);
$stmt->bindParam(':username', $username);
$stmt->execute();

if ($stmt->rowCount() > 0) {
  echo "The username already exists.";
  exit;
}

// Check if the email address already exists
$sql = "SELECT * FROM users WHERE email = :email";
$stmt = $db->prepare($sql);
$stmt->bindParam(':email', $email);
$stmt->execute();

if ($stmt->rowCount() > 0) {
  echo "The email address already exists.";
  exit;
}

// Hash the password
$password = password_hash($password, PASSWORD_DEFAULT);

// Insert the new user into the database
$sql = "INSERT INTO users (username, email, password, firstname, lastname, phone, address, type) VALUES (:username, :email, :password, :firstname, :lastname, :phone, :address, 1)";
$stmt = $db->prepare($sql);
$stmt->bindParam(':username', $username);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':password', $password);
$stmt->bindParam(':firstname', $firstname);
$stmt->bindParam(':lastname', $lastname);
$stmt->bindParam(':phone', $phone);
$stmt->bindParam(':address', $address);
$stmt->execute();

// Redirect the user to the login page
header('Location: ../index.php');

?>