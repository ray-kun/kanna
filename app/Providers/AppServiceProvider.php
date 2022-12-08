<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Route;
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

        Gate::define('admin', function (User $user) {
            dump($user->role_id);
            return $user->role_id === 2 ? Response::allow() : Response::denyAsNotFound();
        });


        Route::resourceVerbs([
            'create' => 'nieuw',
            'edit' => 'wijzig',
        ]);
    }
}
