<?php

// php artisan migrate
// php artisan storage:link
// php artisan db:seed --class=GaleriaSeeder
// php artisan db:seed --class=LivroSeeder
// php artisan db:seed --class=MencaoHonrosaSeeder
// php artisan db:seed --class=PostagemSeeder
// codigo acesso professor: 1618156

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PublicacaoController;
use App\Http\Controllers\PostagemController;
use App\Http\Controllers\MencaoController;
use App\Http\Controllers\LoginAlunoController;
use App\Http\Controllers\LoginProfessorController;
use App\Http\Controllers\LivroController;
use App\Http\Controllers\AdicionaController;
use App\Http\Controllers\GaleriaController;
use App\Http\Controllers\Professor;
use App\Http\Controllers\Principal;
use App\Http\Controllers\SolicitacaoEmprestimoController;


// ROTAS PÚBLICAS

Route::get('/', [Principal::class, 'principal'])
    ->name('inicio');

Route::get('/inicio', [App\Http\Controllers\Inicio::class, 'inicio'])
    ->name('pagina.inicio');

Route::get('/sobre', [App\Http\Controllers\Sobre::class, 'sobre'])
    ->name('sobre');

Route::get('/doacao', [App\Http\Controllers\Doacao::class, 'doacao'])
    ->name('doacao');

Route::get('/escolha', [App\Http\Controllers\Escolha::class, 'escolha'])
    ->name('escolha');

Route::get('/entrar', [App\Http\Controllers\Entrar::class, 'entrar'])
    ->name('entrar');

Route::get('/galeria', [GaleriaController::class, 'galeriaa'])
    ->name('galeria');

Route::get('/galeria/{id}', [GaleriaController::class, 'show'])
    ->name('professor.showGaleria');

Route::get('/biblioteca', [LivroController::class, 'bibliotecaa'])
    ->name('biblioteca');

Route::get('/publi', [App\Http\Controllers\Publi::class, 'publi'])
    ->name('publi');

Route::get('/publicacoes', [PublicacaoController::class, 'index'])
    ->name('publicacoes.index');

Route::get('/publicacao/{id}', [PublicacaoController::class, 'show'])
    ->name('publicacoes.show');

Route::get('/mencao', [MencaoController::class, 'indexPublico'])
    ->name('mencao');

Route::get('/mencao/{id}', [MencaoController::class, 'show'])
    ->name('mencao.show');

// ROTAS - PROFESSOR

Route::get('/professor', [Professor::class, 'professor'])
    ->name('professor');

Route::get('/professor/cadastro', [Professor::class, 'cadastro'])
    ->name('professor.cadastro');

Route::get('/professor/entrar', [Professor::class, 'entrar'])
    ->name('professor.entrar');

Route::post('/logar', [LoginProfessorController::class, 'logar'])
    ->name('logar');

Route::post('/professor/logout', [LoginProfessorController::class, 'logout'])
    ->name('professor.logout');

Route::post('/professor/adicionar', [LoginProfessorController::class, 'adicionar'])
    ->name('professor.adicionar');

// ROTAS - ALUNO

Route::get('/aluno', [App\Http\Controllers\Aluno::class, 'aluno'])
    ->name('aluno');

Route::get('/aluno/cadastro', [LoginAlunoController::class, 'cadastro'])
    ->name('aluno.cadastro');

Route::get('/aluno/entrar', [LoginAlunoController::class, 'entrar'])
    ->name('aluno.entrar');

Route::post('/aluno/logar', [LoginAlunoController::class, 'logar'])
    ->name('aluno.logar');

Route::post('/aluno/logout', [LoginAlunoController::class, 'logout'])
    ->name('aluno.logout');

Route::post('/aluno/adicionar', [LoginAlunoController::class, 'adicionar'])
    ->name('aluno.adicionar');


// ROTAS PÚBLICAS - ÁREA DO ALUNO

Route::get('/aluno/inicio', [PostagemController::class, 'inicio'])
    ->name('aluno.inicio');

Route::get('/aluno/sobre', [App\Http\Controllers\Aluno::class, 'sobre'])
    ->name('aluno.sobre');

Route::get('/aluno/galeria', [GaleriaController::class, 'indexAluno'])
    ->name('aluno.galeria');

Route::get('/aluno/biblioteca', [LivroController::class, 'bibliotecaAluno'])
    ->name('aluno.biblioteca');

Route::get('/postagens/{postagem}', [PostagemController::class, 'show'])
    ->name('postagens.show');

Route::get('/aluno/postagem/{postagem}', [PostagemController::class, 'show'])
    ->name('aluno.showPostagem');

Route::resource('postagens', PostagemController::class)
    ->except(['index', 'show'])
    ->parameters([
        'postagens' => 'postagem'
    ]);


// PUBLICAÇÕES - PROFESSOR

Route::get('/professor/publicacoes', [PublicacaoController::class, 'professorIndex'])
    ->name('professor.publicacoes.index');

Route::post('/publicacao', [PublicacaoController::class, 'store'])
    ->name('publicacoes.store');

Route::post('/publicacoes/store', [PublicacaoController::class, 'store'])
    ->name('publicacoes.store.alt');

