<?php

namespace App\Http\Controllers;

use App\Models\Pagina;
use Illuminate\Http\Request;

class DestaquesController extends Controller
{
    //
    public function consultar() {
        $paginas = Pagina::all();

        return view('sistema.destaques.consultar', ['paginas' => $paginas]);
    }

    public function cadastro() {
        $categorias = Categoria::all();

        return view('sistema.blogs.cadastro', ['categorias' => $categorias]);
    }

    public function cadastrar(Request $request) {
        $blog = new Blog;
        $blog->titulo = $request->titulo;
        $blog->categoria_id = $request->categoria_id;
        $blog->conteudo = $request->conteudo;
        $blog->save();

        if($request->file("imagem")){
            Blog::find($blog->id)
            ->update(['imagem' => 'sistema/imagens/blogs/'.$blog->id.'/'.$request->file('imagem')->getClientOriginalName()]);

            $request->file("imagem")->move(public_path('/sistema/imagens/blogs/'.$blog->id."/"), $request->file('imagem')->getClientOriginalName());
        }

        toastr()->success("Blog cadastrado!", 'Sucesso');

        return redirect()->route("sistema.blogs.consultar");
    }
}
