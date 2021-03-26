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
    return 'welcome every1';
});

Route::get('/user/{id}', function ($id) {
    return "tampilin user dengan id =$id";
})->where('id','[A-Z]{1}[0-9]+[a-z]{3}');

Route::get('/user/{id}', function ($id) {
    return "tampilin user dengan id =$id";
})->where('id','[A-Z]{1}[0-9]+[a-z]{2}');

Route::get('/user/{id}', function ($id) {
    return "tampilin user dengan id =$id";
})->where('id','[A-Z]{1}[0-9]+[a-z]{4}');

Route::get('/info', function () {
    return view("infomahsw");
});