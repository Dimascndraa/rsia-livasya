<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
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
        Paginator::useBootstrap();
        // setting standar language for carbon
        \Carbon\Carbon::setLocale('id');

        Gate::define('admin', function (User $user) {
            return $user->role === 'admin';
        });

        Gate::define('marketing', function (User $user) {
            return $user->role === 'marketing';
        });
    }
}
