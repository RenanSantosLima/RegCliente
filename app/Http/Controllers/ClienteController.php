<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    //home
    public function index(){
        $nome = 'João';
        return view('welcome', ['nome' => $nome]);
    }

    //para o get da pagina
    public function create(){
        return view('cliente.create');
    }
}
