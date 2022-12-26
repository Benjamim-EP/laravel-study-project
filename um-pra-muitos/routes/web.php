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
    return view('welcome');
});

Route::get('/categorias', function () {
    $cats = Categoria::all();
    if (count($cats) === 0) {
        echo "<h4>Você nao possui nenhuma categoria cadastrada</h4>";
    }
    else {
        foreach($cats as $c) {
            echo "<p>" . $c->id . ") " . $c->nome . "</p>";
        }
    }
});

Route::get('/produtos', function () {
    $prods = Produto::all();
    if (count($prods) === 0) {
        echo "<h4>Você nao possui nenhum produto cadastrado</h4>";
    }
    else {
        echo "<table>";
        echo "<thead><tr><td>Nome</td><td>Estoque</td><td>Preco</td><td>Categoria</td></tr></thead>";
        echo "<tbody>";
        foreach($prods as $p) {
            echo "<tr>";
            echo "<td>" . $p->nome . "</td>";
            echo "<td>" . $p->estoque . "</td>";
            echo "<td>" . $p->preco . "</td>";
            // echo "<td>" . $p->categoria_id . "</td>";
            echo "<td>" . $p->categoria->nome . "</td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
    }
});

Route::get('/categoriasprodutos', function () {
    $cats = Categoria::all();
    if (count($cats) === 0) {
        echo "<h4>Você nao possui nenhuma categoria cadastrada</h4>";
    }
    else {
        foreach($cats as $c) {
            echo "<h4>" . $c->id . ") " . $c->nome . "</h4>";
            $prods = $c->produtos;
            if (count($prods) > 0) {
                echo "<ul>";
                foreach($prods as $p) {
                    echo "<li>" . $p->nome . "</p>";
                }
                echo "</ul>";
            }
            else {
                echo "<h4>Categoria não possui produtos</h4>";
            }
            echo "<hr>";
        }
    }
});

Route::get('/categoriasprodutos/json', function () {
    $cats = Categoria::with("produtos")->get();
    return $cats->toJson();
});