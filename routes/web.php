<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LogAcessoMiddleware;
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
Route::get('/login', [App\Http\Controllers\Login::class, 'login']);
Route::get('/professor', [App\Http\Controllers\Professor::class, 'professor']);
Route::get('/revisao', [App\Http\Controllers\Revisao::class, 'revisao']);
Route::get('/calendario', [App\Http\Controllers\Calendario::class, 'calendario']);

Route::prefix('/aluno')->group(function(){
    Route::get('/index', [App\Http\Controllers\AlunoController::class, 'index'])->name('aluno.index');
    Route::post('/add', [App\Http\Controllers\AlunoController::class, 'add'])->name('aluno.add');
}); 

Route::prefix('/curso')->group(function(){
    Route::get('/nome', [App\Http\Controllers\CursoController::class, 'nome'])->name('curso.nome');
    Route::post('/periodo', [App\Http\Controllers\CursoController::class, 'periodo'])->name('curso.periodo');
}); 

Route::prefix('/professor')->group(function(){
    Route::get('/nome', [App\Http\Controllers\ProfessorController::class, 'nome'])->name('professor.nome');
    Route::post('/email', [App\Http\Controllers\ProfessorController::class, 'email'])->name('professor.email');
    Route::post('/telefone', [App\Http\Controllers\ProfessorController::class, 'telefone'])->name('professor.telefone');
}); 

Route::prefix('/componente')->group(function(){
    Route::get('/nome', [App\Http\Controllers\ComponenteController::class, 'nome'])->name('componente.nome');
    Route::post('/hora_inicio', [App\Http\Controllers\ComponenteController::class, 'hora_inicio'])->name('componente.hora_inicio');
    Route::post('/hora_fim', [App\Http\Controllers\ComponenteController::class, 'hora_fim'])->name('componente.hora_fim');
}); 

Route::prefix('/administrador')->group(function(){
    Route::get('/nome', [App\Http\Controllers\AdministradorController::class, 'nome'])->name('administrador.nome');
    Route::post('/email', [App\Http\Controllers\AdministradorController::class, 'email'])->name('administrador.email');
    Route::post('/telefone', [App\Http\Controllers\AdministradorController::class, 'telefone'])->name('administrador.telefone');
    Route::post('/cpf', [App\Http\Controllers\AdministradorController::class, 'cpf'])->name('administrador.cpf');
    Route::post('/usuario', [App\Http\Controllers\AdministradorController::class, 'usuario'])->name('administrador.usuario');
    Route::post('/senha', [App\Http\Controllers\AdministradorController::class,'senha'])->name('administrador.senha');
    Route::post('/status', [App\Http\Controllers\AdministradorController::class, 'status'])->name('administrador.status');
}); 

Route::get('/scarlet', [App\Http\Controllers\Scarlet::class, 'scarlet'])->name('scarlet');
