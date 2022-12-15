@extends('layout.app',["current"=>"home"])

@section('body')

<div class="jumbotron bg-light border border-secondary">
    <div class="row">
        <div class="card-deck">
            <div class="card border border-primary">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card=text">
                        Categorias
                    </p>
                    <a href="/categorias" class="btn btn-primary">Cadastre</a>
                </div>
            </div>
            <div class="card border border-primary">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card=text">
                        produtos
                    </p>
                    <a href="/produtos" class="btn btn-primary">Cadastre</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection