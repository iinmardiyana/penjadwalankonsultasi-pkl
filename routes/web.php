<?php

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

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/cek', function () {
    return view('halamancekpermohonansaya');
});
Route::get('/detail', function () {
    return view('halamandetailpermohonansaya');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/coba', function () {
    return view('coba');
});

