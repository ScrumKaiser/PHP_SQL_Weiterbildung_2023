<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
Route::get('/name/{name}/nachname/{nachname}', 'TestController@showFullName');

/**
 * Übung 3 und 5
 */
/* Route::get('/user/{name?}', function ($name = null) {
    return 'User: ' . $name;
})->name('username'); */
Route::get('/user/{name?}', 'TestController@showUserName')->name('username');


/**
 * Übung 6
 */
Route::resource('/certificates', 'CertificateController')
    ->only(['create', 'store', 'show', 'destroy'])
    ->names(['create' => 'certificate.certify']);

/**
 * Übung 7
 */
Route::get('/question', function (Request $request) {
    /* Wenn keine »id« vorhanden ist oder die »id« null ist, 
        soll eine Fehlermeldung mit einem HTTP-Statuscode 404 zurückgegeben werden. */
    if ($request->missing('id') || !$request->filled('id'))
        return response('Es wurde keine ID angegeben!', 404);

    /* Wenn die »question« nicht vorhanden ist, soll auf die Seite der Akademie 
        "https://www.webmasters-fernakademie.de/" weitergeleitet werden. 
        Die »id« soll aber vorhanden sein. */
    else if ($request->missing('question') || !$request->filled('question'))
        return redirect()->away('https://www.webmasters-fernakademie.de/');

    /* Wenn der Parameter »file« true ist, also nicht null oder false, 
        soll das Bild Success.png heruntergeladen werden. 
        Der Name der Datei soll der Wert des »id«-Parameters + die Endung .png sein. 
        Die Parameter »question« und »id« dürfen ebenfalls nicht null sein. */
    else if ($request->file === 'true')
        return response()->download('assets/images/Success.png', $request->id . '.png');

    /* Wenn die »question« sowie die »id« vorhanden sind, 
        soll ein kleiner individueller Text wiedergegeben werden. 
        Dieser soll bestätigen, dass die Frage gespeichert wurde. 
        Der Statuscode soll 200 sein. */
    else
        return response('Die Frage "' . $request->question
            . '" mit der ID "' . $request->id . '" wurde gespeichert.');
});