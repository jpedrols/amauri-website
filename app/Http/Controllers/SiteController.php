<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index() {
        $blogs = Blog::orderBy('id', 'desc')->get();

        // Force locale
        date_default_timezone_set('America/Sao_Paulo');
        setlocale(LC_ALL, 'pt_BR.utf-8', 'ptb', 'pt_BR', 'portuguese-brazil', 'portuguese-brazilian', 'bra', 'brazil', 'br');
        setlocale(LC_TIME, 'pt_BR.utf-8', 'ptb', 'pt_BR', 'portuguese-brazil', 'portuguese-brazilian', 'bra', 'brazil', 'br');

        return view('site.index', ['blogs' => $blogs]);
    }

    public function sobre_nos() {
        return view('site.sobre_nos');
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
