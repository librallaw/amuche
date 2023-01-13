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
        <div class="col-md-8 offset-2 "  style="">

            <div class="" align="center" style="">
                <h2 id="verification">Face verification</h2>
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
                            <img src="data:image/png;base64, {{$image}}" class="img-responsive img-thumbnail"
                            style="" id="holderimage1" base="{{$image}}" />

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
                            <img src="no-thumbnail.jpg" class="img-responsive img-thumbnail" style="width:100%;" id="holderimage2"  />
                        </div>
                        <br/>
                        <br/>
                        <form id="uploadImage2" action="{{route("uploadImage")}}" method="post">
                            <div class="row">
                                <div class="col-md-6 form-groups">
                                    <input type="file" class="form-control" name="uploadFile" id="uploadFile2" accept=".jpg, .png" onchange="readURL2(this);" style="width:100%" />
                                </div>
                                <div class="col-md-6">
                                    <button class="btn btn-info form-control">Submit</button>
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
    <!--  end card  -->




    <!-- end col-md-12 -->
</div>
@section("extrajs")
    <script src="assets/js/jquery.form.js"></script>
    <script>
        $(document).ready(function(){

            var formData = {
                'imgbase'              : $("#holderimage1").attr("base"),

            };


            $('#uploadFile2').change(function(event){
                $("#resultdiv").hide(1000);
            });


            $('#uploadImage2').submit(function(event){
                if($('#uploadFile2').val())
                {
                    event.preventDefault();
                    $('#loader-icon2').show();
                    $('#targetLayer2').hide();
                    $(this).ajaxSubmit({
                        data: formData,
                        beforeSubmit:function(){
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

                            if(data.status){
                                if(data.isIdentical){
                                    $("#resultdiv").html(`<div class="alert alert-success"> Verification result: The two faces belong to the same person. Confidence is <strong>${Math.trunc(Math.round(data.confidence / 1 * 100))}%</strong></div>`)
                                }else{
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



        $("#verify").click(function (){

            var holder1 = $("#holder1").val();
            var holder2 = $("#holder2").val();

            if(holder1=='' || holder2==''){
                alert("You need to submit two images before verifying");
            }else{
                var formData = {
                    'faceId1'              : holder1,
                    'faceId2'             : holder2

                };

                // process the form
                $.ajax({
                    type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
                    url         : 'vem2.php', // the url where we want to POST
                    data        : formData, // our data object
                    dataType    : 'json', // what type of data do we expect back from the server
                    encode          : true,
                    beforeSend: function() {
                        // setting a timeout
                        $("#verify").html('...verification in progress...');
                    }
                })
                // using the done promise callback
                    .done(function(data) {
                        $("#verify").html('verify')

                        // log data to the console so we can see
                        if(data.isIdentical){
                            $("#resultdiv").html(`<div class="alert alert-success"> Verification result: The two faces belong to the same person. Confidence is <strong>${Math.trunc(Math.round(data.confidence / 1 * 100))}%</strong></div>`)
                        }else{
                            $("#resultdiv").html(`<div class="alert alert-danger"> Verification result: The two faces do not belong to the same person. Confidence is <strong>${Math.trunc(Math.round(data.confidence / 1 * 100))}%</strong></div>`)
                        }
                        console.log(data);

                        // here we will handle errors and validation messages
                    });

                // stop the form from submitting the normal way and refreshing the page
                event.preventDefault();
            }

        })
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
