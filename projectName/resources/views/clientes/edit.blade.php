@extends('layouts.principal')

@section('titulo','Clientes - edit')

@section('conteudo')
<h3>Novo Cliente</h3>

<form action="{{route('clientes.update', $cliente['id']) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="nome" value="{{$cliente['nome']}}">
    <input type="submit" name="Salvar">
    
</form>

@endsection