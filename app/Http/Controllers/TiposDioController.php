<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoDio;

class TiposDioController extends Controller
{
    function cadastrarTipoDio(Request $request){
        $td = new TipoDio();
        
        $td->marca = $request->input('marca');
        $td->modelo = $request->input('modelo');
        $td->qtd_portas = $request->input('qtd_portas');
        $td->qtd_cabo_optico = $request->input('qtd_cabo_optico');
        $td->tipo_conector = $request->input('tipo_conector');
        $td->tipo_polimento = $request->input('tipo_polimento');
        $td->tipo_instalacao = $request->input('tipo_instalacao');
        $td->acabamento = $request->input('acabamento');
        $td->comprimento = $request->input('comprimento');
        $td->largura = $request->input('largura');
        $td->altura = $request->input('altura');
        $td->peso = $request->input('peso');

        $td->save();
        session()->flash("Mensagem", "Tipo de DIO cadastrado com sucesso.");
        return redirect()->route('listatiposdio');
    }
    
    function obtemListaTiposDio(){
        $tipos_dio = TipoDio::select()
        ->orderBy('marca', 'asc')->get();

         if(sizeof($tipos_dio) == 0){
            session()->flash("Retorno", "Nenhum tipo de DIO cadastrado.");
            return view('dio/listatiposdio');
        } else{
            return view('dio/listatiposdio', ['tipos_dio' => $tipos_dio]);
        }
    }

    static function obtemListaTiposDioSelect(){
        $tipos_dio = TipoDio::select()
        ->orderBy('marca', 'asc')->get();

         if(sizeof($tipos_dio) == 0){
            session()->flash("Retorno", "Nenhum tipo de DIO cadastrado.");
            return $tipos_dio;
        } else{
            return $tipos_dio;
        }
    }
}
