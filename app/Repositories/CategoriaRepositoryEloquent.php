<?php

namespace Estoque\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Estoque\Repositories\CategoriaRepository;
use Estoque\Entities\Categoria;
use Estoque\Validators\CategoriaValidator;

/**
 * Class CategoriaRepositoryEloquent
 * @package namespace Estoque\Repositories;
 */
class CategoriaRepositoryEloquent extends BaseRepository implements CategoriaRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Categoria::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return CategoriaValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
