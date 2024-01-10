<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

/**
 * Übung 2
 */
Route::get('/welcome')->middleware(('easteregg'));

/**
 * Übung 3
 */
Route::Get('/onion', function () {
    echo "core";
})->middleware(['onion.before', 'onion.after']);
