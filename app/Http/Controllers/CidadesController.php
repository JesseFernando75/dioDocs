<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cidade;

class CidadesController extends Controller
{
    function procuraCidade(Request $request){
        if($request->ajax() AND $request->search != ""){
            $cidades = Cidade::select()
            ->where('nome','LIKE','%'.$request->search."%")->get();
            $output = "";

            if($cidades){
                foreach ($cidades as $key => $cidade) {
                    $output.=
                    '<option>'.$cidade->nome.'</option>';
                }
                return Response($output);
            }
        }
    }
}


