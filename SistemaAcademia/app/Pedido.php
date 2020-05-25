<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $table = 'Pedido';

    public function AtividadeDoPedido(){
      return $this->hasOne(AtividadesFisicas::class,'id','AtividadeFisicaID');
    }
}