<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Mentoria;

class MentoriaController extends Controller
{
    public function index(){

        $mentorias = Mentoria::all(); //chama todas as metorias disponíveis no BD

        return view('home', ['mentorias' => $mentorias]);// chamando todas as mentorias do BD para a Home
    }

    public function create(){
        return view('mentorias.create');
    }
}
