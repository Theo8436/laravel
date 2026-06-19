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

Route::prefix('/loja')->group(function(){
    Route::get('/home', [App\Http\Controllers\LojaController::class, 'home'])->name('loja.home');
}); 

Route::prefix('/discos')->group(function(){
    Route::get('/disco', [App\Http\Controllers\DiscoController::class, 'disco'])->name('disco.disco');

}); 

Route::prefix('/about')->group(function(){
    Route::get('/sobre', [App\Http\Controllers\SobreController::class, 'sobre'])->name('about.sobre');

}); 

Route::prefix('/buy')->group(function(){
    Route::get('/comprar', [App\Http\Controllers\ComprarController::class, 'comprar'])->name('buy.comprar');

}); 

Route::prefix('/lmolm')->group(function(){
    Route::get('/compra', [App\Http\Controllers\CompraController::class, 'compra'])->name('lmolm.compra');

});

Route::prefix('/btms')->group(function(){
    Route::get('/compras', [App\Http\Controllers\ComprasController::class, 'compras'])->name('btms.compras');

});

Route::prefix('/ydkwli')->group(function(){
    Route::get('/quero', [App\Http\Controllers\QueroController::class, 'quero'])->name('ydkwli.quero');

});

Route::prefix('/see')->group(function(){
    Route::get('/ver', [App\Http\Controllers\VerController::class, 'ver'])->name('see.ver');

});


