<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdmController extends Controller
{
    public function create(){
        return view('adm.create');
    }
    public function store(Request $request){
        adm::create([
            'nome' => $request->nome,
            'email' => $request->email,
            'senha' => $request->senha,
            'idioma' => $request->idioma,
        ]);
         return "Adm salvo com sucesso";
    }
}
