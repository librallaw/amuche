<?php
/**
 * Created by PhpStorm.
 * User: imm
 * Date: 29/10/2019
 * Time: 09:00
 */
?>
@extends('layout')
@section('title','Upload CAC')
@section('content')
@section('page','Upload CAC Documents')
<div class="container-fluid">
    @include("alert")


    <style>
        .progress {
            display: none;
            position: relative;
            margin: 20px;
            width: 400px;
            background-color: #ddd;
            border: 1px solid blue;
            padding: 1px;
            left: 15px;
            border-radius: 3px;
        }

        .progress-bar {
            background-color: green;
            width: 0%;
            height: 30px;
            border-radius: 4px;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
        }

        .percent {
            position: absolute;
            display: inline-block;
            color: #fff;
            font-weight: bold;
            top: 50%;
            left: 50%;
            margin-top: -9px;
            margin-left: -20px;
            -webkit-border-radius: 4px;
        }
    </style>
    <div class="row">
        <div class="col-md-8">
            <div class="card ">
                <div class="card-header card-header-rose card-header-icon">
                    <div class="card-icon">
                        <i class="bx bx-user-plus" style="font-size: 35px"></i>
                    </div>
                    <h4 class="card-title">CAC Document Image</h4>
                </div>
                <div class="card-body ">

                <div class="form-container">
                    <form action="{{route("doStoreCac")}}" id="uploadForm" name="frmupload"
                          method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="file" id="uploadImage" name="uploadImage"  class="form-control"/>


                        </div>

                        <input
                                id="submitButton" type="submit" name='btnSubmit'
                                value="Submit Image" class="btn btn-fill btn-success" />

                    </form>

                    <div class='progress' id="progressDivId">
                        <div class='progress-bar' id='progressBar'></div>
                        <div class='percent' id='percent' style="padding:10px">0%</div>
                    </div>
                    <div style="height: 20px;"></div>
                    <div id='outputImage'>


                        @if(!empty($cac))
                            @if(!empty($cac->image))
                                <img src="{{$cac->image}}" style="width:400px"/>
                            @endif
                        @endif
                    </div>
                </div>

            </div>
            </div>


                <div class="card ">
                <div class="card-header card-header-rose card-header-icon">
                    <div class="card-icon">
                        <i class="bx bx-user-plus" style="font-size: 35px"></i>
                    </div>
                    <h4 class="card-title">Enter Director Details <small>(Compulsory)</small></h4>
                </div>
                <div class="card-body ">
                    <form method="post" action="{{route("doStoreDirector")}}">
                        @csrf

                        <div class="row">

                        <div class="col-md-4">
                            <div class=" bmd-form-group">
                                <label for="exampleEmail" class="bmd-label-floating">Full Name</label>
                                <input type="text" name="full_name" class="form-control" value="  @if(!empty($cac)) @if(!empty($cac->director)){{json_decode($cac->director)->full_name}}@endif
                                @endif"  required>

                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class=" bmd-form-group ">
                                <label for="exampleEmail" class="bmd-label-floating">Email</label>
                                <input type="email" name="email" class="form-control" value=" @if(!empty($cac)) @if(!empty($cac->director)){{json_decode($cac->director)->email}}@endif
                                @endif" required>

                            </div>
                        </div>

                            <div class="col-md-4">

                            <div class="form-group bmd-form-group">
                                <label for="exampleEmail" class="bmd-label-floating">NIN</label>
                                <input type="text" name="nin" class="form-control"  required value="@if(!empty($cac)) @if(!empty($cac->director)){{json_decode($cac->director)->nin}}@endif
                                @endif">

                            </div>

                            </div>

                        </div>


                        <div class="card-footer ">
                            <button type="submit" class="btn btn-fill btn-success">
                                @if(!empty($cac))
                                    @if(!empty($cac->director))
                                        Update
                                    @else
                                        Submit
                                    @endif
                                @else
                                    Submit
                                @endif
                            </button>
                        </div>
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
