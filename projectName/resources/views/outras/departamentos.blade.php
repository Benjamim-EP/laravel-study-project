@extends('layouts.principal')

@section('titulo','Departamentos')

@section('conteudo')
<h3>Departamentos</h3>
<ul>
    <li>Computadores</li>
    <li>Eletronicos</li>
    <li>Acessorios</li>
    <li>Roupas</li>
</ul>

@alerta(['titulo'=>'Erro Fatal','tipo'=>'error'])
<p><strong>Erro inesperado</strong></p>
@endalerta
@alerta(['titulo'=>'Erro Fatal','tipo'=>'success'])
<p><strong>Erro inesperado</strong></p>
@endalerta

@endsection