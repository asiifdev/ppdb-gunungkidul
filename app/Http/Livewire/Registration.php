<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Jurusan;
use Livewire\Component;
use App\Models\Lampiran;
use App\Models\Provinsi;
use App\Models\Kabupaten;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\CalonSiswa;
use App\Models\DataSekolah;
use Livewire\WithFileUploads;

class Registration extends Component
{
    use WithFileUploads;

    public $provinsi,$sekolah,$jurusan, $kabupaten = [] ,$kecamatan = [], $kelurahan = [];
    public $nik,$iduser,$nisn,$name,$email,$nohp,$tempatlahir,$tanggallahir,$agama,$jeniskelamin,$idjurusan,$alamat,$idprovinsi,$idkabupaten,$idkecamatan,$idkelurahan,$idsekolah,$namaayah,$namaibu,$pekerjaanayah,$pekerjaanibu,$nohportu,$npsn,$alamatsekolah;

    public $nilaibahasaindonesia,$nilaibahasainggris,$nilaimatematika,$nilaiipa,$raport,$totalnilai;
    protected $listeners = ['refreshComponent' => '$refresh'];
    protected $rules = [
        'nik' => 'required|digits:16',
        'nisn' => 'required|digits:10',
        'name' => 'required|min:6',
        'email' => 'required|email',
        'nohp' => 'numeric|required',
        'tempatlahir' => 'required|min:1',
        'tanggallahir' => 'required|min:1',
        'agama' => 'required|min:1',
        'jeniskelamin' => 'required|min:1',
        'idjurusan' => 'required|min:1',
        'alamat' => 'required|min:1',
        'idprovinsi' => 'required|min:1',
        'idkabupaten' => 'required|min:1',
        'idkecamatan' => 'required|min:1',
        'idkelurahan' => 'required|min:1',
        'idsekolah' => 'required|min:1',
        'namaayah' => 'required|min:1',
        'namaibu' => 'required|min:1',
        'pekerjaanayah' => 'required|min:1',
        'pekerjaanibu' => 'required|min:1',
        'nohportu' => 'required|min:1',
    ];
 
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        if($this->idsekolah != ''){
            $datasekolah = DataSekolah::find($this->idsekolah);
            $this->npsn = $datasekolah->npsn;
            $this->alamatsekolah = $datasekolah->alamat;
        }

