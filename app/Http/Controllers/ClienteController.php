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


    //deletar
    public function destroy($id){
        //deletar
        Cliente::findOrFail($id)->delete();

        return redirect('/')->with('msg','Cliente deletado com sucesso!');
    }

    public function edit($id){

        $cliente = Cliente::findOrFail($id);

        return view('cliente.edit', ['cliente' => $cliente]);
    }

    /*update*/
    public function update(Request $request){

        Cliente::findOrFail($request->id)->update($request->all());

        return redirect('/')->with('msg','Cliente editado com sucesso!');
    }
}
