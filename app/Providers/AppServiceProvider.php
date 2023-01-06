<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Redirect;
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

        Gate::define('eendenportaal', function (User $user) {
            return $user->is_admin === 1 ? Response::allow() : Response::denyAsNotFound();
        });

        Route::resourceVerbs([
            'create' => 'nieuw',
            'edit' => 'wijzig',
            'show' => 'toon',
            'schedule' => 'rooster',
        ]);
    }
}
