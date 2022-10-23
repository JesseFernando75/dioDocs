@extends('layouts.template')

    @section('scripts')
    <script src="https://kit.fontawesome.com/0ddd7f20dc.js" crossorigin="anonymous"></script>
    @endsection

	@section('title') Lista de usuários @endsection

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
    <a href="{{ route('registro') }}" class="btn btn-warning" role="button">Novo usuário</a>
    <!-- Fim botão cadastrar novo usuário -->

    <!-- Texto lista de usuários -->
    <p class="text-center text-light fs-4 mt-4">Lista de usuários:</p>
    <!-- Fim lista de usuários -->

    <!-- Início tabela -->
	<div class="row">
	  	<div class="col-lg-9 col-md-9 col-sm-10 col-xs-10 mx-auto mb-5">
			<table class="table table-bordered table-striped table-hover table-responsive-sm col-12">
				<thead style="background-color: #fff;">
				  <tr class="text-dark text-center">
				    <th scope="col">Código</th>
					<th scope="col">Nome</th>
					<th scope="col">Perfil</th>
					<th scope="col">E-mail</th>
					<th scope="col">Senha</th>
					<th scope="col">Opções</th>
				  </tr>
				</thead>
				<tbody style="background-color: #616161;">
					@foreach($usuario as $u)
						<tr class="text-light text-center">
						  <td scope="col">{{ $u->id }}</td>
						  <td>{{ $u->name }}</td>
						  <td>{{ $u->perfil->nome }}</td>
						  <td>{{ $u->email }}</td>
						  <td>{{ $u->password }}</td>
						  <td>
							<button class="btn btn-sm white-blue" data-bs-toggle="modal" data-bs-target="#edicaousuario{{ $u->id }}">
								<i class="fa-solid fa-pen-to-square"></i>
							</button>
							<button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exclusaousuario{{ $u->id }}">
								<i class="fa-solid fa-trash"></i>
							</button>
						  </td>
							@include('admin/modalexcluirusuario')
							@include('admin/modaleditarusuario')
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
	<!-- Fim tabela -->	

@endsection