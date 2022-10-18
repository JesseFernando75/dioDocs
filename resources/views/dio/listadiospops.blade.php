@extends('layouts.template')

    @section('scripts')
    <script src="https://kit.fontawesome.com/0ddd7f20dc.js" crossorigin="anonymous"></script>
    @endsection

    @section('title') Lista de DIO(s) @endsection

    @section('estilo')
        th {
            color: black;
            text-align: center;
        }

        td {
            text-align: center;
        }

        .white-blue {
            background-color: #039be5;
            color: white;
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

    <!-- Texto POP -->
    <div class="col-lg-6 col-md-6 col-sm-8 col-xs-8 mx-auto mt-4">
        <div class="container text-center">
            <span class="text-white" style="font-size: 42pt;">{{ $pop->nome }}<span>
            <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exclusao">
                <i class="fa-solid fa-trash"></i>
            </button> :
        </div>
    </div>
    <!-- Fim texto POP -->

     <!-- Texto dados -->
     <p class="text-center text-light fs-4 mt-4">Dados
        <button class="btn btn-sm white-blue" data-bs-toggle="modal" data-bs-target="#edicao">
            <i class="fa-solid fa-pen-to-square"></i>
        </button> :
     </p>
    <!-- Fim texto dados -->

    <!-- Início tabela -->
    <div class="row">
	    <div class="col-lg-6 col-md-6 col-sm-10 col-xs-10 mx-auto">	
            <table class="table table-bordered table-striped table-hover table-responsive-sm col-12">
                <tbody style="background-color: #616161;">
                    <tr class="text-light">
                      <th style="background-color: #fff;">Nome</th>
                      <td>{{ $pop->nome }}</td>
                    </tr>
                    <tr class="text-light">
                      <th style="background-color: #fff;">Endereço</th>
                      <td>{{ $pop->endereco }}</td>
                    </tr>
                    <tr class="text-light">
                      <th style="background-color: #fff;">Descrição</th>
                      <td>{{ $pop->descricao }}</td>
                    </tr>
                </tbody>
            </table>
		</div>
	</div>
	<!-- Fim tabela -->

     <!-- Texto -->
     <p class="text-center text-light fs-4 mt-4">DIO(s) encontrados:</p>
    <!-- Fim texto -->

    <!-- Início cards -->
    <div class="row row-cols-1 row-cols-md-2 g-3 mb-5 mx-auto" style="width: 600px">
        @if(isset($diospop))
            @foreach($diospop as $dp)
                <div class="col">
                    <div class="card h-100" style="width: 280px;">
                        <a href="{{ route('listaportasdio', ['id' => $dp->id]) }}" class="mx-auto mt-3" style="text-decoration: none; cursor:pointer;">
                            <img src="{{ asset('imagens/DIO.jpg') }}" width="250px" alt="DIO" >
                        </a>
                        <div class="card-body mx-auto">
                            <h5 class="card-title">{{ $dp->nome }}</h5>
                            <p class="card-text">{{ $dp->descricao }}</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Criado em {{ $dp->created_at }}</small>
                        </div>
                    </div>
                </div>
            @endforeach       
            <div class="col">
                <div class="card h-100" style="width: 280px;">
                    <div class="card-body mx-auto">
                        <a data-bs-toggle="modal" data-bs-target="#cadastrodio{{ $pop_id = $pop->id }}" style="text-decoration: none; cursor:pointer;">
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
                        <a data-bs-toggle="modal" data-bs-target="#cadastrodio{{ $pop_id = $pop->id }}" style="text-decoration: none; cursor:pointer;">
                            <span style="color: #039be5; font-size: 180pt;">+</span>
                        </a>
                    </div>
                </div>
            </div>  
        </div>
        @endif    
	<!-- Fim cards -->

    <!-- Request de modal -->
    <div>
        @include('dio/modalcadastrardio')
    </div>
    <!-- Fim request de modal -->

    @endsection