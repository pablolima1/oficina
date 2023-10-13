<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('montadora')->group(function () {
    Route::get('/cadastrar', [App\Http\Controllers\MontadoraController::class, 'create'])->name('montadora.cadastrar');
    Route::post('/store', [App\Http\Controllers\MontadoraController::class, 'store'])->name('montadora.store');
    Route::get('/index', [App\Http\Controllers\MontadoraController::class, 'index'])->name('montadora.index');
});

Route::prefix('modelo')->group(function () {
    Route::get('/cadastrar', [App\Http\Controllers\ModeloController::class, 'create'])->name('modelo.cadastrar');
    Route::post('/store', [App\Http\Controllers\ModeloController::class, 'store'])->name('modelo.store');
    Route::get('/index', [App\Http\Controllers\ModeloController::class, 'index'])->name('modelo.index');
});

Route::prefix('cliente')->group(function () {
    Route::get('/cadastrar', [App\Http\Controllers\ClienteController::class, 'create'])->name('cliente.cadastrar');
    Route::post('/store', [App\Http\Controllers\ClienteController::class, 'store'])->name('cliente.store');
    Route::get('/index', [App\Http\Controllers\ClienteController::class, 'index'])->name('cliente.index');
});

Route::prefix('veiculo')->group(function () {
    Route::get('/cadastrar', [App\Http\Controllers\VeiculoController::class, 'create'])->name('veiculo.cadastrar');
    Route::post('/store', [App\Http\Controllers\VeiculoController::class, 'store'])->name('veiculo.store');
    Route::get('/index', [App\Http\Controllers\VeiculoController::class, 'index'])->name('veiculo.index');
});