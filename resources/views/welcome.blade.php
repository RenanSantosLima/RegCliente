
@extends('layouts.main')

@section('title', 'RegCleinte')<!-- titulo da pagina -->

@section('content')<!-- inicio do conteudo da pagina -->

    <h2>Listagem clientes</h2>
    <button><a href="/cliente/create">Novo cliente</a></button>
    <p>{{ $nome }}</p>

@endsection<!-- fim do conteudo da pagina -->
