<?php

namespace App\Http\Controllers;

use App\Models\Provinsi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProvinsiController extends Controller
{
    public function updateProvinsi(){
        // $url = "https://www.emsifa.com/api-wilayah-indonesia/api/provinces.json";
        $url = "https://api.goapi.id/v1/regional/provinsi?api_key=EfcQ9DyDcjEhLGc1mQ0oTFpM9NyxC0&";
        $data = Http::get($url)->object()->data;
        // dd($data);
        foreach($data as $d){
            $cek = Provinsi::find($d->id);
            if($cek != NULL){
                $dt_update = [];
                $dt_update['id'] = $d->id;
                $dt_update['name'] = $d->name;
                $cek->update($dt_update);
            }
            else{
                $provinsi = new Provinsi();
                $dt_create = [];
                $dt_create['id'] = $d->id;
                $dt_create['name'] = $d->name;
                $provinsi->create($dt_create);
            }
        }
    }

    public function getProvinsi(){
        $data = Provinsi::all();
        return response()->json($data);
    }

    public function findProvinsi($id){
        $data = Provinsi::find($id);
        if($data != NULL){
            return response()->json($data);
        }
        else{
            return response()->json("Data tidak ditemukan...");
        }
    }
}
