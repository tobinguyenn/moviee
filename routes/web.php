<?php

use App\Livewire\ComingSoon;
use App\Livewire\Home;
use App\Livewire\NowShowing;
use Illuminate\Support\Facades\Route;

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
