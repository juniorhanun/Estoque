<?php

namespace Estoque\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Produto extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
        'categoria_id',
        'nome',
        'descricao',
        'preco',
        'arquivo',
        'status',
    ];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

}
