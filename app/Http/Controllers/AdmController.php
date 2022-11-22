<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\adm;

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
            'telefone' => $request->telefone,
        ]);
         return "Adm salvo com sucesso";
    }
}
