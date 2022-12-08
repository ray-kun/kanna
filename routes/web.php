<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\admin\AdminNewsController;
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

Route::get('account/settings/password', [AccountController::class, 'create'])->name('account.settings.password');

Route::get('account/shop', [ShopController::class, 'index'])->name('account.shop');

Route::post('lucoa/logout', [SessionController::class, 'destroy'])->name('account.logout');

Route::get('account/register', [RegisterController::class, 'create'])->name('account.register');
Route::post('account/register', [RegisterController::class, 'store'])->name('account.register');

Route::get('profile/{username}', [ProfileController::class, 'show'])->name('profile.user');

Route::middleware('can:admin')->name(get_admin_name().'.')->group(function () {


    Route::get('eendenportaal', function() {
        return view('eendenportaal.index');
    })->name('index');

    Route::resource('eendenportaal/nieuws', AdminNewsController::class)->names([
        'index' => 'news.index',
        'create' => 'news.create'
    ]);

});

