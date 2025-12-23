<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{    protected $table = 'curso'; // nome da tabela no BD 
    public $timestamps = false;
    protected $fillable = [
        'curso',
        'departamento',
        'tipo'
    ];
}
