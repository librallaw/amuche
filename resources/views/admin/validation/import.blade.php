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
                    <h4 class="card-title">Upload validated IPE </h4>
                </div>
                <div class="card-body ">

                    @include("alert")


                    <form action="{{route("doUploadResult")}}" method="post" id="ipes" enctype="multipart/form-data">
                        @csrf
                        <div class="row" id="holder">

                            <div class="col-md-12 tracking_idds">

                                <div class="input-group input-group-dynamic my-3">

                                    <input type="file" name="file" value="" class="form-control" required>
                                </div>
                            </div>

                        </div>


                        <br />
                        <div class="card-footer ">
                            <button type="submit" class="btn btn-fill btn-info" id="check">Submit</button>
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
