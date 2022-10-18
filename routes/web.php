<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CidadesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PopsController;
use App\Http\Controllers\TiposDioController;
use App\Http\Controllers\DiosController;
use App\Http\Controllers\PortasDioController;
use App\Http\Controllers\Auth\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Redirect
Route::get('/',[UsersController:: class, 'index']);

 //Usuário logado
 Route::middleware('isLogged')->group(function(){

    //Procura por cidade
    Route::get('search',[CidadesController:: class, 'procuraCidade']);

    //Rotas DIO
    Route::get('dio/pop/listadios/{id}', [DiosController::class, 'obtemListaDiosPorPop'])->name('listadiospops');

    Route::post('dio/pop/adicionar/{id}', [DiosController::class, 'cadastrarDio'])->name('adicionardio');
    //Fim rotas DIO

    //Rotas tipos DIO
    Route::get('dio/tipos/listadios', [TiposDioController::class, 'obtemListaTiposDio'])->name('listatiposdio');
    
    Route::get('dio/tipos/cadastro', function () {
        return view('dio/cadastrotipodio');
    })->name('cadastrotipodio');

    Route::post('dio/tipos/adicionar', [TiposDioController::class, 'cadastrarTipoDio'])->name('adicionartipodio');
    //Fim rotas tipos DIO
    
    //Rotas portas DIO
    Route::get('dio/portas/listaportas/{id}', [PortasDioController::class, 'obtemDadosPortasDio'])->name('listaportasdio');

    Route::post('dio/portas/editar/{id}', [PortasDioController::class, 'editarPorta'])->name('editaportadio');

    Route::post('dio/portas/limpar/{id}', [PortasDioController::class, 'limparPorta'])->name('limpaportadio');
    //Fim rotas portas DIO

    //Home
    Route::get('home', function () {
        return view('welcome');
    })->name('home');

    //Rotas POP
    Route::post('cidade/pop/listapops', [PopsController::class, 'obtemListaPopsPorCidade'])->name('listapopscidade');

    Route::post('cidade/pop/adicionar/{id}', [PopsController::class, 'cadastrarPop'])->name('adicionarpop');
    //Fim rotas DIO

});
//Fim usuário logado

//Usuário Administrador
Route::middleware('isAdmin')->group(function(){

    // Lista de usuários
    Route::get('admin/usuario/listausuarios', [UsersController::class, 'obtemListaUsuarios'])->name('listausuarios');

    // Exclusão de usuário
    Route::post('admin/usuario/excluir/{id}', [UsersController::class, 'excluiUsuario'])->name('excluiusuario');

    // Registro de usuário
    Route::get('admin/usuario/cadastro', [RegisterController::class, 'showRegistrationForm'])->name('registro');

    Route::post('admin/usuario/adicionar', [RegisterController::class, 'register'])->name('register');
    // Fim registro de usuário

    //Edição de usuário
    Route::post('admin/usuario/editar/{id}', [UsersController::class, 'editarUsuario'])->name('editausuario');

});
//Fim usuário administrador

Auth::routes();