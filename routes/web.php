<?php

use App\Http\Controllers\PainelController;
use App\Http\Controllers\PaginasController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::name('site.')->group(function () {
    Route::get('/', function () { return view('site.index');})->name('index');
    

    // Route::get('/', 'App\Http\Controllers\GeralController@inicio')->name('inicio');
});


Route::name('sistema.')->group(function () {    
    Route::prefix('admin')->group(function () {
        
        Route::get('/login', [PainelController::class, 'login'])->name("login");
        Route::post('/logar', [PainelController::class, 'logar'])->name("logar");
        Route::get('/sair', [PainelController::class, 'sair'])->name("sair");

        Route::middleware(['sistema'])->group(function () {

            Route::get('/dashboard', [PainelController::class, 'dashboard'])->name("dashboard");

            Route::prefix('paginas')->group(function () {    
                Route::get('/consultar', [PaginasController::class, 'consultar'])->name("paginas.consultar");
                Route::get('/cadastro', [PaginasController::class, 'cadastro'])->name("paginas.cadastro");
                Route::post('/cadastrar', [PaginasController::class, 'cadastrar'])->name("paginas.cadastrar");
                Route::get('/edicao/{pagina}', [PaginasController::class, 'edicao'])->name("paginas.edicao");
                Route::post('/salvar/{pagina}', [PaginasController::class, 'salvar'])->name("paginas.salvar");
                Route::post('/deletar', [PaginasController::class, 'deletar'])->name("paginas.deletar");
            });

        });
    });
});
