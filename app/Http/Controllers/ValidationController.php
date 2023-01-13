<?php

namespace App\Http\Controllers;

use App\Models\Ipe_error;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;


class ValidationController extends Controller
{
    //

    public function showAddIpe()
    {

        return view("validation.add");
    }


    public function doReceiveIpes(Request $request)
    {

        $request -> validate([
            'tracking_id' => 'required'
        ]);


       $data['ids'] = $request -> tracking_id;
       $data['balance'] =  Wallet::where("unique_id", Auth::user()->unique_id) -> first()->balance;

       return view("validation.confirm",$data);
    }



    public function doProcessIpes(Request $request)
    {

        //9 is pending
        //1 is done
        //0 is failed

        $request -> validate([
            'tracking_id' => 'required'
        ]);


        $tracking_id = $request->tracking_id;

        $total = count($tracking_id);
        $wallet =  Wallet::where("unique_id",Auth::user()->unique_id)->first();
        $balance = $wallet->balance;


        if($total > $balance){

            return Redirect::route("showAddIpe")->with("Message","Insufficient Balance")->with("type","danger");

        }else{

            $wallet -> balance = $balance - $total;
            $wallet -> save();



            foreach ($tracking_id as $track){

               $ipe = new Ipe_error();

               $ipe -> ipe = $track;
               $ipe -> unique_id =  Auth::user()->unique_id;
               $ipe -> status = 9;

               $ipe -> save();
            }
        }


        return Redirect::route("showAddIpe")->with("message","You succesfully submitted a total of $total IPE(s)")->with("type","success");


    }


    public function showIpes()
    {
        $data['ipes'] = Ipe_error::where("unique_id",Auth::user()->unique_id) -> paginate(20);
        return view("validation.allipe",$data);
    }



}
