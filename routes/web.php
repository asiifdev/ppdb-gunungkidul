<?php

use App\Http\Controllers\CalonSiswaController;
use App\Http\Controllers\DataSekolahController;
use App\Http\Controllers\KabupatenController;
use App\Http\Controllers\KecamatanController;
use App\Http\Controllers\KelurahanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToolsController;
use App\Http\Controllers\ProvinsiController;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\DataCalonSiswa;
use App\Http\Livewire\MasterJurusan;
use App\Http\Livewire\MasterSekolah;
use App\Http\Livewire\RangkingCalonSiswa;
use App\Http\Livewire\Registration;
use App\Models\DataSekolah;
use App\Models\Jurusan;
use App\Models\Provinsi;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes();
Route::get('/', function () {
    return view('welcome');
});
Route::get('registration', Registration::class);
Route::middleware(['auth'])->group(function () {
    Route::get('dashboard', Dashboard::class);
    Route::get('masterjurusan', MasterJurusan::class);
    Route::get('mastersekolah', MasterSekolah::class);
    Route::get('datacalonsiswa', DataCalonSiswa::class);
    Route::get('rangkingcalonsiswa', RangkingCalonSiswa::class);
});
Route::get('Tools/update/jos', [ToolsController::class,'update']);
Route::get('update/provinsi', [ProvinsiController::class,'updateProvinsi']);
Route::get('update/kabupaten', [KabupatenController::class,'updateKabupaten']);
Route::get('update/kecamatan', [KecamatanController::class,'updateKecamatan']);
Route::get('update/kelurahan', [KelurahanController::class,'updateKelurahan']);
Route::get('provinsi', [ProvinsiController::class,'getProvinsi']);
Route::get('kabupaten', [KabupatenController::class,'getKabupaten']);
Route::get('kecamatan', [KecamatanController::class,'getKecamatan']);
Route::get('kelurahan', [KelurahanController::class,'getKelurahan']);
Route::get('provinsi/{id}', [ProvinsiController::class,'findProvinsi']);
Route::get('kabupaten/{id}', [KabupatenController::class,'findKabupaten']);
Route::get('kecamatan/{id}', [KecamatanController::class,'findKecamatan']);
Route::get('kelurahan/{id}', [KelurahanController::class,'findKelurahan']);
Route::get('sekolah/{id}', [DataSekolahController::class,'find']);
Route::get('import/sekolah',[DataSekolahController::class, 'import']);

Route::post('calonsiswa',[CalonSiswaController::class, 'store'])->name('calonsiswa');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
