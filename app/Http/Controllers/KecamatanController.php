<?php

namespace App\Http\Controllers;

use App\Models\Kabupaten;
use App\Models\Kecamatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class KecamatanController extends Controller
{
    public function updateKecamatan(){
        $kabupaten = Kabupaten::all();
        foreach($kabupaten as $k){
            $url = "https://api.goapi.id/v1/regional/kecamatan?kota_id=" . substr_replace($k->id, ".", 2, 0) ."&api_key=EfcQ9DyDcjEhLGc1mQ0oTFpM9NyxC0&";
            $data = Http::get($url)->object()->data;
            // dd($data);
            foreach($data as $d){
                $cek = Kecamatan::find(str_replace('.','',$d->id));
                if($cek != NULL){
                    $dt_update = [];
                    $dt_update['id'] = str_replace('.','',$d->id);
                    $dt_update['name'] = $d->name;
                    $dt_update['regency_id'] = $k->id;
                    $cek->update($dt_update);
                }
                else{
                    $provinsi = new Kecamatan();
                    $dt_create = [];
                    $dt_create['id'] = str_replace('.','',$d->id);
                    $dt_create['name'] = $d->name;
                    $dt_create['regency_id'] = $k->id;
                    $provinsi->create($dt_create);
                }
            }
        }
    }

    public function getKecamatan(){
        $data = Kecamatan::all();
        return response()->json($data);
    }

    public function findKecamatan($id){
        $data = Kecamatan::where('regency_id', $id)->get();
        if(count($data) > NULL){
            return response()->json($data);
        }
        else{
            return response()->json("Data tidak ditemukan..");
        }
    }
}
