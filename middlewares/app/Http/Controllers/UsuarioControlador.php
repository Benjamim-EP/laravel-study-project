<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioControlador extends Controller
{
    public function index()
    {
        return '<h3>Lista de Usuários</h3>
                <ul>
                    <li>João</li>
                    <li>Maria</li>
                    <li>Jose</li>
                    <li>Paulo</li>
                </ul>';
    }
}
