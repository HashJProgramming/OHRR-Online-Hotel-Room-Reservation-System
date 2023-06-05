<?php
include_once "functions/check-user.php";
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
                    <li class="nav-item"><a class="nav-link" data-bs-target="#login" data-bs-toggle="modal">Login</a></li>
                    <li class="nav-item"><a class="nav-link" data-bs-target="#register" data-bs-toggle="modal" href="index.php">Register</a></li>
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
 
    <div class="container d-flex flex-column align-items-center py-4 py-xl-5">
                <div>
                    <h2><strong>HOTEL ALINDAHAW PAGADIAN CITY</strong></h2>
                    <p>Pagadian City Hotel Alindahaw - Huge Discounts<br>Compare Prices &amp; Save Money with Tripadvisor (The World's Largest Travel Site).</p>
                </div>
        <div class="row gy-4 row-cols-1 row-cols-md-2 w-100" style="max-width: 800px;">
            <div class="col order-md-first">
                <div class="card"><img class="card-img w-100 d-block" src="assets/img/room1.jpg">
                    <div class="card-img-overlay text-center d-flex flex-column justify-content-center align-items-center p-4"></div>
                </div>
            </div>
            <div class="col order-md-2">
                <div class="card"><img class="card-img w-100 d-block" src="assets/img/room2.jpg">
                    <div class="card-img-overlay text-center d-flex flex-column justify-content-center align-items-center p-4"></div>
                </div>
            </div>
            <div class="col order-md-2">
                <div class="card"><img class="card-img w-100 d-block" src="assets/img/room3.jpg">
                    <div class="card-img-overlay text-center d-flex flex-column justify-content-center align-items-center p-4"></div>
                </div>
            </div>
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

    <div class="modal fade" role="dialog" tabindex="-1" id="login">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Login</h4><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="p-5">
                        <div class="text-center">
                            <h4 class="text-dark mb-4">Login</h4>
                        </div>
                        <form class="user" action="functions/login.php" method="post">
                            <div class="mb-3"><input class="form-control form-control form-control-user" type="text" placeholder="Username" required="" name="username"></div><input class="form-control form-control-user" type="password" placeholder="Password" required="" name="password">
                            <div class="row mb-3"><p id="emailErrorMsg" class="text-danger" style="display: none;">Paragraph</p><p id="passwordErrorMsg" class="text-danger" style="display: none;">Paragraph</p></div><button class="btn btn-primary d-block btn-user w-100" id="submitBtn-1" type="submit">Login</button>
                            <hr>
                        </form>
                        <div class="text-center"><a class="small" data-bs-target="#register" data-bs-toggle="modal">Don't have an account? Register!</a></div>
                    </div>
                </div>
                <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button></div>
            </div>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="register">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Register</h4><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="p-5">
                        <div class="text-center">
                            <h4 class="text-dark mb-4">Create an Account!</h4>
                        </div>
                        <form class="user" action="functions/register.php" method="post">
                            <div class="mb-3"><input class="form-control form-control form-control-user" type="text" placeholder="Username" required="" name="username"></div>
                            <div class="mb-3"><input class="form-control form-control form-control-user" type="email" id="email" placeholder="Email Address" required="" name="email"></div>
                            <div class="row mb-3">
                                <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control form-control-user" type="password" id="password" placeholder="Password" required="" name="password"></div>
                                <div class="col-sm-6"><input class="form-control form-control form-control-user" type="password" id="verifyPassword" placeholder="Repeat Password" required="" name="repeat-password"></div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control form-control-user" type="text" placeholder="First Name" required="" name="firstname"></div>
                                <div class="col-sm-6"><input class="form-control form-control form-control-user" type="text" placeholder="Last Name" required="" name="lastname"></div>
                            </div><input class="form-control form-control-user" type="text" placeholder="Phone" required="" name="phone">
                            <div class="form-group mb-3">
                                <p><strong>Address&nbsp;</strong><span class="text-danger">*</span></p><input class="form-control form-control" type="text" required="" name="address">
                            </div>
                            <div class="row mb-3"><p id="emailErrorMsg" class="text-danger" style="display: none;">Paragraph</p><p id="passwordErrorMsg" class="text-danger" style="display: none;">Paragraph</p></div><button class="btn btn-primary d-block btn-user w-100" id="submitBtn" type="submit">Register Account</button>
                            <hr>
                        </form>
                        <div class="text-center"><a class="small" href="reserve.php" data-bs-target="#login" data-bs-toggle="modal">Already have an account? Login!</a></div>
                    </div>
                </div>
                <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button></div>
            </div>
        </div>
    </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/-Filterable-Cards--Filterable-Cards.js"></script>
    <script src="assets/js/clean-blog.js"></script>
</body>

</html>