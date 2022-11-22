<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vagas;

class VagasController extends Controller
{
    public function create(){
        return view('vagas.create');
    }
    public function store(Request $request){
        vagas::create([
            'empresa_nome' => $request->empresa_nome,
            'cargo' => $request->cargo,
            'salario' => $request->salario,
            'periodo' => $request->periodo,
        ]);
         return "Vaga salva com sucesso";
    }
}
