<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    protected $fillable = ['id', 'nome','CPF','endereco'];

    protected $table = 'Clientes';

    public function pedidos()
    {
        return $this->hasMany(Pedido::class, 'cliente_id');
    }
}

