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
@section('page','Manifest Registration')
<div class="container-fluid">
    @include("alert")
    <div class="row">

        <div class="col-md-12">
            <img src="/coat.jpeg" style="width:100px;border-radius:100%" />

            <br />
            <br />
            <br />
        </div>



        <div class="col-md-4">

            <div class="col-md-12 ">
                <div class="card ">
                    <div class="card-header card-header-rose card-header-icon" >
                        <div class="card-icon "style="background:#017c36">
                            <i class="material-icons">phone</i>
                        </div>
                        <h4 class="card-title">Search by Phone</h4>
                    </div>
                    <div class="card-body ">
                        <div method="post" action="{{route("DoLoadVerification2")}}">
                            @csrf
                            <div class="form-group bmd-form-group">
                                <label for="exampleEmail" class="bmd-label-floating">Enter Phone Number</label>
                                <input type="text" name="data" class="form-control data" id="phone_id">
                                <input type="hidden" name="searchType" value="phone" class="form-control"
                                       id="examepleEmail" required>
                            </div>


                            <div class="card-footer ">
                                <button id="submit_btn2" onclick="verify2()" class="btn btn-fill
                                btn-rose" style="background:#b43727;border-color: #b43727">Submit
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


            <div class="col-md-12 ">
                <div class="card ">
                    <div class="card-header card-header-rose card-header-icon">
                        <div class="card-icon" style="background:#017c36">
                            <i class="material-icons">house</i>
                        </div>
                        <h4 class="card-title">Search by NIN</h4>
                    </div>
                    <div class="card-body ">
                        <div method="post" action="{{route("DoLoadVerification2")}}">
                            @csrf
                            <div class="form-group bmd-form-group">
                                <label for="exampleEmail" class="bmd-label-floating">Enter NIN ID</label>
                                <input type="text" name="data" class="form-control data" id="nin_id">
                                <input type="hidden" name="searchType" value="nin" class="form-control"
                                       id="examepleEmail" required>
                            </div>


                            <div class="card-footer ">
                                <button id="submit_btn" onclick="verify2()" class="btn btn-fill
                                btn-rose" style="background:#b43727;border-color: #b43727">Submit
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="card" id="dataView" style="display: none;" >
                <div class="card-header card-header-icon card-header-rose">
                    <div class="card-icon" style="background:#017c36">
                        <i class="material-icons">perm_identity</i>
                    </div>
                    <h4 class="card-title">Profile Data -
                        <small class="category"></small>
                    </h4>
                </div>
                <div class="card-body">
                    <div>
                        <div class="row">


                            <div class="col-md-12">
                                <label class="">First Name</label>
                                <input type="text" class="form-control" value="" id="first_name"/>

                            </div>

                            <div class="col-md-12">
                                <label class="">Last Name</label>
                                <input type="text" class="form-control" value="" id="last_name"/>

                            </div>


                            <div class="col-md-12">
                                <label class="">Date of Birth </label>
                                <input type="text" class="form-control" value="" id="dob"/>

                            </div>

                            <div class="col-md-12">
                                <label class="">Gender </label>
                                <input type="text" class="form-control" value="" id="gender"/>

                            </div>

                            <div class="col-md-12">
                                <label class="">NIN </label>
                                <input type="text" class="form-control" value="" id="nin"/>

                            </div>

                            <div class="col-md-12">
                                <label class="">Document Number </label>
                                <input type="text" class="form-control" value="" id="doc_number"/>

                            </div>

                            <div class="col-md-12">
                                <label class="">Residence address
                                </label>
                                <input type="text" class="form-control" value="" id="residence"/>

                            </div>

                            <div class="col-md-12">
                                <label class="">Signature
                                </label><br/>
                                <img src="/no-thumbnail.jpg" class="img-responsive img-thumbnail" style="width:100px;"
                                     id="signature"/>


                                <hr/>
                            </div>


                            <div class="col-md-12">
                                <label class="">Telephone Number
                                </label>
                                <input type="text" class="form-control" value="" id="phone"/>

                            </div>

                            <div class="col-md-12">
                                <label class="">Email Address
                                </label>
                                <input type="text" class="form-control" value="" id="email"/>

                            </div>







                            <div class="card-footer ">
                                <button onclick="addToManifest()" class="btn btn-fill btn-rose" style="background:#b43727;border-color: #b43727">Add to Manifest</button>
                            </div>


                        </div>


                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-8">


            <div class="col-md-12">
                <div class="card" >
                    <div class="card-header card-header-rose card-header-icon">
                        <div class="card-icon" style="background:#017c36">
                            <i class="material-icons">assignment</i>
                        </div>
                        <h4 class="card-title">Manifest Data</h4>
                    </div>
                    <div class="card-body">
                        <div class="toolbar">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="col-md-12">
                                        <div class="form-group bmd-form-group">
                                            <label for="exampleEmail" class="bmd-label-floating">Name of Vehicle</label>
                                            <input type="text" class="form-control" id="exampleEmail">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group bmd-form-group">
                                            <label for="exampleEmail" class="bmd-label-floating">Type of Vehicle</label>
                                            <input type="text" class="form-control" id="exampleEmail">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group bmd-form-group">
                                            <label for="exampleEmail" class="bmd-label-floating">Color</label>
                                            <input type="text" class="form-control" id="exampleEmail">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group bmd-form-group">
                                            <label for="exampleEmail" class="bmd-label-floating">Registration Number</label>
                                            <input type="text" class="form-control" id="exampleEmail">
                                        </div>
                                    </div>

                                    <br />
                                    <br />

                                    <div class="col-md-12">
                                        <div class="form-group bmd-form-group">
                                            <label for="exampleEmail" class="bmd-label-floating">Engine No</label>
                                            <input type="text" class="form-control" id="exampleEmail">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group bmd-form-group">
                                            <label for="exampleEmail" class="bmd-label-floating">Chasis Number</label>
                                            <input type="text" class="form-control" id="exampleEmail">
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="col-md-12">
                                        <div class="form-group bmd-form-group">
                                            <label for="exampleEmail" class="bmd-label-floating">Drivers Name</label>
                                            <input type="text" class="form-control" id="exampleEmail">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group bmd-form-group">
                                            <label for="exampleEmail" class="bmd-label-floating">Address</label>
                                            <input type="text" class="form-control" id="exampleEmail">
                                        </div>
                                    </div>

                                    <br />
                                    <br />

                                    <div class="col-md-12">
                                        <div class="form-group bmd-form-group">
                                            <label for="exampleEmail" class="bmd-label-floating">Departure Point</label>
                                            <input type="text" class="form-control" id="exampleEmail">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group bmd-form-group">
                                            <label for="exampleEmail" class="bmd-label-floating">Destination</label>
                                            <input type="text" class="form-control" id="exampleEmail">
                                        </div>
                                    </div>


                                    <div class="col-md-12">
                                        <div class="form-group bmd-form-group">
                                            <label for="exampleEmail" class="bmd-label-floating">Departure Time </label>
                                            <input type="text" class="form-control" id="exampleEmail">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group bmd-form-group">
                                            <label for="exampleEmail" class="bmd-label-floating">Arrival Time Number</label>
                                            <input type="text" class="form-control" id="exampleEmail">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group bmd-form-group">
                                            <label for="exampleEmail" class="bmd-label-floating">Date</label>
                                            <input type="text" class="form-control" id="exampleEmail">
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!--        Here you can write extra buttons/actions for the toolbar              -->
                        </div>
                        <div class="material-datatables">
                            <div id="datatables_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6"></div>
                                    <div class="col-sm-12 col-md-6">
                                        <div id="datatables_filter" class="dataTables_filter"><label><span class="bmd-form-group bmd-form-group-sm"></span></label></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="datastables" class="table table-striped table-no-bordered table-hover dataTable dtr-inline" cellspacing="0" width="100%" style="width: 100%;"
                                               role="grid" aria-describedby="datatables_info">
                                            <thead>
                                            <tr role="row">




                                                <th class="sorting_asc" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 283px;" aria-sort="ascending"
                                                    aria-label="Name: activate to sort column descending">Name
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 412px;"
                                                    aria-label="Position: activate to sort column ascending">Address
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 213px;"
                                                    aria-label="Office: activate to sort column ascending">Sex
                                                </th>

                                                <th class="sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 184px;"
                                                    aria-label="Date: activate to sort column ascending">Destination
                                                </th>

                                                <th class="sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 184px;"
                                                    aria-label="Date: activate to sort column ascending">Name of Next of Kin
                                                </th>

                                                <th class="text-right" rowspan="1" colspan="1">Address/Telephone  of next of Kin</th>

                                                <th class="disabled-sorting text-right sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 328px;"
                                                    aria-label="Actions: activate to sort column ascending">Actions
                                                </th>
                                            </tr>
                                            </thead>
                                            <tfoot>
                                            <tr>
                                                <th rowspan="1" colspan="1">Name</th>
                                                <th rowspan="1" colspan="1">Position</th>
                                                <th rowspan="1" colspan="1">Office</th>
                                                <th rowspan="1" colspan="1">Age</th>
                                                <th rowspan="1" colspan="1">Age</th>
                                                <th rowspan="1" colspan="1">Start date</th>
                                                <th class="text-right" rowspan="1" colspan="1">Actions</th>
                                            </tr>
                                            </tfoot>
                                            <tbody id="manifest_data">





                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-5"></div>
                                    <div class="col-sm-12 col-md-7">
                                        <button id="manBtn" class="btn btn-fill btn-rose" style="display:none;background:#b43727;border-color: #b43727">Submit Manifest</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end content-->
                </div>
                <!--  end card  -->
            </div>


        </div>


    </div>


    <!--  end card  -->


    <!-- end col-md-12 -->
