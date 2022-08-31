<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Pagina;
use Illuminate\Http\Request;

class PaginasController extends Controller
{
    //
    public function consultar() {
        $paginas = Pagina::orderBy('titulo', 'asc')->get();

        return view('sistema.paginas.consultar', ['paginas' => $paginas]);
    }

    public function cadastro() {
        return view('sistema.paginas.cadastro');
    }

    public function cadastrar(Request $request) {
        $pagina = new Pagina;
        $pagina->nome = $request->nome;
        $pagina->titulo = $request->titulo;
        $pagina->conteudo = $request->conteudo;
        $pagina->save();

        toastr()->success("Página cadastrada!", 'Sucesso');

        return redirect()->route("sistema.paginas.consultar");
    }

    public function edicao(Pagina $pagina) {
        return view('sistema.paginas.edicao', ['pagina' => $pagina]);
    }

    public function salvar(Pagina $pagina, Request $request) {
        $pagina->titulo = $request->titulo;
        $pagina->conteudo = $request->conteudo;
        $pagina->save();

        toastr()->success("Página salva!", 'Sucesso');

        return redirect()->route("sistema.paginas.consultar");
    }

    public function deletar() {
        return view('sistema.paginas.deletar');
    }
}
