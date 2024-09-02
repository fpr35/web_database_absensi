<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Absen424;
use App\Http\Controllers\Gaji427;
use App\Http\Controllers\Karyawan428;
use App\Http\Controllers\Login;

Route::get('tab_absen',[Absen424::class,'show424']);
Route::get('form_add424',[Absen424::class,'form_add424']);
Route::post('add424',[Absen424::class,'add424']);
Route::delete('hapus_data424/{data}',[Absen424::class,'delete424']);

Route::get('form_regist',[Login::class,'form_regist']);
Route::post('register',[Login::class,'daftar']);
Route::get('database',[Login::class,'login_form']);
Route::post('login_ke_halaman',[Login::class,'login_ke_halaman']);

Route::get('tab_gaji',[Gaji427::class,'read427']);
Route::get('form_add420',[Gaji427::class,'form_add427']);
Route::post('add427',[Gaji427::class,'create427']);
Route::delete('hapus_data427/{data}',[Gaji427::class,'delete427']);

Route::get('tab_karyawan',[Karyawan428::class,'show428']);
Route::get('form_add428',[Karyawan428::class,'form_add428']);
Route::post('add428',[Karyawan428::class,'add428']);
Route::delete('hapus_data428/{data}',[Karyawan428::class,'delete428']);

Route::get('/', function () {
    return view('isikonten');
});
Route::get('tentangkami', function () {
    return view('tentangkami');
});
Route::get('spinning', function () {
    return view('spinning');
});
Route::get('weaving', function () {
    return view('weaving');
});
Route::get('dfp', function () {
    return view('dfp');
});
Route::get('garmen', function () {
    return view('garmen');
});

// Route::get('teslihat', function () {
//     return view('teslihat');
// });

// Route::get('database', function () {
//     return view('database');
// });