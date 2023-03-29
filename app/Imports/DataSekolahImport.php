<?php

namespace App\Imports;

use App\Models\DataSekolah;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class DataSekolahImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // dd($row);
        return new DataSekolah([
            'name' => $row['name'],
            'npsn' => $row['npsn'],
            'alamat' => $row['alamat'],
            'kecamatan' => $row['kecamatan'],
            'desa' => $row['desa'],
            'status' => $row['status'],
        ]);
    }
}
