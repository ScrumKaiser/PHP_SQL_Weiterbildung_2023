<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    // Übung 4
    Log::channel('daily')->info(request()->ip());

    return view('index');
});

/**
 * Übung 2
 */
Route::get('/welcome')->name('easteregg')->middleware('easteregg');

/**
 * Übung 3
 */
Route::Get('/onion', function () {
    echo "core";
})->name('onion')->middleware(['onion.before', 'onion.after']);

/**
 * Übung 5
 */
Route::Get('/secret', function () {
    echo "Gesicherter Bereich!";
})->name('secret')->middleware('auth');

/**
 * Social Login
 */
Route::Get('/auth/{provider}', [App\Http\Controllers\Auth\LoginController::class, 'redirectToProvider'])->name('auth.provider');
Route::Get('/auth/{provider}/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleProviderCallback']);
