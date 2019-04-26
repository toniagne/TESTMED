<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questoes extends Model
{
    protected $fillable = [
        'codigo_prova',
        'titulo',
        'enunciado',        
        'status',
        'estado',
        'ano',
        'banca',
        'disciplina',
        'especialidade',
        'deleted'
      ];
}
