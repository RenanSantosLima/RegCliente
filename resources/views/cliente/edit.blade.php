@extends('layouts.main')

@section('title', 'RegCleinte - Editar')<!-- titulo da pagina -->

@section('content')<!-- inicio do conteudo da pagina -->

    <div class="col-md-6 offset-md-3">

        <h2>Editar cliente</h2>

        <form action="/cliente/update/{{ $cliente->id }}" method="POST"><!-- inicio form -->
            @csrf<!-- para enviar o formulario -->
            @method('PUT')
            <div class="form-group">
                <label>Nome do cliente:</label>
                <input type="text" name="nome" class="form-control" placeholder="Coloque o nome do cliente" value="{{ $cliente->nome }}">
            </div>
            <input type="submit" class="btn btn-primary" value="Salvar">
            
        </form><!-- fim form -->
        
    </div>

@endsection<!-- fim do conteudo da pagina -->