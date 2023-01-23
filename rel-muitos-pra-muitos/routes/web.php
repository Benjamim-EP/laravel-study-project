<?php

use App\Desenvolvedor;

Route::get('/desenvolvedor_projetos', function () {
    $desenvolvedores = Desenvolvedor::with('projetos')->get();

    foreach($desenvolvedores as $desenvolvedor) {
        echo "<p>Nome: {$desenvolvedor->nome}</p>";
        echo "<p>Projetos: </p>";
        echo "<ul>";
        foreach($desenvolvedor->projetos as $projeto) {
            echo "<li>Nome: {$projeto->nome}</li>";
            echo "<li>Horas Semanais: {$projeto->pivot->horas_semanais}</li>";
        }
        echo "</ul>";
        echo "<hr>";
    }

    //return $desenvolvedores->toJson();
});
