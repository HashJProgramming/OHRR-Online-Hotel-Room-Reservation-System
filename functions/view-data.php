<?php

function data_list(){
    // Connect to the database
    $db = new PDO('mysql:host=localhost;dbname=db_hashing', 'root', '');

    // Get all data from the products table
    $sql = 'SELECT * FROM lists ORDER BY id ASC';
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $results = $stmt->fetchAll();

    // Loop through the results and add them to the table 
    foreach ($results as $row) {
    ?>
        <div class="col">
            <div class="card">
                <img class="img-fluid card-img-top w-100 d-block fit-cover" style="height: 200px;" src="<?php echo 'functions/'.$row['photo']; ?>" />
                
                <div class="card-body p-4">
                    <p class="text-primary card-text mb-0">Room #<?php echo $row['id']; ?></p>
                    <h4 class="card-title"><?php echo $row['name']; ?></h4>
                    <p class="card-text"><?php echo $row['descriptions']; ?></p><button class="btn btn-primary" type="button" data-bs-target="#transaction" data-bs-toggle="modal" data-id="<?php echo $row['id']?>">Reserve</button>
                </div>
            </div>
        </div>

    <?php
    }
}

?>

