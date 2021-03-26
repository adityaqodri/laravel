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

Route::get('/', function () {
    return view('welcome');
});


Route::get('login', function () {
    return view('login');
});

Route::get('index', function () {
    return view('index');
});

Route::get('tambah', function () {
    return view('tambah');
});

Route::get('ubah', function () {
    return view('ubah');
});

Route::get('regist', function () {
    return view('regist');
});

Route::get('index', function () {
    return view('UrlGenerator');
});
