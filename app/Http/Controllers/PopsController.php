<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cidade;
use App\Models\Pop;
use Redirect;

class PopsController extends Controller
{
    function cadastrarPop(Request $request, $id){
        $pop= new Pop();
        
        $pop->id_cidade = $id;
        $pop->nome = $request->input('nome');
        $pop->endereco = $request->input('endereco');
        $pop->descricao = $request->input('descricao');

        $pop->save();
        
        $popscidade = Pop::where('id_cidade', $id)
        ->orderBy('nome', 'asc')->get();

        session()->flash("Mensagem", "POP cadastrado com sucesso.");
        return view('pop/listapopscidade', ['popscidade' => $popscidade]);
    }
    
    function obtemListaPopsPorCidade(Request $request){
        $nome_cidade = $request->input('search');
        $cidade = Cidade::where('nome', $nome_cidade)->first();
        
        if($cidade){
            $popscidade = Pop::where('id_cidade', $cidade->id)
            ->orderBy('nome', 'asc')->get();

            if(sizeof($popscidade) == 0){
                session()->flash("Retorno", "Nenhum POP cadastrado para esta cidade no momento.");
                return view('pop/listapopscidade', ['cidade' => $cidade]);
            } else {
                return view('pop/listapopscidade', ['popscidade' => $popscidade]);
            }
        } else{
            session()->flash("Retorno", "Cidade não encontrada.");
            return Redirect::back();  
        }
    }
}