</div>


<script>


    function clearAll() {


        $('#first_name').val("");
        $('#last_name').val("");
        $('#middle_name').val("");
        $('#dob').val("");
        $('#gender').val("");
        $('#nin').val("");
        $('#doc_number').val("");
        $('#residence').val("");
        $('#signature').attr("src", "/no-thumbnail.jpg");
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


    function verify() {


        var nin = $('#nin_id').val();


        if (nin != "") {

            //var userData = JSON.parse(localStorage.getItem('authuser'));

            NProgress.start()
            $("#submit_btn").html("<i class='fa fa-spinner fa-spin'></i>...FETCHING DATA")

            var formData = {

                'data': nin,
                'searchType': "nin",
            };

            //alert("I got here");

            $.ajax({
                type: 'POST', // define the type of HTTP verb we want to use (POST for our form)
                url: '/organisation/nin/verify3', // the url where we want to POST
                data: formData,
                // dataType    : 'json', // what type of data do we expect back from the server
                encode: true
            })

            //  NProgress.start()
            // using the done promise callback
                .done(function (data) {

                    // alert("I dididid")
                    // log data to the console so we can see
                    // console.log("I got here too just now");
//
//                    //if number is on kingschat then process
                    if (data.status) {

                        NProgress.done();
                        $.notify(data.message, {
                            className: 'success', autoHide: true,
                        });


                        $("#submit_btn").html("SUBMIT");
                        $("#dataView").show(500);

                        $('#nin_id').val("");


                        $('#first_name').val(data.data.firstname);
                        $('#last_name').val(data.data.surname);
                        $('#middle_name').val(data.data.middlename);
                        $('#dob').val(data.data.birthdate);
                        $('#gender').val(data.data.gender);
                        $('#nin').val(data.data.nin);
                        $('#doc_number').val(data.data.documentno);
                        $('#residence').val(data.data.residence_AdressLine1);
                        $('#signature').attr("src", "data:image/png;base64, " + data.data.signature);
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


                    } else {
                        NProgress.done();
                        $.notify(data.message, {
                            className: 'error', autoHide: false,
                        });
                        $("#submit_btn").html("SUBMIT");

                    }

                    // here we will handle errors and validation messages
                });
        } else {
            $.notify("All fields are compulsory", {
                className: 'error',
                autoHide: true,
            });
        }


    }


    function verify2() {


        var nin = $('.data').val();


        if (9 > 1) {

            //var userData = JSON.parse(localStorage.getItem('authuser'));

            NProgress.start()

            $.notify("...FETCHING DATA", {
                className: 'success', autoHide: true,
            });



            var formData = {

                'data': nin,
                'searchType': "phone",
            };

            //alert("I got here");

            $("#dataView").hide(500);

            $.ajax({
                type: 'GET', // define the type of HTTP verb we want to use (POST for our form)
                url: 'https://randomuser.me/api/', // the url where we want to POST
                data: formData,
                // dataType    : 'json', // what type of data do we expect back from the server
                encode: true
            })

            //  NProgress.start()
            // using the done promise callback
                .done(function (data) {

                    // alert("I dididid")
                    // log data to the console so we can see
                    // console.log("I got here too just now");
//
//                    //if number is on kingschat then process
                    if (data.results) {

                        console.log(data.results);

                        NProgress.done();
                        $.notify("Success", {
                            className: 'success', autoHide: true,
                        });






                        $("#dataView").show(500);
                        $("#submit_btn2").html("SUBMIT");

                        $('#nin_id').val("");


                        $('#first_name').val(data.results[0].name.first);
                        $('#last_name').val(data.results[0].name.last);

                        $('#dob').val(data.results[0].dob.date);
                        $('#gender').val(data.results[0].gender);
                        $('#nin').val(data.results[0].cell);
                        $('#doc_number').val(data.info.seed);
                        $('#residence').val(data.results[0].location.street.number+" "+data.results[0].location.street.name+", Lagos Nigeria");
                        $('#signature').attr("src",data.results[0].picture.medium);
                        $('#phone').val(data.results[0].phone);
                        $('#email').val(data.results[0].email);

                        $('#birth_lga').val("Umuahia North");
                        $('#birth_state').val("Uyo");


                    } else {
                        NProgress.done();
                        $.notify(data.message, {
                            className: 'error', autoHide: false,
                        });
                        $("#submit_btn2").html("SUBMIT");

                    }

                    // here we will handle errors and validation messages
                });
        } else {
            $.notify("All fields are compulsory", {
                className: 'error',
                autoHide: true,
            });
        }


    }


    function addToManifest(){



        var name =   $('#first_name').val()+ " "+ $('#last_name').val();
        var address =   $('#residence').val();
        var sex =   $('#gender').val();
        var phone =  $('#phone').val();
        var destination = $('#residence').val();





        var manData = ` <tr role="row" class="odd">
            <td tabindex="0" class="sorting_1">${name}</td>
        <td>${address}</td>
        <td>${sex}</td>
        <td>${destination}</td>
        <td>${name}</td>
        <td>${phone}</td>
        <td class="text-right">
            <a href="#" class="btn btn-link btn-danger btn-just-icon remove"><i class="material-icons">close</i></a>
            </td>
            </tr>`

        $("#manifest_data").append(
            manData
        )

        $.notify("Data Added", {
            className: 'success', autoHide: true,
        });



        $("#phone_id").val("")
        $("#nin_id").val("")
        $("#dataView").hide(500);

        $("#manBtn").show(500);

        window.location.href="#manifest_data"



    }


</script>
@endsection
