<?php
/**
 * Created by PhpStorm.
 * User: imm
 * Date: 29/10/2019
 * Time: 09:00
 */
?>
@extends('layout3')
@section('title','Create Organisation')
@section('content')
    @section('page','Create Organisation')
<div class="contentbar">
    @include("alert")
    <div class="row">
        <div class="col-md-6">
            <div class="card ">
                <div class="card-header card-header-rose card-header-icon"></div>
                <div class="card-body ">

                    @include("alert")


                    <form action="{{route("doCreateOrganisation")}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="input-group input-group-dynamic my-3">
                                    <label class="form-label">Name</label>
                                    <input type="text" name="name" value="{{old("name")}}" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="input-group input-group-dynamic my-3">
                                    <label class="form-label">Phone</label>
                                    <input type="text" name="phone" value="{{old("phone")}}" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="input-group input-group-dynamic my-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" name="email" value="{{old("email")}}" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="input-group input-group-dynamic my-3">
                                    <label class="form-label">Password</label>
                                    <input type="text" name="password" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer ">
                            <button type="submit" class="btn btn-fill btn-info">Submit</button>
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
