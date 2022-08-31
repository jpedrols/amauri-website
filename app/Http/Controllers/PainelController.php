<?php

namespace App\Http\Controllers;

use App\Models\Pagina;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Usuario;
use Illuminate\Support\Facades\Log;

class PainelController extends Controller
{
    public function login()
    {
        return view('sistema.login');
    }  

    public function logar(Request $request)
    {
        $usuario = Usuario::where("usuario", $request->usuario)->first();
        if ($usuario) {
            if (Hash::check($request->senha, $usuario->senha)) {
                session()->put(["usuario" => $usuario->toArray()]);
                Log::channel('acessos')->info('LOGIN: O usuario ' . $usuario->usuario . ' logou no sistema.');
                return redirect()->route("sistema.dashboard");
            } else {
                toastr()->error("Informações de usuário incorretas!", 'Erro');
            }
        } else {
            toastr()->error("Informações de usuário incorretas!", 'Erro');
        }

        return redirect()->back();
    }  

    public function sair()
    {
        Log::channel('acessos')->info('LOGIN: O usuario ' . session()->get("usuario")["usuario"] . ' saiu do sistema.');
        session()->forget("usuario");
        return redirect()->route("sistema.login");
    }

    // ------------------------------------------------------------

    public function dashboard()
    {
        $usuario = Usuario::where("id", session()->get("usuario")["id"])->first();

        $paginas = Pagina::orderBy('titulo', 'asc')->get();

        return view("sistema.dashboard", ['usuario' => $usuario, 'paginas' => $paginas]);
    }

    // ------------------------------------------------------------

    // ------------------------------------------------------------

    // ------------------------------------------------------------

    // ------------------------------------------------------------

    // ------------------------------------------------------------

    // ------------------------------------------------------------

    // ------------------------------------------------------------

    // ------------------------------------------------------------
}
