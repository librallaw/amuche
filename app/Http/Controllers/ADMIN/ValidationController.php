<?php

namespace App\Http\Controllers\ADMIN;

use App\Exports\IpeAllExport;
use App\Http\Controllers\Controller;
use App\Imports\IpeImport;
use App\Models\Ipe_error;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class ValidationController extends Controller
{
    //
    public function showaAdminIpes()
    {
        $data['ipes'] = Ipe_error::paginate(20);
        return view("admin.validation.allipe",$data);
    }


    public function exportToExcel()
    {
        return Excel::download(new IpeAllExport(), 'ipes.xlsx');
    }


    public function showUploadResult()
    {
        return view("admin.validation.import");
    }


    public function doUploadResult(Request $request)
    {
        $request -> validate([
           'file'
        ]);


        Excel::import(new IpeImport, request()->file('file'));

        return redirect()-> route("showaAdminIpes")->with("message","Import successful")->with("type","success");


    }
}
