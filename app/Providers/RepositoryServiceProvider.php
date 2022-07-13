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
           'App\Http\Repositories\AdminHomeRepository'
      );

      $this->app->bind(
             'App\Http\Interfaces\AdminAuthInterface',
            'App\Http\Repositories\AdminAuthRepository'
      );

      $this->app->bind(
          'App\Http\Interfaces\AdminCourseInterface',
         'App\Http\Repositories\AdminCourseRepository'
      );

      $this->app->bind(
          'App\Http\Interfaces\AdminFaqInterface',
          'App\Http\Repositories\AdminFaqRepository'
      );
      $this->app->bind(
          'App\Http\Interfaces\AdminSliderInterface',
          'App\Http\Repositories\AdminSliderRepository'
      );
      $this->app->bind(
          'App\Http\Interfaces\AdminTeacherInterface',
          'App\Http\Repositories\AdminTeacherRepository'
      );
      $this->app->bind(
          'App\Http\Interfaces\AdminActivityInterface',
          'App\Http\Repositories\AdminActivityRepository'
      );
        $this->app->bind(
            'App\Http\Interfaces\AdminEventInterface',
            'App\Http\Repositories\AdminEventRepository'
        );
        $this->app->bind(
            'App\Http\Interfaces\AdminLocationInterface',
            'App\Http\Repositories\AdminLocationRepository'
        );
      $this->app->bind(
          'App\Http\Interfaces\UserHomeInterface',
          'App\Http\Repositories\UserHomeRepository'
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
