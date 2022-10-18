@extends('layouts.template')

    @section('scripts')
    <script src="https://kit.fontawesome.com/0ddd7f20dc.js" crossorigin="anonymous"></script>
    @endsection

	@section('title') Lista de tipos de DIO @endsection

	@section('estilo')
        .white-blue{
            background-color: #039be5;
            color: white;
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

    <!-- Botão cadastrar novo usuário -->
    <a href="{{ route('cadastrotipodio') }}" class="btn btn-warning" role="button">Novo tipo de DIO</a>
    <!-- Fim botão cadastrar novo usuário -->

    <!-- Texto lista de usuários -->
    <p class="text-center text-light fs-4 mt-4">Lista de tipos de DIO(s) cadastrados:</p>
    <!-- Fim lista de usuários -->

    <!-- Início tabela -->
    @if(!session('Retorno'))
        <div class="row">
            <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11 mx-auto mb-5">
                <table class="table table-bordered table-striped table-hover table-responsive-sm col-12">
                    <thead style="background-color: #fff;">
                    <tr class="text-dark text-center">
                        <th scope="col">Código</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Modelo</th>
                        <th scope="col">Portas</th>
                        <th scope="col">Entradas de cabo</th>
                        <th scope="col">Tipo de conector</th>
                        <th scope="col">Tipo de polimento</th>
                        <th scope="col">Tipo de instalação</th>
                        <th scope="col">Acabamento</th>
                        <th scope="col">Comprimento (mm)</th>
                        <th scope="col">Largura (mm)</th>
                        <th scope="col">Altura (mm)</th>
                        <th scope="col">Peso (kg)</th>
                        <th scope="col">Opções</th>
                    </tr>
                    </thead>
                    <tbody style="background-color: #616161;">
                    @foreach($tipos_dio as $td)
                        <tr class="text-light text-center">
                            <td scope="col">{{ $td->id }}</td>
                            <td>{{ $td->marca }}</td>
                            <td>{{ $td->modelo }}</td>
                            <td>{{ $td->qtd_portas }}</td>
                            <td>{{ $td->qtd_cabo_optico }}</td>
                            <td>{{ $td->tipo_conector }}</td>
                            <td>{{ $td->tipo_polimento }}</td>
                            <td>{{ $td->tipo_instalacao }}</td>
                            <td>{{ $td->acabamento }}</td>
                            <td>{{ $td->comprimento }}</td>
                            <td>{{ $td->largura }}</td>
                            <td>{{ $td->altura }}</td>
                            <td>{{ $td->peso }}</td>
                            <td>
                            <button class="btn btn-sm white-blue" data-bs-toggle="modal" data-bs-target="">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </button>
                            <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
	<!-- Fim tabela -->	
    
@endsection