<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LogAcessoMiddleware;
use App\Http\Controllers\PublicacaoController;
use App\Http\Controllers\PostagemController;
use App\Http\Controllers\MencaoController;
use App\Http\Controllers\LoginAlunoController;  
use App\Http\Controllers\LoginProfessorController; 
use App\Http\Controllers\LivroController;
use App\Http\Controllers\AdicionaController;
use App\Http\Controllers\GaleriaController;
use App\Http\Controllers\Professor;
use App\Http\Controllers\Inicio;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [App\Http\Controllers\Principal::class, 'principal']);

/*
|--------------------------------------------------------------------------
| ROTAS DE POSTAGENS DO ALUNO (FEED / CARROSSEL)
|--------------------------------------------------------------------------
*/
// Rota do aluno logado alimentando a variável $postagens no feed principal
Route::get('/aluno/logado', [PostagemController::class, 'index'])->name('aluno.logado');

// Detalhes da postagem individual do aluno
Route::get('/postagens/{postagem}', [PostagemController::class, 'show'])->name('postagens.show');

// Resource de postagens (CRUD completo de postagens com suporte a imagens em JSON)
Route::resource('postagens', PostagemController::class)->except(['index', 'show'])->parameters([
    'postagens' => 'postagem'
]);

/*
|--------------------------------------------------------------------------
| ROTAS DE PUBLICAÇÕES / NOTÍCIAS
|--------------------------------------------------------------------------
*/
// Tela pública de lista das publicações (Aluno / Visitante)
Route::get('/publicacoes', [PublicacaoController::class, 'index'])->name('publicacoes.index');

// Tela exclusiva para ver os detalhes completos de uma publicação específica ("Ler mais")
Route::get('/publicacao/{id}', [PublicacaoController::class, 'show'])->name('publicacoes.show');

// Tela do professor para gerenciar/cadastrar publicações
Route::get('/professor/publicacoes', [PublicacaoController::class, 'professorIndex'])->name('professor.publicacoes.index');

// Processamento e CRUD de Publicações
Route::post('/publicacao', [PublicacaoController::class, 'store'])->name('publicacoes.store');
Route::post('/publicacoes/store', [PublicacaoController::class, 'store'])->name('publicacoes.store.alt');
Route::put('/publicacoes/update/{id}', [PublicacaoController::class, 'update'])->name('publicacoes.update');
Route::delete('/publicacoes/destroy/{id}', [PublicacaoController::class, 'destroy'])->name('publicacoes.destroy');

// Rota principal da Área do Aluno com publicações
Route::get('/minha-area', [PublicacaoController::class, 'index'])->name('aluno.minha_area');

/*
|--------------------------------------------------------------------------
| ROTAS DE MENÇÃO (PROFESSOR, ALUNO E PÚBLICO)
|--------------------------------------------------------------------------
*/
Route::get('/professor/mencao/{id}/edit', [MencaoController::class, 'edit'])->name('mencao.edit');
Route::put('/professor/mencao/{id}', [MencaoController::class, 'update'])->name('mencao.update');
Route::delete('/professor/mencao/{id}', [MencaoController::class, 'destroy'])->name('mencao.destroy');

Route::get('/professor/mencao', [MencaoController::class, 'indexProfessor'])->name('professor.mencao');
Route::post('/professor/mencao', [MencaoController::class, 'store'])->name('mencao.store');

Route::get('/aluno/mencao', [MencaoController::class, 'indexAluno'])->name('aluno.mencao');

Route::get('/mencao', [MencaoController::class, 'indexPublico'])->name('mencao');
Route::get('/mencao/{id}', [MencaoController::class, 'show'])->name('mencao.show');

/*
|--------------------------------------------------------------------------
| ÁREA DO PROFESSOR (LOGIN, CADASTRO, GALERIA, BIBLIOTECA, ALUNOS)
|--------------------------------------------------------------------------
*/
Route::put(
    '/professor/postagens/{postagem}/aprovar',
    [PostagemController::class, 'aprovar']
)->name('postagens.aprovar');

