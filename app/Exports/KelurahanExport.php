<?php

namespace App\Exports;

use App\Models\Kelurahan;
use Maatwebsite\Excel\Concerns\FromCollection;

class KelurahanExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Kelurahan::all();
    }
}
