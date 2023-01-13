<?php
/**
 * Created by PhpStorm.
 * User: imm
 * Date: 29/10/2019
 * Time: 09:05
 */
?>
@extends('layout')
@section('title','Upload Member Batch')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">

                @include("alert")
                <div class="card">
                    <form id="RegisterValidation" method="post" action="{{route("doAddMemberBatch")}}" enctype="multipart/form-data">

                        @csrf

                        <div class="card-header card-header-rose card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">cloud_upload</i>
                            </div>

                        </div>
                        <h4 class="title">Pleased Upload a maximum of 20 records Download Template</h4>
                        <hr>
                        <div class="col-md-4 col-sm-4">

                            <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                <div class="fileinput-new thumbnail">
                                    <img src="/img/image_placeholder.jpg" alt="..." />
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                <div>
                          <span class="btn btn-rose btn-round btn-file">
                            <span class="fileinput-new">Select file</span>
                            <span class="fileinput-exists">Change</span>
                            <input type="file" name="file" />
                          </span>
                                    <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>

                                </div>
                                <button type="submit" class="btn btn-rose btn-block">Upload</button>
                            </div>

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
