<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StatusPorta;

class StatusPortasController extends Controller
{
    static function obtemListaStatusPortaSelect(){
        $status = StatusPorta::select()
        ->orderBy('nome', 'desc')->get();

         if(sizeof($status) == 0){
            session()->flash("Retorno", "Nenhum status de porta cadastrado.");
            return $status;
        } else{
            return $status;
        }
    }
}
