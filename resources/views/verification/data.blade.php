<?php
/**
 * Created by PhpStorm.
 * User: imm
 * Date: 29/10/2019
 * Time: 09:00
 */
?>
@extends('layout')
@section('title','Verification Module')
@section('content')
    @section('page','Verification Module')


<div class="contentbar">
    @include("alert")
    <div class="row">

        <?php
        $arr = (array)$userdata;
        ?>
        @if(count($arr) > 0)



        <div class="col-md-8" id="data_page">
            <div class="card">
                <div class="card-header card-header-icon card-header-rose">
                    <div class="card-icon">
                        <i class="bx bx-user" style="font-size: 35px"></i>
                    </div>
                    <h4 class="card-title">Profile Data -
                        <small class="category"></small>
                    </h4>
                </div>
                <div class="card-body">
                    <div>
                        <div class="row">



                            @foreach($userdata as $key => $value)
                                @if($key == "photo" || $key == "signature")
                                    <?php continue; ?>
                                @else
                                    @if(is_object($value))

                                    <div class="col-md-4" style="max-height: 100px;overflow: scroll;
                                    overflow-x: hidden">
                                        <div class="form-group" >
                                            <label class="form-label">{{$key}}</label>
                                            <input type="text" class="form-control" value="{{$value[0]}}" disabled="disabled" />
                                        </div>
                                    </div>

                                    @else

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="form-label">{{$key}}</label><br />
                                                <input type="text" class="form-control" value="{{$value}}" disabled="disabled" />
                                            </div>
                                        </div>
                                    @endif
                                @endif
                            @endforeach


                        </div>




                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>


        </div>
        <div class="col-md-4">
            <div class="card card-profile">
                <div class="card-avatar">
                    <a href="#pablo" class="row">
                        @if(isset($userdata->photo))
                            <div class="col-md-6">
                                <img class="img rounded-circle mt-3 mb-4" src="data:image/png;base64, {{$userdata->photo}}"  style="width:200px">
                            </div>

                            @endif
                            @if(isset($userdata->signature))
                                <div class="col-md-6">
                                    <img class="img rounded-circle mt-3 mb-4" src="data:image/png;base64, {{$userdata->signature}}"  style="width:200px">
                                </div>

                            @endif
                    </a>
                </div>
                <div class="card-body">
                    <h6 class="card-category text-gray">@if(isset($userdata->title)){{ucfirst($userdata->title)}}@endif</h6>
                    <h4 class="card-title">@if(isset($userdata->surname)){{ucfirst($userdata->surname)}}@endif @if(isset($userdata->firstname)){{ucfirst($userdata->firstname)}}@endif</h4>
                    <p class="card-description">
                        @if(isset($userdata->residence_AdressLine1)){{ucfirst($userdata->residence_AdressLine1)}}@endif

                    </p>

                    <div class="row">
                        <div class="col-md-6">
                            <form method="post" action="/pdfgen/index.php">
                                @csrf

                                <input value="{{json_encode($userdata)}}" name="data" hidden/>

                                <button class="btn btn-outline-warning" id="pdfdatas" type="submit">Generate PDF</button>
                                <br />
                                <br />


                            </form>
                        </div>


                        <div class="col-md-6">



                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                Generate Premium Slip
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Generate Premium Slip</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">

                                            <div class="alert alert-danger" style="color: white;">Note: This Service cost 1 credit</div>



                                            <form method="post" action="{{route("printSlip")}}">
                                                @csrf

                                                <input type="checkbox" required> Accept

                                                <br />
                                                <br />
                                                <input value="{{json_encode($userdata)}}" name="data" hidden/>

                                                <button class="btn btn-success" id="pdfdatas" type="submit">Generate Premium Slip</button>
                                                <br />
                                                <br />


                                            </form>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>






        </div>
            @else

                <div class="col-md-12">
                    <div class="alert alert-danger">No data associated with this NIN</div>
                </div>
            @endif


    </div>
    <!--  end card  -->




    <!-- end col-md-12 -->
</div>


@section("extra_script")

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/js/bootstrap.min.js" integrity="sha512-7rusk8kGPFynZWu26OKbTeI+QPoYchtxsmPeBqkHIEXJxeun4yJ4ISYe7C6sz9wdxeE1Gk3VxsIWgCZTc+vX3g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

@endsection

@if(in_array('facialRecognition',$access))



    <script src="/assets/js/jquery.form.js"></script>

    <script>
        $(document).ready(function(){

            var formData = {
                'imgbase'              : $("#holderimage1").attr("base"),

            };



            $('#uploadImage2').submit(function(event){
                if($('#uploadFile2').val())
                {
                    event.preventDefault();
                    $('#loader-icon2').show();
                    $('#targetLayer2').hide();
                    $(this).ajaxSubmit({
                        data: formData,
                        beforeSubmit:function(){
                            NProgress.start();
                            $('#progress-bar2').width('50%');
                        },
                        uploadProgress: function(event, position, total, percentageComplete)
                        {
                            $('#progress-bar2').animate({
                                width: percentageComplete + '%'
                            }, {
                                duration: 1000
                            });
                        },
                        success:function(data){
                            NProgress.done();

                            if(data.status){
                                if(data.isIdentical){

                                    $.notify("Verification result: The two faces belong to the same person. Confidence is "+Math.trunc(Math.round(data.confidence / 1 * 100))+"%", {className: 'success',autoHide: true,
                                    } );

                                    // alert("true");
                                    $("#resultdiv").html(`<div class="alert alert-success"> Verification result: The two faces belong to the same person. Confidence is <strong>${Math.trunc(Math.round(data.confidence / 1 * 100))}%</strong></div>`)
                                }else{

                                    $.notify("Verification result: The two faces do not belong to the same person. Confidence is "+Math.trunc(Math.round(data.confidence / 1 * 100))+"%", {className: 'error',autoHide: true,
                                    } );

                                    $("#resultdiv").html(`<div class="alert alert-danger"> Verification result: The two faces do not belong to the same person. Confidence is <strong>${Math.trunc(Math.round(data.confidence / 1 * 100))}%</strong></div>`)
                                }
                            }else{
                                $("#resultdiv").html(`<div class="alert alert-danger"><strong>${data.message}</strong></div>`)
                            }


                            $("#progress-bar2").css("width","0%")
                            $('#loader-icon2').hide();
                            $('#targetLayer2').show();
                        },
                        resetForm: true
                    });
                }
                return false;
            });
        });



    </script>

    <script>

        function readURL(input) {
            $("#resultdiv").html("");
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#holderimage1')
                        .attr('src', e.target.result);
                };

                $("#resultdiv").html("");
                reader.readAsDataURL(input.files[0]);
            }
        }

        function readURL2(input) {
            $("#resultdiv").html("");
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#holderimage2')
                        .attr('src', e.target.result);
                };


                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>


@endif
@endsection
