<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>NIN V - Home</title>
    <!-- Fevicon -->
    <link rel="shortcut icon" href="/assets/images/favicon.ico">
    <!-- Start css -->
    <!-- Switchery css -->
    <link href="/assets/plugins/switchery/switchery.min.css" rel="stylesheet">
    <!-- apex css -->
    <link href="/assets/plugins/apexcharts/apexcharts.css" rel="stylesheet">
    <!-- jvectormap css -->
    <link href="/assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet">
    <!-- Slick css -->
    <link href="/assets/plugins/slick/slick.css" rel="stylesheet">
    <link href="/assets/plugins/slick/slick-theme.css" rel="stylesheet">
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/flag-icon.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/style.css" rel="stylesheet" type="text/css">

    <!-- End css -->
</head>
<body class="vertical-layout">
<!-- Start Infobar Setting Sidebar -->
<div class="infobar-settings-sidebar-overlay"></div>
<!-- End Infobar Setting Sidebar -->
<!-- Start Containerbar -->
<div id="containerbar">
    <!-- Start Leftbar -->
    <div class="leftbar">
        <!-- Start Sidebar -->
        <div class="sidebar">
            <!-- Start Logobar -->
            <div class="logobar">
                <a href="#" class="logo logo-large"><img src="/assets/images/logo.svg" class="img-fluid" alt="logo"></a>
                <a href="#" class="logo logo-small"><img src="/assets/images/small_logo.svg" class="img-fluid" alt="logo"></a>
            </div>
            <!-- End Logobar -->
            <!-- Start Navigationbar -->
            <div class="navigationbar">
                <ul class="vertical-menu">

                    <li class=""  style="padding-left: 30px;">
                        <h6 class="ps-4  ms-2 text-uppercasde text-xs font-weight-bolder text-">Home</h6>
                    </li>

                    <li>
                        <a href="/dashboard">
                            <i class="fa fa-dashboard fa-3x"></i><span>Dashboard</span>
                        </a>
                    </li>

                    @if(Auth::user()->level == 2)

                        <li class=""><a href="{{route("loadPaymentScreen")}}"><i class="fa fa-money fa-3x"></i><span class="" data-i18n="Contacts">Buy Credits</span></a>
                        </li>

                    @endif






                    @if(Auth::user()->level == 2 || Auth::user()->level == 3)


                        <li class=""  style="padding-left: 30px;">
                            <h6 class="ps-4  ms-2 text-uppercasde text-xs font-weight-bolder text-">Verification</h6>
                        </li>


                        <li class="{{(isset($active) ? ($active =="verify")? "active" : "": "")}}">
                            <a class="" href="{{route("loadVerification")}}">
                                <i class="fa fa-star"></i>
                                <span class=""> Verification </span>
                            </a>
                        </li>

                        <li class="nav-item {{(isset($active) ? ($active =="logs")? "active" : "": "")}}">
                            <a class="" href="#">
                                <i class="material-icons">folder</i>
                                <span class="-text ms-2 ps-1"> Verification Logs </span>
                            </a>
                        </li>
                    @endif









                    @if(Auth::user()->level == 1 || Auth::user()->level == 2)

                        <br />

                        <li class=""  style="padding-left: 30px;">
                            <h6 class="ps-4  ms-2 text-uppercasde text-xs font-weight-bolder text-">Organisation</h6>
                        </li>




                        <li class="nav-item {{(isset($active) ? ($active =="co")? "active" : "": "")}}">
                            <a class="" href="{{route("showCreateOrganisation")}}">
                                <i class="fa fa-pencil"></i>
                                <span class="-text ms-2 ps-1"> Create  Organisation</span>
                            </a>
                        </li>


                        <li class="nav-item {{(isset($active) ? ($active =="alo")? "active" : "": "")}}">
                            <a class="" href="{{route("showAllOrganisations")}}">
                                <i class="fa fa-users"></i>
                                <span class="-text ms-2 ps-1"> All  </span>
                            </a>
                        </li>


                        <li class="nav-item {{(isset($active) ? ($active =="aco")? "active" : "": "")}}">
                            <a class="" href="{{route("showActiveOrganisations")}}">
                                <i class="fa fa-user-circle "></i>
                                <span class="-text ms-2 ps-1"> Active  </span>
                            </a>
                        </li>



                        <li class="nav-item {{(isset($active) ? ($active =="iao")? "active" : "": "")}}">
                            <a class="" href="{{route("showInactiveOrganisations")}}">
                                <i class="fa fa-user-circle-o"></i>
                                <span class="-text ms-2 ps-1"> Inactive  </span>
                            </a>
                        </li>
                    <br />


                        <li class=""  style="padding-left: 30px;">
                            <h6 class="ps-4  ms-2 text-uppercasde text-xs font-weight-bolder text-">Auth</h6>
                        </li>



                        <li class="nav-item {{(isset($active) ? ($active =="cp")? "active" : "": "")}}">
                            <a class="" href="{{route("changePassword")}}">
                                <i class="fa fa-cog"></i>
                                <span class="-text ms-2 ps-1"> Settings </span>
                            </a>
                        </li>
                    @endif


























                </ul>
            </div>
            <!-- End Navigationbar -->
        </div>
        <!-- End Sidebar -->
    </div>
    <!-- End Leftbar -->
    <!-- Start Rightbar -->
    <div class="rightbar">
        <!-- Start Topbar Mobile -->
        <div class="topbar-mobile">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="mobile-logobar">
                        <a href="index.html" class="mobile-logo"><img src="/assets/images/logo.svg" class="img-fluid" alt="logo"></a>
                    </div>
                    <div class="mobile-togglebar">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <div class="topbar-toggle-icon">
                                    <a class="topbar-toggle-hamburger" href="javascript:void();">
                                        <img src="/assets/images/svg-icon/horizontal.svg" class="img-fluid menu-hamburger-horizontal" alt="horizontal">
                                        <img src="/assets/images/svg-icon/verticle.svg" class="img-fluid menu-hamburger-vertical" alt="verticle">
                                    </a>
                                </div>
                            </li>
                            <li class="list-inline-item">
                                <div class="menubar">
                                    <a class="menu-hamburger" href="javascript:void();">
                                        <img src="/assets/images/svg-icon/collapse.svg" class="img-fluid menu-hamburger-collapse" alt="collapse">
                                        <img src="/assets/images/svg-icon/close.svg" class="img-fluid menu-hamburger-close" alt="close">
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Topbar -->
        <div class="topbar">
            <!-- Start row -->
            <div class="row align-items-center">
                <!-- Start col -->
                <div class="col-md-12 align-self-center">
                    <div class="togglebar">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <div class="menubar">
                                    <a class="menu-hamburger" href="javascript:void();">
                                        <img src="/assets/images/svg-icon/collapse.svg" class="img-fluid menu-hamburger-collapse" alt="collapse">
                                        <img src="/assets/images/svg-icon/close.svg" class="img-fluid menu-hamburger-close" alt="close">
                                    </a>
                                </div>
                            </li>
                            <li class="list-inline-item">
                                <div class="searchbar">
                                    <form>
                                        <div class="input-group">
                                            <input type="search" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
                                            <div class="input-group-append">
                                                <button class="btn" type="submit" id="button-addon2"><img src="/assets/images/svg-icon/search.svg" class="img-fluid" alt="search"></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="infobar">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item"></li>
                            <li class="list-inline-item"></li>
                            <li class="list-inline-item"></li>
                            <li class="list-inline-item">
                                <div class="profilebar">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" href="dashboard-crypto.html#" role="button" id="profilelink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="/assets/images/users/profile.svg" class="img-fluid" alt="profile"><span class="feather icon-chevron-down live-icon"></span></a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="profilelink">
                                            <div class="dropdown-item">
                                                <div class="profilename">
                                                    <h5>John Doe</h5>
                                                </div>
                                            </div>
                                            <div class="userbox">
                                                <ul class="list-unstyled mb-0">
                                                    <li class="media dropdown-item">
                                                        <a href="dashboard-crypto.html#" class="profile-icon"><img src="/assets/images/svg-icon/user.svg" class="img-fluid" alt="user">My Profile</a>
                                                    </li>

                                                    <li class="media dropdown-item">
                                                        <a href="dashboard-crypto.html#" class="profile-icon"><img src="/assets/images/svg-icon/logout.svg" class="img-fluid" alt="logout">Logout</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- End col -->
            </div>
            <!-- End row -->
        </div>
        <!-- End Topbar -->
        <!-- Start Breadcrumbbar -->
        <div class="breadcrumbbar">
            <div class="row align-items-center">
                <div class="col-md-8 col-lg-8">
                    <h4 class="page-title">@yield("title")</h4>
                    <div class="breadcrumb-list">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Welcome {{Auth::user()->name}}</a></li>

                        </ol>
                    </div>
                </div>

                @yield("top_button")

            </div>
        </div>
        <!-- End Breadcrumbbar -->
        <!-- Start Contentbar -->
        @yield("content")
        <!-- End Contentbar -->
        <!-- Start Footerbar -->
        <div class="footerbar">
            <footer class="footer">
                <p class="mb-0">© 2023 NINV - All Rights Reserved.</p>
            </footer>
        </div>
        <!-- End Footerbar -->
    </div>
    <!-- End Rightbar -->
</div>
<!-- End Containerbar -->
<!-- Start js -->
<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/popper.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/modernizr.min.js"></script>
<script src="/assets/js/detect.js"></script>
<script src="/assets/js/jquery.slimscroll.js"></script>
<script src="/assets/js/vertical-menu.js"></script>
<!-- Switchery js -->
<script src="/assets/plugins/switchery/switchery.min.js"></script>
<!-- Apex js -->
<script src="/assets/plugins/apexcharts/apexcharts.min.js"></script>
<script src="/assets/plugins/apexcharts/irregular-data-series.js"></script>
<!-- Vector Maps js -->
<script src="/assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
<script src="/assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- Slick js -->
<script src="/assets/plugins/slick/slick.min.js"></script>
<!-- Dashboard js -->
<script src="/assets/js/custom/custom-dashboard-crypto.js"></script>
<!-- Core js -->
<script src="/assets/js/core.js"></script>
<!-- End js -->
</body>
</html>