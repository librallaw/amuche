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
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-rose card-header-icon">
                    <div class="card-icon">
                        <i class="material-icons">assignment</i>
                    </div>
                    <h4 class="card-title">Active Members</h4>
                </div>
                <div class="card-body">
                    <div class="toolbar">
                        <!--        Here you can write extra buttons/actions for the toolbar              -->
                    </div>
                    <div class="material-datatables">
                        <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                            <thead>
                            <tr>

                                <th>S/N</th>
                                <th>Member Name</th>
                                <th>{{$data->services1}}</th>
                                <th>{{$data->services2}}</th>
                                <th>Group </th>
                                <th>Phone </th>
                                <th>Action</th>

                            </tr>
                            </thead>
                            <tbody>
                            @if(count($data->results) > 0)
                                <?php $x = 1; ?>
                            @foreach($data->results as $record)
                                <tr>
                                    <td>{{$x++}}</td>
                                    <td><a href="">{{$record->full_name}}</a></td>

                                    <td class="alert alert-success">Present</td>
                                    <td class="alert-{{$record->type}} alert">{{$record->status}}</td>
                                    <td>{{$record->group_assigned}}</td>
                                    <td>{{$record->phone_number}}</td>

                                    <td><a href=""><button class="btn btn-cyan">View Track record</button></a></td>


                                </tr>
                            @endforeach
                            @else
                                <div class="alert-danger alert">No record found for this date</div>

                            @endif
                            </tbody>
                        </table>
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
