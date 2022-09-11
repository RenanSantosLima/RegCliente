
@extends('layouts.main')

@section('title', 'RegCleinte')<!-- titulo da pagina -->

@section('content')<!-- inicio do conteudo da pagina -->

    <h2>Listagem clientes</h2>

    <table class="table"><!-- inicio table -->

        <thead>
            <tr>
                <th scope="col">Cliente</th>
                <th scope="col">Opções</th>
            </tr>
        </thead>

        <tbody>
            @foreach($clientes as $cliente)<!-- começo do foreach -->

                <tr>
                    <td>{{ $cliente->nome }}</td>
                    <td>Editar/Excluir</td>
                </tr>

            @endforeach<!-- fim do foreach -->
        </tbody>


    </table><!-- fim table -->
    
    <button><a href="/cliente/create">Novo cliente</a></button>
    

@endsection<!-- fim do conteudo da pagina -->
