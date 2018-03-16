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

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/master', function () {
    return view('master');
});
Route::get('/', function () {
    return view('contenido');
});
Route::get('/contenido2', function () {
    return view('contenido2');
});
Route::post('Informacion','ControladorEjercicio@MatrizEjercicio');