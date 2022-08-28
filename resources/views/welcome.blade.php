@extends('layouts.template')

    @section('scripts')
    <script src="https://kit.fontawesome.com/0ddd7f20dc.js" crossorigin="anonymous"></script>
    @endsection

    @section('title') Home @endsection

    @section('estilo')

    @endsection

    @section('nav&footer')
    <!-- Pesquisa principal -->
    <div class="row align-items-center justify-content-center" style="height: 500px;">
        <div class="col-lg-4 col-md-5 col-sm-8 col-xs-8 mx-auto mt-5">

            <div class="container text-center mb-2">
                <span class="font-weight-bold text-white" style="font-size: 52pt;">dio</span>
                <span class="font-weight-bold" style="color: #039be5; font-size: 52pt;">Docs</span><br>
            </div>

            <div class="input-group">
                <input type="text" class="form-control" placeholder="Pesquise por uma cidade">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button" style="background-color: #039be5;">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>

        </div>
    </div>
    <!-- Fim pesquisa principal -->
    @endsection