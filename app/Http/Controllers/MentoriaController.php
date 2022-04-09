<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MentoriaController extends Controller
{
    public function index(){
        $nome = "BRUNO";
        $idade = 18;

        return view('welcome');
    }

    public function create(){
        return view('mentorias.create');
    }
}
