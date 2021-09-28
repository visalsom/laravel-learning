<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\Socialitecontroller;
use App\Http\Controllers\PlayController;
use App\Http\Controllers\PostController;

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
    return view('welcome');
});

Route::get('/play', [PlayController::class, 'index'])->name('play-gorund');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/auth/redirect/{provider}', [Socialitecontroller::class, 'redirect']);
Route::get('/auth/callback/{provider}', [Socialitecontroller::class, 'callback']);

Route::resources(['posts'=>PostController::class]);


