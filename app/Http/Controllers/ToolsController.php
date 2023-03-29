<?php

namespace App\Http\Controllers;

use App\Models\Tools;
use Illuminate\Http\Request;

class ToolsController extends Controller
{
    public function update(){
        $version = version();
        $data = new Tools();
        $array = [
            'version' => $version + 1,
        ];
        $data->create($array);
    }
}
