<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/catalogo', function () {
    return view('catalogue');
});

Route::get('/dettaglio-film/{uri}', function () {
    return view('detail');
});

Route::get('/contattaci', function () {
    return view('contact');
});
