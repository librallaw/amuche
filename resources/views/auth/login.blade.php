<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Orbiter is a bootstrap minimal & clean admin template">
    <meta name="keywords" content="admin, admin panel, admin template, admin dashboard, responsive, bootstrap 4, ui kits, ecommerce, web app, crm, cms, html, sass support, scss">
    <meta name="author" content="Themesbox">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>NIN V - Login</title>
    <!-- Fevicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <!-- Start css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    <link id="pagestyle" href="/assets/css/material-dashboard.min-v=3.0.6.css" rel="stylesheet" />
    <!-- End css -->
</head>
<body class="vertical-layout">
<!-- Start Containerbar -->
<div id="containerbar" class="containerbar authenticate-bg">
    <!-- Start Container -->
    <div class="container">
        <div class="auth-box login-box">
            <!-- Start row -->
            <div class="row no-gutters align-items-center justify-content-center">
                <!-- Start col -->
                <div class="col-md-6 col-lg-5">


                    <!-- Start Auth Box -->
                    <div class="auth-box-right">
                        <div class="card">
                            <div class="card-body">
                                @include("alert")
                                <form action="" method="post" >

                                    @csrf
                                    <div class="form-head">
                                        <a href="/" class="logo"><img src="assets/images/logo.svg" class="img-fluid" alt="logo"></a>
                                    </div>
                                    <h4 class="text-primary my-4">Log in !</h4>
                                    <div class="form-group input-group input-group-outline my-3">
                                        <input type="text" class="form-control" name="username" value="{{old('username')}}" id="username" placeholder="Enter Username / email" required>
                                    </div>
                                    <div class="form-group input-group input-group-outline my-3">
                                        <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password here" required>
                                    </div>
                                    <div class="form-row mb-3">
                                        <div class="col-sm-6"></div>
                                        <div class="col-sm-6">
                                            <div class="forgot-psw">
                                                <a id="forgot-psw" href="#" class="font-14">Forgot Password?</a>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-success btn-lg btn-block font-18">Log in</button>
                                </form>
                                <div class="login-or">
                                    <h6 class="text-muted">OR</h6>
                                </div>

                                <p class="mb-0 mt-3">Don't have a account? <a href="#">Sign up</a></p>
                            </div>
                        </div>
                    </div>
                    <!-- End Auth Box -->
                </div>
                <!-- End col -->
            </div>
            <!-- End row -->
        </div>
    </div>
    <!-- End Container -->
</div>
<!-- End Containerbar -->
<!-- Start js -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/modernizr.min.js"></script>
<script src="assets/js/detect.js"></script>
<script src="assets/js/jquery.slimscroll.js"></script>
<!-- End js -->
</body>
</html>




