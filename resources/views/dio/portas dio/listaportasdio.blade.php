@extends('layouts.template')

    @section('scripts')
    <script src="https://kit.fontawesome.com/0ddd7f20dc.js" crossorigin="anonymous"></script>
    @endsection

    @section('title') DIO info @endsection

    @section('estilo')
        th {
            color: black;
            text-align: center;
        }

        td {
            text-align: center;
        }

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

    <!-- Texto cidade -->
    <div class="col-lg-6 col-md-6 col-sm-8 col-xs-8 mx-auto mt-4">
        <div class="container text-center">
            <span class="font-weight-bold text-white" style="font-size: 42pt;">{{ $dio->nome }}<span>
            <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exclusao">
                <i class="fa-solid fa-trash"></i>
            </button> :
        </div>
    </div>
    <!-- Fim texto cidade -->

    <!-- Texto dados -->
    <p class="text-center text-light fs-4 mt-4">Dados
        <button class="btn btn-sm white-blue" style="background-color: #039be5;" data-bs-toggle="modal" data-bs-target="#edicao">
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
                      <td>{{ $dio->nome }}</td>
                    </tr>
                    <tr class="text-light">
                      <th style="background-color: #fff;">Descrição</th>
                      <td>{{ $dio->descricao }}</td>
                    </tr>
                </tbody>
            </table>
		</div>
	</div>
	<!-- Fim tabela -->

    <!-- Texto dados -->
    <p class="text-center text-light fs-4 mt-4">Tipo de DIO
        <button class="btn btn-sm white-blue" style="background-color: #039be5;" onclick="collapseFunction()">
            <i class="fa-solid fa-caret-down"></i>
        </button> :
     </p>
    <!-- Fim texto dados -->

    <!-- Início tabela -->
    <div class="row" id="collapse" style="display:none;">
	    <div class="col-lg-6 col-md-6 col-sm-10 col-xs-10 mx-auto">	
            <table class="table table-bordered table-striped table-hover table-responsive-sm col-12">
                <tbody style="background-color: #616161;">
                    <tr class="text-light">
                      <th style="background-color: #fff;">Marca</th>
                      <td>{{ $dio->tipo->marca }}</td>
                    </tr>
                    <tr class="text-light">
                      <th style="background-color: #fff;">Modelo</th>
                      <td>{{ $dio->tipo->modelo }}</td>
                    </tr>
                    <tr class="text-light">
                      <th style="background-color: #fff;">Portas</th>
                      <td>{{ $dio->tipo->qtd_portas }}</td>
                    </tr>
                    <tr class="text-light">
                      <th style="background-color: #fff;">Entradas de cabo</th>
                      <td>{{ $dio->tipo->qtd_cabo_optico }}</td>
                    </tr>
                    <tr class="text-light">
                      <th style="background-color: #fff;">Tipo de conector</th>
                      <td>{{ $dio->tipo->tipo_conector }}</td>
                    </tr>
                    <tr class="text-light">
                      <th style="background-color: #fff;">Tipo de polimento</th>
                      <td>{{ $dio->tipo->tipo_polimento }}</td>
                    </tr>
                    <tr class="text-light">
                      <th style="background-color: #fff;">Tipo de instalação</th>
                      <td>{{ $dio->tipo->tipo_instalacao }}</td>
                    </tr>
                    <tr class="text-light">
                      <th style="background-color: #fff;">Acabamento</th>
                      <td>{{ $dio->tipo->acabamento }}</td>
                    </tr>
                    <tr class="text-light">
                      <th style="background-color: #fff;">Comprimento (mm)</th>
                      <td>{{ $dio->tipo->comprimento }}</td>
                    </tr>
                    <tr class="text-light">
                      <th style="background-color: #fff;">Largura (mm)</th>
                      <td>{{ $dio->tipo->largura }}</td>
                    </tr>
                    <tr class="text-light">
                      <th style="background-color: #fff;">Altura (mm)</th>
                      <td>{{ $dio->tipo->altura }}</td>
                    </tr>
                    <tr class="text-light">
                      <th style="background-color: #fff;">Peso (Kg)</th>
                      <td>{{ $dio->tipo->peso }}</td>
                    </tr>
                </tbody>
            </table>
		</div>
	</div>
	<!-- Fim tabela -->

    <!-- Texto -->
    <p class="text-center text-light fs-4 mt-4">Portas:</p>
    <!-- Fim texto -->

    <!-- Início tabela -->
	<div class="row">
	  	<div class="col-lg-9 col-md-9 col-sm-10 col-xs-10 mx-auto mb-5">
			<table class="table table-bordered table-striped table-hover table-responsive-sm col-12">
				<thead style="background-color: #fff;">
				  <tr class="text-dark text-center">
				    <th scope="col">Porta/Fibra</th>
				    <th scope="col">Nome</th>
				    <th scope="col">Cordão</th>
				    <th scope="col">Primeira CEO</th>
                    <th scope="col">Última CEO</th>
                    <th scope="col">Sinal (dB)</th>
				    <th scope="col">Link (Mbps)</th>
                    <th scope="col">Status</th>
                    <th scope="col">Opções</th>
				  </tr>
				</thead>
				<tbody style="background-color: #616161;">
                    @foreach($portas_dio as $pd)
                        <th scope="row" class="text-light">{{ $pd->num_porta }}</th>
                            @if($pd->nome == "Livre" && $pd->tipo_cordao == "Livre" && $pd->primeira_ceo == "Livre" && $pd->ultima_ceo == "Livre")
                              <td><span class="badge bg-warning text-dark">{{ $pd->nome }}</span></td>
                              <td><span class="badge bg-warning text-dark">{{ $pd->tipo_cordao }}</span></td>
                              <td><span class="badge bg-warning text-dark">{{ $pd->primeira_ceo }}</span></td>
                              <td><span class="badge bg-warning text-dark">{{ $pd->ultima_ceo }}</span></td>
                            @else
                              <td class="text-light">{{ $pd->nome }}</td>
                              <td class="text-light">{{ $pd->tipo_cordao }}</td>
                              <td class="text-light">{{ $pd->primeira_ceo }}</td>
                              <td class="text-light">{{ $pd->ultima_ceo }}</td>
                            @endif

                            <td class="text-light">{{ $pd->potencia_sinal }}</td>

                            @if($pd->velocidade_link == 0)
                              <td><span class="badge bg-danger">{{ $pd->velocidade_link }}</span></td>
                            @elseif($pd->velocidade_link == 10)
                              <td><span class="badge bg-secondary">{{ $pd->velocidade_link }}</span></td>
                            @elseif($pd->velocidade_link == 100)
                              <td><span class="badge bg-dark">{{ $pd->velocidade_link }}</span></td>
                            @else
                              <td><span class="badge bg-success">{{ $pd->velocidade_link }}</span></td>
                            @endif

                            @if($pd->id_status == 1)
                              <td><span class="badge bg-success">{{ $pd->status->nome }}</span></td>
                            @elseif($pd->id_status == 2)
                              <td><span class="badge bg-danger">{{ $pd->status->nome }}</span></td>
                            @else
                              <td><span class="badge bg-light text-dark">{{ $pd->status->nome }}</span></td>
                            @endif
                            <td>
                              <button class="btn btn-sm white-blue" data-bs-toggle="modal" data-bs-target="#edicaoporta{{ $pd->id }}"><i class="fa-solid fa-pen-to-square"></i></button>
                              <button class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#limpezaporta{{ $pd->id }}"><i class="fa-solid fa-broom"></i></button>
                            </td>
                            @include('dio/portas dio/modalimparporta')
							@include('dio/portas dio/modaleditarporta')
                        </tr>
                    @endforeach
				</tbody>
			</table>
		</div>
	</div>
	<!-- Fim tabela -->	

    <!-- Scripts -->
    <script type="text/javascript">
        var dglow = document.getElementById("collapse");

        function collapseFunction(){
            var style=dglow.style.display;
            if(style=='block'){
                dglow.style.display='none';
            } else{
                dglow.style.display='block';
            }    			
        }
    </script>

    <script type="text/javascript">
        $("#potencia_sinal").mask('00.0', {
            reverse: true,
            maxlength: false
        });
    </script>
    <!-- Fim Scripts -->

    @endsection