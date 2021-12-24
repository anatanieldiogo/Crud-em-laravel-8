@extends('layouts.app')

@section('title', 'Editar jogo')

@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-sm-10">
            <h1 class="mb-5">Editar jogo</h1>
        </div>
        <div class="col-sm-2"><a href="{{ route('jogos-index') }}" class="btn btn-primary">Ver jogos</a></div>
    </div>

    <form action="{{ route('jogos-update', ['id'=> $jogo->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" class="form-control" value="{{ $jogo->nome }}">
            </div>
            <div class="form-group">
                <label for="categoria">Categoria</label>
                <input type="text" name="categoria" id="categoria" class="form-control" value="{{ $jogo->categoria }}">
            </div>
            <div class="form-group">
                <label for="ano_criacao">Ano de criação</label>
                <input type="text" name="ano_criacao" id="ano_criacao" class="form-control" value="{{ $jogo->ano_criacao }}">
            </div>
            <div class="form-group">
                <label for="valor">Valor</label>
                <input type="number" name="valor" id="valor" class="form-control" value="{{ $jogo->valor }}">
            </div>
            <div class="form-group">
                <input type="submit" name="submit" class="btn btn-success" value="Atualizar">
            </div>
        </div>
    </form>
</div>



@endsection