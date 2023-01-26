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

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/produtos','ProdutoControlador@index');

Route::post('/login', function (Request $req) {
    $login_ok = false;
    switch($req->input('user')){
        case 'joao':
            $login_ok = $req->input('passwd') === 'senhajoao';
            break;
        case 'maria':
            $login_ok = $req->input('passwd') === 'senhamaria';
            break;
        case 'jose':
            $login_ok = $req->input('passwd') === 'senhajose';
            break;
    }
    if($login_ok){
        return response('Login OK', 200);
    }
    else{
        return response('Falha no login', 404);
    }
});