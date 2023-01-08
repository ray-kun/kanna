<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\admin\management\AdminArticleController;
use App\Http\Controllers\admin\management\AdminEventController;
use App\Http\Controllers\admin\user\UserArticleController;
use App\Http\Controllers\admin\user\UserEventController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\VacancyController;
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
    return view('site.index');
})->name('homepage');

Route::fallback(function(){
   abort(404);
});

Route::get('habboducket/team', [TeamController::class, 'index'])->name('habboducket-team');

Route::get('habboducket/vacancies', [VacancyController::class, 'index'])->name('habboducket-vacancies');

Route::get('news', [ArticleController::class, 'index'])->name('news');
Route::get('news/{article}', [ArticleController::class, 'show'])->name('news.show');

Route::get('account/login', [SessionController::class, 'create'])->name('account.login');
Route::post('account/login', [SessionController::class, 'store'])->name('account.login');

Route::get('account/register', [RegisterController::class, 'create'])->name('account.register');
Route::post('account/register', [RegisterController::class, 'store'])->name('account.register');

Route::post('account/logout', [SessionController::class, 'destroy'])->name('account.logout');

Route::get('account/settings', [AccountController::class, 'index'])->name('account.settings');

Route::get('account/settings/profile', [ProfileController::class, 'create'])->name('account.settings.profile');

Route::get('account/settings/password', [AccountController::class, 'edit'])->name('account.settings.password');
Route::post('account/settings/password', [AccountController::class, 'update'])->name('account.settings.password');

Route::get('account/shop', [ShopController::class, 'index'])->name('account.shop');

Route::get('profile/{username}', [ProfileController::class, 'show'])->name('profile.user');

Route::middleware('can:eendenportaal')->name('eendenportaal.')->group(function () {

    Route::get('/eendenportaal', function() {
        return view('eendenportaal.index');
    })->name('index');

    // Management Articles
    Route::get('eendenportaal/beheer/artikelen/overzicht', [AdminArticleController::class, 'overview'])->name('articles.management.overview');
    Route::get('eendenportaal/beheer/artikelen/goedkeuren', [AdminArticleController::class, 'approve'])->name('articles.management.approve');
    Route::put('eendenportaal/beheer/artikelen/goedkeuren/{article}', [AdminArticleController::class, 'approve'])->name('articles.management.approve');

    Route::resource('eendenportaal/beheer/artikelen', AdminArticleController::class)->names([
        'index' => 'articles.management.index',
        'create' => 'articles.management.create',
        'store' => 'articles.management.store',
        'show' => 'articles.management.show',
        'edit' => 'articles.management.edit',
        'update' => 'articles.management.update',
    ])->parameters([
        'artikelen' => 'article'
    ]);

    // Management Events
    Route::get('eendenportaal/beheer/evenementen/overzicht', [AdminEventController::class, 'overview'])->name('events.management.overview');
    Route::get('eendenportaal/beheer/evenementen/goedkeuren', [AdminEventController::class, 'approve'])->name('events.management.approve');
    Route::put('eendenportaal/beheer/evenementen/goedkeuren/{event}', [AdminEventController::class, 'approve'])->name('events.management.approve');

    Route::resource('eendenportaal/beheer/evenementen', AdminEventController::class)->names([
        'index' => 'events.management.index',
        'create' => 'events.management.create',
        'store' => 'events.management.store',
        'show' => 'events.management.show',
        'edit' => 'events.management.edit',
        'update' => 'events.management.update',
    ])->parameters([
        'evenementen' => 'event'
    ]);

    // User Articles
    Route::get('eendenportaal/mijn/artikelen/afgekeurde', [UserArticleController::class, 'denied'])->name('articles.user.denied');

    Route::resource('eendenportaal/mijn/artikelen', UserArticleController::class)->names([
        'index' => 'articles.user.index',
        'create' => 'articles.user.create',
        'store' => 'articles.user.store',
        'show' => 'articles.user.show',
        'edit' => 'articles.user.edit',
        'update' => 'articles.user.update',
    ])->parameters([
        'artikelen' => 'article'
    ]);

    // User Events
    Route::get('eendenportaal/mijn/evenementen/afgekeurde', [UserEventController::class, 'denied'])->name('events.user.denied');

    Route::resource('eendenportaal/mijn/evenementen', UserEventController::class)->names([
        'index' => 'events.user.index',
        'create' => 'events.user.create',
        'store' => 'events.user.store',
        'show' => 'events.user.show',
        'edit' => 'events.user.edit',
        'update' => 'events.user.update',
    ])->parameters([
        'evenement' => 'event'
    ]);

});

