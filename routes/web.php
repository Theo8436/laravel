<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LogAcessoMiddleware;
use App\Http\Controllers\PublicacaoController;
use App\Http\Controllers\MencaoController;
use App\Http\Controllers\LoginAlunoController;  
use App\Http\Controllers\LoginProfessorController; 
use App\Http\Controllers\LivroController;
use App\Http\Controllers\AdicionaController;
use App\Http\Controllers\GaleriaController;

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

// Rotas de gerenciamento de menção (Professor)
Route::get('/professor/mencao/{id}/edit', [MencaoController::class, 'edit'])->name('mencao.edit');
Route::put('/professor/mencao/{id}', [MencaoController::class, 'update'])->name('mencao.update');
Route::delete('/professor/mencao/{id}', [MencaoController::class, 'destroy'])->name('mencao.destroy');

// Rota inicial redireciona para a tela do Professor
// Route::get('/', function () {
//     return redirect()->route('professor.mencao');
// });

// Área do Professor (Painel de Criação e Listagem)
Route::get('/professor/mencao', [MencaoController::class, 'indexProfessor'])->name('professor.mencao');
Route::post('/professor/mencao', [MencaoController::class, 'store'])->name('mencao.store');

// Área do Aluno
Route::get('/aluno/mencao', [MencaoController::class, 'indexAluno'])->name('aluno.mencao');

// Área Pública (Visitantes)
Route::get('/mencao', [App\Http\Controllers\MencaoController::class, 'indexPublico'])->name('publico.mencao');

// Visualizar detalhes da menção
Route::get('/mencao/{id}', [MencaoController::class, 'show'])->name('mencao.show');


Route::get('/professor', [App\Http\Controllers\Professor::class, 'professor'])->name('professor');
Route::get('/professor/cadastro', [App\Http\Controllers\Professor::class, 'cadastro'])->name('professor.cadastro');
Route::get('/professor/entrar', [App\Http\Controllers\Professor::class, 'entrar'])->name('professor.entrar');

// ROTA DO PROFESSOR LOGADO (Adicionado o nome alunos.index para o formulário de busca da Blade funcionar)
Route::get('/professor/logado', [AdicionaController::class, 'index'])->name('professor.logado');
Route::get('/alunos', [AdicionaController::class, 'index'])->name('alunos.index');

Route::get('/professor/inicio', [App\Http\Controllers\Professor::class, 'inicio'])->name('professor.inicio');
Route::get('/professor/sobre', [App\Http\Controllers\Professor::class, 'sobre'])->name('professor.sobre');
Route::get('/professor/galeria', [App\Http\Controllers\Professor::class, 'galeria'])->name('professor.galeria');


// Rotas da Galeria do Professor
Route::get('/professor/galeria', [GaleriaController::class, 'index'])->name('professor.galeria');
Route::post('/professor/galeria/salvar', [GaleriaController::class, 'store'])->name('galeria.store');
Route::put('/professor/galeria/atualizar/{id}', [GaleriaController::class, 'update'])->name('galeria.update');
Route::delete('/professor/galeria/excluir/{id}', [GaleriaController::class, 'destroy'])->name('galeria.destroy');

// Rota da Galeria do Aluno (Visualização)
Route::get('/aluno/galeria', [GaleriaController::class, 'indexAluno'])->name('aluno.galeria');


Route::get('/professor/biblioteca', [App\Http\Controllers\LivroController::class, 'biblioteca'])->name('professor.biblioteca');
Route::post('/professor/biblioteca/salvar', [LivroController::class, 'store'])->name('livros.store');
Route::put('/professor/biblioteca/atualizar/{id}', [LivroController::class, 'update'])->name('livros.update');
Route::delete('/professor/biblioteca/excluir/{id}', [LivroController::class, 'destroy'])->name('livros.destroy');

//Route::get('/professor/mencao', [App\Http\Controllers\Professor::class, 'mencao'])->name('professor.mencao');
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

// Área do Professor (Listagem de Alunos + Painel)
Route::get('/professor/index', [AdicionaController::class, 'index'])->name('professor.index');

// Operações do CRUD de Alunos (Modais e Ações)
Route::post('/alunos', [AdicionaController::class, 'store'])->name('alunos.store');
Route::put('/alunos/{aluno}', [AdicionaController::class, 'update'])->name('alunos.update');
Route::delete('/alunos/{aluno}', [AdicionaController::class, 'destroy'])->name('alunos.destroy');

Route::get('/aluno', [App\Http\Controllers\Aluno::class, 'aluno'])->name('aluno');
Route::get('/aluno/cadastro', [App\Http\Controllers\LoginAlunoController::class, 'cadastro'])->name('aluno.cadastro');
Route::get('/aluno/entrar', [App\Http\Controllers\LoginAlunoController::class, 'entrar'])->name('aluno.entrar');
Route::get('/aluno/logado', [App\Http\Controllers\Aluno::class, 'logado'])->name('aluno.logado');
Route::get('/aluno/inicio', [App\Http\Controllers\Aluno::class, 'inicio'])->name('aluno.inicio');
Route::get('/aluno/sobre', [App\Http\Controllers\Aluno::class, 'sobre'])->name('aluno.sobre');
// Route::get('/aluno/galeria', [App\Http\Controllers\Aluno::class, 'galeria'])->name('aluno.galeria');
Route::get('/aluno/galeria', [GaleriaController::class, 'indexAluno'])->name('aluno.galeria');
// Route::get('/aluno/biblioteca', [App\Http\Controllers\Aluno::class, 'biblioteca'])->name('aluno.biblioteca');
Route::get('/aluno/biblioteca', [App\Http\Controllers\LivroController::class, 'bibliotecaAluno'])->name('aluno.biblioteca');
//Route::get('/aluno/mencao', [App\Http\Controllers\Aluno::class, 'mencao'])->name('aluno.mencao');
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

Route::get('/mencao', [App\Http\Controllers\MencaoController::class, 'IndexPublico'])->name('mencao');

Route::get('/inicio', [App\Http\Controllers\Inicio::class, 'inicio'])->name('inicio');

Route::get('/galeria', [App\Http\Controllers\GaleriaController::class, 'galeriaa'])->name('galeria');
// Route::get('/aluno/galeria', [GaleriaController::class, 'indexAluno'])->name('aluno.galeria');

// Route::get('/biblioteca', [App\Http\Controllers\Biblioteca::class, 'biblioteca'])->name('biblioteca');
Route::get('/biblioteca', [App\Http\Controllers\LivroController::class, 'bibliotecaa'])->name('biblioteca');

Route::get('/publi', [App\Http\Controllers\Publi::class, 'publi'])->name('publi');

// Rota principal da Área do Aluno (Carrega a página com as publicações vindas do banco)
Route::get('/minha-area', [PublicacaoController::class, 'index'])->name('aluno.minha_area');

// Rotas de processamento do banco de dados
Route::post('/publicacoes/store', [PublicacaoController::class, 'store'])->name('publicacoes.store');
Route::put('/publicacoes/update/{id}', [PublicacaoController::class, 'update'])->name('publicacoes.update');
Route::delete('/publicacoes/destroy/{id}', [PublicacaoController::class, 'destroy'])->name('publicacoes.destroy');