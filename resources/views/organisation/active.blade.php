<?php
/**
 * Created by PhpStorm.
 * User: imm
 * Date: 29/10/2019
 * Time: 08:25
 */
?>
@extends('layout')
@section('title',$page)
@section('page',$page)
@section('content')
    <div method="post" action="">
        <div class="contentbar">
            <div class="row">
                @include("alert")
                <div class="col-md-12">


                    <br />
                    <br />
                    <div class="card">
                        <div class="card-header card-header-rose card-header-icon">
                            <div class="card-icon">

                            </div>
                        </div>
                        <div class="card-body">
                            <div class="toolbar">
                                <!--        Here you can write extra buttons/actions for the toolbar              -->
                            </div>



                            <nav aria-label="Page navigation example">
                                {{$organisations->links()}}

                            </nav>





                            @if(count($organisations) > 0)
                            <div class="col-md-3">
                                <input type="search" id="search" class="form-control" placeholder="search" style="border: 1px solid #ccc;">
                            </div>

                            <br />
                            @endif


                            <div id="search_result2" style="display:none;">
                                <table id="" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Org Id</th>
                                        <th>Name</th>
                                        <th>Username</th>
                                        <th>email</th>
                                        <th>password</th>
                                        <th>Balance</th>
                                        <th>Date Created</th>
                                        <th>Action</th>

                                    </tr>
                                    </thead>
                                    <tbody id="search_result_body">

                                    <div align="center" id="spin_spin">
                                        <i class="text-danger fa fa-spin fa-spinner"></i>

                                    </div>

                                    </tbody>


                                </table>
                            </div>




                            <div class="material-datatables table-responsive">
                                @if(count($organisations) > 0)
                                <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Org Id</th>
                                        <th>Name</th>
                                        <th>Username</th>
                                        <th>email</th>
                                        <th>phone</th>
                                        <th>password</th>
                                        <th>Balance</th>
                                        <th>Date Created</th>
                                        <th>Action</th>

                                    </tr>
                                    </thead>
                                    <tbody>




                                            @php $x = 1 @endphp
                                        @foreach($organisations as $organisation)

                                            <tr>
                                                <td>{{$x++}}</td>
                                                <td>{{$organisation->unique_id}}</td>
                                                <td>{{$organisation->name}}</td>
                                                <td>{{$organisation->username}}</td>
                                                <td>{{$organisation->email}}</td>
                                                <td>{{$organisation->phone}}</td>
                                                <td>{{$organisation->plain}}</td>

                                                <td>
                                                    <strong class="">{{$organisation->balance}}</strong>
                                                </td>
                                                <td>{{$organisation->created_at}}</td>
                                                <td class="td-actions text-right">
                                                    <a href="{{route("showOrganisationProfile",['orgid'=>$organisation->unique_id])}}" ><button
                                                                type="button"
                                                                rel="tooltip" class="btn
                                               btn-info"
                                                                data-original-title="" title="">
                                                            <i class="fa fa-eye"></i>
                                                            <div class="ripple-container">view</div></button></a>


                                                </td>
                                            </tr>
                                        @endforeach

                            </div>
                            </tbody>
                        </table>





                            {{$organisations->links()}}

                            @else
                                <div class="pt-3 pr-3 pl-3">
                                    <div class="alert alert-danger col-12 text-center" role="alert">
                                        No data found
                                    </div>
                                </div>
                            @endif
                    </div>
                </div>
                <!-- end content-->
            </div>
            <!--  end card  -->
        </div>
        <!-- end col-md-12 -->
    </div>
    <!-- end row -->
</div>



@endsection
