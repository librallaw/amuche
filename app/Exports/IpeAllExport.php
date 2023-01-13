<?php

namespace App\Exports;

use App\Models\Ipe_error;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class IpeAllExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Ipe_error::select("id","unique_id","ipe")->where("status",9)->get();
    }

    public function headings(): array
    {
        return ["id", "orgid", "IPEs1","2"];
    }
}
