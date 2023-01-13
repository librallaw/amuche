<?php

namespace App\Http\Controllers;

use App\Libraries\Messenger;
use App\Models\Payment;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class PaymentController extends Controller
{
    //




    public function loadPaymentScreen(Request $request,Messenger $messenger)
    {


        $data['balance'] =Wallet::where("unique_id",Auth::user()->unique_id)->first()->balance;

        //dd( $messenger->getApi("api/user/credits"));

        return view("organisation.fundwallet",$data);
    }

    public function getLink(Request $request,Messenger $messenger)
    {


        $request -> validate([

            'credit' => 'required|integer|min:4'
        ]);


        $dataArr = array(
            "credit" => $request->credit,
        );

       // var_dump($dataArr);exit;



        $name = Auth::user()->name;
        $email = Auth::user()->email;
        $secret = env("FLUTTER_SECRET");
        $amount = env("PRICE_PER_CREDIT") * $request -> credit;

        $referc = md5(time().Auth::user()->name);




        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.flutterwave.com/v3/payments',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS =>'{
               "tx_ref":"'.$referc.'",
               "amount":"'.$amount.'",
               "currency":"NGN",
               "redirect_url":"http://v2.idchecknew.ng/organisation/wallet/success",
               "payment_options":"card",
               "meta":{
                  "consumer_id":23,
                  "consumer_mac":"92a3-912ba-1192a"
               },
               "customer":{
                  "email":"'.$email.'",
                  "phonenumber":"080****4528",
                  "name":"'.$name.'"
               },
               "customizations":{
                  "title":"Credit Purchase",
                  "description":"Verification credit purchase on Idcheck",
                  "logo":"http://idcheck.ng/logo.png"
               }
               }',
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer '.$secret,
                'Content-Type: application/json'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        $resp = json_decode($response);



        if($resp -> status == "success"){


            $newPay = new Payment();


            $newPay -> user_id = Auth::user()->unique_id;

            $newPay -> credits = $request ->credit;
            $newPay -> rate = env("PRICE_PER_CREDIT");
            $newPay -> price = $amount;
            $newPay -> unique_id = $referc;

            $newPay -> status = "pending" ;


            $newPay -> save();

            return redirect()-> to( $resp -> data -> link);




        }else{

            return redirect()->back()->with("message","Sorry an error occurred with your payment, please try again")->with("type","danger");

        }




    }




    public function verifyPaymentRef(Request $request,Messenger $messenger)
    {

        if($_GET['status']=='successful'){

            $dataArr = array(
                "reference" =>  $_GET['tx_ref'],
                "transaction_id" =>  $_GET['transaction_id']
            );



            $check_Payment  = Payment::where("unique_id",$_GET['tx_ref']) -> first();



            if($check_Payment){


                if($check_Payment -> completed == 0){


                    $curl = curl_init();

                    curl_setopt_array($curl, array(
                        CURLOPT_URL => 'https://api.flutterwave.com/v3/transactions/'.$request->transaction_id.'/verify',
                        CURLOPT_RETURNTRANSFER => true,
                        CURLOPT_ENCODING => '',
                        CURLOPT_MAXREDIRS => 10,
                        CURLOPT_TIMEOUT => 0,
                        CURLOPT_FOLLOWLOCATION => true,
                        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                        CURLOPT_CUSTOMREQUEST => 'GET',
                        CURLOPT_HTTPHEADER => array(
                            'Authorization: Bearer '.env("FLUTTER_SECRET")
                        ),
                    ));

                    $response = curl_exec($curl);

                    curl_close($curl);

                    $resp = json_decode($response);



                    if($resp -> status == "success"){

                        //give value to user
                        $user = Wallet::where("unique_id",$check_Payment->user_id)->first();

                        //  dd($user);

                        $prev_balance = $user -> balance;

                        $user -> balance = $check_Payment -> credits +  $user -> balance;
                        $user -> save();

                        //  dd($check_Payment);


                        //Update Transaction status
                        $check_Payment -> completed = 1;
                        $check_Payment -> response = json_encode($resp -> data);
                        $check_Payment -> transaction_id = $request -> transaction_id;
                        $check_Payment -> save();


                        $messenger->log($check_Payment->user_id,"Topup", $check_Payment->user_id,"Prev_balance = $prev_balance ---> new Balance = ".$user -> balance,1);



                        return redirect()->to(route("loadPaymentScreen"))->with("message",'Your Top up was successful')->with("type","success");



                    }else{

                        return redirect()->to(route("loadPaymentScreen"))->with("message","Sorry an error occurred with your payment, please try again")->with("type","danger");


                    }



                }else{


                    return redirect()->to(route("loadPaymentScreen"))->with("message","Value already granted for this transaction")->with("type","danger");




                }




            }else{

                return redirect()->to(route("loadPaymentScreen"))->with("message","Transaction  does not exist")->with("type","danger");

            }




















         //   dd($dataArr);

            $response = $messenger->postApi($dataArr,Session::get('user')[0]["namespace"].'/credit/purchase/confirm');



            if($response -> status){

                return redirect()->to(route("loadPaymentScreen"))->with("message",$response->message)->with("type","success");

            }else{

                return redirect()->to(route("loadPaymentScreen"))->with("message",$response->message)->with("type","danger");

            }


        }else{

            return redirect()->to(route("loadPaymentScreen"))->with("message","Sorry an error occurred with your payment, please try again")->with("type","danger");
        }


    }


    public function paymentSuccess(Request $request)
    {
        dd($request);
    }






}
