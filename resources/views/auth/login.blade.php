@extends('layouts.template')

    @section('title') Login @endsection

    @section('estilo')

        .fundo{
            background-color: #fff;
            background-clip: padding-box;
            padding-top: 40px;
            padding-bottom: 40px;
            padding-left: 70px;
            padding-right: 70px;
            border-radius: 1.1rem;
        }

        a:link{
            text-decoration:none; 
        }

    @endsection

    @section('nav&footer')

    <!-- Início mensagem alterar -->
    @if(session('Mensagem'))
        <div class="row">
            <div class="alert alert-success text-center py-3">
                {{ session('Mensagem') }}
            </div>
        </div>
    @endif

    @if(session('Retorno'))
        <div class="row">
            <div class="alert alert-danger text-center py-3">
                {{ session('Retorno') }}
            </div>
        </div>
    @endif
    <!-- Fim mensagem alterar -->

    <!-- Início formulário -->
    <div class="row align-items-center justify-content-center" style="height: 700px;">
        <div class="col-lg-4 col-md-4 col-sm-8 col-xs-8 fundo">

            <div class="text-center">
                <span class="fs-1">dio</span>
                <span class="fs-1" style="color: #039be5;">Docs</span>
            </div>

            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">E-mail</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="form-label">Senha</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="d-grid gap-1 mb-4">
                    <button class="btn" type="submit" style="background-color: #039be5; color: white;">Entrar</button>
                </div>

                <a href="{{ route('register') }}" class="text-muted">Não tem conta? Cadastre-se.</a>
            </form> 
        </div>
    </div>
    <!-- Fim formulário -->
    
    @endsection