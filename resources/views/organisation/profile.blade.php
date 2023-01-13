@extends('layout')
@section('title',$account->name." Profile")
@section('page',$account->name." Profile")
@section('content')

    <div class="contentbar">
        <!-- Start row -->
        <div class="row">
            <!-- Start col -->
            <!-- End col -->
            <!-- Start col -->
            <div class="col-lg-7 col-xl-9">
                <div class="tab-content" id="v-pills-tabContent">

                    @include("alert")
                    <!-- Dashboard Start -->
                    <div class="tab-pane fade show active" id="v-pills-dashboard" role="tabpanel" aria-labelledby="v-pills-dashboard-tab">
                        <div class="card m-b-30">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Dashboard</h5>
                            </div>
                            <div class="card-body">
                                <div class="profilebox py-4 text-center">
                                    <img src="/assets/images/users/profile.svg" class="img-fluid mb-3" alt="profile">
                                    <div class="profilename">
                                        <h5>{{$account->name}}</h5>
                                        <p class="text-muted my-3">


                                                @if($account->active == 0)
                                                <a href="{{route("ActivateOrganisation",['orgid'=> $account->unique_id])}}"><button class="btn btn-success">Activate Account</button></a> @endif


                                                    @if($account->active == 1)
                                                        <a href="{{route("ActivateOrganisation",['orgid'=> $account->unique_id])}}"><button class="btn btn-danger">Deactivate Account</button></a> @endif
                                        </p>
                                    </div>
                                    <div class="button-list"></div>
                                </div>
                            </div>
                        </div>
                        <!-- Start row -->
                        <div class="row">
                            <!-- Start col -->
                            <div class="col-lg-12 col-xl-4">
                                <div class="card m-b-20">
                                    <div class="card-body">
                                        <div class="ecom-dashboard-widget">
                                            <div class="media">
                                                <i class="feather icon-credit-card"></i>
                                                <div class="media-body">
                                                    <h5>Wallet</h5>
                                                    <p> {{$account->balance}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End col -->
                            <!-- Start col -->
                            <div class="col-lg-12 col-xl-4">
                                <div class="card m-b-20">
                                    <div class="card-body">
                                        <div class="ecom-dashboard-widget">
                                            <div class="media">
                                                <i class="fa fa-check"></i>
                                                <div class="media-body">
                                                    <h5> Success Verifications </h5>
                                                    <p>{{$success}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End col -->
                            <!-- Start col -->
                            <div class="col-lg-12 col-xl-4">
                                <div class="card m-b-20">
                                    <div class="card-body">
                                        <div class="ecom-dashboard-widget">
                                            <div class="media">
                                                <i class="fa fa-times-circle"></i>
                                                <div class="media-body">
                                                    <h5> Failed Verifications</h5>
                                                    <p>{{$failed}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End col -->
                        </div>
                        <!-- End row -->
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card m-b-30">
                                <div class="card-header">
                                    <h5 class="card-title">Credit Wallet</h5>
                                </div>
                                <div class="card-body">
                                    <h6 class="card-subtitle">Requires Logged in password</h6>



                                    <form method="post" action="{{route("doCreditWallet")}}">
                                        @csrf
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Amount</label>
                                            <input type="number" name="amount" min="1" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">

                                            <input type="hidden"
                                                   name="orgid" value="{{$account->unique_id}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Password</label>
                                            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                        </div>

                                        <button type="submit" class="btn btn-primary">Top Up</button>
                                    </form>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-6">
                            <div class="card m-b-30">
                                <div class="card-header">
                                    <h5 class="card-title">Deduct Wallet</h5>
                                </div>
                                <div class="card-body">
                                    <h6 class="card-subtitle">Requires Logged in password</h6>
                                    <form method="post" action="{{route("doWithdrawWallet")}}">
                                        @csrf
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Amount</label>
                                            <input type="number" name="amount" min="1" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">

                                            <input type="hidden"
                                                   name="orgid" value="{{$account->unique_id}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Password</label>
                                            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                        </div>

                                        <button type="submit" class="btn btn-primary">Withdraw </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Dashboard End -->
                    <!-- My Orders Start -->
                    <div class="stab-pane fadse" id="v-pills-ordesr" role="tabpanel" aria-labelledby="v-pills-order-tab">
                        <div class="card m-b-30">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Verification Logs </h5>
                            </div>
                            <div class="card-body">
                                <div class="order-box">
                                    <div class="card border m-b-30">
                                        <div class="card-header">
                                            <div class="row align-items-center">

                                                <div class="col-sm-6">
                                                    <h6 class="mb-0">Total : <strong>{{$total}}</strong></h6>
                                                </div>
                                            </div>
                                        </div>
                                        @if(count($logs) > 0)
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-borderless">

                                                    <thead>
                                                    <tr>
                                                        <th>S/N</th>
                                                        <th>Action</th>
                                                        <th>Response/Request</th>
                                                        <th>status</th>
                                                        <th>Time</th>

                                                    </tr>
                                                    </thead>
                                                    <tbody>

                                                    @php $x = 1; @endphp
                                                    @foreach($logs as $log)

                                                        <tr>
                                                            <td>{{$x++ }}</td>
                                                            <td>{{$log->action}}</td>
                                                            <td>{{$log->message}}</td>
                                                            <td><div class="alert alert-{{($log->status == 1?"success":"danger")}}" >{{($log->status?"Success":"Failed")}}</div></td>
                                                            <td>{{$log->created_at->diffForHumans()}}</td>

                                                        </tr>
                                                    @endforeach


                                                    </tbody>

                                                </table>
                                            </div>
                                        </div>

                                        @endif
                                        <div class="card-footer">
                                            <div class="row align-items-center">
                                                {{$logs->links()}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- My Logout End -->
                </div>
            </div>
            <!-- End col -->
        </div>
        <!-- End row -->
    </div>

    <!-- End Navbar -->



    </div>
    </div>

@endsection

@section("extra_script")
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    jQuery("#buttoner").click(function () {


        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-success',
                cancelButton: 'btn btn-danger'
            },
            buttonsStyling: false
        })

        swalWithBootstrapButtons.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {

                window.location.href="{{route('deleteOrganisation',['orgid'=>$account->unique_id])}}"
                swalWithBootstrapButtons.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                )
            } else if (
                /* Read more about handling dismissals below */
                result.dismiss === Swal.DismissReason.cancel
            ) {
                swalWithBootstrapButtons.fire(
                    'Cancelled',
                    'I thought so too :)',
                    'error'
                )
            }
        })
    })
</script>

@endsection

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>

<script src="https://unpkg.com/nprogress@0.2.0/nprogress.js"></script>


<!-- Sharrre libray -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script src="https://js.paystack.co/v1/inline.js"></script>




