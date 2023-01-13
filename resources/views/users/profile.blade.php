<?php
/**
 * Created by PhpStorm.
 * User: imm
 * Date: 29/10/2019
 * Time: 09:00
 */
?>
@extends('layout')
@section('title','Profile Page')
@section('content')
    <div class="container-fluid">
        @include("alert")

        <div class="row">
            <div class="col-md-6 offset-3">

                <div class="alert alert-info"> <h6 class="card-subtitle" align="center"> Track records for the past 15 services</h6>

                </div>
            </div>
        </div>
        <div class="row">
            <!-- Column -->
            @include("alert")
            <div class="col-lg-4 col-xlg-3 col-md-5">
                <div class="card">
                    <div class="card-body">
                        <center class="m-t-30">
                            <h4 class="card-title m-t-10">{{$user->full_name}}</h4>
                            <h6 class="card-subtitle">{{$user->group_assigned}}</h6>

                        </center>
                    </div>
                    <div>
                        <hr> </div>
                    <div class="card-body"> <small class="text-muted">Email address </small>
                        <h6>{{$user->email}}</h6> <small class="text-muted p-t-30 db">Phone</small>
                        <h6>{{$user->phone_number}}</h6> <small class="text-muted p-t-30 db">Address</small>
                        <h6>{{$user->home_address}}</h6>

                        <br/>

                    </div>
                </div>

                <div class="">
                    <a href="{{'/member/editProfile/'.$user->id}}">EDIT PROFILE</a>

                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-lg-8 col-xlg-9 col-md-7">


                <div class="card">
                    <!-- Nav tabs -->

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <!--second tab-->

                        <div class="tab-pane active" id="settings" role="tabpanel">
                            <div class="card-body">
                                <div class="row">



                                    @if($track->status)

                                    @if(count($track->data->tracks) > 0)


                                        @foreach($track->data->tracks as $tracker)




                                            <div class="col-xs-2" style="padding:5px;">
                                                <div style="background:{{$tracker->background}};color:white;" class="alert alert-{{$tracker->type}}">{{$tracker->service_date}}</div>
                                            </div>



                                        @endforeach



                                    @else
                                        <div>
                                            No track found for this user
                                        </div>
                                    @endif
                                </div>


                            </div>

                            <div class="card-body">
                                <div class="row">





                                    @if(count($track->data->tracks) > 0)



                                        <div class="col-md-4 " >

                                            <div class="alert alert-info" style="padding:10px;">
                                            Total number of Service  = {{count($track->data->tracks)}}

                                            </div>
                                        </div>
                                        <div class="col-md-4">


                                            <div class="alert alert-success" style="padding:10px;">
                                            Total number of present  = {{$track->data->present}}
                                        </div>

                                        </div>
                                        <div class="col-md-4">

                                            <div class="alert alert-danger" style="padding:10px;">

                                            Total number of absent  = {{$track->data->absent}}

                                        </div>
                                        </div>

                                    @else
                                        <div class="alert-danger alert">
                                            No track found for this user
                                        </div>
                                    @endif


                                </div>
                                @else
                                    <div class="alert alert-danger">
                                        No track found for this user
                                    </div>
                                @endif

                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <!-- Column -->
        </div>
        <!--  end card  -->




        <!-- end col-md-12 -->
    </div>
@endsection
