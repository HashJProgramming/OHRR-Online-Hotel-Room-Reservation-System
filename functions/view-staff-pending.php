<?php

// Connect to the database
$db = new PDO('mysql:host=localhost;dbname=db_hashing', 'root', '');

// Get all data from the products table
$sql = 'SELECT * FROM transactions WHERE status = "pending" ORDER BY id ASC';
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
        <td class="border-0 align-middle"><strong><?php echo $row['instructions']; ?></strong></td>
        <td class="border-0 align-middle">
            <a href="#" data-id="<?php echo $row['id']?>" data-bs-target="#transaction" data-bs-toggle="modal" class="text-dark" style="margin-left: 10px;"><i class="fas fa-check"></i></a>
            <a href="#" data-id="<?php echo $row['id']?>" data-bs-target="#confirm" data-bs-toggle="modal" class="text-dark" style="margin-left: 10px;"><i class="fas fa-times"></i></a>
        </td>
        <td class="border-0 align-middle"><strong><?php echo $row['status']; ?></strong></td>
    </tr>
        
<?php
}
?>

