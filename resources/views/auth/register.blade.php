<?php
/**
 * Created by PhpStorm.
 * User: imm
 * Date: 31/10/2019
 * Time: 15:23
 */
?>

@extends('auth.auth_layout')
@section('title','Checknin - Register')
@section('content')

    <!-- End Navbar -->



        <!-- wrapper -->
        <div class="wrapper">
            <div class="section-authentication-login d-flex align-items-center justify-content-center">
                <div class="row">
                    <div class="col-12 col-lg-10 mx-auto">
                        <div class="card radius-15">
                            <div class="row no-gutters">
                                <div class="col-lg-6">
                                    <div class="card-body p-md-5">
                                        <div class="text-center">
                                            <img src="assets/images/logo-icon.png" width="80" alt="">
                                            <h3 class="mt-4 font-weight-bold">Create New Account</h3>

                                            <div class="alert alert-warning"><strong>NOTE:</strong>  Only CAC registered companies can subscribe to the service. And only the directors names as listed in the CAC document can act as the company representative</div>
                                        </div>

                                        @include("alert")

                                                <form method="post" action="">

                                                    @csrf

                                                    <div class="form-group mt-4">
                                                        <label>Name</label>
                                                        <input type="text" class="form-control" name="name" value="{{old('name')}}" required placeholder="Enter your Organisation Name" />
                                                    </div>

                                                    <div class="form-group mt-4">
                                                        <label>Email</label>
                                                        <input type="text" class="form-control" name="email"  {{old('email')}}required placeholder="Email Address" required />
                                                    </div>

                                                    <div class="form-group mt-4">
                                                        <label>Business/Company</label>
                                                        <input type="text" class="form-control" name="username" {{old('username')}} required placeholder="Enter your  Business/Company"/>
                                                    </div>

                                                    <div class="form-group mt-4">
                                                        <label>Phone</label>
                                                        <input type="text" class="form-control" name="phone" {{old('phone')}} required placeholder="Enter your phone number"/>
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Password</label>
                                                        <input type="password" class="form-control" name="password" required placeholder="Enter your password"  />
                                                    </div>

                                                        <div class="form-group">
                                                            <label>Confirm Password</label>
                                                            <input type="password" class="form-control" name="confirm_password" required placeholder="Confirm your password" />
                                                        </div>

                                                    <div class="btn-group mt-3 w-100">

                                                        <button type="submit"  class="btn btn-light btn-block">Register</button>
                                                        <button type="submit" class="btn btn-light"><i class="lni lni-arrow-right"></i>
                                                        </button>

                                                    </div>

                                                </form>



                                        <br />
                                        <br />
                                        Already have an account?<a href="/login"> Login</a>

                                    </div>

                                </div>
                                <div class="col-lg-6">

                                    <img src="assets/images/login-images/login-frent-img.jpg" class="card-img login-img h-100" alt="...">
                                </div>
                            </div>
                            <!--end row-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end wrapper -->


@endsection
