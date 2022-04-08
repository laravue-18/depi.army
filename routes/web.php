<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Artisan;

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
Route::get('cmd', function(){
    $exitCode = Artisan::call('migrate');
    dd($exitCode);
});


Route::middleware('guest')->group(function(){
    Route::get('/', [UserController::class, 'welcome'])->name('welcome');
    Route::get('/mission', [UserController::class, 'mission']);
    Route::get('/ourteam', [UserController::class, 'ourteam']);
    Route::get('/roadmap', [UserController::class, 'roadmap']);

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

    Route::post('tweet', [UserController::class, 'tweet']);

    Route::get('{username}', [UserController::class, 'profile']);
});


