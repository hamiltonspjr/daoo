<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultas extends Model
{
    use HasFactory;
    protected $fillable = ['data_consulta','nome_paciente', 'nome_profissional'];
    public function paciente() {
        return $this->belongsTo(Paciente::class);
    }
    public function profissional() {
        return $this->belongsTo(Profissional::class);
    }
}
