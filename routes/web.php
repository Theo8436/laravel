<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LogAcessoMiddleware;
use App\Http\Controllers\PublicacaoController;
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

Route::get('/', [App\Http\Controllers\Principal::class, 'principal']);

Route::get('/professor', [App\Http\Controllers\Professor::class, 'professor'])->name('professor');
Route::get('/login', [App\Http\Controllers\Login::class, 'login'])->name('login');
Route::get('/calendario', [App\Http\Controllers\Calendario::class, 'calendario'])->name('calendario');
Route::get('/revisao', [App\Http\Controllers\Revisao::class, 'revisao'])->name('revisao');

Route::get('/aluno', [App\Http\Controllers\Aluno::class, 'aluno'])->name('aluno');

Route::get('/sobre', [App\Http\Controllers\Sobre::class, 'sobre'])->name('sobre');

Route::get('/mencao', [App\Http\Controllers\Mencao::class, 'mencao'])->name('mencao');

Route::get('/inicio', [App\Http\Controllers\Inicio::class, 'inicio'])->name('inicio');


// Rota principal da Área do Aluno (Carrega a página com as publicações vindas do banco)
Route::get('/minha-area', [PublicacaoController::class, 'index'])->name('aluno.minha_area');

// Rotas de processamento do banco de dados
Route::post('/publicacoes/store', [PublicacaoController::class, 'store'])->name('publicacoes.store');
Route::put('/publicacoes/update/{id}', [PublicacaoController::class, 'update'])->name('publicacoes.update');
Route::delete('/publicacoes/destroy/{id}', [PublicacaoController::class, 'destroy'])->name('publicacoes.destroy');





