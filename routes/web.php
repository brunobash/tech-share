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

Route::get('/tela_1', function(){
    return view('tela_1');
});

Route::get('/tela_2', function(){
    return view('tela_2');
});

Route::get('/tela_3', function(){
    return view('tela_3');
});