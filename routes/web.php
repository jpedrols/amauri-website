<?php

use App\Http\Controllers\BlogsController;
use App\Http\Controllers\DestaquesController;
use App\Http\Controllers\PainelController;
use App\Http\Controllers\PaginasController;
use App\Http\Controllers\SiteController;
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
    Route::middleware(['site'])->group(function () {
        Route::get('/', [SiteController::class, 'index'])->name("index");

        Route::get('/A-Empresa', [SiteController::class, 'sobre_nos'])->name("sobre_nos");
        // Route::get('/', 'App\Http\Controllers\GeralController@inicio')->name('inicio');
    });
});


Route::name('sistema.')->group(function () {    
    Route::prefix('admin')->group(function () {
        
        Route::get('/login', [PainelController::class, 'login'])->name("login");
        Route::post('/logar', [PainelController::class, 'logar'])->name("logar");
        Route::get('/sair', [PainelController::class, 'sair'])->name("sair");

        Route::middleware(['sistema'])->group(function () {
            
            Route::get('/', [PainelController::class, 'dashboard'])->name("dashboard");
            Route::get('/dashboard', [PainelController::class, 'dashboard'])->name("dashboard");

            Route::prefix('paginas')->group(function () {    
                Route::get('/consultar', [PaginasController::class, 'consultar'])->name("paginas.consultar");
                Route::get('/cadastro', [PaginasController::class, 'cadastro'])->name("paginas.cadastro");
                Route::post('/cadastrar', [PaginasController::class, 'cadastrar'])->name("paginas.cadastrar");
                Route::get('/edicao/{pagina}', [PaginasController::class, 'edicao'])->name("paginas.edicao");
                Route::post('/salvar/{pagina}', [PaginasController::class, 'salvar'])->name("paginas.salvar");
                Route::post('/deletar', [PaginasController::class, 'deletar'])->name("paginas.deletar");
            });

            Route::prefix('blogs')->group(function () {    
                Route::get('/consultar', [BlogsController::class, 'consultar'])->name("blogs.consultar");
                Route::get('/cadastro', [BlogsController::class, 'cadastro'])->name("blogs.cadastro");
                Route::post('/cadastrar', [BlogsController::class, 'cadastrar'])->name("blogs.cadastrar");
                Route::get('/edicao/{blog}', [BlogsController::class, 'edicao'])->name("blogs.edicao");
                Route::post('/salvar/{blog}', [BlogsController::class, 'salvar'])->name("blogs.salvar");
                Route::post('/deletar', [BlogsController::class, 'deletar'])->name("blogs.deletar");
            });

            Route::prefix('destaques')->group(function () {    
                Route::get('/consultar', [DestaquesController::class, 'consultar'])->name("destaques.consultar");
            });

        });
    });
});
