<?php

function get_data($id){
    $db = new PDO('mysql:host=localhost;dbname=db_hashing', 'root', '');
    $sql = 'SELECT * FROM lists WHERE id = :id';
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $results = $stmt->fetchAll();
    foreach ($results as $row) {
        ?>
        <td class="border-0 align-middle"><strong><?php echo $row['name']; ?></strong></td>
        <td class="border-0 align-middle"><strong><?php echo $row['price']; ?></strong></td>
        <?php
    }
}

function get_days($check_in, $check_out){
    // Convert the data to datetime
    $check_in_datetime = new DateTime($check_in);
    $check_out_datetime = new DateTime($check_out);
    // Get the difference between the two datetime objects
    $diff = $check_out_datetime->diff($check_in_datetime);
    // Get the number of days
    $days = $diff->days;
    echo $days;
}

function get_customer($id){
    $db = new PDO('mysql:host=localhost;dbname=db_hashing', 'root', '');
    $sql = 'SELECT * FROM users WHERE id = :id';
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $results = $stmt->fetchAll();
    foreach ($results as $row) {
        ?>
        <td class="border-0 align-middle"><strong><?php echo $row['firstname'].' '.$row['lastname']; ?></strong></td>
        <td class="border-0 align-middle"><strong><?php echo $row['phone']; ?></strong></td>
        <?php
    }
}