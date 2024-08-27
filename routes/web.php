<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\ProfiltechSSO;

Route::get('auth/google/callback', [UserController::class, 'googleOAuth2Callback']);

Route::middleware(ProfiltechSSO::class)->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });    


    Route::controller(OrderController::class)->prefix('orders')->name('orders')->group(function () {
        Route::get('/', 'list');
        // Route::get('/{id}', 'show');
        // Route::post('/', 'store');
        // Route::put('/{id}', 'update');
        // Route::delete('/{id}', 'destroy');
    });
});
