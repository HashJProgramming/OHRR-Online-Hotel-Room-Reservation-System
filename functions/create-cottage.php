<?php

// Get the database connection
$db = new PDO('mysql:host=localhost;dbname=db_hashing', 'root', '');

// Get the form data
$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['Price'];
$pax = $_POST['PAX'];

// Check if the cottage already exists
$sql = "SELECT * FROM lists WHERE name = ? AND type = 'cottage'";
$stmt = $db->prepare($sql);
$stmt->execute([$name]);
$result = $stmt->fetchAll();

if (count($result) > 0) {
    header('Location: ../admin-dashboard.php');
    exit;
}

// Check if the file was uploaded successfully 
if ($_FILES['image']['error'] !== UPLOAD_ERR_OK) {
    echo "There was an error uploading the file.";
    exit;
}

// Generate a random string
$random_string = uniqid();

// Move the file to the uploads directory
$destination = 'uploads/' . $random_string . '_' . $_FILES['image']['name'];
if (!move_uploaded_file($_FILES['image']['tmp_name'], $destination)) {
    echo "There was an error moving the file.";
    exit;
}

// Insert the data into the database
$sql = "INSERT INTO lists (name, descriptions, price, pax, type, photo) VALUES (?, ?, ?, ?, 'cottage', ?)";
$stmt = $db->prepare($sql);
$stmt->execute([$name, $description, $price, $pax, $destination]);

// Redirect to the home page
header('Location: ../admin-dashboard.php');

?>