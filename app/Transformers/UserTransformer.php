<?php

namespace Estoque\Transformers;

use League\Fractal\TransformerAbstract;
use Estoque\Entities\User;

/**
 * Class UserTransformer
 * @package namespace Estoque\Transformers;
 */
class UserTransformer extends TransformerAbstract
{

    /**
     * Transform the \User entity
     * @param \User $model
     *
     * @return array
     */
    public function transform(User $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
