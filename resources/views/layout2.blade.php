<?php
/**
 * Created by PhpStorm.
 * User: imm
 * Date: 28/10/2019
 * Time: 18:24
 */
?>




        <!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title> @yield('title', 'Verification')</title>
    <!--favicon-->
    <link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
    <!-- Vector CSS -->
    <link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!--plugins-->
    <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
    <!-- loader-->
    <link href="assets/css/pace.min.css" rel="stylesheet" />
    <script src="assets/js/pace.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&family=Roboto&display=swap" />
    <!-- Icons CSS -->
    <link rel="stylesheet" href="assets/css/icons.css" />
    <!-- App CSS -->
    <link rel="stylesheet" href="assets/css/app.css" />


</head>

<body class="bg-theme bg-theme1">
<!-- wrapper -->
<div class="wrapper">
    <!--sidebar-wrapper-->
    <div class="sidebar-wrapper" data-simplebar="true">
        <div class="sidebar-header">
            <div class="">
                <img src="assets/images/logo-icon.png" class="logo-icon-2" alt="" />
            </div>
            <div>
                <h4 class="logo-text">Verv</h4>
            </div>
            <a href="javascript:;" class="toggle-btn ml-auto"> <i class="bx bx-menu"></i>
            </a>
        </div>
        <!--navigation-->
        <ul class="metismenu" id="menu">
            <li class="{{(isset($active) ? ($active =="dashboard")? "mm-active" : "": "")}}">
                <a href="/">
                    <div class="parent-icon"><i class="bx bx-home-alt"></i>
                    </div>
                    <div class="menu-title">Dashboard</div>
                </a>
            </li>

            <li class="menu-label">Verification</li>

            @if(Session::get('user')[0]["level"] == 2 || Session::get('user')[0]["level"] == 3)

            <li class="{{(isset($active) ? ($active =="verify")? "active" : "": "")}}">
                <a href="{{route("loadVerification2")}}">
                    <div class="parent-icon"><i class="bx bx-envelope"></i>
                    </div>
                    <div class="menu-title">Verification</div>
                </a>
            </li>
            <li class="{{(isset($active) ? ($active =="logs")? "active" : "": "")}}">
                <a href="{{route("showLog")}}">
                    <div class="parent-icon"> <i class="bx bx-conversation"></i>
                    </div>
                    <div class="menu-title">Verification Logs </div>
                </a>
            </li>

            @endif



            @if(Session::get('user')[0]["level"] == 1 || Session::get('user')[0]["level"] == 2)

            <li class="menu-label">Organisation</li>
                <li class="{{(isset($active) ? ($active =="co")? "active" : "": "")}}">
                    <a href="{{route("showCreateOrganisation")}}">
                        <div class="parent-icon"><i class="bx bx-user-plus"></i>
                        </div>
                        <div class="menu-title"> Create Organisation</div>
                    </a>
                </li>

            <li class="{{(isset($active) ? ($active =="alo")? "active" : "": "")}}">
                <a href="{{route("showAllOrganisations")}}">
                    <div class="parent-icon"><i class="bx bxs-user-badge"></i>
                    </div>
                    <div class="menu-title">All Organisations</div>
                </a>
            </li>

            <li class="{{(isset($active) ? ($active =="aco")? "active" : "": "")}}">
                <a href="{{route("showActiveOrganisations")}}">
                    <div class="parent-icon"><i class="bx bx-user-check"></i>
                    </div>
                    <div class="menu-title">Active Organisations</div>
                </a>
            </li>
            <li class="{{(isset($active) ? ($active =="iao")? "active" : "": "")}}">
                <a href="{{route("showInactiveOrganisations")}}">
                    <div class="parent-icon"><i class="bx bx-user-minus"></i>
                    </div>
                    <div class="menu-title">Inactive Organisations</div>
                </a>
            </li>

            @endif


            <li class="menu-label">Auth</li>



            <li>
                <a href="/logout" target="_blank">
                    <div class="parent-icon"><i class="bx bx-lock"></i>
                    </div>
                    <div class="menu-title">Logout</div>
                </a>
            </li>

        </ul>
        <!--end navigation-->
    </div>
    <!--end sidebar-wrapper-->
    <!--header-->
    <header class="top-header">
        <nav class="navbar navbar-expand">
            <div class="left-topbar d-flex align-items-center">
                <a href="javascript:;" class="toggle-btn">	<i class="bx bx-menu"></i>
                </a>
            </div>
            <div class="flex-grow-1 search-bar"></div>
            <div class="right-topbar ml-auto">
                <ul class="navbar-nav">
                    <li class="nav-item search-btn-mobile">
                        <a class="nav-link position-relative" href="javascript:;">	<i class="bx bx-search vertical-align-middle"></i>
                        </a>
                    </li>

                    <li class="nav-item dropdown dropdown-user-profile">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-toggle="dropdown">
                            <div class="media user-box align-items-center">
                                <div class="media-body user-info">
                                    <p class="user-name mb-0">{{session()->get("user")[0]['name']}}</p>
                                    <p class="designattion mb-0">{{session()->get("user")[0]['orgid']}}</p>
                                </div>
                                <i class="bx bx-user-circle"></i>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">	<a class="dropdown-item" href="/"><i
                                        class="bx bx-user"></i><span>Dashboard</span></a>

                            <div class="dropdown-divider mb-0"></div>	<a class="dropdown-item" href="/logout"><i
                                        class="bx bx-power-off"></i><span>Logout</span></a>
                        </div>
                    </li>

                </ul>
            </div>
        </nav>
    </header>
    <!--end header-->
    <!--page-wrapper-->
    <div class="page-wrapper">
        <!--page-content-wrapper-->
        <div class="page-content-wrapper">
            <div class="page-content">
                @yield('content')
            </div>
        </div>
        <!--end page-content-wrapper-->
    </div>
    <!--end page-wrapper-->
    <!--start overlay-->
    <div class="overlay toggle-btn-mobile"></div>
    <!--end overlay-->
    <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
    <!--End Back To Top Button-->
    <!--footer -->
    <div class="footer">
        <p class="mb-0">verification &copy; {{date("Y")}}
        </p>
    </div>
    <!-- end footer -->
</div>
<!--start switcher-->

<!--end switcher-->
<!-- JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<!--plugins-->
<script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
<script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
<!-- Vector map JavaScript -->
<script src="assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
<script src="assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="assets/plugins/vectormap/jquery-jvectormap-in-mill.js"></script>
<script src="assets/plugins/vectormap/jquery-jvectormap-us-aea-en.js"></script>
<script src="assets/plugins/vectormap/jquery-jvectormap-uk-mill-en.js"></script>
<script src="assets/plugins/vectormap/jquery-jvectormap-au-mill.js"></script>
<script src="assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
<script src="assets/js/index2.js"></script>
<!-- App JS -->
<script src="assets/js/app.js"></script>
</body>

</html>



