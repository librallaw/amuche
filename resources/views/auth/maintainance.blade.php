<?php
/**
 * Created by PhpStorm.
 * User: imm
 * Date: 31/10/2019
 * Time: 15:23
 */
?>

@extends('auth.auth_layout')
@section('title','SLOGANI CONSULTS - Login')
@section('content')

    <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top text-white">
        <div class="container">
            <div class="navbar-wrapper">
                <a class="navbar-brand">SLOGANI CONSULTS</a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon icon-bar"></span>
                <span class="navbar-toggler-icon icon-bar"></span>
                <span class="navbar-toggler-icon icon-bar"></span>
            </button>

        </div>
    </nav>
    <!-- End Navbar -->
    <div class="wrapper wrapper-full-page">

        <div class="page-header login-page header-filter" filter-color="black"
             style="background-image: url('/img/login.jpg'); background-size: cover; background-position: top center;">
            <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
            <div class="container">
                @include("alert")
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
                        <div class="card">
                            <div class="card-body">

                                <h2>We are currently upgrading our platform to serve you better</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container">

                    <div class="copyright float-right">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                        Slogani Consults
                        <a>Developed by Slogani Software </a> Dept.
                    </div>
                </div>

            </footer>
        </div>

@endsection