<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    protected $table = 'professor'; // nome da tabela no BD 
    public $timestamps = false;
    protected $fillable = [
        'nome',
        'sexo',
        'estado_civil',
        'residencia',
        'contacto',
        'nivel_academico',
        'area_formacao'
    ];
}
