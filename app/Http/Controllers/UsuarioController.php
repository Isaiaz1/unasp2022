<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function create(){
        return view('usuario.create');
    }
    public function store(Request $request){
        usuario::create([
            'nome' => $request->nome,
            'email' => $request->email,
            'telefone' => $request->telefone,
            'endereco' => $request->endereco,
            'resumo_profissional' => $request->resumo_profissional,
        ]);
         return "Usuario salvo com sucesso";
    }
}
