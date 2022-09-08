<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Destaque;
use App\Models\Pagina;
use App\Models\Visita;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;
use Illuminate\Support\Facades\DB;

class SiteController extends Controller
{
    public function CountView(Request $request) {
        if(!$request->uuid) {
            $uuid = Uuid::uuid4();
    
            $visita = new Visita();
            $visita->id = $uuid;
            $visita->save();

            return $uuid;
        } else {
            $visita = Visita::whereId($request->uuid)
            ->where(DB::raw("DATE_FORMAT(updated_at, '%Y-%m-%d %H:%i')"), now()->format('Y-m-d H:i'))
            ->first();
            if($visita) {
                $visita->touch();

                return $request->uuid;
            } else {
                $uuid = Uuid::uuid4();
    
                $visita = new Visita();
                $visita->id = $uuid;
                $visita->save();

                return $uuid;
            }
        }
    }

    public function ReturnView() {

        $segundos_atual = 0;
        $segundos_passado = 60;
        $views = array();
        $minutos = array();

        for ($i=0; $i < 15; $i++) { 
            $minuto_passado = time() - $segundos_passado;
            // $atual = date("Y-m-d H:i:s", time() - $segundos_atual);
            // $passado = date("Y-m-d H:i:s", $minuto_passado);
    
            $visitas = Visita::where(DB::raw("DATE_FORMAT(updated_at, '%Y-%m-%d %H:%i')"), date('Y-m-d') . " " . date("H:i", strtotime("-".$i." minutes")))
            ->get();

            // echo date('Y-m-d') . date("H:i", strtotime("-".$i." minutes")) . "<br>";
            // echo "OO:". $visitas. "<br>";
            // echo '---------------- <br>';

            // echo $visitas->count(). "<br>";
            // echo $atual . "<br>";
            // echo $passado . "<br>";
            // echo "----------<br>";

            array_push($views, $visitas->count());
            array_push($minutos, date("H:i", $minuto_passado));

            $segundos_passado = $segundos_passado + 60;
            $segundos_atual = $segundos_atual + 60;
        }

        $views = array_reverse($views);
        $minutos = array_reverse($minutos);

        $resultado_geral = array($views, $minutos);
        
        return $resultado_geral;
    }

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
