<?php

use App\Http\Controllers\LogController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StmikController;
use App\Http\Controllers\PegawaiController;
use App\Models\PegawaiModel;

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
    $jumlahpegawai = PegawaiModel::count();
    return view('welcome',compact('jumlahpegawai'));
});
Route::get('/tugas', function () {
    return view('form');
});

Route::get('/contoh', [StmikController::class,'index']);

Route::get('/pegawai', [PegawaiController::class, 'index'])->name('pegawai.datapegawai')->middleware('auth');
Route::get('/tambah', [PegawaiController::class, 'create'])->name('pegawai.tambahpegawai');
Route::post('/tambahpegawai', [PegawaiController::class, 'store'])->name('pegawai.store');
Route::get('/edit/{id}', [PegawaiController::class, 'edit'])->name('pegawai.edit');
Route::post('/update/{id}', [PegawaiController::class, 'update'])->name('pegawai.update');
Route::get('/delete/{id}', [PegawaiController::class, 'delete'])->name('pegawai.delete');
   
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'admin'])->group(function () {
     Route::get('admin', function () {
         return 'admin page';
     });
 });