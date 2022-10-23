<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PortaDio;
use App\Models\TipoDio;
use App\Models\Dio;
use Redirect;

class PortasDioController extends Controller
{
    static function cadastrarPorta($id_dio, $id_tipo){
        $tipo_dio = TipoDio::where('id', $id_tipo)->first();
        $num_portas = $tipo_dio->qtd_portas;

        for ($i = 1; $i <= $num_portas; $i++) {
            $porta = new PortaDio();

            $porta->id_dio = $id_dio;
            $porta->id_status = 2;
            $porta->nome = "Livre";
            $porta->num_porta = $i;
            $porta->velocidade_link = 0;
            $porta->primeira_ceo = "Livre";
            $porta->ultima_ceo = "Livre";
            $porta->tipo_cordao = "Livre";
            $porta->potencia_sinal = 0;
            $porta->observacao = "Livre";

            $porta->save();
        }
    }

    function editarPorta(Request $request, $id){
        $porta = PortaDio::findOrFail($id);

        $porta->id_status = $request->input('id_status');
        $porta->nome = $request->input('nome');
        $porta->velocidade_link = $request->input('velocidade_link');
        $porta->primeira_ceo = $request->input('primeira_ceo');
        $porta->ultima_ceo = $request->input('ultima_ceo');
        $porta->tipo_cordao = $request->input('tipo_cordao');
        $porta->potencia_sinal = $request->input('potencia_sinal');
        $porta->observacao = $request->input('observacao');

        $porta->save();
        session()->flash("Mensagem", "Porta atualizada com sucesso.");
        return Redirect::back();
    }

    function limparPorta($id){
        $porta = PortaDio::findOrFail($id);

        $porta->id_status = 2;
        $porta->nome = "Livre";
        $porta->velocidade_link = 0;
        $porta->primeira_ceo = "Livre";
        $porta->ultima_ceo = "Livre";
        $porta->tipo_cordao = "Livre";
        $porta->potencia_sinal = 0;
        $porta->observacao = "Livre";

        $porta->save();
        session()->flash("Mensagem", "Porta limpa com sucesso.");
        return Redirect::back();
    }

    function obtemDadosPortasDio($id_dio){
        $portas_dio = PortaDio::where('id_dio', $id_dio)
        ->orderBy('num_porta', 'asc')->get();

        $dio = Dio::where('id', $id_dio)->first();

        return view('dio/portas dio/listaportasdio', ['portas_dio' => $portas_dio, 'dio' => $dio]);
    }
}
