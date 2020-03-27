<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Vendas extends Model
{
    protected $fillable = [
        'id',
        'cliente_id',
        'data_da_venda',
        'vendedor_id'
    ];

    protected $table = 'Vendas';

    public function cliente()
    {
        return $this->belongsTo(Clientes::class, 'cliente_id');
    }
    public function notaFiscal()
    {
        return $this->hasOne(Notas::class, 'venda_id');
    }
}
