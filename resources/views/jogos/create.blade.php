@extends('layouts.app')

@section('title', 'Cadastrar jogo')

@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-sm-10">
            <h1 class="mb-5">Cadastrar jogo</h1>
        </div>
        <div class="col-sm-2"><a href="{{ route('jogos-index') }}" class="btn btn-primary">Ver jogos</a></div>
    </div>

    <form action="{{ route('jogos-store') }}" method="POST">
        @csrf
        <div class="form-group">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" class="form-control">
            </div>
            <div class="form-group">
                <label for="categoria">Categoria</label>
                <input type="text" name="categoria" id="categoria" class="form-control">
            </div>
            <div class="form-group">
                <label for="ano_criacao">Ano de criação</label>
                <input type="date" name="ano_criacao" id="ano_criacao" class="form-control">
            </div>
            <div class="form-group">
                <label for="valor">Valor</label>
                <input type="number" name="valor" id="valor" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" name="submit" class="btn btn-primary">
            </div>
        </div>
    </form>
</div>



@endsection