<?php

namespace App\Http\Controllers;

use App\Models\AmauriResponde;
use Illuminate\Http\Request;

class AmauriRespondesController extends Controller
{
    //
    public function consultar() {
        $amauri_responde = AmauriResponde::orderBy('id', 'asc')->get();

        return view('sistema.amauri_responde.consultar', ['amauri_responde' => $amauri_responde]);
    }
    
    public function cadastro(Request $request) {

        return view('sistema.amauri_responde.cadastro');
        
    }

    public function edicao(AmauriResponde $amauri_responde) {

        return view('sistema.amauri_responde.edicao', ['amauri_responde' => $amauri_responde]);
        
    }

    public function salvar(AmauriResponde $amauri_responde, Request $request) {
        $amauri_responde->titulo = $request->titulo;
        $amauri_responde->url = $request->url;
        $amauri_responde->save();
        
        if($request->file("imagem")){
            AmauriResponde::find($amauri_responde->id)
            ->update(['imagem' => 'sistema/imagens/amauri_responde/'.$amauri_responde->id.'/'.$request->file('imagem')->getClientOriginalName()]);

            $request->file("imagem")->move(public_path('/sistema/imagens/amauri_responde/'.$amauri_responde->id."/"), $request->file('imagem')->getClientOriginalName());
        }

        toastr()->success("Vídeo salvo!", 'Sucesso');

        return redirect()->route("sistema.amauri_responde.consultar");
    }

    public function cadastrar(Request $request) {
        $amauri_responde = new AmauriResponde();
        $amauri_responde->titulo = $request->titulo;
        $amauri_responde->url = $request->url;
        $amauri_responde->imagem = $request->imagem;
        $amauri_responde->save();

        if($request->file("imagem")){
            AmauriResponde::find($amauri_responde->id)
            ->update(['imagem' => 'sistema/imagens/amauri_responde/'.$amauri_responde->id.'/'.$request->file('imagem')->getClientOriginalName()]);

            $request->file("imagem")->move(public_path('/sistema/imagens/amauri_responde/'.$amauri_responde->id."/"), $request->file('imagem')->getClientOriginalName());
        }

        toastr()->success("Vídeo cadastrado!", 'Sucesso');

        return redirect()->route("sistema.amauri_responde.consultar");
    }

}