        if(auth()->check()){
            $cek = CalonSiswa::where('iduser', auth()->user()->id)->first();
            // dd($cek);
            if($cek != NULL){
                $this->nik = $cek->nik;
                $this->nisn = $cek->nisn;
                $this->name = $cek->name;
                $this->email = $cek->email;
                $this->nohp = $cek->nohp;
                $this->tempatlahir = $cek->tempatlahir;
                $this->tanggallahir = $cek->tanggallahir;
                $this->agama = $cek->agama;
                $this->jeniskelamin = $cek->jeniskelamin;
                $this->idjurusan = $cek->idjurusan;
                $this->alamat = $cek->alamat;
                $this->idprovinsi = $cek->idprovinsi;
                $this->idkabupaten = $cek->idkabupaten;
                $this->idkecamatan = $cek->idkecamatan;
                $this->idkelurahan = $cek->idkelurahan;
                $this->idsekolah = $cek->idsekolah;
                $this->namaayah = $cek->namaayah;
                $this->namaibu = $cek->namaibu;
                $this->pekerjaanayah = $cek->pekerjaanayah;
                $this->pekerjaanibu = $cek->pekerjaanibu;
                $this->nohportu = $cek->nohportu;
            }
        }
        else{
            $this->cekData();
        }
        // $this->iduser = auth()->user()->id;
        return view('livewire.registration');
    }

    public function mount(){
        $this->provinsi = Provinsi::all();
        $this->sekolah = DataSekolah::all();
        $this->jurusan = Jurusan::all();
        // if($this->idprovinsi != ''){
        //     $this->kabupaten = Kabupaten::where('province_id',$this->idprovinsi)->get();
        // }
        // if($this->idkabupaten != ''){
        //     $this->kecamatan = Kecamatan::where('regency_id',$this->idkabupaten)->get();
        // }
        // if($this->idkecamatan != ''){
        //     $this->kelurahan = Kelurahan::where('district_id',$this->idkecamatan)->get();
        // }
    }

    public function form(){
        $this->validate();
        $cekUser = User::where('nik', $this->nik)->first();

        if($cekUser != NULL){
            $array = [
                "name" => $this->name,
                "email" => $this->email,
                "password" => bcrypt(Carbon::parse($this->tanggallahir)->format('dmY')),
            ];
            $cekUser->update($array);
        }
        else{
            $user = new User();
            $array = [
                "name" => $this->name,
                "nik" => $this->nik,
                'photo' => 'https://ui-avatars.com/api/?name=' . urlencode($this->name) . '&background=random',
                "email" => $this->email,
                "password" => bcrypt(Carbon::parse($this->tanggallahir)->format('dmY')),
            ];
            $user->create($array);
        }

        $data_user = User::where('nik', $this->nik)->first();
        $this->iduser = $data_user->id;
        $cek = CalonSiswa::where('iduser',$this->iduser)->first();

        if($cek != NULL){
            $array = [
                "iduser" => $this->iduser,
                "nik" => $this->nik,
                "nisn" => $this->nisn,
                "name" => $this->name,
                "email" => $this->email,
                "nohp" => $this->nohp,
                "tempatlahir" => $this->tempatlahir,
                "tanggallahir" => Carbon::parse($this->tanggallahir)->format('d-m-Y'),
                "agama" => $this->agama,
                "jeniskelamin" => $this->jeniskelamin,
                "idjurusan" => $this->idjurusan,

                "alamat" => $this->alamat,
                "idprovinsi" => $this->idprovinsi,
                "idkabupaten" => $this->idkabupaten,
                "idkecamatan" => $this->idkecamatan,
                "idkelurahan" => $this->idkelurahan,
                
                "idsekolah" => $this->idsekolah,

                "namaayah" => $this->namaayah,
                "namaibu" => $this->namaibu,
                "pekerjaanayah" => $this->pekerjaanayah,
                "pekerjaanibu" => $this->pekerjaanibu,
                "nohportu" => $this->nohportu,
            ];
            $cek->update($array);
        }
        else{
            $data = new CalonSiswa();
            $array = [
                "iduser" => $this->iduser,
                "nik" => $this->nik,
                "nisn" => $this->nisn,
                "name" => $this->name,
                "email" => $this->email,
                "nohp" => $this->nohp,
                "tempatlahir" => $this->tempatlahir,
                "tanggallahir" => Carbon::parse($this->tanggallahir)->format('d-m-Y'),
                "agama" => $this->agama,
                "jeniskelamin" => $this->jeniskelamin,
                "idjurusan" => $this->idjurusan,

                "alamat" => $this->alamat,
                "idprovinsi" => $this->idprovinsi,
                "idkabupaten" => $this->idkabupaten,
                "idkecamatan" => $this->idkecamatan,
                "idkelurahan" => $this->idkelurahan,
                
                "idsekolah" => $this->idsekolah,

                "namaayah" => $this->namaayah,
                "namaibu" => $this->namaibu,
                "pekerjaanayah" => $this->pekerjaanayah,
                "pekerjaanibu" => $this->pekerjaanibu,
                "nohportu" => $this->nohportu,
            ];
            $data->create($array);
        }

        $this->dispatchBrowserEvent('nextForm', 2);
    }

    public function cekData(){
        if($this->nik != ''){
            $cek = CalonSiswa::where('nik', $this->nik)->first();
            if($cek != NULL){
                $this->nisn = $cek->nisn;
                $this->name = $cek->name;
                $this->email = $cek->email;
                $this->nohp = $cek->nohp;
                $this->tempatlahir = $cek->tempatlahir;
                $this->tanggallahir = $cek->tanggallahir;
                $this->agama = $cek->agama;
                $this->jeniskelamin = $cek->jeniskelamin;
                $this->idjurusan = $cek->idjurusan;
                $this->alamat = $cek->alamat;
                $this->idprovinsi = $cek->idprovinsi;
                $this->idkabupaten = $cek->idkabupaten;
                $this->idkecamatan = $cek->idkecamatan;
                $this->idkelurahan = $cek->idkelurahan;
                $this->idsekolah = $cek->idsekolah;
                $this->namaayah = $cek->namaayah;
                $this->namaibu = $cek->namaibu;
                $this->pekerjaanayah = $cek->pekerjaanayah;
                $this->pekerjaanibu = $cek->pekerjaanibu;
                $this->nohportu = $cek->nohportu;
            }
        }
    }

    public function lampiran(){
        $formData = CalonSiswa::where('nik', $this->nik)->first();
        $totalnilai = $this->nilaibahasaindonesia + $this->nilaibahasainggris + $this->nilaimatematika + $this->nilaiipa;
        if($formData != NULL){
            // dd($this->raport);
            $cek = Lampiran::where('idcalonsiswa', $formData->id)->first();
            $validatedData = $this->validate([
                'nilaibahasaindonesia' => 'required|min:1',
                'nilaibahasainggris' => 'required|min:1',
                'nilaimatematika' => 'required|min:1',
                'nilaiipa' => 'required|min:1',
            ]);
            if($cek != NULL){
                $array = $validatedData;
                $cek->update($array);
                $cek->update([
                    "totalnilai" => $totalnilai
                ]);
            }
            else{
                $data = new Lampiran();
                $fileNameWithExtension = $this->raport->getClientOriginalName();

                $fileNameWithoutExtension = str_replace(' ', '', $fileNameWithExtension);
             
                // $originalName = explode(' ',  $fileNameWithoutExtension)[0];

                $this->raport->storeAs('public/raports', $fileNameWithoutExtension);
                $array = array(
                    'nilaibahasaindonesia' => $this->nilaibahasaindonesia,
                    'nilaibahasainggris' => $this->nilaibahasainggris,
                    'nilaimatematika' => $this->nilaimatematika,
                    'nilaiipa' => $this->nilaiipa,
                    "idcalonsiswa" => $formData->id,
                    "totalnilai" => $totalnilai,
                    "raport" => "storage/raports/" . $fileNameWithoutExtension,
                );
                $data->create($array);
            }

            $this->dispatchBrowserEvent('nextForm', 3);
        }
        else{
            $this->dispatchBrowserEvent('gagal');
        }
    }

    public function getKab(){
        if($this->idprovinsi != ''){
            $this->kabupaten = Kabupaten::where('province_id',$this->idprovinsi)->get();
        }
        if($this->idkabupaten != ''){
            $this->kecamatan = Kecamatan::where('regency_id',$this->idkabupaten)->get();
        }
        if($this->idkecamatan != ''){
            $this->kelurahan = Kelurahan::where('district_id',$this->idkecamatan)->get();
        }
    }

    public function updatedIdprovinsi()
    {
        $this->kabupaten = Kabupaten::where('province_id',$this->idprovinsi)->get();
    }
}
