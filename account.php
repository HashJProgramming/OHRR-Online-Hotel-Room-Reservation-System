<?php
include_once "functions/authentication.php";
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
        <section>
            <h1 class="text-center text-capitalize">My Account</h1>
            <div class="container">
                    <div class="p-5">
                        <form class="user" action="functions/update-account.php" method="post">
                            <input type="hidden" name="data_id" value="<?php echo $_SESSION['id']; ?>">
                            <div class="mb-3"><input class="form-control form-control-user" type="text" placeholder="Username" required="" name="username"></div>
                            <div class="mb-3"><input class="form-control form-control-user" type="email" placeholder="Email Address" required="" name="email"></div>
                            <div class="row mb-3">
                                <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user" type="password" placeholder="Password" required="" name="password"></div>
                                <div class="col-sm-6"><input class="form-control form-control-user" type="password" placeholder="Repeat Password" required="" name="repeat-password"></div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user" type="text" placeholder="First Name" required="" name="firstname"></div>
                                <div class="col-sm-6"><input class="form-control form-control-user" type="text" placeholder="Last Name" required="" name="lastname"></div>
                            </div><input class="form-control form-control-user" type="text" placeholder="Phone" required="" name="phone">
                            <div class="form-group mb-3">
                                <p><strong>Address&nbsp;</strong><span class="text-danger">*</span></p><input class="form-control" type="text" required="" name="address">
                            </div>
                            <div class="row mb-3">
                                <p id="emailErrorMsg" class="text-danger" style="display: none;">Paragraph</p>
                                <p id="passwordErrorMsg" class="text-danger" style="display: none;">Paragraph</p>
                            </div><button class="btn btn-primary d-block btn-user w-100" type="submit">Update Account</button>
                            <hr>
                        </form>
                    </div>
            </div>
            <div class="col">
                <h3 id="fail" class="text-center text-danger d-none"><br>Form not Submitted&nbsp;<a href="contact.php">Try Again</a><br><br></h3>
                <h3 id="success-1" class="text-center text-success d-none"><br>Form Submitted Successfully&nbsp;<a href="contact.php">Send Another Response</a><br><br></h3>
            </div>
        </section>
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