Route::put(
    '/professor/postagens/{postagem}/rejeitar',
    [PostagemController::class, 'rejeitar']
)->name('postagens.rejeitar');
Route::put(
    '/professor/postagens/{postagem}/aprovar',
    [PostagemController::class, 'aprovar']
)->name('postagens.aprovar');

Route::put(
    '/professor/postagens/{postagem}/rejeitar',
    [PostagemController::class, 'rejeitar']
)->name('postagens.rejeitar');

Route::put(
    '/professor/postagens/{postagem}/ajustes',
    [PostagemController::class, 'solicitarAjustes']
)->name('postagens.ajustes');

Route::get('/professor', [App\Http\Controllers\Professor::class, 'professor'])->name('professor');
Route::get('/professor/cadastro', [App\Http\Controllers\Professor::class, 'cadastro'])->name('professor.cadastro');
Route::get('/professor/entrar', [App\Http\Controllers\Professor::class, 'entrar'])->name('professor.entrar');

// Rota do Professor Logado & Listagem de Alunos
Route::get('/professor/logado', [AdicionaController::class, 'index'])->name('professor.logado');
Route::get('/alunos', [AdicionaController::class, 'index'])->name('alunos.index');

Route::get('/professor/inicio', [Professor::class, 'inicio'])->name('professor.inicio');
// Route::get('/professor/inicio', [PostagemController::class, 'iniciooo'])->name('professor.inicio');
Route::get('/professor/sobre', [App\Http\Controllers\Professor::class, 'sobre'])->name('professor.sobre');

// Galeria Professor
Route::get('/professor/galeria', [GaleriaController::class, 'index'])->name('professor.galeria');
Route::post('/professor/galeria/salvar', [GaleriaController::class, 'store'])->name('galeria.store');
Route::put('/professor/galeria/atualizar/{id}', [GaleriaController::class, 'update'])->name('galeria.update');
Route::delete('/professor/galeria/excluir/{id}', [GaleriaController::class, 'destroy'])->name('galeria.destroy');

// Biblioteca / Livros Professor
Route::get('/professor/biblioteca', [LivroController::class, 'biblioteca'])->name('professor.biblioteca');
Route::post('/professor/biblioteca/salvar', [LivroController::class, 'store'])->name('livros.store');
Route::put('/professor/biblioteca/atualizar/{id}', [LivroController::class, 'update'])->name('livros.update');
Route::delete('/professor/biblioteca/excluir/{id}', [LivroController::class, 'destroy'])->name('livros.destroy');

Route::get('/professor/publi', [App\Http\Controllers\Professor::class, 'publi'])->name('professor.publi');

// Autenticação Professor
Route::post('/logar', [LoginProfessorController::class, 'logar'])->name('logar');
Route::post('/logout', [LoginProfessorController::class, 'logout'])->name('professor.logout');
Route::post('/professor/adicionar', [LoginProfessorController::class, 'adicionar'])->name('professor.adicionar');

// Verificação de Código Professor
Route::get('professor/verificar-codigo', [LoginProfessorController::class, 'telaCodigo'])->name('professor.verificar_codigo');
Route::post('professor/confirmar-codigo', [LoginProfessorController::class, 'confirmarCodigo'])->name('professor.confirmar_codigo');
Route::post('professor/reenviar-codigo', [LoginProfessorController::class, 'reenviarCodigo'])->name('professor.reenviar_codigo');

// CRUD Gestão de Professores
Route::post('/professor/remover', [LoginProfessorController::class, 'remover'])->name('loginprofessor.remover');
Route::post('/professor/atualizar', [LoginProfessorController::class, 'atualizar'])->name('loginprofessor.atualizar');
Route::get('/professor/consultar', [LoginProfessorController::class, 'consultar'])->name('loginprofessor.consultar');

