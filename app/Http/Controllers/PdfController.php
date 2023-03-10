<?php

namespace App\Http\Controllers;

use App\Libraries\Messenger;
use Illuminate\Http\Request;
use Spipu\Html2Pdf\Html2Pdf;
use PDF;

class PdfController extends Controller
{
    //

    public function generatePdf()
    {

        $valued = "";
        $x = 0;
        $userdata = json_decode($_POST['data']);

        $valued .= "<div align='center'> <p style='padding:10px, border: 1px solid black'><a href='www.checknin.ng'>www.checknin.ng</a></p></div><br />";

        if(isset($userdata->photo)){
            $valued .= "<p><img class='img' src='data:image/png;base64, $userdata->photo' style='width:100px'/></p>";
        }


        foreach($userdata as $key => $value)
                if($key == "photo" || $key == "signature"){
                    continue;
            } else{

                  //  dd($value);

                    $valued .= "<div style='float:left'> <h4>".strtoupper($key)."</h4><strong>".ucfirst(strtolower($value))."</strong></div><hr />";




            }


        $valued .= "<div style='float:left'> <small>Verified on <a href='www.checknin.ng'>www.checknin.ng</a></small></div>";






        // exit;




        if(isset($userdata->firstname) && isset($userdata->surname)){

            $name = $userdata->firstname."-".$userdata->surname;
        }else{
            $name = "data";
        }




        $html2pdf = new Html2Pdf();
        $html2pdf->writeHTML("<html><body>".$valued."</body></html>");
        $html2pdf->output($name.'.pdf','D');
    }


    public function printSlip(Request $request)
    {

        $request->validate([
            'data' => 'required'
        ]);


        $datar  = json_decode($_POST['data']);


        $birthdate = ($datar->birthdate ? $datar->birthdate: "");
        $firstname = ($datar->firstname ? $datar->firstname: "");
        $middlename = ($datar->middlename ? $datar->middlename: "");
        $surname = ($datar->surname ? $datar->surname: "");
        $photo = ($datar->photo ? $datar->photo: "");
        $gender = ($datar->gender ? strtoupper($datar->gender): "");
        $nin = ($datar->nin ? $datar->nin: "");



        $data['data']=  json_decode($_POST['data']);;


        $pdf = PDF::loadView('verification.slip', $data);
        return $pdf->download($surname."-".$firstname.'.pdf');






    }
}
