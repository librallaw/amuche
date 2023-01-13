<?php
/**
 * Created by PhpStorm.
 * User: imm
 * Date: 29/10/2019
 * Time: 09:00
 */
?>
@extends('layout')
@section('title',' Compare two Service days')
@section('content')
    <div class="container-fluid">
        @include("alert")

        <div class="row">
            <div class="col-md-6">

                <div class="alert alert-info"> <h6 class="card-subtitle"> Note: You will be comparing <code>First service date</code> against <code>second service date</code> (Attendees with first service date will be compared against attendees on second service date</h6>

                </div>
            </div>
        </div>
        <div class="row">


            <div class="card">
                <div class="card-header card-header-rose card-header-icon">
                    <div class="card-icon">
                        <i class="material-icons">arrow_upward</i>
                    </div>
                    <h4 class="card-title">Compare two Service days </h4>
                </div>
                <div class="card-body">

                    <small></small>

                    <form action="{{route("doCompareServices")}}" method="post">
                        @csrf
                        <div class="row">

                            <div class="col-md-6">
                                <label class="m-t-20">Select First Service Date </label>
                                <input type="text" class="form-control mdate" name="service1" placeholder="" >

                            </div>
                            <div class="col-md-6">
                                <label class="m-t-20">Select Second service date</label>
                                <input type="text" class="form-control mdate" name="service2" placeholder="" >

                            </div>
                            <div class="col-md-6"> <br />
                                <button type="submit" class="btn btn-danger">Submit</button>
                            </div>



                        </div>
                    </form>
                </div>
            </div>



            <!-- end content-->
        </div>
        <!--  end card  -->




        <!-- end col-md-12 -->
    </div>
@endsection
