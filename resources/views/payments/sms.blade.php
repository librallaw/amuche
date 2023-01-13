@extends('layout')
@section('title','sms')
@section('content')

    <!-- End Navbar -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">



                <div class="col-md-10 offset-1">


                    <div class="card ">
                        <div class="card-header card-header-icon card-header-rose">
                            <div class="card-icon">
                                <i class="material-icons">table_chart</i>
                            </div>
                            <h4 class="card-title "> SMS
                                <small class="description" style="color: #ffffff"> HUB</small>
                            </h4>
                        </div>
                        <div class="card-body ">
                            <div class="row" style="margin-top:50px;">

                                <div class="col-md-12">
                                    <div class="alert alert-rose alert-dismissable" align="center">
                                        Note that each credit cost ₦2 (Two  Naira Only)
                                    </div>
                                </div>



                                <div class="col-lg-4 col-md-6">

                                    <div class="col-md-12">

                                        <div class="card card-pricing">

                                            <h6 class="card-category"> Available Credits</h6>




                                            <div class="card-body">
                                                <h3 class="">{{$credit->smscr}}</h3>
                                            </div>


                                        </div>


                                    </div>



                                    <div class="col-md-12">

                                        <div class="card card-pricing">



                                            <div class="alert alert-rose">Buy More Credits</div>

                                            <div class="card-body">




                                                <div>
                                                    <div class="form-group bmd-form-group">
                                                        <label class="bmd-label-floating">Amount of credits</label>
                                                        <input type="number" min="0" class="form-control"
                                                               id="smscr-amountofcredits">
                                                    </div>


                                                    <script src="https://js.paystack.co/v1/inline.js"></script>
                                                    <div id="pricediv"></div>

                                                    <button type="button" class="btn btn-round btn-rose"
                                                            onclick="payWithPaystack('smscr')"> Buy </button>
                                                </div>
                                            </div>

                                        </div>


                                    </div>



                                </div>




                                <div class="col-md-8">

                                    <div class="col-md-12">

                                        <div class="card card-pricing">


                                            <div class="alert alert-rose">Tempate Messages</div>

                                            <div class="card-body">

                                                @include("alert")




                                                <div>
                                                    <form action="{{route("updateMessage")}}" method="post">
                                                    <div class="form-group bmd-form-group">
                                                        <label class="bmd-label-floating">Enter Message
                                                            </label>
                                                        <textarea type="number" min="0" class="form-control"
                                                                  name="message">{{$credit->sms_message}}</textarea>

                                                        <input type="hidden" name="type" value="smscr">

                                                    </div>
                                                        @csrf

                                                    <button class="btn btn-round btn-rose" type="submit">
                                                        Update </button>
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






                <div class="col-md-10 offset-1">


                    <div class="card ">
                        <div class="card-header card-header-icon card-header-rose">
                            <div class="card-icon">
                                <i class="material-icons">email</i>
                            </div>
                            <h4 class="card-title "> Email
                                <small class="description" style="color: #ffffff"> HUB</small>
                            </h4>
                        </div>
                        <div class="card-body ">
                            <div class="row" style="margin-top:50px;">

                                <div class="col-md-12">
                                    <div class="alert alert-rose alert-dismissable" align="center">
                                        Note that each credit cost ₦2 (Two  Naira Only)
                                    </div>
                                </div>



                                <div class="col-lg-4 col-md-6">

                                    <div class="col-md-12">

                                        <div class="card card-pricing">

                                            <h6 class="card-category"> Available Credits</h6>




                                            <div class="card-body">
                                                <h3 class="">{{$credit->emcr}}</h3>
                                            </div>


                                        </div>


                                    </div>



                                    <div class="col-md-12">

                                        <div class="card card-pricing">



                                            <div class="alert alert-rose">Buy More Credits</div>

                                            <div class="card-body">




                                                <div>
                                                    <div class="form-group bmd-form-group">
                                                        <label class="bmd-label-floating">Amount of credits</label>
                                                        <input type="number" min="0" class="form-control"
                                                               id="emcr-amountofcredits">
                                                    </div>


                                                    <script src="https://js.paystack.co/v1/inline.js"></script>
                                                    <div id="pricediv"></div>

                                                    <button type="button" class="btn btn-round btn-rose"
                                                            onclick="payWithPaystack('emcr')"> Buy </button>
                                                </div>
                                            </div>

                                        </div>


                                    </div>



                                </div>




                                <div class="col-md-8">

                                    <div class="col-md-12">

                                        <div class="card card-pricing">


                                            <div class="alert alert-rose">Email Template Messages</div>

                                            <div class="card-body">

                                                @include("alert")


                                                <div>
                                                    <form action="{{route("updateMessage")}}" method="post">
                                                        <div class="form-group bmd-form-group">
                                                            <label class="bmd-label-floating">Enter Message
                                                            </label>
                                                            <textarea  class="form-control"
                                                                      name="message">{{$credit->email_message}}</textarea>

                                                            <input type="hidden" name="type" value="emcr">

                                                        </div>
                                                        @csrf

                                                        <button class="btn btn-round btn-rose" type="submit">
                                                            Update </button>
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




                <div class="col-md-10 offset-1">


                    <div class="card ">
                        <div class="card-header card-header-icon card-header-rose">
                            <div class="card-icon">
                                <i class="material-icons">phone</i>
                            </div>
                            <h4 class="card-title "> Calls
                                <small class="description" style="color: #ffffff"> phone</small>
                            </h4>
                        </div>
                        <div class="card-body ">
                            <div class="row" style="margin-top:50px;">

                                <div class="col-md-12">
                                    <div class="alert alert-rose alert-dismissable" align="center">
                                        Note that each credit cost ₦2 (Two  Naira Only)
                                    </div>
                                </div>



                                <div class="col-lg-4 col-md-6">

                                    <div class="col-md-12">

                                        <div class="card card-pricing">

                                            <h6 class="card-category"> Available Credits</h6>




                                            <div class="card-body">
                                                <h3 class="">{{$credit->calcr}}</h3>
                                            </div>


                                        </div>


                                    </div>



                                    <div class="col-md-12">

                                        <div class="card card-pricing">



                                            <div class="alert alert-rose">Buy More Credits</div>

                                            <div class="card-body">




                                                <div>
                                                    <div class="form-group bmd-form-group">
                                                        <label class="bmd-label-floating">Amount of credits</label>
                                                        <input type="number" min="0" class="form-control"
                                                               id="calcr-amountofcredits">
                                                    </div>


                                                    <script src="https://js.paystack.co/v1/inline.js"></script>
                                                    <div id="pricediv"></div>

                                                    <button type="button" class="btn btn-round btn-rose"
                                                            onclick="payWithPaystack('calcr')"> Buy </button>
                                                </div>
                                            </div>

                                        </div>


                                    </div>



                                </div>




                                <div class="col-md-8">

                                    <div class="col-md-12">

                                        <div class="card card-pricing">


                                            <div class="alert alert-rose">Call Audio Message</div>

                                            <div class="card-body">

                                                @include("alert")


                                                <div>
                                                    <form action="{{route("updateAudioFile")}}" method="post"
                                                          enctype="multipart/form-data">
                                                        <div class="form-group bmd-form-group">
                                                            <label class="bmd-label-floating">Upload mp3 file
                                                            </label>

                                                            <div class="col-md-12 col-sm-12">



                                                                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                                                    <div class="fileinput-new thumbnail">
                                                                        @if(!empty($credit->call_message))
                                                                        <audio controls>
                                                                            <source src="{{$credit->call_message}}" type="audio/mpeg">
                                                                            Your browser does not support the audio element.
                                                                        </audio>
                                                                            @else
                                                                        <div class="alert alert-info">You have
                                                                            not set any message,Default
                                                                            Message will be used</div>
                                                                            <audio controls>
                                                                                <source src="https://demo.twilio.com/docs/classic.mp3" type="audio/mpeg">
                                                                                Your browser does not support the audio element.
                                                                            </audio>
                                                                            @endif
                                                                    </div>
                                                                    <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                                                    <div>
                          <span class="btn btn-rose btn-round btn-file">
                            <span class="fileinput-new">Select new file</span>
                            <span class="fileinput-exists">Change</span>
                            <input type="file" name="file" required />
                          </span>
                                                                        <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>

                                                                    </div>

                                                                </div>

                                                            </div>




                                                            <input type="hidden" name="type" value="calcr">

                                                        </div>
                                                        @csrf
                                                        <br />
                                                        <br />

                                                        <button type="submit" class="btn btn-rose">submit</button>


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


            </div>


        </div>
    </div>

