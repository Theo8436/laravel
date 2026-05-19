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




