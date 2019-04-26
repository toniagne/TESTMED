<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Respostas extends Model
{
    protected $fillable = [
        'codigo_questoes',
        'resposta',        
        'correta',
        'deleted'
      ];
}
