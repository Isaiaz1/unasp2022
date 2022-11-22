<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vagas extends Model
{
    use HasFactory;
    protected $fillable =['empresa_nome', 'cargo', 'salario', 'periodo'];
}
