<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;
    protected $fillable = ['nome', 'email', 'telefone', 'data_de_nascimento', 'cep'];
    public function consultas() {
        return $this->hasMany(Consultas::class);
    }
}
