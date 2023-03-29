<?php

namespace App\Http\Livewire;

use App\Models\DataSekolah;
use Livewire\Component;

class MasterSekolah extends Component
{
    public $data;
    public function render()
    {
        return view('livewire.master-sekolah')
        ->extends('layouts.admin.app')
        ->section('konten');
    }

    public function mount(){
        $this->data = DataSekolah::all();
    }
}
