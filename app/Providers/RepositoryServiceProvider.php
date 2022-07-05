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

           'App\Http\Interfaces\AdminHomeInterface',
           'App\Http\Repositories\AdminHomeRepository');

      $this->app->bind(
             'App\Http\Interfaces\AdminAuthInterface',
            'App\Http\Repositories\AdminAuthRepository');

      $this->app->bind(
          'App\Http\Interfaces\AdminCourseInterface',
         'App\Http\Repositories\AdminCourseRepository');

      $this->app->bind(
          'App\Http\Interfaces\AdminFaqInterface',
          'App\Http\Repositories\AdminFaqRepository'
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
