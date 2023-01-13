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
<div class="container-fluid">
    @include("alert")
    <div class="row">

        <?php
        $arr = (array)$userdata;
        ?>
        @if(count($arr) > 0)
        <div class="col-md-8">



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



                                    @else

                                        <div class="col-md-4">
                                                <label class="">{{$key}}</label>
                                                <input type="text" class="form-control" value="{{$value}}" />

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
                    <a href="#pablo">
                        @if(isset($userdata->photo))
                        <img class="img" src="data:image/png;base64, {{$userdata->photo}}"  style="width:100%">
                        @endif
                    </a>
                </div>

                <div class="card-body">
                    <h6 class="card-category text-gray">@if(isset($userdata->title)){{ucfirst($userdata->title)}}@endif</h6>
                    <h4 class="card-title">@if(isset($userdata->surname)){{ucfirst($userdata->surname)}}@endif @if(isset($userdata->firstname)){{ucfirst($userdata->firstname)}}@endif</h4>
                    <p class="card-description">
                        @if(isset($userdata->residence_AdressLine1)){{ucfirst($userdata->residence_AdressLine1)}}@endif

                    </p>

                </div>
            </div>


            @if(isset($userdata->signature))

                <div class="card card-profile">
                    <div class="card-avatar">
                        <a href="#pablo">

                            @if(isset($userdata->photo))
                                <img class="img" src="data:image/png;base64, {{$userdata->signature}}" style="width:100%">
                            @endif
                        </a>
                    </div>

                </div>

            @endif




            <div class="">


                <div class="card" align="center">
                    <div class="card-header card-header-icon card-header-rose">

                        <h4 class="card-title "></h4>
                    </div>
                    <div class="card-body" align="center">

                        @if(isset($userdata->photo))
                <button type="button" class="btn btn-rose" data-toggle="modal" data-target="#exampleModal">
                    Launch Facial Recognition
                </button>
                            @endif



                    </div>
                </div>



                @if(isset($userdata->photo))
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title" id="exampleModalLabel">Face verification</h3>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class=""  style="">

                                        <div class="" align="center" style="">
                                            <h2 id="verification"></h2>
                                            <p></p><p>
                                            </p>

                                            <div class="alert alert-warning">
                                                <li>*. Higher face image quality means better identification precision. Please consider high-quality faces: frontal, clear, and face size is 200x200 pixels (100 pixels between eyes) or bigger.</li>

                                            </div>
                                            <div class="alert alert-warning">

                                                <li>*. For the scenarios that are sensitive to accuracy please make your own judgment.</li>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="card">
                                                        <div class="card-header card-header-icon card-header-rose">
                                                            <div class="card-icon">
                                                                <i class="material-icons">person</i>
                                                            </div>
                                                            <h4 class="card-title ">NIN Image</h4>
                                                        </div>
                                                        <div class="card-body">
                                                            <div style="">
                                                                <img src="data:image/png;base64, {{$userdata->photo}}" class="img-responsive img-thumbnail"
                                                                     style="" id="holderimage1" base="{{$userdata->photo}}" />

                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="col-md-6 ">
                                                    <div class="card">
                                                        <div class="card-header card-header-icon card-header-rose">
                                                            <div class="card-icon">
                                                                <i class="material-icons">image</i>
                                                            </div>
                                                            <h4 class="card-title ">User Generated Image</h4>
                                                        </div>
                                                        <div class="card-body">

                                                            <div style="max-width: 300px;overflow: hidden">
                                                                <img src="/no-thumbnail.jpg" class="img-responsive img-thumbnail" style="width:100%;" id="holderimage2"  />
                                                            </div>
                                                            <br/>
                                                            <br/>
                                                            <form id="uploadImage2" action="{{route("uploadImage")}}" method="post">
                                                                <div class="row">
                                                                    <div class="col-md-6 form-groups">
                                                                        <input type="file" class="form-control" name="uploadFile" id="uploadFile2" accept=".jpg, .png" onchange="readURL2(this);" style="width:100%" />
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <button class="btn btn-rose form-control">Verify</button>
                                                                    </div>
                                                                </div>
                                                                <div class="progress">
                                                                    <div class="progress-bar" id="progress-bar2" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                                <input type="hidden" value="" id="holder2" />


                                                            </form>
                                                            <div id="loader-icon2" style="display:none;"><i class="fa fa-spinner fa-spin"></i></div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                            <br />
                                            <br />

                                            <div class="row">
                                                <div class="col-md-6 offset-3">
                                                    <div class="" id="resultdiv">

                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                            </div>
                        </div>
                    </div>
                </div>

                @endif













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



@section("extrajs")
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
@endsection

@endsection
