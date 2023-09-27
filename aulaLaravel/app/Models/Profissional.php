<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profissional extends Model
{
    use HasFactory;
    protected $fillable = ['nome', 'email', 'telefone', 'data_de_nascimento', 'cep', 'especialidade', 'numero_credencial'];
}
