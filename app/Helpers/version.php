<?php

use App\Models\Tools;

function version(){
    $data = Tools::all();
    if(count($data) > 0){
        $dataversion = Tools::latest()->first();
        // dd($dataversion->version);
        $version = $dataversion->version;
    }
    else{
        $version = 1;
    }
    return $version;
}