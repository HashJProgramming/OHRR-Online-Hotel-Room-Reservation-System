<?php

// Get the form data
$id = $_POST['data_id'];
$payment = $_POST['payment'];

// Connect to the database
$db = new PDO('mysql:host=localhost;dbname=db_hashing', 'root', '');

// Check if the data exists
$sql = "SELECT * FROM transactions WHERE id = :id AND status = 'pending'";
$stmt = $db->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();

if ($stmt->rowCount() === 0) {
    header('Location: ../transaction.php');
  exit;
}

// Get the total price
$sql = "SELECT total_price FROM transactions WHERE id = :id";
$stmt = $db->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();

$row = $stmt->fetch(PDO::FETCH_ASSOC);
$total_price = $row['total_price'];

// Check if the payment is equal or greater than the total price
if ($payment >= $total_price) {
    // Update the status of the transaction
    $sql = "UPDATE transactions SET status = 'approved', amount = :payment WHERE id = :id AND status = 'pending'";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':payment', $payment);
    $stmt->execute();

    // Redirect the user to the home page
    header('Location: ../success.php?price=' . $total_price . '&payment=' . $payment . '&change=' . ($payment - $total_price));
} else {
    // Redirect the user back to the transaction page with an error message
    header('Location: ../admin-reservations.php?error=payment-not-enough');
}

?>