<?php
 
//use App\Http\Middleware\PrimeiroMiddleware;

Route::get('/usuarios','UsuarioControlador@index')
        ->middleware('primeiro','segundo');
Route::get('/', function () {
    return view('welcome');
});