@extends('layouts.main')

@section('title', 'RegCleinte - Cadastro')<!-- titulo da pagina -->

@section('content')<!-- inicio do conteudo da pagina -->

    <div class="col-md-6 offset-md-3">

        <h2>Cadastro do cliente</h2>

        <form action="/cliente" method="POST"><!-- inicio form -->
            @csrf<!-- para enviar o formulario -->

            <div class="form-group">
                <label>Nome do cliente:</label>
                <input type="text" name="nome" class="form-control" placeholder="Coloque o nome do cliente">
            </div>
            <input type="submit" class="btn btn-primary" value="Salvar">
            
        </form><!-- fim form -->
        
    </div>

@endsection<!-- fim do conteudo da pagina -->