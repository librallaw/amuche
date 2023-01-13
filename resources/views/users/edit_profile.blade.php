@extends('layout')
@section('title','Follow Up List')
@section('content')
  <div class="contentbar">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-8 offset-2">
          <div class="card">
            <div class="card-header card-header-icon card-header-rose">
              <div class="card-icon">
                <i class="material-icons">perm_identity</i>
              </div>
              <h4 class="card-title"><h2 style="color:black;">Edit Profile </h2>
                {{--<small class="category">Complete your profile</small>--}}
              </h4>
            </div>
            <div class="card-body">

              <form method="POST"
                    action=""
                    {{--action="{{route('/member/profile/edit/'.$user->id)}}"--}}
                    enctype="form-data">
                {{--{{method_field('PATCH')}}--}}
                @csrf


                <div class="row">

                </div>
                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <label class="bmd-label-floating">Title</label>
                      <select name="title" value="{{$user->title}}" id="">
                        <option value="{{$user->title}}">{{$user->title}}</option>
                        <option value="Pastor">Pastor</option>
                        <option value="Brother">Brother</option>
                        <option value="Sister">Sister</option>

                      </select>
                      {{--<input type="text" class="form-control">--}}
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="form-group">
                      <label class="bmd-label-floating">Gender</label>
                      <select name="gender" value="{{$user->gender}}" id="">
                        <option value="{{$user->gender}}">{{$user->gender}}</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>


                      </select>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Full Name</label>
                      <input type="text" name="full_name" value="{{$user->full_name}}" class="form-control">
                    </div>
                  </div>
                {{--</div>--}}

                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Birthday</label>
                      <input type="text" name="birth_date" value="{{$user->birth_date}}" class="form-control">
                    </div>
                  </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="bmd-label-floating">Phone No</label>
                        <input type="phone" name="phone_number" value="{{$user->phone_number}}" class="form-control">
                      </div>
                    </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Email</label>
                      <input type="email" name="email" value="{{$user->email}}" class="form-control">
                    </div>
                  </div>


                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Marital Status</label>
                      <input type="text" value="{{$user->marital_status}}" name="marital_status" class="form-control">
                    </div>
                  </div>


                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Group Assign</label>
                      <input type="text" value="{{$user->group_assigned}}" name="group_assigned" class="form-control">
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Address</label>
                      <input type="text" value="{{$user->home_address}}" name="home_address" class="form-control">
                    </div>
                  </div>
                </div>


                <button type="submit" class="btn btn-rose pull-right">Update Profile</button>
                <div class="clearfix"></div>
              </form>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
     @endsection