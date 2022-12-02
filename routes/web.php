<?php

use App\Http\Controllers\admin\AdminNewsController;
use App\Http\Controllers\NewsController;
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
    return view('index');
})->name('homepage');

Route::get('habboducket/team', [TeamController::class, 'index'])->name('habboducket-team');

Route::get('habboducket/vacancies', [VacancyController::class, 'index'])->name('habboducket-vacancies');

Route::get('habboducket/news', [NewsController::class, 'index'])->name('news');

Route::get('eendenportaal', function() {
    return view('eendenportaal.index');
})->name('eendenportaal.index');

Route::resource('eendenportaal/news', AdminNewsController::class)->names([
    'index' => get_admin_name().'.news.index',
    'create' => get_admin_name().'.news.create'
]);
