<?php

namespace App\Http\Controllers;

use App\Libraries\Messenger;
use Illuminate\Http\Request;
use PDF;

class TestController extends Controller
{
    //

    public function returnTestData(Messenger $messenger)

    {


        $data['menu']= "{'batchid':'926160','birthcountry':'nigeria','birthdate':'02-03-1992'}";


        $pdf = PDF::loadView('verification.slip', $data);
        return $pdf->download('invoice.pdf');





    }


   
}
