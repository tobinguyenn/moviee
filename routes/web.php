<?php

use App\Livewire\Auth\Login;
use Illuminate\Support\Facades\Route;
use App\Livewire\Movies\MovieDetail;
use App\Livewire\ComingSoon;
use App\Livewire\NowShowing;
use App\Livewire\Home;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', Home::class)->name('home');
Route::get('now-showing', NowShowing::class)->name('movies.now_showing');
Route::get('coming-soon', ComingSoon::class)->name('movies.coming_soon');

Route::as('auth.')
    ->middleware('guest')
    ->group(function () {
        Route::get('login', Login::class)->name('login');
    });

Route::prefix('movies')
    ->as('movies.')
    ->group(function () {
        Route::get('{movie}', MovieDetail::class)->name('show');
    });
