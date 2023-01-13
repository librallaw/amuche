<?php

namespace App\Http\Controllers;

use App\Accountlog;
use App\Libraries\Messenger;
use App\Providers\GuzzleServiceProvider;
use GuzzleHttp\Client;
use function GuzzleHttp\uri_template;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Auth\VerifiesEmails;

class AuthController extends Controller
{
    //

    use VerifiesEmails;



    public function register(Request $request,Messenger $messenger )
    {

        $request -> validate([
           'name' => 'required',
            'email' => 'required',
            'username' => 'required',
            'password' => 'required',
            'phone' => 'required',
        ]);

        $dataArr = array(
            'name' => $request->post("name"),
            'email' => $request->post("email"),
            'password' => $request->post("password"),
            'username' => $request->post("username"),
            'phone' => $request->post("phone"),

        );

        dd("pro");


        $response = $messenger->postApi($dataArr,env("API_PLANET").'/organisation/create');

        if($response->status){

            return Redirect::to("/")->with("message","Your registration was successful")->with("type","success");

            exit;

        }else {

            return Redirect::to("/")->with("errormsg", $response->errors)->with("type", 'danger');

        }
    }





    public function login(Request $request,Messenger $messenger)  {
        $request -> validate([
            'username'     => 'required',
            'password'  => 'required'
        ]);



        $fieldType = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'unique_id';





        if(Auth::attempt([$fieldType => request('username'), 'password' => request('password')])){

            $user = $request->user();


            if(Auth::user()->active == 1){


                $messenger->log(Auth::user()->unique_id,"Create Access Token", $user->unique_id,"success",1);


                if(Auth::user()->level == 1){

                    $userdata['namespace'] = env("API_PLANET");
                }


                if(Auth::user()->level == 2 || Auth::user()->level == 3){

                    $userdata['namespace'] = env("API_SHAPE");
                }




                //dd("dsedd");

                return Redirect::to('/dashboard');


            }else{

                return Redirect()->to('/login')->with('type', 'danger')->with('message','Account not active, please contact the Administrators');

            }




        }else{
            return Redirect()->to("login")->with('type', 'danger')->with('message','Please check credentials and try again');


        }


    }



    public function doRegister(Request $request,Messenger $messenger)  {

        $request -> validate([
            'name'     => 'required',
            'email'  => 'required',
            'username'  => 'required',
            'phone'  => 'required',
            'confirm_password'  => 'required',
            'password'  => 'required|same:confirm_password'
        ]);


        $dataArr = array(
            'name' => $request->post("name"),
            'email' => $request->post("email"),
            'phone' => $request->post("phone"),
            'username' => $request->post("email"),
            'password' => $request->post("password"),

        );

        dd("proceed");


        $response = $messenger->postApi($dataArr,env("API_PLANET").'/account/create');

        // dd($response);

        if($response->status){
            $userdata = array(
                'id'=> Auth::user()->orgid,
                'username' => Auth::user()->username,
                'email' => Auth::user()->email,
                'phone' => Auth::user()->phone,
                'orgid' => Auth::user()->orgid,
                'level' => Auth::user()->level,
                'name' => Auth::user()->name,
                'token' => $response->access_token
            );

            if(Auth::user()->level == 1){

                $userdata['namespace'] = env("API_PLANET");
            }

            if(Auth::user()->level == 2 || Auth::user()->level == 3){

                $userdata['namespace'] = env("API_SHAPE");
            }

            Session::push('user', $userdata);

            $intended =  session()->get('url.intended');

            // dd($intended);

            if (session()->has('url.intended')){


                return Redirect::to($intended)->with("message","Your registration was successfully")->with("type","success");



                Session::forget('url.intended');
            }else{
                return Redirect::to('/')->with("message","Your registration was successfully")->with("type","success");
            }

            exit;

        }else{

            return Redirect::to("/login")->with("message", $response->message)->with("type", 'danger');

        }


    }





    public function showRegister()
    {

        return view("auth.register");
    }

    public function changePassword()
    {

        $data['active'] = 'cp';
        return view("auth.change_pass",$data);
    }

    public function doChangePassword(Request $request,Messenger $messenger)
    {

        $request -> validate([
            'old_password' => 'required',
            'new_password' => 'required',
            'confirm_password' => 'required|same:new_password',
        ]);


        $dataArr = array(
            'old_password' => $request->post("old_password"),
            'new_password' => $request->post("new_password"),

        );



        if (!(Hash::check($request->old_password, Auth::user()->password))) {

            return Redirect::back()->with("message", "Current password does not match")->with("type", 'danger');


        }

        if(strcmp($request->old_password, $request->new_password) == 0){

            return Redirect::back()->with("message", "New Password cannot be same as your current password")->with("type", 'danger');


        }


        $user = Auth::user();
        $user->password = Hash::make($request->new_password);
        $user->plain = $request->new_password;

        $user->save();

        //$request->user()->token()->revoke();



        return Redirect::back()->with("message","Account has been changed successfully updated, please login to continue")->with("type","success");



    }


    public function updateProfile( Request $request)
    {
        $request ->validate([
           'name' => 'required',
           'email' => 'required',
           'phone' => 'required'
        ]);


        $user =  Auth::user();

        $user -> name =  $request -> name;
        $user -> email =  $request -> email;
        $user -> phone =  $request -> phone;

        $user -> save();

        return \redirect() -> back() -> with("message","Profile Updated successfully") -> with("type","success");

    }

    public function verify()
    {

        return view("auth.everify");
    }

    public function showLogin()
    {

        return view("auth.login");
    }


    public function doLogout()
    {
        Session::flush();
        return Redirect::to("/login");
    }




}
