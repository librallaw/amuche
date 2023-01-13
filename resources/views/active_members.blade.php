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
    <form method="post" action="{{route("createList")}}">
        <div class="container-fluid">
            <div class="row">
                @include("alert")
                <div class="col-md-12">

                    @if(count($activeMembers) > 0)
                        <button class="btn btn-rose"  data-toggle="modal" data-target="#exampleModal">Add Selected to call center</button>
                    @endif
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
                                        <th></th>
                                        <th>S/N</th>
                                        <th>Name</th>
                                        <th>Group</th>
                                        <th>Phone</th>
                                        <th>email</th>
                                        <th>Birthday</th>
                                        <th>Action</th>

                                    </tr>
                                    </thead>
                                    <tbody>

                                        <?php $x=1; $idds= array(); ?>
                                        @foreach($activeMembers as $activeMember)
                                            <tr>
                                                <td>{{$x++}}</td>
                                                <td><input type="checkbox" name="idds[]" id="id_chk{{$x}}" class="chkbox" value="{{$activeMember->id}}"  /></td>
                                                <td>{{$activeMember->full_name}}</td>
                                                <td>{{$activeMember->group_assigned}}</td>
                                                <td>{{$activeMember->phone_number}}</td>
                                                <td>{{$activeMember->email}}</td>
                                                <td>{{$activeMember->birth_date}}</td>
                                                <td><a href="{{route('showMemberProfile', $activeMember->id)}}"
                                                       class="btn btn-info btn-xs">View Track Record</a></td>
                                            </tr>
                                        @endforeach
                            </form>
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


@if(count($activeMembers) > 0)
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Create New call Group</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                    <div class="modal-body">

                        <div class="form-group">
                            <label>Enter Group Name</label>
                            <input type="text" name="name" class="form-control" required/>
                            @csrf
                        </div>



                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>


            </div>
        </div>
    </div>
    </form>

@endif
@endsection
