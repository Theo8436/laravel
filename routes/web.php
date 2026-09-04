<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LogAcessoMiddleware;
use App\Http\Controllers\PublicacaoController;
use App\Http\Controllers\MencaoController;
use App\Http\Controllers\LoginAlunoController;  
use App\Http\Controllers\LoginProfessorController; 
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
Route::get('/professor/cadastro', [App\Http\Controllers\Professor::class, 'cadastro'])->name('professor.cadastro');
Route::get('/professor/entrar', [App\Http\Controllers\Professor::class, 'entrar'])->name('professor.entrar');
Route::get('/professor/logado', [App\Http\Controllers\Professor::class, 'logado'])->name('professor.logado');
Route::get('/professor/inicio', [App\Http\Controllers\Professor::class, 'inicio'])->name('professor.inicio');
Route::get('/professor/sobre', [App\Http\Controllers\Professor::class, 'sobre'])->name('professor.sobre');
Route::get('/professor/galeria', [App\Http\Controllers\Professor::class, 'galeria'])->name('professor.galeria');
Route::get('/professor/biblioteca', [App\Http\Controllers\Professor::class, 'biblioteca'])->name('professor.biblioteca');
Route::get('/professor/mencao', [App\Http\Controllers\Professor::class, 'mencao'])->name('professor.mencao');
Route::get('/professor/publi', [App\Http\Controllers\Professor::class, 'publi'])->name('professor.publi');

// Autenticação e Fluxo de Cadastro do Professor
Route::post('/logar', [LoginProfessorController::class, 'logar'])->name('logar'); // Mudado de /login para /login-professor
Route::post('/logout', [LoginProfessorController::class, 'logout'])->name('professor.logout');
Route::post('/professor/adicionar', [LoginProfessorController::class, 'adicionar'])->name('professor.adicionar');

// Verificação de Código do Aluno
Route::get('professor/verificar-codigo', [LoginProfessorController::class, 'telaCodigo'])->name('professor.verificar_codigo');
Route::post('professor/confirmar-codigo', [LoginProfessorController::class, 'confirmarCodigo'])->name('professor.confirmar_codigo');
Route::post('professor/reenviar-codigo', [LoginProfessorController::class, 'reenviarCodigo'])->name('professor.reenviar_codigo');

// CRUD Professor
Route::post('/professor/remover', [LoginProfessorController::class, 'remover'])->name('loginprofessor.remover');
Route::post('/professor/atualizar', [LoginProfessorController::class, 'atualizar'])->name('loginprofessor.atualizar');
Route::get('/professor/consultar', [LoginProfessorController::class, 'consultar'])->name('loginprofessor.consultar');


Route::get('/aluno', [App\Http\Controllers\Aluno::class, 'aluno'])->name('aluno');
Route::get('/aluno/cadastro', [App\Http\Controllers\LoginAlunoController::class, 'cadastro'])->name('aluno.cadastro');
Route::get('/aluno/entrar', [App\Http\Controllers\LoginAlunoController::class, 'entrar'])->name('aluno.entrar');
Route::get('/aluno/logado', [App\Http\Controllers\Aluno::class, 'logado'])->name('aluno.logado');
Route::get('/aluno/inicio', [App\Http\Controllers\Aluno::class, 'inicio'])->name('aluno.inicio');
Route::get('/aluno/sobre', [App\Http\Controllers\Aluno::class, 'sobre'])->name('aluno.sobre');
Route::get('/aluno/galeria', [App\Http\Controllers\Aluno::class, 'galeria'])->name('aluno.galeria');
Route::get('/aluno/biblioteca', [App\Http\Controllers\Aluno::class, 'biblioteca'])->name('aluno.biblioteca');
Route::get('/aluno/mencao', [App\Http\Controllers\Aluno::class, 'mencao'])->name('aluno.mencao');
Route::get('/aluno/doacao', [App\Http\Controllers\Aluno::class, 'doacao'])->name('aluno.doacao');
Route::get('/aluno/publi', [App\Http\Controllers\Aluno::class, 'publi'])->name('aluno.publi');

Route::post('/aluno/logar', [LoginAlunoController::class, 'logar'])->name('aluno.logar'); // Mudado de /login para /login-aluno
Route::post('/aluno/logout', [LoginAlunoController::class, 'logout'])->name('aluno.logout');
Route::post('/aluno/adicionar', [LoginAlunoController::class, 'adicionar'])->name('aluno.adicionar'); // CORRIGIDO: Adicionado o ponto!

// Verificação de Código do Aluno
Route::get('/aluno/verificar-codigo', [LoginAlunoController::class, 'telaCodigo'])->name('aluno.verificar_codigo');
Route::post('/aluno/confirmar-codigo', [LoginAlunoController::class, 'confirmarCodigo'])->name('aluno.confirmar_codigo');
Route::post('/aluno/reenviar-codigo', [LoginAlunoController::class, 'reenviarCodigo'])->name('aluno.reenviar_codigo');

// CRUD Aluno
Route::post('/remover', [LoginAlunoController::class, 'remover'])->name('aluno.remover');
Route::post('/atualizar', [LoginAlunoController::class, 'atualizar'])->name('aluno.atualizar');
Route::get('/consultar', [LoginAlunoController::class, 'consultar'])->name('aluno.consultar');

Route::get('/doacao', [App\Http\Controllers\Doacao::class, 'doacao'])->name('doacao');

Route::get('/escolha', [App\Http\Controllers\Escolha::class, 'escolha'])->name('escolha');

Route::get('/entrar', [App\Http\Controllers\Entrar::class, 'entrar'])->name('entrar');


Route::get('/sobre', [App\Http\Controllers\Sobre::class, 'sobre'])->name('sobre');

Route::get('/mencao', [App\Http\Controllers\Mencao::class, 'mencao'])->name('mencao');

Route::get('/inicio', [App\Http\Controllers\Inicio::class, 'inicio'])->name('inicio');

Route::get('/galeria', [App\Http\Controllers\Galeria::class, 'galeria'])->name('galeria');

Route::get('/biblioteca', [App\Http\Controllers\Biblioteca::class, 'biblioteca'])->name('biblioteca');

Route::get('/publi', [App\Http\Controllers\Publi::class, 'publi'])->name('publi');

// Rota principal da Área do Aluno (Carrega a página com as publicações vindas do banco)
Route::get('/minha-area', [PublicacaoController::class, 'index'])->name('aluno.minha_area');

// Rotas de processamento do banco de dados
Route::post('/publicacoes/store', [PublicacaoController::class, 'store'])->name('publicacoes.store');
Route::put('/publicacoes/update/{id}', [PublicacaoController::class, 'update'])->name('publicacoes.update');
Route::delete('/publicacoes/destroy/{id}', [PublicacaoController::class, 'destroy'])->name('publicacoes.destroy');







