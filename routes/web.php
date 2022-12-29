<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\admin\AdminArticleController;
use App\Http\Controllers\admin\AdminEventController;
use App\Http\Controllers\admin\user\UserArticleController;
use App\Http\Controllers\admin\user\UserEventController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\VacancyController;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('homepage');

Route::get('habboducket/team', [TeamController::class, 'index'])->name('habboducket-team');

Route::get('habboducket/vacancies', [VacancyController::class, 'index'])->name('habboducket-vacancies');

Route::get('news', [ArticleController::class, 'index'])->name('news');

Route::get('account/login', [SessionController::class, 'create'])->name('account.login');
Route::post('account/login', [SessionController::class, 'store'])->name('account.login');

Route::get('account/settings', [AccountController::class, 'index'])->name('account.settings');

Route::get('account/settings/profile', [ProfileController::class, 'create'])->name('account.settings.profile');

Route::get('account/settings/password', [AccountController::class, 'edit'])->name('account.settings.password');
Route::post('account/settings/password', [AccountController::class, 'update'])->name('account.settings.password');

Route::get('account/shop', [ShopController::class, 'index'])->name('account.shop');

Route::post('account/logout', [SessionController::class, 'destroy'])->name('account.logout');

Route::get('account/register', [RegisterController::class, 'create'])->name('account.register');
Route::post('account/register', [RegisterController::class, 'store'])->name('account.register');

Route::get('profile/{username}', [ProfileController::class, 'show'])->name('profile.user');

Route::middleware('can:admin')->name(get_admin_name().'.')->group(function () {

    Route::get(get_admin_name(), function() {
        return view(get_admin_name().'.index');
    })->name('index');

    Route::resource(get_admin_name().'/artikelen', AdminArticleController::class)->names([
        'index' => 'articles.index',
        'create' => 'articles.create',
        'store' => 'articles.store',
        'show' => 'articles.show',
        'edit' => 'articles.edit',
        'update' => 'articles.update',
    ])->parameters([
        'artikelen' => 'article'
    ]);

    Route::get(get_admin_name().'/evenementen/rooster', [AdminEventController::class, 'schedule'])->name('events.schedule');

    Route::resource(get_admin_name().'/evenementen', AdminEventController::class)->names([
        'index' => 'events.index',
        'create' => 'events.create',
        'store' => 'events.store',
    ]);


    Route::resource(get_admin_name().'/mijn/artikelen', UserArticleController::class)->names([
        'index' => 'articles.user.index',
    ])->parameters([
        'artikelen' => 'article'
    ]);

    Route::resource(get_admin_name().'/mijn/evenementen', UserEventController::class)->names([
        'index' => 'events.user.index',
    ])->parameters([
        'evenement' => 'event'
    ]);

});

