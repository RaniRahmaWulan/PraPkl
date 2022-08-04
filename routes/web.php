<?php

use App\Http\Controllers\WaliController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

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

Route::get('/hello', function () {
    return view('hello');
});

Auth::routes();

// route untuk menampilkan admin.blade.php
Route::get('/test-admin', function () {
    return view('layouts.admin');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// route siswa
Route::resource('siswa', SiswaController::class);
// route jurusan
Route::resource('jurusan', JurusanController::class);
// route nilai
Route::resource('nilai', NilaiController::class);

// Route::group(['prefix' => 'admin' ,'middleware' => ['auth']],
// function (){
//     Route::get('/u', function (){
//         return view('admin.index');
//     });
//     Route::resource('siswa', SiswaController::class);
//     // Route::resource('jurusan', JurusanController::class);
//     // Route::resource('nilai', NilaiController::class);
//     Route::resource('wali', WaliController::class);
//     Route::resource('guru', GuruController::class);
    
// });

Route::resource('wali', WaliController::class);