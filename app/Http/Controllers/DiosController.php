<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dio;
use App\Models\Pop;

class DiosController extends Controller
{
    function cadastrarDio(Request $request, $id){
        $dio = new Dio();
        
        $dio->nome = $request->input('nome');
        $dio->id_pop = $id;
        $dio->id_tipo = $request->input('id_tipo');
        $dio->descricao = $request->input('descricao');

        $dio->save();
        PortasDioController::cadastrarPorta($dio->id, $dio->id_tipo);
        
        session()->flash("Mensagem", "DIO cadastrado com sucesso.");
        return redirect()->route('listadiospops', ['id' => $id]);
    }

    function obtemListaDiosPorPop($id){
        $pop = Pop::where('id', $id)->first();

        $diospop = Dio::where('id_pop', $id)
        ->orderBy('nome', 'asc')->get();

        if(sizeof($diospop) == 0){
            session()->flash("Retorno", "Nenhum DIO cadastrado para este POP no momento.");
            return view('dio/listadiospops', ['pop' => $pop]);
        } else{
            return view('dio/listadiospops', ['pop' => $pop, 'diospop' => $diospop]);
        }
    }
}
