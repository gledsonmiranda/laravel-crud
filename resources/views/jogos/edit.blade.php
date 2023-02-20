@extends('app')

@section('title', 'Edição de jogos')

@section('content')
  <main class="container w-90 p-3 mx-auto">
    <h1>Editar Jogo</h1>
    <hr>
    <form action="{{ route('jogos-update', ['id' => $jogo->id]) }}" method="POST">
      @csrf
      @method('PUT')
      <div class="form-group mb-4">
        <label for="nome">Nome:</label>
        <input type="text" class="form-control" id="nome" name="nome" value={{ $jogo->nome }}>
      </div>
      <div class="form-group mb-4">
        <label for="categoria">Categoria</label>
        <input type="text" class="form-control" id="categoria" name="categoria" value={{ $jogo->categoria }}>
      </div>
      <div class="form-group mb-4">
        <label for="ano_criacao">Ano criação:</label>
        <input type="number" class="form-control" id="ano_criacao" name="ano_criacao" value={{ $jogo->ano_criacao }}>
      </div>
      <div class="form-group mb-4">
        <label for="valor">Valor:</label>
        <input type="number" class="form-control" id="valor" name="valor" value={{ $jogo->valor }}>
      </div>
      <div class="form-group mb-4">
        <input type="submit" class="btn btn-success" name="Atualizar">
      </div>
    </form>
  </main>
@endsection