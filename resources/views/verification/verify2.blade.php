<?php
/**
 * Created by PhpStorm.
 * User: imm
 * Date: 29/10/2019
 * Time: 09:00
 */
?>
@extends('layout')
@section('title','Vefification')
@section('content')
    @section('page','Sim Registration Module')
<div class="container-fluid">
    @include("alert")
    <div class="row">




            <div class="col-md-4 ">
                <div class="card ">
                    <div class="card-header card-header-rose card-header-icon">
                        <div class="card-icon">
                            <i class="bx bx-home" style="font-size: 23px"></i>
                        </div>
                        <h4 class="card-title">Search by NIN</h4>
                    </div>
                    <div class="card-body ">
                        <form method="post" action="{{route("DoLoadVerification2")}}">
                            @csrf
                            <div class="form-group bmd-form-group">
                                <label for="exampleEmail" class="bmd-label-floating">Enter NIN ID</label>
                                <input type="text" name="data" class="form-control" id="nin_id">
                                <input type="hidden" name="searchType" value="nin" class="form-control"
                                       id="examepleEmail" required>
                            </div>


                            <div class="card-footer ">
                                <button idd="submit_btn" type="submit" onclicked="verify()" class="btn btn-fill
                                btn-rose">Submit</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>




            <div class="col-md-4">
                <div class="card ">
                    <div class="card-header card-header-rose card-header-icon">
                        <div class="card-icon">
                            <i class="bx bx-phone" style="font-size: 23px"></i>
                        </div>
                        <h4 class="card-title">Search by Phone</h4>
                    </div>
                    <div class="card-body ">
                        <form method="post" action="{{route("DoLoadVerification2")}}">
                            @csrf
                            <div class="form-group bmd-form-group">
                                <label for="exampleEmail" class="bmd-label-floating">Enter Phone Number</label>
                                <input type="text" name="data" class="form-control" id="phone_id">
                                <input type="hidden" name="searchType" value="phone" class="form-control"
                                       id="examepleEmail" required>
                            </div>


                            <div class="card-footer ">
                                <button idd="submit_btn2" type="submit" onclicked="verify2()" class="btn btn-fill
                                btn-rose">Submit</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>



        </div>





    <!--  end card  -->




    <!-- end col-md-12 -->
</div>



<script>


function clearAll(){




    $('#first_name').val("");
    $('#last_name').val("");
    $('#middle_name').val("");
    $('#dob').val("");
    $('#gender').val("");
    $('#nin').val("");
    $('#doc_number').val("");
    $('#residence').val("");
    $('#signature').attr("src","/no-thumbnail.jpg");
    $('#phone').val("");
    $('#email').val("");
    $('#marital').val("");
    $('#residence_status').val("");
    $('#employment_status').val("");
    $('#profession').val("");
    $('#religion').val("");
    $('#dob').val("");
    $('#birth_lga').val("");
    $('#birth_state').val("");

}


    function verify (){


        var nin =  $('#nin_id').val();


        if(nin != ""){

            //var userData = JSON.parse(localStorage.getItem('authuser'));

            NProgress.start()
            $("#submit_btn").html("<i class='fa fa-spinner fa-spin'></i>...FETCHING DATA")

            var formData = {

                'data'           : nin,
                'searchType'      : "nin",
            };

            //alert("I got here");

            $.ajax({
                type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
                url         : '/organisation/nin/verify3', // the url where we want to POST
                data        : formData,
                // dataType    : 'json', // what type of data do we expect back from the server
                encode          : true
            })

            //  NProgress.start()
            // using the done promise callback
                .done(function(data) {

                    // alert("I dididid")
                    // log data to the console so we can see
                    // console.log("I got here too just now");
//
//                    //if number is on kingschat then process
                    if(data.status){

                        NProgress.done();
                        $.notify(data.message, {className: 'success',autoHide: true,
                        } );



                        $("#submit_btn").html("SUBMIT");

                        $('#nin_id').val("");


                        $('#first_name').val(data.data.firstname);
                        $('#last_name').val(data.data.surname);
                        $('#middle_name').val(data.data.middlename);
                        $('#dob').val(data.data.birthdate);
                        $('#gender').val(data.data.gender);
                        $('#nin').val(data.data.nin);
                        $('#doc_number').val(data.data.documentno);
                        $('#residence').val(data.data.residence_AdressLine1);
                        $('#signature').attr("src","data:image/png;base64, "+data.data.signature);
                        $('#phone').val(data.data.telephoneno);
                        $('#email').val(data.data.email);
                        $('#marital').val(data.data.maritalstatus);
                        $('#residence_status').val(data.data.residencestatus);
                        $('#employment_status').val(data.data.emplymentstatus);
                        $('#profession').val(data.data.profession);
                        $('#religion').val(data.data.religion);
                        $('#dob').val(data.data.birthdate);
                        $('#birth_lga').val(data.data.birthlga);
                        $('#birth_state').val(data.data.birthstate);
                       





                    }else{
                        NProgress.done();
                        $.notify(data.message, {className: 'error',autoHide: false,
                        } );
                        $("#submit_btn").html("SUBMIT");

                    }

                    // here we will handle errors and validation messages
                });
        }else{
            $.notify("All fields are compulsory", {className: 'error',
                autoHide: true,} );
        }


    }






function verify2 (){


    var nin =  $('#phone_id').val();


    if(nin != ""){

        //var userData = JSON.parse(localStorage.getItem('authuser'));

        NProgress.start()
        $("#submit_btn2").html("<i class='fa fa-spinner fa-spin'></i>...FETCHING DATA")

        var formData = {

            'data'           : nin,
            'searchType'      : "phone",
        };

        //alert("I got here");

        $.ajax({
            type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
            url         : '/organisation/nin/verify3', // the url where we want to POST
            data        : formData,
            // dataType    : 'json', // what type of data do we expect back from the server
            encode          : true
        })

        //  NProgress.start()
        // using the done promise callback
            .done(function(data) {

                // alert("I dididid")
                // log data to the console so we can see
                // console.log("I got here too just now");
//
//                    //if number is on kingschat then process
                if(data.status){

                    NProgress.done();
                    $.notify(data.message, {className: 'success',autoHide: true,
                    } );



                    $("#submit_btn2").html("SUBMIT");

                    $('#nin_id').val("");


                    $('#first_name').val(data.data.firstname);
                    $('#last_name').val(data.data.surname);
                    $('#middle_name').val(data.data.middlename);
                    $('#dob').val(data.data.birthdate);
                    $('#gender').val(data.data.gender);
                    $('#nin').val(data.data.nin);
                    $('#doc_number').val(data.data.documentno);
                    $('#residence').val(data.data.residence_AdressLine1);
                    $('#signature').attr("src","data:image/png;base64, "+data.data.signature);
                    $('#phone').val(data.data.telephoneno);
                    $('#email').val(data.data.email);
                    $('#marital').val(data.data.maritalstatus);
                    $('#residence_status').val(data.data.residencestatus);
                    $('#employment_status').val(data.data.emplymentstatus);
                    $('#profession').val(data.data.profession);
                    $('#religion').val(data.data.religion);
                    $('#dob').val(data.data.birthdate);
                    $('#birth_lga').val(data.data.birthlga);
                    $('#birth_state').val(data.data.birthstate);






                }else{
                    NProgress.done();
                    $.notify(data.message, {className: 'error',autoHide: false,
                    } );
                    $("#submit_btn2").html("SUBMIT");

                }

                // here we will handle errors and validation messages
            });
    }else{
        $.notify("All fields are compulsory", {className: 'error',
            autoHide: true,} );
    }


}
</script>
@endsection
