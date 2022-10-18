<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\PerfilUser;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */

    function index(){
        return redirect()->route('login');
    }

    function editarUsuario(Request $request, $id){
        $usuario = User::findOrFail($id);

        $usuario->name = $request->input('name');
        $usuario->email = $request->input('email');
        $usuario->id_perfil = $request->input('id_perfil');
        $usuario->email = $request->input('email');

        if($request->input('password') != null){
            $usuario->password = Hash::make($request->input('password'));
        }

        $usuario->save();
        session()->flash("Mensagem", "Usuário atualizado com sucesso.");
        return redirect()->route('listausuarios'); 
    }

    function excluiUsuario($id){
        $usuario = User::findOrFail($id);
        $usuario->delete();

        session()->flash("Mensagem", "Excluído com sucesso.");
        return redirect()->route('listausuarios');  
    }
    
    function obtemListaUsuarios(){
        $usuario = User::select()
        ->orderBy('name', 'asc')->get();

        if(sizeof($usuario) == 0){
            session()->flash("Retorno", "Não há nenhum usuário cadastrado no momento.");
            return redirect()->route('bemvindo'); 
        } else{
            return view('admin/listausuarios', ['usuario' => $usuario]);
        }
    }
}
