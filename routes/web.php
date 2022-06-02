<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
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
    $exitCode = Artisan::call('');
    dd($exitCode);
});


Route::middleware('guest')->group(function(){
    Route::get('/', [UserController::class, 'welcome'])->name('welcome');
    Route::get('/mission', [UserController::class, 'mission']);
    Route::get('/ourteam', [UserController::class, 'ourteam']);
    Route::get('/roadmap', [UserController::class, 'roadmap']);

    Route::post('enlist', [UserController::class, 'enlist']);
    Route::get('login', [UserController::class, 'login'])->name('login');

    Route::get('/u/{username}', [UserController::class, 'welcome'])->name('referral');
});

Route::get('/auth/callback/twitter',  [UserController::class, 'callback']);

Route::middleware(['auth'])->group(function(){
    Route::post('logout', [UserController::class, 'logout']);

    Route::get('activate', [UserController::class, 'activate']);

    Route::post('following', [UserController::class, 'following']);
    Route::get('discord', [UserController::class, 'redirectDiscord']);
    Route::get('/auth/callback/discord',  [UserController::class, 'callbackDiscord']);
    Route::post('addEmail', [UserController::class, 'addEmail']);
    Route::post('tweet', [UserController::class, 'tweet']);

    Route::middleware(['activated'])->group(function(){
        Route::get('home', [UserController::class, 'dashboard']);
        Route::get('rank', [UserController::class, 'rank']);
        Route::get('stats', [UserController::class, 'stats']);
        Route::get('profile', [UserController::class, 'profile']);
        Route::post('profile', [UserController::class, 'updateProfile']);
    });

    Route::get('u/{username}', [UserController::class, 'profile'])->name('profile');
});

Route::prefix('admin')->group(function(){
    Route::middleware('guest:admin')->group(function(){
        Route::view('/', 'admin.login');
        Route::post('/', [AdminController::class, 'login']);
    });

    Route::middleware('auth:admin')->group(function(){
        Route::post('logout', [AdminController::class, 'logout']);

        Route::get('dashboard', [AdminController::class, 'dashboard']);
    });
});
