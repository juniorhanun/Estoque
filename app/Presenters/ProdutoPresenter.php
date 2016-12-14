<?php

namespace Estoque\Presenters;

use Estoque\Transformers\ProdutoTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class ProdutoPresenter
 *
 * @package namespace Estoque\Presenters;
 */
class ProdutoPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new ProdutoTransformer();
    }
}
