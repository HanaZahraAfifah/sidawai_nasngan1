<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\JenisJabatanController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\PensiunController;
use App\Http\Controllers\DiklatController;
use App\Http\Controllers\GajiController;
use App\Http\Controllers\CutiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/registrasi',[LoginController::class,'registrasi'])->name('registrasi');
// Route::post('/simpanregistrasi',[LoginController::class,'simpanregistrasi'])->name('simpanregistrasi');
// Route::get('/login',[LoginController::class,'halamanlogin'])->name('login');
// Route::post('/postlogin',[LoginController::class,'postlogin'])->name('postlogin');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');

    Route::group(['middleware' => ['auth','ceklevel:admin, user']], function(){
    Route::get('/home',[HomeController::class,'index'])->name('home');

    //JENIS JABATAN
    Route::get('/data-jenjab',[JenisJabatanController::class,'index'])->name('data-jenjab');
    Route::get('/create-jenjab',[JenisJabatanController::class,'create'])->name('create-jenjab');
    Route::post('/simpan-jenjab',[JenisJabatanController::class,'store'])->name('simpan-jenjab');
    Route::get('/edit-jenjab/{id}',[JenisJabatanController::class,'edit'])->name('edit-jenjab');
    Route::post('/update-jenjab/{id}',[JenisJabatanController::class,'update'])->name('update-jenjab');
    Route::get('/delete-jenjab/{id}',[JenisJabatanController::class,'destroy'])->name('delete-jenjab');

    //NAMA JABATAN
    Route::get('/data-jabatan',[JabatanController::class,'index'])->name('data-jabatan');
    Route::get('/create-jabatan',[JabatanController::class,'create'])->name('create-jabatan');
    Route::post('/simpan-jabatan',[JabatanController::class,'store'])->name('simpan-jabatan');
    Route::get('/edit-jabatan/{id}',[JabatanController::class,'edit'])->name('edit-jabatan');
    Route::post('/update-jabatan/{id}',[JabatanController::class,'update'])->name('update-jabatan');
    Route::get('/delete-jabatan/{id}',[JabatanController::class,'destroy'])->name('delete-jabatan');

    //BIODATA PEGAWAI
    Route::get('/data-biodata',[BiodataController::class,'index'])->name('data-biodata');
    Route::get('/create-biodata',[BiodataController::class,'create'])->name('create-biodata');
    Route::post('/simpan-biodata',[BiodataController::class,'store'])->name('simpan-biodata');
    Route::get('/edit-biodata/{id}',[BiodataController::class,'edit'])->name('edit-biodata');
    Route::post('/update-biodata/{id}',[BiodataController::class,'update'])->name('update-biodata');
    Route::get('/delete-biodata/{id}',[BiodataController::class,'destroy'])->name('delete-biodata');
    Route::get('/getjabatan/{id}',[BiodataController::class,'getJabatan']);


    //BATAS USIA PENSIUN PEGAWAI
    Route::get('/data-pensiun',[PensiunController::class,'index'])->name('data-pensiun');
    Route::get('/create-pensiun',[PensiunController::class,'create'])->name('create-pensiun');
    Route::post('/simpan-pensiun',[PensiunController::class,'store'])->name('simpan-pensiun');
    Route::get('/edit-pensiun/{id}',[PensiunController::class,'edit'])->name('edit-pensiun');
    Route::post('/update-pensiun/{id}',[PensiunController::class,'update'])->name('update-pensiun');
    Route::get('/delete-pensiun/{id}',[PensiunController::class,'destroy'])->name('delete-pensiun');

    //DIKLAT PEGAWAI
    Route::get('/data-diklat',[DiklatController::class,'index'])->name('data-diklat');
    Route::get('/create-diklat',[DiklatController::class,'create'])->name('create-diklat');
    Route::post('/simpan-diklat',[DiklatController::class,'store'])->name('simpan-diklat');
    Route::get('/edit-diklat/{id}',[DiklatController::class,'edit'])->name('edit-diklat');
    Route::post('/update-diklat/{id}',[DiklatController::class,'update'])->name('update-diklat');
    Route::get('/delete-diklat/{id}',[DiklatController::class,'destroy'])->name('delete-diklat');


    //KENKAIKAN GAJI PEGAWAI
    Route::get('/data-gaji',[GajiController::class,'index'])->name('data-gaji');
    Route::get('/create-gaji',[GajiController::class,'create'])->name('create-gaji');
    Route::post('/simpan-gaji',[GajiController::class,'store'])->name('simpan-gaji');
    Route::get('/edit-gaji/{id}',[GajiController::class,'edit'])->name('edit-gaji');
    Route::post('/update-gaji/{id}',[GajiController::class,'update'])->name('update-gaji');
    Route::get('/delete-gaji/{id}',[GajiController::class,'destroy'])->name('delete-gaji');


     //DATA CUTI PEGAWAI
     Route::get('/data-cuti',[CutiController::class,'index'])->name('data-cuti');
     Route::get('/create-cuti',[CutiController::class,'create'])->name('create-cuti');
     Route::post('/simpan-cuti',[CutiController::class,'store'])->name('simpan-cuti');
     Route::get('/edit-cuti/{id}',[CutiController::class,'edit'])->name('edit-cuti');
     Route::post('/update-cuti/{id}',[CutiController::class,'update'])->name('update-cuti');
     Route::get('/delete-cuti/{id}',[CutiController::class,'destroy'])->name('delete-cuti');



   
});