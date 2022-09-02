<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Destaque;
use App\Models\Pagina;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index() {
        $blogs = Blog::orderBy('id', 'desc')->get();

        $destaque = Destaque::find(1);

        $pagina = Pagina::find(1);

        // Force locale
        date_default_timezone_set('America/Sao_Paulo');
        setlocale(LC_ALL, 'pt_BR.utf-8', 'ptb', 'pt_BR', 'portuguese-brazil', 'portuguese-brazilian', 'bra', 'brazil', 'br');
        setlocale(LC_TIME, 'pt_BR.utf-8', 'ptb', 'pt_BR', 'portuguese-brazil', 'portuguese-brazilian', 'bra', 'brazil', 'br');

        return view('site.index', ['blogs' => $blogs, 'destaque' => $destaque, 'pagina' => $pagina]);
    }

    public function sobre_nos() {

        $pagina = Pagina::find(2);

        $destaque_banner = Destaque::find(2);
        $destaque_secao1 = Destaque::find(3);
        $destaque_secao2 = Destaque::find(4);

        return view('site.sobre_nos', ['pagina' => $pagina, 'destaque_banner' => $destaque_banner, 'destaque_secao1' => $destaque_secao1, 'destaque_secao2' => $destaque_secao2]);
    }

    public function blogs() {
        $blogs = Blog::orderBy('id', 'desc')->get();

        // Force locale
        date_default_timezone_set('America/Sao_Paulo');
        setlocale(LC_ALL, 'pt_BR.utf-8', 'ptb', 'pt_BR', 'portuguese-brazil', 'portuguese-brazilian', 'bra', 'brazil', 'br');
        setlocale(LC_TIME, 'pt_BR.utf-8', 'ptb', 'pt_BR', 'portuguese-brazil', 'portuguese-brazilian', 'bra', 'brazil', 'br');

        return view('site.blogs', ['blogs' => $blogs]);
    }

    public function blog_leitura(Blog $blog) {
        $blogs = Blog::orderBy('id', 'desc')->get();

        return view('site.blog_leitura', ['blog' => $blog, 'blogs' => $blogs]);
    }
}
