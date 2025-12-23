<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    protected $table = "disciplina";
    public $timestamps = false;
    protected $fillable = [
        'disciplina',
        'tipo_disciplina',
        'fk_professor'
    ];
}
