<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    protected $table = 'turma'; // nome da tabela no BD
    protected $primaryKey = 'id_turma'; // nome da coluna id 
    public $timestamps = false;
    protected $fillable = [
        'turma',
        'sala',
        'lotacao',
        'periodo',
        'grau',
        'curso',
        'ano_academico'
    ];
}
