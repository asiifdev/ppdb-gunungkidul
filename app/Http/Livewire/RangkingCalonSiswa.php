<?php

namespace App\Http\Livewire;

use App\Models\CalonSiswa;
use App\Models\Lampiran;
use Livewire\Component;

class RangkingCalonSiswa extends Component
{
    public $data;
    public function render()
    {
        return view('livewire.rangking-calon-siswa')
        ->extends('layouts.admin.app')
        ->section('konten');
    }

    public function mount(){
        $this->data = Lampiran::orderBy('totalnilai','DESC')->with('data')->get();
        // dd($this->data);
    }
}
