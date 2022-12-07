<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeuControlador extends Controller
{
    public function produtos(){
        echo '<h1>Produtos</h1>';
        echo '<ol>';
        echo '<li>Notebook</li>';        
    }
    public function getNome(){
        return "Jose da silva";
    }
    public function  multiplicar($n1,$n2){
        return $n1 * $n2;
    }
}
