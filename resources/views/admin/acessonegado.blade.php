@extends('layouts.template')

    @section('title') Acesso negado @endsection

    @section('estilo')

    @endsection

    @section('nav&footer')
    <!-- Texto principal -->
        <div class="d-flex justify-content-center align-items-center" style="height: 700px;">
            <div class="text-center">
                <h1 class="text-light">Acesso <span style="color: #039be5;">negado.</span></h1>
                <p class="text-light">Desculpe, você não tem permissão para acessar esta página.</p>
            </div>
        </div>
    <!-- Fim texto principal -->
    @endsection