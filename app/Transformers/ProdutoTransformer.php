<?php

namespace Estoque\Transformers;

use League\Fractal\TransformerAbstract;
use Estoque\Entities\Produto;

/**
 * Class ProdutoTransformer
 * @package namespace Estoque\Transformers;
 */
class ProdutoTransformer extends TransformerAbstract
{

    /**
     * Transform the \Produto entity
     * @param \Produto $model
     *
     * @return array
     */
    public function transform(Produto $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
