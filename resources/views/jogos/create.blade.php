@extends('app')

@section('title', 'Criação de jogos')

@section('content')
  <main class="container w-90 p-3 mx-auto">
    <h1>Criação de Jogos</h1>
    <hr>
    <form action="{{ route('jogos-store') }}" method="POST">
      @csrf
      <div class="form-group mb-4">
        <label for="nome">Nome:</label>
        <input type="text" class="form-control" id="nome" name="nome">
      </div>
      <div class="form-group mb-4">
        <label for="categoria">Categoria</label>
        <input type="text" class="form-control" id="categoria" name="categoria">
      </div>
      <div class="form-group mb-4">
        <label for="ano_criacao">Ano criação:</label>
        <input type="number" class="form-control" id="ano_criacao" name="ano_criacao">
      </div>
      <div class="form-group mb-4">
        <label for="valor">Valor:</label>
        <input type="number" class="form-control" id="valor" name="valor">
      </div>
      <div class="form-group mb-4">
        <input type="submit" class="btn btn-primary" name="Enviar">
      </div>
    </form>
  </main>
@endsection