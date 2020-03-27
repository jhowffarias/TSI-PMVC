<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    protected $fillable = ['id', 'nome', 'descricao', 'imagem ', 'preco', 'ativo'];

    protected $table = 'Produtos';
}
