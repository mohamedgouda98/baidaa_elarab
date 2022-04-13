<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Http\Interfaces\Admin\HomeInterface',
            'App\Http\Repositories\Admin\HomeRepository'
        );

        $this->app->bind(
            'App\Http\Interfaces\Admin\AuthInterface',
            'App\Http\Repositories\Admin\AuthRepository'
        );

        $this->app->bind(
            'App\Http\Interfaces\Admin\CountryInterface',
            'App\Http\Repositories\Admin\CountryRepository'
        );

        $this->app->bind(
            'App\Http\Interfaces\Admin\PoetInterface',
            'App\Http\Repositories\Admin\PoetRepository'
        );
        $this->app->bind(
            'App\Http\Interfaces\Admin\EraInterface',
            'App\Http\Repositories\Admin\EraRepository'
        );
        $this->app->bind(
            'App\Http\Interfaces\Admin\PoeticTypeInterface',
            'App\Http\Repositories\Admin\PoeticTypeRepository'
        );
        $this->app->bind(
            'App\Http\Interfaces\Admin\PoemInterface',
            'App\Http\Repositories\Admin\PoemRepository'
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
