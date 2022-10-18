@extends('layouts.template')

    @section('scripts')
    <script src="https://kit.fontawesome.com/0ddd7f20dc.js" crossorigin="anonymous"></script>
    @endsection

    @section('title') Lista de POP(s) @endsection

    @section('estilo')
        #footer {
            bottom: 0;
            width: 100%;
        }
    @endsection

    @section('nav&footer')

    <!-- Início mensagem -->
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
	<!-- Fim mensagem -->

    <!-- Texto cidade -->
    <div class="col-lg-6 col-md-6 col-sm-8 col-xs-8 mx-auto mt-4">
        <div class="container text-center">
            @if(isset($popscidade))
                <span class="text-white" style="font-size: 42pt;">{{ $popscidade[0]->cidade->nome }}<span>, <span></span>
                <span style="color: #039be5; font-size: 42pt;">{{ $popscidade[0]->cidade->estado->sigla }}</span>
                :
            @else
            <span class="text-white" style="font-size: 42pt;">{{ $cidade->nome }}<span>, <span></span>
            <span style="color: #039be5; font-size: 42pt;">{{ $cidade->estado->sigla }}</span>
            :
            @endif
        </div>
    </div>
    <!-- Fim texto cidade -->

     <!-- Texto -->
     <p class="text-center text-light fs-4 mt-4">POP(s) encontrados:</p>
    <!-- Fim texto -->

    <!-- Início cards -->
    <div class="row row-cols-1 row-cols-md-2 g-3 mb-5 mx-auto" style="width: 600px">
        @if(isset($popscidade))
            @foreach($popscidade as $pc)
                <div class="col">
                    <div class="card h-100" style="width: 280px;">
                        <a href="{{ route('listadiospops', ['id' => $pc->id]) }}" class="mx-auto mt-3" style="text-decoration: none; cursor:pointer;">
                            <img src="{{ asset('imagens/POP.jpg') }}" width="200px" alt="POP">
                        </a>
                        <div class="card-body mx-auto">
                            <h5 class="card-title">{{ $pc->nome }}</h5>
                            <p class="card-text">{{ $pc->descricao }}</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Criado em {{ $pc->created_at }}</small>
                        </div>
                    </div>
                </div>
            @endforeach

            <div class="col">
                <div class="card h-100" style="width: 280px;">
                    <div class="card-body mx-auto">
                        <a data-bs-toggle="modal" data-bs-target="#cadastropop{{ $cidade_id = $popscidade[0]->cidade->id }}" style="text-decoration: none; cursor:pointer;">
                            <span style="color: #039be5; font-size: 180pt;">+</span>
                        </a>
                    </div>
                </div>
            </div>  
        </div>
        @else
            <div class="col mt-4 mb-5 mx-auto">
                <div class="card h-100" style="width: 280px;">
                    <div class="card-body mx-auto">
                        <a data-bs-toggle="modal" data-bs-target="#cadastropop{{ $cidade_id = $cidade->id }}" style="text-decoration: none; cursor:pointer;">
                            <span style="color: #039be5; font-size: 180pt;">+</span>
                        </a>
                    </div>
                </div>
            </div> 
        </div> 
        @endif 
    <!-- Fim cards -->

    <!-- Request de modal -->
    <div id="footer">
        @include('pop/modalcadastrarpop')
    </div>
    <!-- Fim request de modal -->

    @endsection