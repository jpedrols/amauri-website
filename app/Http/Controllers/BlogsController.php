<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogsController extends Controller
{
    //
    public function consultar() {
        $blogs = Blog::orderBy('titulo', 'asc')->get();

        return view('sistema.blogs.consultar', ['blogs' => $blogs]);
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

    public function edicao(Blog $blog) {
        $categorias = Categoria::all();

        return view('sistema.blogs.edicao', ['categorias' => $categorias, 'blog' => $blog]);
    }

    public function salvar(Blog $blog, Request $request) {
        $blog->titulo = $request->titulo;
        $blog->conteudo = $request->conteudo;
        $blog->save();

        if($request->file("imagem")){
            Storage::delete($blog->imagem);

            Blog::find($blog->id)
            ->update(['imagem' => 'sistema/imagens/blogs/'.$blog->id.'/'.$request->file('imagem')->getClientOriginalName()]);

            $request->file("imagem")->move(public_path('/sistema/imagens/blogs/'.$blog->id."/"), $request->file('imagem')->getClientOriginalName());
        }

        toastr()->success("Blog salvo!", 'Sucesso');

        return redirect()->route("sistema.blogs.consultar");
    }

    public function deletar() {
        return view('sistema.blogs.deletar');
    }
}
