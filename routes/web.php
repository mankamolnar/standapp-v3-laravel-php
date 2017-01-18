<?php

// !!! HOME !!!
Route::get('/', function () {
    return view('index');
});

// !!! STAND !!!
Route::get('/stand/uj', function() {
    //
});

Route::get('/stand/feltoltes', function() {
    //
});

Route::get('/stand/megtekintes/{id}', function() {
    //
});

Route::get('/stand/modositas/{id}', function() {
    //
});

Route::get('/stand/torles', function() {
    //
});

Route::get('/stand/atadas', function() {
    //
});

// !!! KERESŐ !!!
Route::get('/kereso', function() {
    //
});

// !!! ITALLAP !!!
Route::get('/itallap', function() {
    //
});

Route::get('/itallap/modositas', function() {
    //
});

//??????????? KELL EZ?
Route::get('/itallap/athelyezes', function() {
    //
});

Route::get('/itallap/csv-feltoltes', function() {
    //
});

Route::get('/itallap/napi-akcio/megtekintes', function() {
    //
});

Route::get('/itallap/napi-akcio/uj', function() {
    //
});

Route::get('/itallap/napi-akcio/torles', function() {
    //
});

// !!! FELHASZNALO !!!
Route::get('/felhasznalo/megtekintes', function() {
    //
});

Route::get('/felhasznalo/modositas', function() {
    //
});

//???? DEAKTIVÁLÁS ESETLEG????
Route::get('/felhasznalo/torles', function() {
    //
});

// !!! KOCSMA !!!
Route::get('/kocsmak', function() {
    //
});

Route::get('/kocsmak/uj', function() {
    //
});

Route::get('/kocsmak/modositas', function() {
    //
});

// !!! KOCSMA VALTAS !!!
Route::get('/kocsma-valtas', function() {
    //
});

// !!! STATISZTIKA !!!
Route::get('/statisztika', function() {
    //
});

Route::get('/statisztika/fizetesek', function() {
    //
});

// !!! SZEMELYES BEALLITASOK !!!
Route::get('/szemelyes-beallitasok', function() {
    //
});

// !!! KOCSMA BEÁLLÍTÁSAI !!!
Route::get('/kocsma-beallitasok', function() {
    //
});

Route::get('/kocsma-beallitasok/fix-kiadas-beallitas', function() {
    //
});

Route::get('/kocsma-beallitasok/sorsjegy-beallitas', function() {
    //
});

// !!! SZULETESNAPOS MEGHIVAS !!!
Route::get('/szulinapos/meghivas', function() {
    //
});

Route::get('/szulinapos/ellenorzes', function() {
    //
});

Auth::routes();

Route::get('/home', 'HomeController@index');
