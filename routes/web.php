<?php

// !!! AUTH ROUTES
Auth::routes();
Route::any('/register', 'IndexController@index');

// !!! TEST OLD APP
Route::get("/old-test", function () {
    return view('welcome');
});

// !!! HOME !!!
Route::get('/', 'IndexController@index');

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
Route::get('/itallap', "DrinksController@index");

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
Route::get('/felhasznalo/megtekintes', 'UsersController@index');

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
Route::get('/kocsma-valtas', 'ChoosePubController@index');
Route::post('/kocsma-valtas', 'ChoosePubController@change_pub');

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

Route::get('/logout', 'LogoutController@logout');
