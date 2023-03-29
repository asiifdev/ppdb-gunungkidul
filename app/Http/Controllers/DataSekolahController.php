<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\DataSekolahImport;
use App\Models\DataSekolah;
use Maatwebsite\Excel\Facades\Excel;

class DataSekolahController extends Controller
{
    public function import() 
    {
        Excel::import(new DataSekolahImport, 'sekolah.xlsx');
        
        return redirect('/')->with('success', 'All good!');
    }

    public function find($id){
        $data = DataSekolah::find($id);
        return response()->json($data);
    }
}