// Gestão de Alunos pelo Professor
Route::get('/professor/index', [AdicionaController::class, 'index'])->name('professor.index');
Route::post('/alunos', [AdicionaController::class, 'store'])->name('alunos.store');
Route::put('/alunos/{aluno}', [AdicionaController::class, 'update'])->name('alunos.update');
Route::delete('/alunos/{aluno}', [AdicionaController::class, 'destroy'])->name('alunos.destroy');

/*
|--------------------------------------------------------------------------
| ÁREA DO ALUNO (LOGIN, CADASTRO, GALERIA, BIBLIOTECA, DOÇÃO)
|--------------------------------------------------------------------------
*/
Route::get('/aluno', [App\Http\Controllers\Aluno::class, 'aluno'])->name('aluno');
Route::get('/aluno/cadastro', [LoginAlunoController::class, 'cadastro'])->name('aluno.cadastro');
Route::get('/aluno/entrar', [LoginAlunoController::class, 'entrar'])->name('aluno.entrar');
Route::get('/aluno/inicio', [PostagemController::class, 'inicio'])->name('aluno.inicio');
Route::get('/aluno/sobre', [App\Http\Controllers\Aluno::class, 'sobre'])->name('aluno.sobre');




// Área do aluno
Route::get('/aluno/inicio', [PostagemController::class, 'inicio'])->name('aluno.inicio');
Route::get('/aluno/galeria', [GaleriaController::class, 'indexAluno'])->name('aluno.galeria');
Route::get('/aluno/biblioteca', [LivroController::class, 'bibliotecaAluno'])->name('aluno.biblioteca');

// Rota para ver os detalhes da postagem pelo PostagemController
Route::get('/aluno/postagem/{postagem}', [PostagemController::class, 'show'])->name('aluno.showPostagem');

// Autenticação Aluno
Route::post('/aluno/logar', [LoginAlunoController::class, 'logar'])->name('aluno.logar');
Route::post('/aluno/logout', [LoginAlunoController::class, 'logout'])->name('aluno.logout');
Route::post('/aluno/adicionar', [LoginAlunoController::class, 'adicionar'])->name('aluno.adicionar');

// Verificação de Código Aluno
Route::get('/aluno/verificar-codigo', [LoginAlunoController::class, 'telaCodigo'])->name('aluno.verificar_codigo');
Route::post('/aluno/confirmar-codigo', [LoginAlunoController::class, 'confirmarCodigo'])->name('aluno.confirmar_codigo');
Route::post('/aluno/reenviar-codigo', [LoginAlunoController::class, 'reenviarCodigo'])->name('aluno.reenviar_codigo');

// CRUD Aluno
Route::post('/remover', [LoginAlunoController::class, 'remover'])->name('aluno.remover');
Route::post('/atualizar', [LoginAlunoController::class, 'atualizar'])->name('aluno.atualizar');
Route::get('/consultar', [LoginAlunoController::class, 'consultar'])->name('aluno.consultar');

/*
|--------------------------------------------------------------------------
| ROTAS PÚBLICAS E INSTITUCIONAIS
|--------------------------------------------------------------------------
*/
Route::get('/doacao', [App\Http\Controllers\Doacao::class, 'doacao'])->name('doacao');
Route::get('/escolha', [App\Http\Controllers\Escolha::class, 'escolha'])->name('escolha');
Route::get('/entrar', [App\Http\Controllers\Entrar::class, 'entrar'])->name('entrar');
Route::get('/sobre', [App\Http\Controllers\Sobre::class, 'sobre'])->name('sobre');
// Garanta que a rota inicial (/) e a /inicio usem o Controller
Route::get('/', [Inicio::class, 'inicio'])->name('home');
Route::get('/inicio', [Inicio::class, 'inicio'])->name('inicio');
Route::get('inicio', [PostagemController::class, 'inicio'])->name('inicio');
Route::get('/galeria', [GaleriaController::class, 'galeriaa'])->name('galeria');
Route::get('/biblioteca', [LivroController::class, 'bibliotecaa'])->name('biblioteca');
Route::get('/publi', [App\Http\Controllers\Publi::class, 'publi'])->name('publi');