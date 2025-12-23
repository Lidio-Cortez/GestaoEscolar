<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model{
    protected $table = 'aluno'; // nome da tabela no BD 
    public $timestamps = false;
    protected $fillable = [
        'nome',
        'sexo',
        'bi',
        'pai',
        'mae',
        'provincia',
        'municipio',
        'residencia',
        'contacto',
        'turma',
        'data_nascimento',
        'data_matricula'
    ];
    public function turma()
    {
        return $this->belongsTo(Turma::class, 'id_turma', 'turma');
    }
}