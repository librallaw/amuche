<?php

namespace App\Http\Controllers;

use App\Libraries\Messenger;
use App\Models\Accountlog;
use App\Models\User;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public $active ="dashboard";


    public function index()
    {
        return view('dashboard');
    }


    public function showDashboard(Messenger $messenger)
    {

        //dd(Auth::user()->level );

       // dd(Session::get('user')[0]["token"]);

        if(Auth::user()->level == 1 || Auth::user()->level == 2) {

            if(Auth::user()->level == 1){

                $level = 2;

                $builder = User::select("users.id","name","phone","email","sub_unique_id","access","level","username","active","access_level","email_verified_at","users.unique_id","balance","plain","users.created_at","users.updated_at")->where("level",$level)->orderBy("name","asc")->leftJoin("wallets","users.unique_id","=","wallets.unique_id");

                $data['organisation'] =  User::where("level",$level)->leftJoin("wallets","users.unique_id","=","wallets.unique_id")->take(5)->orderBy("users.id","desc")->get();

            }

            if(Auth::user()->level == 2){

                $level = 3;

                $builder = User::select("users.id","name","phone","email","sub_unique_id","access","level","username","active","access_level","email_verified_at","users.unique_id","balance","plain","users.created_at","users.updated_at")->where("level",$level)->where("sub_unique_id",Auth::user()->unique_id)->orderBy("name","asc")->leftJoin("wallets","users.unique_id","=","wallets.unique_id");

                $data['organisation'] =  User::where("level",$level)->where("sub_unique_id",Auth::user()->unique_id)->leftJoin("wallets","users.unique_id","=","wallets.unique_id")->take(5)->orderBy("users.id","desc")->get();
            }



            //dd($data['organisation']);


            $data['total'] = $builder->count();
            $data['active'] = $builder->where("active",1)->count();
            $data['inactive'] = $builder->where("active",0)->count();

            $data['users'] = $builder->paginate(10);



          //  $messenger->log(Auth::user()->unique_id,"View all Organisation ", Auth::user()->unique_id,"success",1);



        }

        
        if(Auth::user()->level == 1) {

            $data['success'] = Accountlog::where("action","Verify")->where("status",1)->count();
            $data['failed'] = Accountlog::where("action","Verify")->where("status",0)->count();
            $data['total_v'] = Accountlog::where("action","Verify")->count();




            $data['balance'] = Wallet::sum("balance");

            return view("home.dashboard", $data);
        }

        if(Auth::user()->level == 2) {

            $data['balance'] = Wallet::where("unique_id", Auth::user()->unique_id)->first()->balance;

            return view("home.dashboard2", $data);
        }


        if(Auth::user()->level == 3) {


            $data['balance'] = Wallet::where("unique_id", Auth::user()->unique_id)->first()->balance;


            //dd($data['balance']);


            return view("home.dashboard2",$data);
        }
    }
}
