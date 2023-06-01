<?php
include_once "functions/authentication.php";
include_once "functions/view-data.php";
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
    <div class="container py-4 py-xl-5">
        <div class="row mb-5">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h2>Rooms</h2>
                <p>Here you can choose what room you gonna book</p>
            </div>
        </div>
        <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">


        <?php data_list() ?>


        </div>
    </div>
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
    <div class="modal fade" role="dialog" tabindex="-1" id="transaction">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">ODBRR Systems - Reservation</h4><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form action="functions/create-transaction.php" method="post"><input type="hidden" name="data_id">
                        <p>Check In</p>
                        <div class="form-floating mb-3"><input class="form-control form-control" type="date" name="check_in"></div>
                        <p>Check Out</p>
                        <div class="form-floating mb-3"><input class="form-control form-control" type="date" name="check_out"></div>
                        <div class="form-floating mb-3">
                            <p>Additional Info:</p><textarea class="form-control" name="instructions">Instructions Towel &amp; Bed sheets</textarea>
                        </div>
                    
                </div>
                <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button><button class="btn btn-primary" type="submit">Proceed</button></div>
                </form>
            </div>
        </div>
    </div>
    <<script src="assets/js/jquery.min.js"></script>
    <script>
        $('button[data-bs-target="#transaction"]').on('click', function() {
            var id = $(this).data('id');
            console.log(id);
            $('input[name="data_id"]').each(function() {
                $(this).val(id);
            });
        });
    </script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/clean-blog.js"></script>
</body>

</html>