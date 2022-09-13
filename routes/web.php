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
Route::post('/cliente',[ClienteController::class, 'store']);

/*Deletar*/
Route::delete('/cliente/{id}', [ClienteController::class, 'destroy']);

/*Edição*/
Route::get('/cliente/edit/{id}', [ClienteController::class, 'edit']);
Route::put('/cliente/update/{id}', [ClienteController::class, 'update']);