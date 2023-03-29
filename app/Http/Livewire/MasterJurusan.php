<?php

namespace App\Http\Livewire;

use App\Models\Jurusan;
use Livewire\Component;

class MasterJurusan extends Component
{
    public $data;
    public function render()
    {
        return view('livewire.master-jurusan')
        ->extends('layouts.admin.app')
        ->section('konten');
    }

    public function mount(){
        $this->data = Jurusan::all();
    }
}
