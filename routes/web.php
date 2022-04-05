<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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


Route::middleware('guest')->group(function(){
    Route::view('/', 'welcome')->name('welcome');
    Route::post('enlist', [UserController::class, 'enlist']);
    Route::get('login', [UserController::class, 'login'])->name('login');
});

Route::get('/auth/callback/twitter',  [UserController::class, 'callback']);

Route::middleware('auth')->group(function(){
    Route::post('following', [UserController::class, 'following']);
    Route::get('home', [UserController::class, 'dashboard']);
    Route::post('logout', [UserController::class, 'logout']);

    Route::get('discord', [UserController::class, 'redirectDiscord']);
    Route::get('/auth/callback/discord',  [UserController::class, 'callbackDiscord']);

    Route::get('{username}', [UserController::class, 'profile']);
});



