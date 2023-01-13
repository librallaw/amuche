
@extends('auth.auth_layout')
@section('title','CAS - Change Password')
@section('content')

  <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top text-white">
    <div class="container">
      <div class="navbar-wrapper">
        <a class="navbar-brand">Change Password </a>
      </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
        <span class="sr-only">Toggle navigation</span>
        <span class="navbar-toggler-icon icon-bar"></span>
        <span class="navbar-toggler-icon icon-bar"></span>
        <span class="navbar-toggler-icon icon-bar"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end">
        <ul class="navbar-nav">

        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="wrapper wrapper-full-page" style="background-color: #0a0c0d;">

      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-4 offset-4" >
              <div class="card">
                <div class="card">
                  {{--<div class="card-header">{{ __('Verify Your Email Address') }}</div>--}}

                  {{--<div class="card-body">--}}
                    {{--@if (session('resent'))--}}
                      {{--<div class="alert alert-success" role="alert">--}}
                        {{--{{ __('A fresh verification link has been sent to your email address.') }}--}}
                      {{--</div>--}}
                    {{--@endif--}}

                    {{--{{ __('Before proceeding, please check your email for a verification link.') }}--}}
                    {{--{{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.--}}
                  {{--</div>--}}


                <div class="card-header card-header-icon card-header-rose">
                  <div class="card-icon">
                    <i class="material-icons">email</i>
                  </div>
                  <h4 class="card-title">Email Reset Password
                    <small class="category"></small>
                  </h4>
                </div>
                <div class="card-body">
                  <form action="post"  method="" enctype="">
                    @csrf
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Email</label>
                          <input type="email" name="email" class="form-control">
                        </div>
                      </div>

                    <button type="submit" class="btn btn-rose pull-right"> send email for comformation </button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
           
          </div>
        </div>
      </div>

      @endsection
