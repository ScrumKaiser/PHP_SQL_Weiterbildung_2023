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
Route::get('/onion', function () {
    echo "core";
})->name('onion')->middleware(['onion.before', 'onion.after']);

/**
 * Übung 5
 */
Route::get('/secret', function () {
    echo "Gesicherter Bereich!";
})->name('secret')->middleware('auth');

/**
 * Social Login
 */
Route::get('/auth/{provider}', [App\Http\Controllers\Auth\LoginController::class, 'redirectToProvider'])->name('auth.provider');
Route::get('/auth/{provider}/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleProviderCallback']);

Route::get('/posts', [App\Http\Controllers\PostController::class, 'index'])->name('posts.index');
Route::get('/posts/toggle-active/{id}', [App\Http\Controllers\PostController::class, 'toggleActive'])->name('posts.toggle.active');

/**
 * Avatar
 */
Route::get('/avatar', function () {
    return view('avatar');
})->name('avatar');

Route::post('/avatar/upload', function () {
    request()->validate([
        'image' => 'required|mimetypes:image/png|max:1024'
    ]);
    
    request()->file('image')->storeAs('public/' . auth()->user()->id, 'avatar');

    return redirect()->back();
})->name('avatar.upload');
