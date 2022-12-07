<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/produtos', function(){
    echo "<h1>Produtos</h1>";
    echo "</ol>";
    echo "<li>Notebook</li>";
    echo "<li>Impressora</li>";
})->name("meusprodutos");

//Route::redirect('todosprodutos','produtos',301);

Route::get('todosprodutos',function(){
    return redirect()->route('meusprodutos');
});