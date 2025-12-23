<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    protected $table = 'funcionario'; // nome da tabela no BD 
    public $timestamps = false;
    protected $fillable = [
            'nome',
            'sexo',
            'estado_civil',
            'residencia',
            'telefone',
            'cargo',
            'estado'
    ];
}
