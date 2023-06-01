<?php

// Connect to the database
$db = new PDO('mysql:host=localhost;dbname=db_hashing', 'root', '');

// Get all data from the products table
$sql = 'SELECT * FROM transactions WHERE status = "approved" ORDER BY id ASC';
$stmt = $db->prepare($sql);
$stmt->execute();
$results = $stmt->fetchAll();

// Loop through the results and add them to the table
foreach ($results as $row) {
?>
    <tr>
        <td class="border-0 align-middle"><strong><?php echo $row['id']; ?></strong></td>
        <?php get_customer($row['user_id']); ?>
        <?php get_data($row['lists_id']); ?>
        <td class="border-0 align-middle"><strong><?php echo $row['check_in']; ?></strong></td>
        <td class="border-0 align-middle"><strong><?php echo $row['check_out']; ?></strong></td>
        <td class="border-0 align-middle"><strong><?php get_days($row['check_in'], $row['check_out']); ?></strong></td>
        <td class="border-0 align-middle"><strong><?php echo $row['total_price']; ?></strong></td>
        <td class="border-0 align-middle"><strong><?php echo $row['status']; ?></strong></td>
    </tr>
        
<?php
}

?>

