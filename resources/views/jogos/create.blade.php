@extends('layouts.app')

@section('title', 'CRUD')

@section('content')

<div class="container mt-5">
<div class="row">
  <div class="col-sm-11">
  <h1>Crie um Novo Jogo</h1>
  </div>
  <div class="col-sm-1">
    <a href="{{ route('jogos-index') }}" class="btn btn-success">Voltar</a>
  </div>
</div>

    
    <hr>
    <form action="{{ route('jogos-store') }}" method="POST">
        @csrf
            <div class="form-group">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" name="nome" placeholder="Nome do Jogo">
                </div>
                <div class="form-group">
                    <label for="categoria">Categoria</label>
                    <input type="text" class="form-control" name="categoria" placeholder="Categoria do Jogo">
                </div>
                <div class="form-group">
                    <label for="lancamento">Lançamento</label>
                    <input type="number" class="form-control" name="lancamento" placeholder="Data de Lançamento">
                </div>
                <div class="form-group">
                    <label for="valor">Valor</label>
                    <input type="Number" class="form-control" name="valor" placeholder="Preço do Jogo">
                </div>
                <br>
                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-primary">
                </div>
            </div>
    </form>
</div>


@endsection