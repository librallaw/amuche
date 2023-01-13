<?php
/**
 * Created by PhpStorm.
 * User: imm
 * Date: 29/10/2019
 * Time: 09:00
 */
?>
@extends('layout')
@section('title','Create Organisation')
@section('content')
    @section('page','Create Organisation')
<div class="container-fluid">

    <div class="row">
        <div class="col-md-6">
            <div class="card ">
                <div class="card-header card-header-rose card-header-icon">
                    <div class="card-icon">
                        <i class="bx bx-user-plus" style="font-size: 35px"></i>
                    </div>
                    <h4 class="card-title">Confirm Internal Processing Error(IPE) Submission</h4>
                </div>
                <div class="card-body row">


                   <div class="alert alert-success col-md-6">Wallet Balance =  {{$balance}}</div>
                    <div class="alert alert-danger col-md-6"> Cost =  <strong>{{count($ids)}} credit(s)</strong></div>
                    <br />



                    @include("alert")

                    <h5>Details</h5>


                    <form action="{{route("doProcessIpes")}}" method="post" id="ipes">
                        @csrf
                        <div class="row" id="holder">

                            @foreach($ids as $id)
                            <div class="col-md-12 tracking_idds">



                                <div class="input-group input-group-dynamic my-3">
                                    <label class="form-label">Tracking IdD</label>
                                    <input type="text" name="tracking_id[]"  value="{{$id}}" class="form-control" required>
                                </div>
                            </div>
                                @endforeach

                        </div>


                        <br />
                        <div class="card-footer ">
                            <button type="submit" class="btn btn-fill btn-info" id="">Final Submit</button>
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
