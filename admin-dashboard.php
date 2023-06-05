<?php
include_once "functions/authentication.php";
include_once "functions/lists.php";
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
        <div class="container"><a class="navbar-brand" href="#">Online Hotel Room Reservation System</a><button data-bs-toggle="collapse" data-bs-target="#navbarResponsive" class="navbar-toggler" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" data-bs-target="#users" data-bs-toggle="modal">users</a></li>
                    <li class="nav-item"><a class="nav-link" data-bs-target="#rooms" data-bs-toggle="modal">Rooms</a></li>
                    <li class="nav-item"><a class="nav-link" href="admin-reservations.php">Reservations</a></li>
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
        <div class="row gy-4 gy-md-0">
            <div class="col-md-6">
                <div class="p-xl-5 m-xl-5"><img class="rounded img-fluid w-100 fit-cover" style="min-height: 300px;" src="assets/img/bg.jpg"></div>
            </div>
            <div class="col-md-6 d-md-flex align-items-md-center">
                <div style="max-width: 350px;">
                    <h2 class="text-uppercase fw-bold">Hotel Alindahaw Pagadian City</h2>
                    <p class="my-3">San Francisco Dist. Pagadian City</p><a class="btn btn-primary btn-lg me-2" role="button" href="admin-reservations.php">reservations list</a>
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
    <div class="modal fade" role="dialog" tabindex="-1" id="users">
        <div class="modal-dialog modal-xl modal-fullscreen" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Users</h4><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="p-5">
                        <div class="text-center">
                            <h4 class="text-dark mb-4">ADD USER</h4>
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
                    </div>
                    <section class="py-5">
                        <div class="container">
                            <h1 class="text-center mb-4">Users</h1>
                        </div>
                        <div class="container">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="bg-light border-0" scope="col"><div class="p-2 px-3 text-uppercase">ID</div></th>
                                            <th class="bg-light border-0" scope="col"><div class="py-2 text-uppercase">Options</div></th>
                                            <th class="bg-light border-0" scope="col"><div class="py-2 text-uppercase">USERNAME</div></th>
                                            <th class="bg-light border-0" scope="col"><div class="py-2 text-uppercase">FULLNAME</div></th>
                                            <th class="bg-light border-0" scope="col"><div class="py-2 text-uppercase">EMAIL</div></th>
                                            <th class="bg-light border-0" scope="col"><div class="py-2 text-uppercase">PHONE</div></th>
                                            <th class="bg-light border-0" scope="col"><div class="py-2 text-uppercase">ADDRESS</div></th>
                                            <th class="bg-light border-0" scope="col"><div class="py-2 text-uppercase">CREATED</div></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php user_list(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button></div>
            </div>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="rooms">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">ROOMS</h4><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="p-5">
                        <div class="text-center">
                            <h4 class="text-dark mb-4">CREATE ROOM</h4>
                        </div>
                        <form class="user" action="functions/create-room.php" method="post" enctype="multipart/form-data">
                            <div class="mb-3"><input class="form-control form-control form-control-user" type="text" placeholder="Name" required="" name="name"></div>
                            <div class="mb-3"><input class="form-control form-control form-control-user" type="text" placeholder="Description" required="" name="description"></div>
                            <div class="row mb-3">
                                <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control form-control-user" type="text" placeholder="Price" required="" name="Price"></div>
                                <div class="col-sm-6"><input class="form-control form-control form-control-user" type="text" placeholder="PAX" required="" name="PAX"></div>
                            </div>
                            <div class="mb-3"><input class="form-control form-control form-control-user" type="file" placeholder="photo" required="" name="image" accept="image/*"></div>
                            <div class="row mb-3"><p id="emailErrorMsg-1" class="text-danger" style="display: none;">Paragraph</p><p id="passwordErrorMsg-1" class="text-danger" style="display: none;">Paragraph</p></div><button class="btn btn-primary d-block btn-user w-100" id="submitBtn-1" type="submit">Add Room</button>
                            <hr>
                        </form>
                    </div>
                    <section class="py-5">
                        <div class="container">
                            <h1 class="text-center mb-4">Rooms</h1>
                        </div>
                        <div class="container">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="bg-light border-0" scope="col"><div class="p-2 px-3 text-uppercase">ID</div></th>
                                            <th class="bg-light border-0" scope="col"><div class="py-2 text-uppercase">Options</div></th>
                                            <th class="bg-light border-0" scope="col"><div class="py-2 text-uppercase">NAME</div></th>
                                            <th class="bg-light border-0" scope="col"><div class="py-2 text-uppercase">DESCRIPTION</div></th>
                                            <th class="bg-light border-0" scope="col"><div class="py-2 text-uppercase">TYPE</div></th>
                                            <th class="bg-light border-0" scope="col"><div class="py-2 text-uppercase">PAX</div></th>
                                            <th class="bg-light border-0" scope="col"><div class="py-2 text-uppercase">PRICE</div></th>
                                            <th class="bg-light border-0" scope="col"><div class="py-2 text-uppercase">CREATED</div></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php room_list(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button></div>
            </div>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="update-room">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Update Room</h4><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="p-5">
                        <div class="text-center">
                            <h4 class="text-dark mb-4">Update</h4>
                        </div>
                        <form class="user" action="functions/update-data.php" method="post" enctype="multipart/form-data"><input type="hidden" name="data_id">
                            <div class="mb-3"><input class="form-control form-control form-control-user" type="text" placeholder="Name" required="" name="name"></div>
                            <div class="mb-3"><input class="form-control form-control form-control-user" type="text" placeholder="Description" required="" name="description"></div>
                            <div class="row mb-3">
                                <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control form-control-user" type="text" placeholder="Price" required="" name="Price"></div>
                                <div class="col-sm-6"><input class="form-control form-control form-control-user" type="text" placeholder="PAX" required="" name="PAX"></div>
                            </div>
                            <div class="mb-3"><input class="form-control form-control form-control-user" type="file" placeholder="photo" required="" name="image" accept="image/*"></div>
                            <div class="row mb-3"><p id="emailErrorMsg-2" class="text-danger" style="display: none;">Paragraph</p><p id="passwordErrorMsg-2" class="text-danger" style="display: none;">Paragraph</p></div><button class="btn btn-primary d-block btn-user w-100" id="submitBtn-2" type="submit">Update</button>
                        </form>
                    </div>
                </div>
                <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button></div>
            </div>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="update-user">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Update User</h4><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="p-5">
                        <div class="text-center">
                            <h4 class="text-dark mb-4">ADD USER</h4>
                        </div>
                        <form class="user" action="functions/update-user.php" method="post"><input type="hidden" name="data_id">
                            <div class="mb-3"><input class="form-control form-control form-control-user" type="text" placeholder="Username" required="" name="username"></div>
                            <div class="mb-3"><input class="form-control form-control form-control-user" type="email" placeholder="Email Address" required="" name="email"></div>
                            <div class="row mb-3">
                                <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control form-control-user" type="password" placeholder="Password" required="" name="password"></div>
                                <div class="col-sm-6"><input class="form-control form-control form-control-user" type="password" placeholder="Repeat Password" required="" name="repeat-password"></div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control form-control-user" type="text" placeholder="First Name" required="" name="firstname"></div>
                                <div class="col-sm-6"><input class="form-control form-control form-control-user" type="text" placeholder="Last Name" required="" name="lastname"></div>
                            </div><input class="form-control form-control-user" type="text" placeholder="Phone" required="" name="phone">
                            <div class="form-group mb-3">
                                <p><strong>Address&nbsp;</strong><span class="text-danger">*</span></p><input class="form-control form-control" type="text" required="" name="address">
                            </div>
                            <div class="row mb-3"><p id="emailErrorMsg" class="text-danger" style="display: none;">Paragraph</p><p id="passwordErrorMsg" class="text-danger" style="display: none;">Paragraph</p></div><button class="btn btn-primary d-block btn-user w-100" type="submit">Update Account</button>
                            <hr>
                        </form>
                    </div>
                </div>
                <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button></div>
            </div>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="confrim-room">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Remove</h4><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                </div>
                <form action="functions/remove-data.php" method="post"><input type="hidden" name="data_id">
                    <div class="modal-body">
                        <p>Are you sure you want to remove this room?</p>
                    </div>
                    <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button><button class="btn btn-danger" type="submit">Remove</button></div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="confrim-user">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Remove</h4><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                </div>
                <form action="functions/remove-user.php" method="post"><input type="hidden" name="data_id">
                    <div class="modal-body">
                        <p>Are you sure you want to remove this user?</p>
                    </div>
                    <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button><button class="btn btn-danger" type="submit">Remove</button></div>
                </form>
            </div>
        </div>
    </div>
    
    <script src="assets/js/jquery.min.js"></script>
    <script>
        $('a[data-bs-target="#update-room"]').on('click', function() {
            var id = $(this).data('id');
            console.log(id);
            $('input[name="data_id"]').each(function() {
                $(this).val(id);
            });
        });

        $('a[data-bs-target="#update-user"]').on('click', function() {
        var id = $(this).data('id');
            console.log(id);
            $('input[name="data_id"]').each(function() {
                $(this).val(id);
            });
        });

        $('a[data-bs-target="#confrim-room"]').on('click', function() {
        var id = $(this).data('id');
            console.log(id);
            $('input[name="data_id"]').each(function() {
                $(this).val(id);
            });
        });

        $('a[data-bs-target="#confrim-user"]').on('click', function() {
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