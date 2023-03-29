<?php

namespace App\Http\Controllers;

use App\Models\Kecamatan;
use App\Models\Kelurahan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class KelurahanController extends Controller
{
    public function updateKelurahan(){
        $kecamatan = Kecamatan::all();
        foreach($kecamatan as $k){
            // $url = "https://api.goapi.id/v1/regional/kelurahan?kecamatan_id=" . substr_replace(substr_replace($k->id, ".", 2,0),".",5,0) ."&api_key=EfcQ9DyDcjEhLGc1mQ0oTFpM9NyxC0&";
            $url = "https://api.goapi.id/v1/regional/kelurahan?kecamatan_id=92.71.11&api_key=EfcQ9DyDcjEhLGc1mQ0oTFpM9NyxC0&";
            $data = Http::get($url)->object()->data;
            foreach($data as $d){
                dd(str_replace('.','',$d->id));
                $cek = Kelurahan::find(str_replace('.','',$d->id));
                if($cek != NULL){
                    $dt_update = [];
                    $dt_update['id'] = str_replace('.','',$d->id);
                    $dt_update['name'] = $d->name;
                    $dt_update['district_id'] = $k->id;
                    $cek->update($dt_update);
                }
                else{
                    $provinsi = new Kelurahan();
                    $dt_create = [];
                    $dt_create['id'] = str_replace('.','',$d->id);
                    $dt_create['name'] = $d->name;
                    $dt_create['district_id'] = $k->id;
                    $provinsi->create($dt_create);
                }
            }
        }
    }
    
    public function getKelurahan(){
        $data = Kelurahan::all();
        return response()->json($data);
    }

    public function findKelurahan($id){
        $data = Kelurahan::where('district_id', $id)->get();
        if(count($data) > 0){
            return response()->json($data);
        }
        else{
            return response()->json("Data tidak ditemukan..");
        }
    }
}
