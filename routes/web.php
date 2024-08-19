<?php

use App\Http\Controllers\ClientesController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\FornecedoresController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\SobreNosController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PrincipalController::class, 'principal']);

Route::get('/sobreNos', [SobreNosController::class, 'sobreNos']);

Route::get('/contato', [ContatoController::class, 'contato']);

Route::get('/login', [LoginController::class, 'login']);

Route::prefix('/app')->group(function(){
    Route::get('/clientes', [ClientesController::class, 'clientes']);
    Route::get('/fornecedores', [FornecedoresController::class, 'fornecedores']);
    Route::get('/produtos', [ProdutosController::class, 'produtos']);
});


// Route::get('/contato/{nome}', function(string $nome){
//     echo 'Estamos aqui, '.$nome .'!';
// });
