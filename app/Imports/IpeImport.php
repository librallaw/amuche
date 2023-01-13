<?php

namespace App\Imports;

use App\Models\Ipe_error;
use Maatwebsite\Excel\Concerns\OnEachRow;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Row;

class IpeImport implements OnEachRow, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function onRow(Row $row)
    {


        $row      = $row->toArray();

        // dd($row);

        if(!empty($row['id']) && !empty($row['orgid']) && !empty($row['ipes1']) && !empty($row[2])){


          //  dd("I got here");
            $ipe_error = Ipe_error::where("id",$row['id']) -> first();
            $ipe_error -> corrected = $row[2];
            $ipe_error -> status = 1;

            $ipe_error->save();


        }



    }


    public function WithHeadingRow(): int
    {
        return 2;
    }
}
