<?php

namespace Estoque\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Estoque\Repositories\ProdutoRepository;
use Estoque\Entities\Produto;
use Estoque\Validators\ProdutoValidator;

/**
 * Class ProdutoRepositoryEloquent
 * @package namespace Estoque\Repositories;
 */
class ProdutoRepositoryEloquent extends BaseRepository implements ProdutoRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Produto::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return ProdutoValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
