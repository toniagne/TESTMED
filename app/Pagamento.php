<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pagamento extends Model
{
  protected $fillable = [
    'id_plano',
    'id_usuario',
    'created_at',
    'expire_at',
    'status'
    ];
}
