


<?php
/**
 * Created by PhpStorm.
 * User: imm
 * Date: 29/10/2019
 * Time: 09:00
 */
?>
@extends('layout')
@section('title','Verifications')
@section('content')
@section('page','Verification Module')
<div class="contentbar">
    @include("alert")









        <div class="row">


            <div class="col-md-4">
                <div class="col-md-12">

                    <div class="col-md-12" style="margin-bottom: 30px">
                        <div class="card ">
                            <div class="card-header card-header-rose card-header-icon">
                                <div class="card-icon">
                                    <i class="bx bx-home" style="font-size: 23px"></i>
                                </div>
                                <h4 class="card-title">Search by NIN</h4>
                            </div>
                            <div class="card-body ">
                                <form method="post" action="{{route("DoLoadVerification")}}" id="search_by_nin">
                                    @csrf
                                    <div class="">
                                        <label for="exampleEmail" class="form-label">Enter NIN ID</label><br />
                                        <input type="text" name="data" class="form-control" id="examepleEmail">
                                        <input type="hidden" name="searchType" value="nin" class="form-control"
                                               id="examepleEmail" required>
                                    </div>


                                    <div class="card-footer ">
                                        <button type="submit" class="btn btn-fill btn-rose sumsum" form_name="search_by_nin">Submit</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                        </form>
                    </div>


                    <br />
                    <div class="col-md-12" style="margin-bottom: 30px">
                        <div class="card ">
                            <div class="card-header card-header-rose card-header-icon">
                                <div class="card-icon">
                                    <i class="bx bx-phone" style="font-size: 23px"></i>
                                </div>
                                <h4 class="card-title">Search by Phone</h4>
                            </div>
                            <div class="card-body ">
                                <form method="post" action="{{route("DoLoadVerification")}}" id="searchByPhone">
                                    @csrf
                                    <div class="">
                                        <label for="exampleEmail" class="form-label">Enter Phone Number (eg 08012345678)
                                        </label>
                                        <input type="text" name="data" class="form-control" id="examepleEmail">
                                        <input type="hidden" name="searchType" value="phone" class="form-control"
                                               id="examepleEmail" required>
                                    </div>


                                    <div class="card-footer ">
                                        <button type="submit" class="btn btn-fill btn-rose sumsum" form_name="searchByPhone">Submit</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                        </form>
                    </div>
                </div>

            </div>

            <div class="col-md-4">

                <div class="col-md-12" style="margin-bottom: 30px">
                    <div class="card ">
                        <div class="card-header card-header-rose card-header-icon">
                            <div class="card-icon">
                                <i class="bx bx-user" style="font-size: 23px"></i>
                            </div>
                            <h4 class="card-title">Search by Demo Data </h4>
                        </div>
                        <div class="card-body ">
                            <form method="post" action="{{route("DoLoadVerificationDemo")}}" id="searchByDemoData">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleEmail" class="form-label">First Name</label>
                                    <input type="text" name="first_name" class="form-control" id="" required>

                                </div>
                                <div class="form-group">
                                    <label for="exampleEmail" class="form-label">Last Name</label>
                                    <input type="text" name="last_name" class="form-control" id="" required>

                                </div>

                                <div class="form-group">
                                    <label for="exampleEmail" class="form-label">Day Of Birth format: dd-mm-yyyy
                                        (12-05-1960)
                                    </label>
                                    <input type="text" name="dob" class="form-control" id="" required>

                                </div>

                                <div class="form-group">

                                    <select name="gender" required class="form-control" id="gen">

                                        <option value="">Select Gender</option>
                                        <option value="m">Male</option>
                                        <option value="f">Female</option>

                                    </select>

                                </div>
                                <br />
                                <br />


                                <div class="card-footer ">
                                    <button type="submit" class="btn btn-fill btn-rose sumsum" form_name="searchByDemoData">Submit</button>
                                </div>
                            </form>
                        </div>

                    </div>
                    </form>
                </div>

            </div>





















        </div>






<!--  end card  -->




    <!-- end col-md-12 -->
</div>
@endsection

