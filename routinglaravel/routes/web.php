<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/**
 * Übung 1
 */
Route::get('/helloworld', function () {
    echo 'Aufruf den Text Hallo Welt wie geht es dir?';
});

/**
 * Übung 2
 */
Route::get('/uebung2/{name}/{nachname}', function ($name, $nachname) {
    echo $name . ' ' . $nachname;
});

/**
 * Übung 3
 */
Route::get('/user/{name?}', function ($name = null) {
    echo 'User: ' . $name;
})->name('username');
