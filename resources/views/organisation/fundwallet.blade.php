@extends('layout')
@section('title',"Finance ")
@section('page',"Fund Wallet")
@section('content')

    <!-- End Navbar -->

    <div class="contentbar">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-4">

                <div class="card m-b-30">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-5">
                                <span class="action-icon badge badge-primary-inverse mr-0"><i class="fa fa-money"></i></span>
                            </div>
                            <div class="col-7 text-right">
                                <h5 class="card-title font-14">Wallet Balance</h5>
                                <h4 class="mb-0">{{$balance}}</h4>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer"></div>
                </div>



                <div class="col-md-12">


                    <div class="card ">
                        <div class="card-header card-header-icon card-header-rose">
                            <div class="card-icon">
                                <i class="bx bxs-user-badge" style="font-size: 35px"></i>
                            </div>
                            <h4 class="card-title ">Fund Wallet
                                <i class="fa fa-money-bill-alt" style="color: #ffffff"> </i>
                            </h4>


                        </div>

                        <div class="card-body ">
                            @include("alert")
                            <div class="row" style="">









                                <div class="col-md-12">

                                    <div class="col-md-12">

                                        <div class="card card-pricing">





                                            <div class="card-body">




                                                <form method="post" action="">

                                                    @csrf
                                                    <div class="form-group">
                                                        <label class="form-label">Amount<small></small></label>
                                                        <input type="number"  name="credit" min="4" class="form-control"
                                                               id="amdcrd" value="4" required>
                                                    </div>



                                                    <button type="submit" class="btn btn-success" > Top Up</button>

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

@endsection

{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>--}}

<script src="https://unpkg.com/nprogress@0.2.0/nprogress.js"></script>




<!-- Sharrre libray -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script src="https://js.paystack.co/v1/inline.js"></script>