@endsection

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>

<script src="https://unpkg.com/nprogress@0.2.0/nprogress.js"></script>




<!-- Sharrre libray -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script src="https://js.paystack.co/v1/inline.js"></script>
<script>

    $("#amountofcredits").onkeyup(function (){

    alert("sisiss");
    });

    function payWithPaystack(type){




        var credite = $('#'+type+'-amountofcredits').val();
        var required_amount = (credite * 2) * 100;

        if(credite !==''){
            NProgress.start();
            var handler = PaystackPop.setup({
                //key: 'pk_test_150c834486ba274657c0bb15d188d6eafd6cdd9a',
                key: '{{env("PAYSTACK_PUBLIC")}}',
                email: '{{Session::get('user')[0]["email"]}}',
                amount: required_amount,
                // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
                metadata: {
                    custom_fields: [
                        {
                            display_name: "Mobile Number",
                            variable_name: "mobile_number",
                            value: "+2348012345678"
                        }
                    ]
                },
                callback: function(response){

                     //console.log(response);
                    $.get("/payment/verify?type=smscr",
                        {
                            reference:response.reference,
                            amount:credite,
                            type:type
                        },
                        function(response){ // Required Callback Function
                            console.log(response);

                            if(response.status){
                                swal("Info!", response.message, "success");
                                window.location.href="/wallet/view"
                            }else{
                                swal("Info!", response.message, "error");
                            }
                            // alert(response.message);//"response" receives - whatever written in echo of above PHP script.
                            //  $("#form")[0].reset();
                        });
                    //window.location.href="/my-wallet"

                    NProgress.done();

                   // alert('success. transaction ref is ' + response.reference);
                },
                onClose: function(){
                    swal("Info!", "Payment was cancelled", "error");
                    NProgress.done();
                }
            });
            handler.openIframe();
        }else{
            alert("The amount field is Empty");
        }





    }



    $(document).ready(function () {


        $('#facebook').sharrre({
            share: {
                facebook: true
            },
            enableHover: false,
            enableTracking: false,
            enableCounter: false,
            click: function (api, options) {
                api.simulateClick();
                api.openPopup('facebook');
            },
            template: '<i class="fab fa-facebook-f"></i> Facebook',
            url: 'https://demos.creative-tim.com/material-dashboard-pro/examples/dashboard.html'
        });

        $('#google').sharrre({
            share: {
                googlePlus: true
            },
            enableCounter: false,
            enableHover: false,
            enableTracking: true,
            click: function (api, options) {
                api.simulateClick();
                api.openPopup('googlePlus');
            },
            template: '<i class="fab fa-google-plus"></i> Google',
            url: 'https://demos.creative-tim.com/material-dashboard-pro/examples/dashboard.html'
        });

        $('#twitter').sharrre({
            share: {
                twitter: true
            },
            enableHover: false,
            enableTracking: false,
            enableCounter: false,
            buttons: {
                twitter: {
                    via: 'CreativeTim'
                }
            },
            click: function (api, options) {
                api.simulateClick();
                api.openPopup('twitter');
            },
            template: '<i class="fab fa-twitter"></i> Twitter',
            url: 'https://demos.creative-tim.com/material-dashboard-pro/examples/dashboard.html'
        });

        // Facebook Pixel Code Don't Delete
        !function (f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function () {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window,
            document, 'script', '../../../connect.facebook.net/en_US/fbevents.js');

        try {
            fbq('init', '111649226022273');
            fbq('track', "PageView");

        } catch (err) {
            console.log('Facebook Track Error:', err);
        }

    });
</script>


