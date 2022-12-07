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

Route::get('/inicio', function () {
    echo 'ola';
});

// parametro opcional
Route::get('/inicio/{nome?}', function ($nome1 = null) { 
    if (isset($nome1)){  
          echo "Olá ".$nome1."!";
      }else{
        echo "vc n digitou o nome";
      }
});

// rota com regras
Route::get('/rotacomregras/{nome}/{n}',function($nome,$n){
    for($i=0;$i=$n;$i++){
        echo "Ola! Seja bem vindo, $nome! <br>";
    }
})->where('nome','[A-Za-a]+')->where('n','[0-9]+');

// Agrupamento de rotas
Route::prefix('/app')->group(function(){

    Route::get('/',function(){
        return view('app');
    });

    
    Route::get('/profile',function(){
        return view('profile');
    });

    Route::get('/user',function(){
        return view('user');
    });
});