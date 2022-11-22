<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    use HasFactory;
    protected $fillable =['nome', 'email', 'senha', 'telefone', 'endereco', 'resumo_profissional'];
}
