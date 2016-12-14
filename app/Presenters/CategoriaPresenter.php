<?php

namespace Estoque\Presenters;

use Estoque\Transformers\CategoriaTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class CategoriaPresenter
 *
 * @package namespace Estoque\Presenters;
 */
class CategoriaPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new CategoriaTransformer();
    }
}
