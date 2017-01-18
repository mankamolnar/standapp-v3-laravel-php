<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    //return view('welcome');
});

Route::get('/uj-stand', function() {
    //
});

Route::get('/stand-feltoltes', function() {
    //
});

Route::get('/stand-megtekintes/{id}', function() {
    //
});

Route::get('/stand-modositas/{id}', function() {
    //
});

Route::get('/stand-torles', function() {
    //
});

Route::get('/stand-atadas', function() {
    //
});

Route::get('/kereso', function() {
    //
});

Route::get('/itallap', function() {
    //
});

Route::get('/itallap-modositas', function() {
    //
});

//??????????? KELL EZ?
Route::get('/ital-athelyezes', function() {
    //
});

Route::get('/itallap-csv-feltoltes', function() {
    //
});

Route::get('/felhasznalo-megtekintes', function() {
    //
});

Route::get('/felhasznalo-modositas', function() {
    //
});

//???? DEAKTIVÁLÁS ESETLEG????
Route::get('/felhasznalo-torles', function() {
    //
});

Route::get('/kocsma-kezelo', function() {
    //
});

Route::get('/uj-kocsma', function() {
    //
});

Route::get('/kocsma-modositas', function() {
    //
});

Route::get('/kocsma-valtas', function() {
    //
});

Route::get('/statisztika', function() {
    //
});

Route::get('/szemelyes-beallitasok', function() {
    //
});

Route::get('/fizetesek', function() {
    //
});

Route::get('/napi-akciok', function() {
    //
});

Route::get('/uj-akcio', function() {
    //
});

Route::get('/akcio-torles', function() {
    //
});

Route::get('/fix-kiadas-beallitas', function() {
    //
});

Route::get('/kocsma-beallitasok', function() {
    //
});

Route::get('/sorsjegy-beallitas', function() {
    //
});

Route::get('/szulinapos-meghivas', function() {
    //
});

Route::get('/szulinapos-ellenorzes', function() {
    //
});