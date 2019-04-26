<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provas extends Model
{
    protected $fillable = [
        'nome',
        'descricao',
        'status'
      ];
}
