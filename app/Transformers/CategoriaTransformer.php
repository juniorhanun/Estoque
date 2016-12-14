<?php

namespace Estoque\Transformers;

use League\Fractal\TransformerAbstract;
use Estoque\Entities\Categoria;

/**
 * Class CategoriaTransformer
 * @package namespace Estoque\Transformers;
 */
class CategoriaTransformer extends TransformerAbstract
{

    /**
     * Transform the \Categoria entity
     * @param \Categoria $model
     *
     * @return array
     */
    public function transform(Categoria $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
