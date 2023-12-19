<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/**
 * Übung 1 und 4
 */
/* Route::get('/helloworld', function () {
    echo 'Aufruf den Text Hallo Welt wie geht es dir?';
}); */
Route::get('/helloworld', 'TestController@printMessage');

/**
 * Übung 2 und 5
 */
/* Route::get('/name/{name}/nachname/{nachname}', function ($name, $nachname) {
    return 'Name: ' . $name . ' ' . $nachname;
}); */
Route::get('/name/{name}/nachname/{nachname}', 'NameController@NameNachname');

/**
 * Übung 3 und 5
 */
/* Route::get('/user/{name?}', function ($name = null) {
    return 'User: ' . $name;
})->name('username'); */
Route::get('/user/{name?}', 'NameController@UserName')->name('username');


/**
 * Übung 6
 */
Route::resource('/certificate', 'CertificateController')
    ->only(['create', 'store', 'show', 'destroy'])
    ->names(['create' => 'certificate.certify']);
