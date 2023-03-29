<?php

namespace App\Http\Livewire;

use App\Models\CalonSiswa;
use Livewire\Component;

class DataCalonSiswa extends Component
{
    public $data;
    public function render()
    {
        return view('livewire.data-calon-siswa')
        ->extends('layouts.admin.app')
        ->section('konten');
    }

    public function mount(){
        $this->data = CalonSiswa::all();
    }
}
