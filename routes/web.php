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
Route::get('/contato', [App\Http\Controllers\Contato::class, 'contato']);
Route::get('/boletim', [App\Http\Controllers\Boletim::class, 'boletim']);
Route::get('/aluno', [App\Http\Controllers\Aluno::class, 'aluno']);
Route::get('/ocorrencias', [App\Http\Controllers\Ocorrencias::class, 'ocorrencias']);
Route::get('/grade', [App\Http\Controllers\Grade::class, 'Grade']);
Route::get('/vidaacademica', [App\Http\Controllers\Vidaacademica::class, 'vidaacademica']);
Route::get('/vestibulinhoE', [App\Http\Controllers\VestibulinhoE::class, 'vestibulinhoE']);
Route::get('/progressaop', [App\Http\Controllers\Progressaop::class, 'progressaop']);
Route::get('/aluno/login', [App\Http\Controllers\Aluno::class, 'login']);
Route::get('/aluno/matricula', [App\Http\Controllers\Aluno::class, 'matricula']);
Route::get('/aluno/cancelar-matricula', [App\Http\Controllers\Aluno::class, 'cancelarMatricula']);




