<?php

namespace Estoque\Presenters;

use Estoque\Transformers\ClienteTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class ClientePresenter
 *
 * @package namespace Estoque\Presenters;
 */
class ClientePresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new ClienteTransformer();
    }
}
