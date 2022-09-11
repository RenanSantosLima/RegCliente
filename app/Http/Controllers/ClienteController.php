<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/*Model*/
use App\Models\Cliente;

class ClienteController extends Controller
{
    //home
    public function index(){
        //pega todo os dados da tabela
        $clientes = Cliente::all();
        return view('welcome', ['clientes' => $clientes]);
    }

    //para o get da pagina
    public function create(){
        return view('cliente.create');
    }

    //salvar
    public function store(Request $request){
        //instacia a classe
        $cliente = new Cliente;

        //dados do form
        $cliente->nome = $request->nome;

        //salva no banco
        $cliente->save();

        return redirect('/')->with('msg','Cliente salvo com sucesso!');
    }
}
