<?php

namespace App\Providers;

use App\Models\Project;
use App\Models\User;
use Illuminate\Support\ServiceProvider;

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
        //
        \Gate::define('view-project', function (User $user, Project $project){
           return $user->id === $project->user_id;
        });
    }
}
