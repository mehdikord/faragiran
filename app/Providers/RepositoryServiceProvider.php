<?php

namespace App\Providers;

use App\Interface\Auth\AuthInterface;
use App\Interface\Courses\CoursesInterface;
use App\Repository\Auth\AuthRepository;
use App\Repository\Courses\CoursesRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //Authenticate
        $this->app->bind(AuthInterface::class,AuthRepository::class);
        //Courses and Lessons
        $this->app->bind(CoursesInterface::class,CoursesRepository::class);


    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
