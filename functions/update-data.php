<?php

// Get the database connection
$db = new PDO('mysql:host=localhost;dbname=db_hashing', 'root', '');

// Get the form data
$id = $_POST['data_id'];
$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['Price'];
$pax = $_POST['PAX'];

// Check if the category already exists 
$sql = "SELECT * FROM lists WHERE id = ?";
$stmt = $db->prepare($sql);
$stmt->execute([$id]);
$result = $stmt->fetchAll();

if (count($result) === 0) {
    echo "The id does not exist.";
    exit;
}

// Remove the old image from the uploads directory
if (file_exists($result[0]['photo'])) {
    unlink($result[0]['photo']);
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

// Update the data in the database
$sql = "UPDATE lists SET name = ?, descriptions = ?, price = ?, pax = ?, photo = ? WHERE id = ?";
$stmt = $db->prepare($sql);
$stmt->execute([$name, $description, $price, $pax, $destination, $id]);

// Redirect to the home page
header('Location: ../admin-dashboard.php');

?>