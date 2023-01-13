<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libraries\Messenger;


class PayController extends Controller
{
    //

    public function loadPaymentScreen(Request $request,Messenger $messenger)
    {
        $data['credit'] = $messenger->getApi("api/user/credits");
        $data['active'] = "wallet";

       // dd( $messenger->getApi("api/user/credits"));

        return view("payments.sms",$data);
    }

    public function verifyPayment(Request $request,Messenger $messenger)
    {


        $dataArr = array(
            "type"=>$request->type,
            "reference" => $request->reference,
            "amount" => $request->amount
        );



        $response = $messenger->postApi($dataArr,'api/payment/confirm');
        //
        //
         //var_dump($response);exit;

        return response()->json([

            "status" => $response->status,
            "message" => $response->message

        ]);
    }




    public function verifyPaymentRef(Request $request,Messenger $messenger)
    {

        // echo  "I am here and ";exit;

        $dataArr = array(
            "type"=>"smmscr",
            "reference" => "reference",
            "amount" => "20"
        );

        // var_dump($dataArr);exit;

        $response = $messenger->postApi($dataArr,'/call/personnel/create');

       // var_dump($response);exit;

        return response()->json([

            "status" => $response->status,
            "message" => $response

        ]);
    }


    public function updateMessage(Request $request,Messenger $messenger)
    {



        $request -> validate ([
            'message' => 'required',
            'type' => 'required'
        ]);




        $dataArr = array(
            "message" => $request->message,
            "type" => $request->type
        );


        $response = $messenger->postApi($dataArr, "api/user/update/message");



        if($response -> status){
            return back()->with("message",$response->message)->with("type","success");
        }else{
            return back()->with("message",$response->message)->with("type","danger");
        };
    }

}
