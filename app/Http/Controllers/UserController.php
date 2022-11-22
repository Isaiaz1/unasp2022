<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;

class UserController extends Controller
{
    public function create(){
        return view('user.create');
    }
    public function store(Request $request){
        user::create([
            'email' => $request->email,
            'senha' => $request->senha,
            'cpf' => $request->cpf,
            'idioma' => $request->idioma,
        ]);
         return "User salvo com sucesso";
    }
}
