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
use App\Http\Controllers\MentoriaController; // importa o Controller "Mentoria"

Route::get('/', [MentoriaController::class, 'index']); //usando na rota 'index'

Route::get('/mentorias/create', [MentoriaController::class, 'create']);// rota para criação das mentorias

Route::get('/home', function () {
    return view('home');
});

Route::get('/filtro', function(){
    return view('filtro');
});

Route::get('/mensagens', function(){
    return view('mensagens');
});

Route::get('/agenda', function(){
    return view('agenda');
});

Route::get('/perfil', function(){
    return view('perfil');
});