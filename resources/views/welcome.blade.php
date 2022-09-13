
@extends('layouts.main')

@section('title', 'RegCleinte')<!-- titulo da pagina -->

@section('content')<!-- inicio do conteudo da pagina -->

    <div class="col-md-6 offset-md-3">
        <h2>Listagem clientes</h2>

        <button class="btn btn-primary margin"><a href="/cliente/create">Novo cliente</a></button>

        <table class="table"><!-- inicio table -->

            <thead>
                <tr>
                    <th scope="col">Cliente</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>

            <tbody>
                @foreach($clientes as $cliente)<!-- começo do foreach -->

                    <tr>
                        <td>{{ $cliente->nome }}</td>
                        <td>
                            <button class="btn btn-info botao"><a href="/cliente/edit/{{ $cliente->id }}"><ion-icon name="create-outline"></ion-icon>Editar<a/></button>
                            <form action="/cliente/{{ $cliente->id }}" method="POST" class="botao">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"><ion-icon name="trash-outline"></ion-icon>Excluir</button>
                            </form>
                        </td>
                    </tr>

                @endforeach<!-- fim do foreach -->
            </tbody>


        </table><!-- fim table -->

    </div>

@endsection<!-- fim do conteudo da pagina -->
