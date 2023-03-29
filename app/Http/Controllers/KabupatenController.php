<?php

namespace App\Http\Controllers;

use App\Models\Kabupaten;
use App\Models\Provinsi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class KabupatenController extends Controller
{
    public function updateKabupaten(){
        $provinsi = Provinsi::all();
        foreach($provinsi as $p){
            // $url = "https://emsifa.github.io/api-wilayah-indonesia/api/regencies/" . $p->id . ".json";
            $url = "https://api.goapi.id/v1/regional/kota?provinsi_id=" . $p->id ."&api_key=EfcQ9DyDcjEhLGc1mQ0oTFpM9NyxC0&";
            $data = Http::get($url)->object()->data;
            foreach($data as $d){
                $cek = Kabupaten::find(str_replace('.','',$d->id));
                if($cek != NULL){
                    $dt_update = [];
                    $dt_update['id'] = str_replace('.','',$d->id);
                    $dt_update['name'] = $d->name;
                    $dt_update['province_id'] = $p->id;
                    $cek->update($dt_update);
                }
                else{
                    $provinsi = new Kabupaten();
                    $dt_create = [];
                    $dt_create['id'] = str_replace('.','',$d->id);
                    $dt_create['name'] = $d->name;
                    $dt_create['province_id'] = $p->id;
                    $provinsi->create($dt_create);
                }
            }
        }
    }

    public function getKabupaten(){
        $data = Kabupaten::all();
        return response()->json($data);
    }

    public function findKabupaten($id){
        $data = Kabupaten::where('province_id', $id)->get();
        if(count($data) > 0){
            return response()->json($data);
        }
        else{
            return response()->json("Data tidak ditemukan..");
        }
    }
}
