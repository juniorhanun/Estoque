<?php

namespace Estoque\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(\Estoque\Repositories\UserRepository::class, \Estoque\Repositories\UserRepositoryEloquent::class);
        $this->app->bind(\Estoque\Repositories\ClienteRepository::class, \Estoque\Repositories\ClienteRepositoryEloquent::class);
        $this->app->bind(\Estoque\Repositories\ProdutoRepository::class, \Estoque\Repositories\ProdutoRepositoryEloquent::class);
        $this->app->bind(\Estoque\Repositories\CategoriaRepository::class, \Estoque\Repositories\CategoriaRepositoryEloquent::class);
        //:end-bindings:
    }
}
