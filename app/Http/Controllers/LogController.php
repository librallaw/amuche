<?php

namespace App\Http\Controllers;

use App\Models\Accountlog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogController extends Controller
{
    //

    public function showAccountVerfiyLog($user)
    {

        $builder = Accountlog::where("unique_id",$user)->where("action","Verify");
        $data['sum'] = $builder->count();

        $data['logs'] = $builder->orderBy("id","desc")->paginate(10);
        $data['name'] = "Verification";
        $data['user'] = $user;


        return view("logs.adminlogs",$data);

    }


    public function showTopUpLog($user)
    {

        $builder = Accountlog::where("trigger",$user)->where("action","Topup");
        $data['sum'] = $builder->count();

        $data['logs'] = $builder->orderBy("id","desc")->paginate(10);

        $data['name'] = "Top Up";
        $data['user'] = $user;



        return view("logs.adminlogs",$data);

    }
}
