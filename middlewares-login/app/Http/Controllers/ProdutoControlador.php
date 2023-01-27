<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoControlador extends Controller
{
    private $produtos = [
        'Notebook',
        'Impressora',
        'Mouse',
        'Teclado'
    ];

    public function __construct(){
        $this->middleware(\App\Http\Middleware\ProdutoAdmin::class);
    }
    
    public function index(){
        $html = '<h1>Produtos</h1>';
        $html .= '<ul>';
        foreach($this->produtos as $p){
            $html .= "<li>Produto: $p</li>";
        }
        $html .= '</ul>';
        return $html;
    }
}
