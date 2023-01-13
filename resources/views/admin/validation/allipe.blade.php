<?php
/**
 * Created by PhpStorm.
 * User: imm
 * Date: 29/10/2019
 * Time: 08:25
 */
?>
@extends('layout')
@section('title','IPE Submissions')
@section('page',"ddd")
@section('content')
    <div method="post" action="">
        <div class="container-fluid">
            <div class="row">
                @include("alert")
                <div class="col-md-12">


                    <br />


                    <a href="{{route('exportToExcel')}}"><button class="btn btn-dribbble">Export to Excel</button></a>

                    <br />
                    <div class="card">
                        <div class="card-header card-header-rose card-header-icon">
                            <div class="card-icon">

                            </div>
                            <h4 class="card-title">IPES</h4>
                        </div>
                        <div class="card-body">
                            <div class="toolbar">
                                <!--        Here you can write extra buttons/actions for the toolbar              -->
                            </div>



                            <nav aria-label="Page navigation example">
                                {{$ipes->links()}}

                            </nav>



                            <div class="material-datatables table-responsive">
                                @if(count($ipes) > 0)
                                <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Org</th>
                                        <th>Tracking ID</th>
                                        <th>Corrected</th>
                                        <th>Status</th>
                                        <th>Date Created</th>



                                    </tr>
                                    </thead>
                                    <tbody>


                                            @php $x = 1 @endphp
                                        @foreach($ipes as $ipe)

                                            <tr>
                                                <td>{{$x++}}</td>
                                                <td>{{$ipe->user->name}}</td>
                                                <td>{{$ipe->ipe}}</td>
                                                <td>{{$ipe->corrected}}</td>
                                                <td>
                                                    @if($ipe->status == 9 )<p class=" alert-warning" style="color:white;padding:10px">pending</p> @endif
                                                    @if($ipe->status == 0 )<p class="alert alert-danger" style="color:white">Failed </p>@endif
                                                        @if($ipe->status == 1 )<p class="alert alert-success" style="color:white">Completed </p>@endif
                                                </td>
                                                <td>{{$ipe->created_at}}</td>
                                            </tr>
                                        @endforeach

                            </div>
                            </tbody>
                        </table>





                            {{$ipes->links()}}

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
