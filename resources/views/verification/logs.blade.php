<?php
/**
 * Created by PhpStorm.
 * User: imm
 * Date: 29/10/2019
 * Time: 08:25
 */
?>
@extends('layout')
@section('title','Verification Logs')
@section('page',"logs")
@section('content')
    <div method="post" action="">
        <div class="container-fluid">
            <div class="row">
                @include("alert")
                <div class="col-md-12">


                    <div class="card">
                        <div class="card-header card-header-rose card-header-icon">
                            <div class="card-icon">
                                <i class="bx bx-history" style="font-size: 23px"></i>
                            </div>
                            <h4 class="card-title">NIN Verification Logs</h4>
                        </div>
                        <div class="card-body">
                            <div class="toolbar">
                                <!--        Here you can write extra buttons/actions for the toolbar              -->
                            </div>
                            <?php
                                if($current_page > 1){
                                    $start = ($current_page *  $per_page) + 1;
                                }else{
                                    $start = 1;
                                }

                            ?>
                            <?php $x=$start; $idds= array(); ?>
                            @if(count($logs->data) > 0)
                            <div class="material-datatableds">


                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination">
                                            <!-- <li class="page-item"><a class="page-link" href="/videos?page='.$prev.'"></a></li> -->


                                            @for($i = 1; $i <= $links; $i++)
                                                <li class="page-item {{$i == $current_page?"active":""}}"><a class="page-link" href="?page={{$i}}">{{$i}}</a></li>
                                        @endfor
                                        <!-- <li class="page-item"><a class="page-link" href="/videos?page='.$next.'"></a></li> -->
                                        </ul>
                                    </nav>


                                <table id="datatablesd" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Action</th>
                                        <th>Response/Request</th>
                                        <th>status</th>
                                        <th>Time</th>

                                    </tr>
                                    </thead>
                                    <tbody>

                                        @foreach($logs->data as $log)

                                            <tr>
                                                <td>{{$x++ }}</td>
                                                <td>{{$log->action}}</td>
                                                <td>{{$log->message}}</td>
                                                <td><div class="alert alert-{{($log->status?"success":"danger")}}" >{{($log->status?"Sucess":"Failed")}}</div></td>
                                                <td>{{$log->time}}</td>

                                            </tr>
                                        @endforeach

                            </div>
                            </tbody>
                        </table>



                                <nav aria-label="Page navigation example">
                                    <ul class="pagination">
                                        <!-- <li class="page-item"><a class="page-link" href="/videos?page='.$prev.'"></a></li> -->
                                        @for($i = 1; $i <= $links; $i++)
                                            <li class="page-item {{$i == $current_page?"active":""}}"><a class="page-link" href="?page={{$i}}">{{$i}}</a></li>
                                        @endfor
                                    <!-- <li class="page-item"><a class="page-link" href="/videos?page='.$next.'"></a></li> -->
                                    </ul>
                                </nav>

                    </div>
                        @else
                            <div class="pt-3 pr-3 pl-3">
                                <div class="alert alert-danger col-12 text-center" role="alert">
                                    No data found
                                </div>
                            </div>
                        @endif
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
