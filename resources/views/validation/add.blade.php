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
                    <h4 class="card-title">Submit Internal Processing Error(IPE)</h4>
                </div>
                <div class="card-body ">

                    @include("alert")


                    <form action="{{route("doReceiveIpes")}}" method="post" id="ipes">
                        @csrf
                        <div class="row" id="holder">

                            <div class="col-md-12 tracking_idds">
                                <span><i class="fa fa-minus-circle" style="color:red;cursor: pointer"></i></span>
                                <div class="input-group input-group-dynamic my-3">
                                    <label class="">Tracking ID</label>
                                    <input type="text" name="tracking_id[]" value="" class="form-control" required>
                                </div>
                            </div>

                        </div>
                        <div class="k">
                            <span href="" class="btn btn-dribbble" id="addMore"><i class="fa fa-plus"></i> Add Another</span>
                        </div>

                        <br />
                        <br />
                        <br />
                        <div class="card-footer ">
                            <button  class="btn btn-fill btn-info" id="check">Submit</button>
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


@section("extra_script")

    <script>
        jQuery("#addMore").click(function (){
            jQuery("#holder").append(`<div class="col-md-12">
 <span><i class="fa fa-minus-circle" style="color:red;cursor: pointer"></i></span>
                                <div class="input-group input-group-dynamic my-3">
                                    <label >Tracking ID</label>
                                    <input type="text" name="tracking_id[]" value="" class="form-control" required>
                                </div>
                            </div>`)
        })
    </script>


    <script>
        jQuery('#check').on("click", function(e){
            e.preventDefault();

            let valid = true;
            jQuery('[required]').each(function() {
                if (jQuery(this).is(':invalid') || !jQuery(this).val()) valid = false;
            })
            if (!valid) alert("error please fill all fields!");
            else jQuery("#ipes").submit();
        })
    </script>


@endsection

@endsection
