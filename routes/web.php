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

Route::get('/', [App\Http\Controllers\Principal::class, 'index'])->name('pagina-principal');
Route::get('/sobre', [App\Http\Controllers\Sobre::class, 'index'])->name('sobre');
Route::get('/contato', [App\Http\Controllers\Contato::class, 'index'])->name('contato');
Route::get('/home', [App\Http\Controllers\Home::class, 'index'])->name('home');
Route::get('/ds', [App\Http\Controllers\Ds::class, 'index'])->name('ds');
Route::get('/adm', [App\Http\Controllers\Adm::class, 'index'])->name('adm');
Route::get('/ma', [App\Http\Controllers\Ma::class, 'index'])->name('ma');
Route::get('/fa', [App\Http\Controllers\Fa::class, 'index'])->name('fa');




