<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Importação de Controllers*/
use App\Http\Controllers\ClienteController;


/*pagina principal*/
Route::get('/',[ClienteController::class, 'index']);

/*criar ciliente*/
Route::get('/cliente/create',[ClienteController::class, 'create']);

/*rota de inserção*/
Route::get('/sobre', function () {
    return view('cadastro');
});
