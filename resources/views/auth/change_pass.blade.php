<?php
/**
 * Created by PhpStorm.
 * User: imm
 * Date: 29/10/2019
 * Time: 09:00
 */
?>
@extends('layout')
@section('title','Settings')
@section('content')
@section('page','Verification Module')
<div class="contentbar">

  @include("alert")

  <div class="row">


    <div class="col-md-4">



      <div class="card ">
        <div class="card-header card-header-rose card-header-icon">
          <div class="card-icon">
            <i class="fa fa-user"></i>
          </div>
          <h4 class="card-title">Update Profile</h4>
        </div>
        <div class="card-body ">
          <form action="{{route("updateProfile")}}"  method="post">
            @csrf
            <div class="row">

            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="input-group input-group-dynamic my-3">
                  <label class="form-label">Name</label>
                  <input type="text" name="name" value="{{Auth::user()->name}}" class="form-control" required>
                </div>
              </div>
              <div class="col-md-12">
                <div class="input-group input-group-dynamic my-3">
                  <label class="form-label">Email</label>
                  <input type="text" name="email" value="{{Auth::user()->email}}" class="form-control" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="input-group input-group-dynamic my-3">
                  <label class="form-label">Phone </label>
                  <input type="text" name="phone" value="{{Auth::user()->phone}}" class="form-control" required>
                </div>
              </div>

            </div>

            <button type="submit" class="btn btn-danger pull-right">Update Profile</button>
            <div class="clearfix"></div>
          </form>
        </div>

      </div>
      </form>
    </div>

    <div class="col-md-4">



      <div class="card ">
        <div class="card-header card-header-rose card-header-icon">
          <div class="card-icon">
            <i class="fa fa-lock"></i>
          </div>
          <h4 class="card-title">Update Password</h4>
        </div>
        <div class="card-body ">
          <form action=""  method="post">
            @csrf
            <div class="row">

            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="input-group input-group-dynamic my-3">
                  <label class="form-label">Old Password</label>
                  <input type="password" name="old_password" class="form-control">
                </div>
              </div>
              <div class="col-md-12">
                <div class="input-group input-group-dynamic my-3">
                  <label class="form-label">New Password</label>
                  <input type="password" name="new_password" class="form-control">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="input-group input-group-dynamic my-3">
                  <label class="form-label">Confirm Password</label>
                  <input type="password" name="confirm_password" class="form-control">
                </div>
              </div>

            </div>

            <button type="submit" class="btn btn-danger pull-right">Update Password</button>
            <div class="clearfix"></div>
          </form>
        </div>

      </div>
      </form>
    </div>












    <!-- end content-->
  </div>


  <!--  end card  -->




  <!-- end col-md-12 -->
</div>
@endsection







