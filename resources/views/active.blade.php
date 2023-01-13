<?php
/**
 * Created by PhpStorm.
 * User: imm
 * Date: 29/10/2019
 * Time: 08:25
 */
?>
@extends('layout')
@section('title','Active Members')
@section('page',$page)
@section('content')
    <div method="post" action="">
        <div class="container-fluid">
            <div class="row">
                @include("alert")
                <div class="col-md-12">


                    <div class="card">
                        <div class="card-header card-header-rose card-header-icon">
                            <div class="card-icon">

                            </div>
                            <h4 class="card-title">{{$page}}</h4>
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

                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <!-- <li class="page-item"><a class="page-link" href="/videos?page='.$prev.'"></a></li> -->


                                    @for($i = 1; $i <= $links; $i++)
                                        <li class="page-item {{$i == $current_page?"active":""}}"><a class="page-link" href="?page={{$i}}">{{$i}}</a></li>
                                @endfor
                                <!-- <li class="page-item"><a class="page-link" href="/videos?page='.$next.'"></a></li> -->
                                </ul>
                            </nav>
                            <div class="material-datatables">
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



                                    <?php $x=$start; $idds= array(); ?>




                                        @if(count($organisation->data->data) > 0)
                                        @foreach($organisation->data->data as $activeMember)

                                            <tr>
                                                <td>{{$x++}}</td>
                                                <td>{{$activeMember->unique_id}}</td>
                                                <td>{{$activeMember->name}}</td>
                                                <td>{{$activeMember->username}}</td>
                                                <td>{{$activeMember->email}}</td>
                                                <td>{{$activeMember->phone}}</td>
                                                <td>{{$activeMember->plain}}</td>

                                                <td>
                                                    <span class="alert alert-info">{{$activeMember->balance}}</span>
                                                </td>
                                                <td>{{$activeMember->created_at}}</td>
                                                <td class="td-actions text-right">
                                                    <a href="{{route("showOrganisationProfile",['orgid'=>$activeMember->unique_id])}}" ><button
                                                                type="button"
                                                                rel="tooltip" class="btn
                                               btn-info"
                                                                data-original-title="" title="">
                                                            <i class="bx bx-user-circle" style="font-size: 25px"></i>
                                                            <div class="ripple-container"></div></button></a>


                                                </td>
                                            </tr>
                                        @endforeach
                                        @else
                                            <div class="pt-3 pr-3 pl-3">
                                                <div class="alert alert-danger col-12 text-center" role="alert">
                                                    No data found
                                                </div>
                                            </div>
        @endif
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
