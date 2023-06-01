<?php
include_once "functions/authentication.php";
$db = new PDO('mysql:host=localhost;dbname=db_hashing', 'root', '');

if (!isset($_SESSION['id'])) {
    header('location: ../index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Online Hotel Room Reservation System</title>
    <meta name="description" content="Hotel Alindahaw Pagadian City
Online Hotel Room Reservation System">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Lora.css">
    <link rel="stylesheet" href="assets/css/Open%20Sans.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/-Filterable-Cards--Filterable-Cards.css">
    <link rel="stylesheet" href="assets/css/Hero-Clean-images.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Basic-icons.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top" id="mainNav">
        <div class="container"><a class="navbar-brand" href="index.php">Online Hotel Room Reservation System</a><button data-bs-toggle="collapse" data-bs-target="#navbarResponsive" class="navbar-toggler" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="rooms.php">Rooms</a></li>
                    <li class="nav-item"><a class="nav-link" href="reservations.php">My Reservations</a></li>
                    <li class="nav-item"><a class="nav-link" href="history.php">my history</a></li>
                    <li class="nav-item"><a class="nav-link" href="account.php">My account</a></li>
                    <li class="nav-item"><a class="nav-link" href="functions/logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="masthead" style="background: url(&quot;assets/img/bg.jpg&quot;);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto position-relative">
                    <div class="site-heading">
                        <h1>OHRR Systems</h1><span class="subheading">Online Hotel Room Reservation System</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="py-5">
        <div class="container py-5">
            <div class="shopping-cart">
                <div class="px-4 px-lg-0">
                    <div class="pb-5">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th class="bg-light border-0" scope="col"><div class="p-2 px-3 text-uppercase">Reservation</div></th>
                                                    <th class="bg-light border-0" scope="col"><div class="py-2 text-uppercase">TOTAL</div></th>
                                                    <th class="bg-light border-0" scope="col"><div class="py-2 text-uppercase">Check-In</div></th>
                                                    <th class="bg-light border-0" scope="col"><div class="py-2 text-uppercase">Check-Out</div></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                     $sql = 'SELECT * FROM transactions WHERE user_id = :id AND status = "processing" ORDER BY id DESC';
                                                     $stmt = $db->prepare($sql);
                                                     $stmt->bindValue(':id', $_SESSION['id']);
                                                     $stmt->execute();
                                                     $results = $stmt->fetchAll();
                                                 
                                                     // Loop through the results and add them to the table
                                                     foreach ($results as $row) {
                                                     ?>
                                                        <tr>
                                                            <?php get_data($row['lists_id']) ?>
                                                            <td class="border-0 align-middle"><strong>₱<?php echo $row['total_price']; ?></strong></td>
                                                            <td class="border-0 align-middle"><strong><?php echo $row['check_in']; ?></strong></td>
                                                            <td class="border-0 align-middle"><strong><?php echo $row['check_out']; ?></strong></td>
                                                        </tr>
                                                    <?php 
                                                     }

                                                     function get_data($id){
                                                        $db = new PDO('mysql:host=localhost;dbname=db_hashing', 'root', '');
                                                        $sql = 'SELECT * FROM lists WHERE id = :id';
                                                        $stmt = $db->prepare($sql);
                                                        $stmt->bindParam(':id', $id);
                                                        $stmt->execute();
                                                        $results = $stmt->fetchAll();
                                                        foreach ($results as $row) {
                                                            ?>
                                                            <td class="border-0" scope="row"><div class="p-2"><img src="<?php echo 'functions/'.$row['photo']; ?>" alt="" width="70" class="img-fluid rounded shadow-sm">
                                                            <div class="ml-3 d-inline-block align-middle"><h5 class="mb-0"><a href="#" class="text-dark d-inline-block align-middle"><?php echo $row['name']; ?></a>
                                                            </h5><span class="text-muted font-weight-normal font-italic d-block">Price 	₱<?php echo $row['price']; ?></span></div></div></td>
                                                            <?php
                                                        }
                                                    }
                                                ?>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="row py-5 p-4 bg-white rounded shadow-sm">
                                <div class="col-lg-6">
                                    <div class="text-uppercase bg-light rounded-pill px-4 py-3 font-weight-bold"><span>cancel reservation</span></div>
                                    <div class="p-4">
                                        <p class="font-italic mb-4">If you want to cancel this reservation just press the cancel button below.</p>
                                        <a class="btn btn-dark rounded-pill py-2 btn-block" role="button" href="functions/cancel-reservation.php">Cancel</a>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="text-uppercase bg-light rounded-pill px-4 py-3 font-weight-bold"><span>Order summary </span></div>
                                    <div class="p-4">
                                        <p class="font-italic mb-4">additional costs are calculated based on values you have entered.</p>
                                        <ul class="list-unstyled mb-4">
                                            <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Total</strong><h5 class="font-weight-bold">
                                            <?php
                                                     $sql = 'SELECT * FROM transactions WHERE user_id = :id AND status = "processing" ORDER BY id DESC';
                                                     $stmt = $db->prepare($sql);
                                                     $stmt->bindValue(':id', $_SESSION['id']);
                                                     $stmt->execute();
                                                     $results = $stmt->fetchAll();
                                                     if(count($results)){
                                                        echo '₱'.$row['total_price'];
                                                     }
                                            ?>
                                            </h5></li>
                                        </ul><a class="btn btn-dark rounded-pill py-2 btn-block" role="button" href="functions/proceed-reservation.php">Procceed</a>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="text-uppercase bg-light rounded-pill px-4 py-3 font-weight-bold"><span>Reservation Instruction</span></div>
                                    <div class="p-4">
                                        <p class="font-italic mb-4">
                                        <?php
                                                     $sql = 'SELECT * FROM transactions WHERE user_id = :id AND status = "processing" ORDER BY id DESC';
                                                     $stmt = $db->prepare($sql);
                                                     $stmt->bindValue(':id', $_SESSION['id']);
                                                     $stmt->execute();
                                                     $results = $stmt->fetchAll();
                                                     if(count($results)){
                                                        echo $row['instructions'];
                                                     }
                                            ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto">
                    <ul class="list-inline text-center">
                        <li class="list-inline-item"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-twitter fa-stack-1x fa-inverse"></i></span></li>
                        <li class="list-inline-item"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-facebook fa-stack-1x fa-inverse"></i></span></li>
                        <li class="list-inline-item"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-github fa-stack-1x fa-inverse"></i></span></li>
                    </ul>
                    <p class="text-muted copyright">Copyright&nbsp;©&nbsp;Online Hotel Room Reservation System 2023</p>
                </div>
            </div>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/-Filterable-Cards--Filterable-Cards.js"></script>
    <script src="assets/js/clean-blog.js"></script>
</body>

</html>