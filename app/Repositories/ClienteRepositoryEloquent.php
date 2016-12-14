<?php

namespace Estoque\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Estoque\Repositories\ClienteRepository;
use Estoque\Entities\Cliente;
use Estoque\Validators\ClienteValidator;

/**
 * Class ClienteRepositoryEloquent
 * @package namespace Estoque\Repositories;
 */
class ClienteRepositoryEloquent extends BaseRepository implements ClienteRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Cliente::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return ClienteValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