Route::put('/publicacoes/update/{id}', [PublicacaoController::class, 'update'])
    ->name('publicacoes.update');

Route::delete('/publicacoes/destroy/{id}', [PublicacaoController::class, 'destroy'])
    ->name('publicacoes.destroy');


// MENÇÕES HONROSAS - PROFESSOR E ALUNO

Route::get('/professor/mencao', [MencaoController::class, 'indexProfessor'])
    ->name('professor.mencao');

Route::post('/professor/mencao', [MencaoController::class, 'store'])
    ->name('mencao.store');

Route::get('/professor/mencao/{id}/edit', [MencaoController::class, 'edit'])
    ->name('mencao.edit');

Route::put('/professor/mencao/{id}', [MencaoController::class, 'update'])
    ->name('mencao.update');

Route::delete('/professor/mencao/{id}', [MencaoController::class, 'destroy'])
    ->name('mencao.destroy');

Route::get('/aluno/mencao', [MencaoController::class, 'indexAluno'])
    ->name('aluno.mencao');


// ÁREA DO PROFESSOR 

Route::get('/professor/inicio', [Professor::class, 'inicio'])
    ->name('professor.inicio');

Route::get('/professor/sobre', [Professor::class, 'sobre'])
    ->name('professor.sobre');

Route::get('/professor/publi', [Professor::class, 'publi'])
    ->name('professor.publi');

Route::get('/professor/galeria', [GaleriaController::class, 'index'])
    ->name('professor.galeria');

Route::post('/professor/galeria/salvar', [GaleriaController::class, 'store'])
    ->name('galeria.store');

Route::put('/professor/galeria/atualizar/{id}', [GaleriaController::class, 'update'])
    ->name('galeria.update');

Route::delete('/professor/galeria/excluir/{id}', [GaleriaController::class, 'destroy'])
    ->name('galeria.destroy');

Route::get('/professor/biblioteca', [LivroController::class, 'biblioteca'])
    ->name('professor.biblioteca');

Route::post('/professor/biblioteca/salvar', [LivroController::class, 'store'])
    ->name('livros.store');

Route::put('/professor/biblioteca/atualizar/{id}', [LivroController::class, 'update'])
    ->name('livros.update');

Route::delete('/professor/biblioteca/excluir/{id}', [LivroController::class, 'destroy'])
    ->name('livros.destroy');

Route::post('/professor/remover', [LoginProfessorController::class, 'remover'])
    ->name('loginprofessor.remover');

Route::post('/professor/atualizar', [LoginProfessorController::class, 'atualizar'])
    ->name('loginprofessor.atualizar');

Route::get('/professor/consultar', [LoginProfessorController::class, 'consultar'])
    ->name('loginprofessor.consultar');


// GESTÃO DE ALUNOS

Route::get('/alunos', [AdicionaController::class, 'index'])
    ->name('alunos.index');

Route::get('/professor/index', [AdicionaController::class, 'index'])
    ->name('professor.index');

Route::post('/alunos', [AdicionaController::class, 'store'])
    ->name('alunos.store');

Route::put('/alunos/{aluno}', [AdicionaController::class, 'update'])
    ->name('alunos.update');

Route::delete('/alunos/{aluno}', [AdicionaController::class, 'destroy'])
    ->name('alunos.destroy');


// EMPRÉSTIMOS - BIBLIOTECA


Route::get('/professor/biblioteca/solicitacoes', [SolicitacaoEmprestimoController::class, 'index'])
    ->name('professor.biblioteca.solicitacoes');

Route::post('/professor/emprestimo/aprovar/{id}', [SolicitacaoEmprestimoController::class, 'aprovar'])
    ->name('emprestimo.aprovar');


// APROVAÇÃO DE POSTAGENS - PROFESSOR


Route::put('/professor/postagens/{postagem}/aprovar', [PostagemController::class, 'aprovar'])
    ->name('postagens.aprovar');

Route::put('/professor/postagens/{postagem}/rejeitar', [PostagemController::class, 'rejeitar'])
    ->name('postagens.rejeitar');

Route::put('/professor/postagens/{postagem}/ajustes', [PostagemController::class, 'solicitarAjustes'])
    ->name('postagens.ajustes');


// PROFESSOR LOGADO

Route::middleware(['auth:professores'])
    ->prefix('professor')
    ->group(function () {

        Route::get('/logado', [LoginProfessorController::class, 'painelLogado'])
            ->name('professor.logado');

        Route::post('/eventos/salvar', [LoginProfessorController::class, 'salvarEventoCalendario'])
            ->name('professor.eventos.salvar');

        Route::delete('/eventos/excluir/{id}', [LoginProfessorController::class, 'excluirEventoCalendario'])
            ->name('professor.eventos.excluir');
    });


// ÁREA PROTEGIDA - ALUNO LOGADO


Route::middleware(['auth:alunos'])
    ->prefix('aluno')
    ->group(function () {

        Route::get('/logado', [LoginAlunoController::class, 'painelLogado'])
            ->name('aluno.logado');

        Route::post('/biblioteca/solicitar/{livro}', [
            SolicitacaoEmprestimoController::class,
            'store'
        ])->name('emprestimo.solicitar');

    });
