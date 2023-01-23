<?php

use App\Desenvolvedor;
use App\Projeto;

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

Route::get('projeto_desenvolvedores',function() {
    $projetos = Projeto::with('desenvolvedores')->get();

    foreach($projetos as $projeto) {
        echo "<p>Nome: {$projeto->nome}</p>";
        echo "<p>Desenvolvedores: </p>";
        echo "<ul>";
        foreach($projeto->desenvolvedores as $desenvolvedor) {
            echo "<li>Nome: {$desenvolvedor->nome}</li>";
            echo "<li>Horas Semanais: {$desenvolvedor->pivot->horas_semanais}</li>";
        }
        echo "</ul>";
        echo "<hr>";
    }

    return $projetos->toJson();
});

Route::get('/alocar',function(){
    $projeto = Projeto::find(4);
    if(isset($projeto)) {
        //$projeto->desenvolvedores()->attach(1,['horas_semanais'=>40]);
        //$projeto->desenvolvedores()->attach([1,2,3],['horas_semanais'=>40]);
        $projeto->desenvolvedores()->attach([
            1 => ['horas_semanais'=>40],
            2 => ['horas_semanais'=>20],
            3 => ['horas_semanais'=>10]
        ]);
    }
});

Route::get('/desalocar',function(){
    $projeto = Projeto::find(4);
    if(isset($projeto)) {
        $projeto->desenvolvedores()->detach([1,2]);
    }
});