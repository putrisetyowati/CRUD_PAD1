<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KaryawanController;

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

Route::get('/karyawan', [KaryawanController::class, 'index']);
Route::get('/tambah', [KaryawanController::class, 'create']);
Route::post('/store', [KaryawanController::class, 'store'])->name('store');
Route::get('/karyawan/{id}/edit', [KaryawanController::class, 'edit']);
Route::post('/karyawan/{id}', [KaryawanController::class, 'update']);
Route::delete('/karyawan/{id}', [KaryawanController::class, 'delete']);
Route::get('/karyawan/cari', [KaryawanController::class, 'cari']);
Route::get('/karyawan/cetak_pdf', [KaryawanController::class, 'cetak_pdf']);
