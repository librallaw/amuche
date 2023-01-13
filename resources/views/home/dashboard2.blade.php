
<?php
/**
 * Created by PhpStorm.
 * User: imm
 * Date: 28/10/2019
 * Time: 18:45
 */
?>

@extends('layout')
@section('title','Dashboard')
@section('content')
@section('page','Dashboard')




<div class="row">
    @include("alert")


</div>

<!--end row-->
@if(Auth::user()->level == 3)
    <div class="container-fluid py-4">


        <div class="row mt-4">
            <div class="col-md-3 col-sm-6 col-6 mt-4 mt-md-0">
                <div class="card">
                    <div class="card-body text-center">
                        <h1 class="text-gradient text-primary"><span id="status4" countto="{{$balance}}">{{$balance}}</span> </h1>
                        <h6 class="mb-0 font-weight-bolder">Balance</h6>

                    </div>
                </div>
            </div>
        </div>
    @endif


<!--end row-->

<!--end row-->
@if(Auth::user()->level == 2)
    <div class="container-fluid py-4">


        <div class="row mt-4">
            <div class="col-md-3 col-sm-6 col-6 mt-4 mt-md-0">
                <div class="card">
                    <div class="card-body text-center">
                        <h1 class="text-gradient text-primary"><span id="status4" countto="{{$balance}}">{{$balance}}</span> </h1>
                        <h6 class="mb-0 font-weight-bolder">Balance</h6>

                    </div>
                </div>
            </div>

            @if(Auth::user()->level == 2)
                <div class="col-md-3 col-sm-6 col-6">
                    <div class="card">
                        <div class="card-body text-center">
                            <h1 class="text-gradient text-primary"><span id="status1" countto="{{$total}}">{{$total}}</span> </h1>
                            <h6 class="mb-0 font-weight-bolder">Total Organisations</h6>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-6">
                    <div class="card">
                        <div class="card-body text-center">
                            <h1 class="text-gradient text-primary"> <span id="status2" countto="{{$active}}">{{$active}}</span> </h1>
                            <h6 class="mb-0 font-weight-bolder">Active</h6>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-6 mt-4 mt-md-0">
                    <div class="card">
                        <div class="card-body text-center">
                            <h1 class="text-gradient text-primary"><span id="status3" countto="{{$inactive}}">{{$inactive}}</span> </h1>
                            <h6 class="mb-0 font-weight-bolder">InActive</h6>

                        </div>
                    </div>
                </div>
            @endif
        </div>




    <div class="row">
    <div class="col-md-12">




        @if(count($organisation) > 0)

<div class="card radius-15" style="margin-top:15px">
    <div class="card-header border-bottom-0">
        <div class="d-flex align-items-center">
            <div>
                <h5 class="mb-0">Recently Created Organisation</h5>
            </div>

        </div>
    </div>
    <div class="card-body p-0">

        <div class="table-responsive">
            <table class="table mb-0">
                <thead class=" text-primary">
                <tr>
                    <th>
                        S/N
                    </th><th>
                        ORG ID
                    </th>
                    <th>
                        Name
                    </th>
                    <th>
                        Username
                    </th>
                    <th>
                        Email
                    </th>
                    <th>
                        Phone
                    </th>
                    <th>
                        Password
                    </th>
                    <th>
                        Date Added
                    </th>
                    <th>
                        Actions
                    </th>

                </tr>
                </thead>
                <tbody>
                <?php $x =1; ?>

                @foreach($organisation as $member)
                    <tr>
                        <td>
                            {{$x++}}
                        </td>
                        <td>
                            {{$member->unique_id}}
                        </td>
                        <td>
                            {{$member->name}}
                        </td>
                        <td>
                            {{$member->username}}
                        </td>

                        <td>
                            {{$member->email}}
                        </td>

                        <td>
                            {{$member->phone}}
                        </td>
                        <td>
                            {{$member->plain}}
                        </td>
                        <td>
                            {{$member->created_at}}
                        </td>
                        <td class="td-actions text-right">
                            <a href="{{route("showOrganisationProfile",['orgid'=>$member->unique_id])}}" ><button
                                        type="button"
                                        rel="tooltip" class="btn
                                               btn-info"
                                        data-original-title="" title="">
                                    <i class="fa fa-eye"></i>
                                    <div class="ripple-container">View</div></button></a>


                        </td>
                    </tr>
                @endforeach



                </tbody>
            </table>
        </div>


    </div>

    @endif
</div>

        <hr class="horizontal dark my-5">
        <div class="row">

            <div class="col-lg-3 col-sm-6 mt-lg-0 mt-4">
                <div class="card h-100">
                    <div class="card-body d-flex flex-column justify-content-center text-center">
                        <a href="{{route('showCreateOrganisation')}}">
                            <i class="fa fa-plus text-secondary mb-3" aria-hidden="true"></i>
                            <h5 class="text-secondary"> New Organisation </h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

@endif


<div class="content"></div>




@endsection