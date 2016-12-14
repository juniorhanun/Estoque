<?php

namespace Estoque\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Categoria extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
        'nome',
        'status'
    ];

    public function produtos()
    {
        return $this->hasMany(Produto::class);
    }

}
