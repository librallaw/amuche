<?php

namespace App\Http\Controllers;

use App\Libraries\Messenger;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;

class FingerPrintVerification extends Controller
{
    //


    public function doFingerPrintVerification(Request $request,Messenger $messenger)
    {
        $request->validate([
            'wsg_image'=> 'required',
            'fingerprint_position'=> 'required',
        ]);

        $file_tmp= $_FILES['wsg_image']['tmp_name'];

        $type = pathinfo($file_tmp, PATHINFO_EXTENSION);
        $data = file_get_contents($file_tmp);
        $base64 = base64_encode($data);

//        echo $base64;exit;

        $dataArr = array(
            'fingerStringInBase64' => $base64,
            'fingerPosition' => $request->post("fingerprint_position"),
        );

        $response = $messenger->postApi($dataArr,Session::get('user')[0]["namespace"].'/nin/verify/finger');

        if($response->status){






            return view("verification.data",['userdata' => $response ->data->data,'access' => explode('-',$messenger->getApi(Session::get('user')[0]["namespace"].'/organisation/access/all')
                ->data)]);

        }else {

            // dd($response);



            $zero = 0;
            if(isset($response->message->$zero)){
                $message = $response->message->$zero;
            }else{
                $message =  $response->message;
            }

            return Redirect::back()->with("message", $message)->with("type",'danger');

        }





    }


    public function doFingerPrintAndNinVerification(Request $request,Messenger $messenger)
    {
        $request->validate([
            'wsg_image'=> 'required',
            'fingerprint_position'=> 'required',
            'nin' => 'required'
        ]);

        $file_tmp= $_FILES['wsg_image']['tmp_name'];

        $type = pathinfo($file_tmp, PATHINFO_EXTENSION);
        $data = file_get_contents($file_tmp);
        $base64 = base64_encode($data);

//        echo $base64;exit;

        $dataArr = array(
            'fingerStringInBase64' => $base64,
            'fingerPosition' => $request->post("fingerprint_position"),
            'nin' => $request -> post ("nin")
        );

        $response = $messenger->postApi($dataArr,Session::get('user')[0]["namespace"].'/nin/verify/fingerAndNin');

        if($response->status){






            return view("verification.data",['userdata' => $response ->data->data,'access' => explode('-',$messenger->getApi(Session::get('user')[0]["namespace"].'/organisation/access/all')
                ->data)]);

        }else {

            // dd($response);



            $zero = 0;
            if(isset($response->message->$zero)){
                $message = $response->message->$zero;
            }else{
                $message =  $response->message;
            }

            return Redirect::back()->with("message", $message)->with("type",'danger');

        }





    }
}
