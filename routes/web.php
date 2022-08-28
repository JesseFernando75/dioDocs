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

//Home
Route::get('/home', function () {
    return view('welcome');
})->name('home');
//Fim Home

//DIO
Route::get('/dio', function () {
    return view('dio/dio');
})->name('dio');
//Fim DIO

//DIO info
Route::get('/dio/info', function () {
    return view('dio/dioinfo');
})->name('dioinfo');
//Fim DIO

Auth::routes();