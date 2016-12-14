<?php

namespace Estoque\Transformers;

use League\Fractal\TransformerAbstract;
use Estoque\Entities\Cliente;

/**
 * Class ClienteTransformer
 * @package namespace Estoque\Transformers;
 */
class ClienteTransformer extends TransformerAbstract
{

    /**
     * Transform the \Cliente entity
     * @param \Cliente $model
     *
     * @return array
     */
    public function transform(Cliente $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
