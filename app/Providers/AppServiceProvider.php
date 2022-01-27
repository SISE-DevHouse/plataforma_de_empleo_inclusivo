<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
//PARA EL PAGINADOR ESTILOS
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //AGREGAR PARA EL PAGINADOR
        Paginator::useBootstrap();
    }
}
