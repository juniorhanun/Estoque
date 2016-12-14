<?php

namespace Estoque\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Cliente extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
        'name',
        'email',
        'password',
        'telefone',
        'cep',
        'estado',
        'cidade',
        'endereco',
        'cpf',
        'rg',
        'status',
    ];

}
