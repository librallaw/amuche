<?php

namespace App\Http\Controllers;

use App\Libraries\Messenger;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class CacController extends Controller
{
    //

    public function showCac(Messenger $messenger)
    {

      //  dd($messenger->getApi(Session::get('user')[0]["namespace"].'/cac/return/'));
        $data['cac'] =  $messenger->getApi(Session::get('user')[0]["namespace"].'/cac/return/')->data;

        return view("cac.upload",$data);
    }


    public function doStoreCac(Request $request,Messenger $messenger)
    {


//        $request -> validate([
//            ''
//        ]);
            $uploadfile = $_FILES["uploadImage"]["tmp_name"];
            $folderPath = "cac/";

            if (! is_writable($folderPath) || ! is_dir($folderPath)) {
                echo "error";
                exit();
            }

            if (move_uploaded_file($_FILES["uploadImage"]["tmp_name"], $folderPath . $_FILES["uploadImage"]["name"])) {


                $folder = "/" . $folderPath . "" . $_FILES['uploadImage']['name'];

                $dataArr = array(
                    'image' => $folder
                );

                $response = $messenger->postApi($dataArr,Session::get('user')[0]["namespace"].'/cac/image/store');

                if($response->status){

                    echo '<img src="/' . $folderPath . "" . $_FILES["uploadImage"]["name"] . '" style="width:400px">';
                    exit();

                }else {

                    echo "An error occured while processing your request";
                    exit();

                }
            }
        }




    public function doStoreDirector(Request $request,Messenger $messenger)
    {


        $request -> validate([

            'full_name' => 'required',
            'email' => 'required',
            'nin' => 'required',

        ]);


            $dataArr = array(
                'full_name' => $request -> full_name,
                'email' => $request -> email,
                'nin' => $request -> nin,
            );

            $response = $messenger->postApi($dataArr,Session::get('user')[0]["namespace"].'/cac/director/store');

        if($response->status){

            return Redirect::back()->with("message","Director was Updated successful")->with("type","success");

        }else {

            return Redirect::back()->with("message", "An error occured while processing your last request")->with("type", 'danger');

        }

    }



    public function ActivateCac(Messenger $messenger,$orgid)
    {

        //dd($orgid);

        $dataArr = array(
            'orgid' => $orgid,
        );

        $response = $messenger->postApi($dataArr,Session::get('user')[0]["namespace"].'/organisation/cac/approve');


        //dd($response);

        if($response->status){

            return Redirect::back()->with("message","Account update was successful")->with("type","success");

        }else {

            return Redirect::back()->with("message", $response->message)
                ->with("type", 'danger');

        }

    }




}
