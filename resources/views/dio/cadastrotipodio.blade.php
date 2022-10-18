@extends('layouts.template')

    @section('scripts')
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
	@endsection

    @section('title') Cadastro de tipo de DIO @endsection

    @section('estilo')
        .white-blue{
            background-color: #039be5;
            color: white;
        }
    @endsection

    @section('nav&footer')

    <!-- Início formulário -->
    <div class="row">
        <div class="col-lg-4 col-md-5 col-sm-8 col-xs-8 mx-auto mt-5 text-light">
            <form class="row g-2" action="{{ route('adicionartipodio') }}" method="POST">
                @csrf
                <div class="col-md-12 mb-3">
                    <label class="form-label">Nome da marca</label>
                    <input  type="text" class="form-control" placeholder="Marca" name="marca" required autocomplete="marca" autofocus>
                </div>

                <div class="col-md-12 mb-3">
                    <label class="form-label">Nome do modelo</label>
                    <input  type="text" class="form-control" placeholder="Modelo" name="modelo" required autocomplete="modelo">
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Quantidade de portas</label>
                    <input  type="number" class="form-control" name="qtd_portas" oninput="this.value|=0" required autocomplete="qtd_portas">
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Quantidade de entradas de cabo óptico</label>
                    <input  type="number" class="form-control" name="qtd_cabo_optico" oninput="this.value|=0" required autocomplete="qtd_cabo_optico">
                </div>

                <div class="col-md-12 mb-3">
                    <label class="form-label">Tipo de conector</label>
                    <input  type="text" class="form-control" placeholder="Tipo de conector" name="tipo_conector" required autocomplete="tipo_conector">
                </div>

                <div class="col-md-12 mb-3">
                    <label class="form-label">Tipo de polimento</label>
                    <input  type="text" class="form-control" placeholder="Tipo de polimento" name="tipo_polimento" required autocomplete="tipo_acabamento">
                </div>

                <div class="col-md-12 mb-3">
                    <label class="form-label">Tipo de instalação</label>
                    <input  type="text" class="form-control" placeholder="Tipo de instalação" name="tipo_instalacao" required autocomplete="tipo_acabamento">
                </div>

                <div class="col-md-12 mb-3">
                    <label class="form-label">Tipo de acabamento</label>
                    <input  type="text" class="form-control" placeholder="Acabamento" name="acabamento" required autocomplete="acabamento">
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Comprimento</label>
                    <input  type="number" class="form-control" placeholder="435mm" name="comprimento" oninput="this.value|=0" required autocomplete="comprimento">
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Largura</label>
                    <input  type="number" class="form-control" placeholder="320mm" name="largura"oninput="this.value|=0" required autocomplete="largura">
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Altura</label>
                    <input  type="number" class="form-control" placeholder="43mm" name="altura" oninput="this.value|=0" required autocomplete="altura">
                </div>

                <div class="col-md-6 mb-3 mb-5">
                    <label class="form-label">Peso</label>
                    <input  type="text" class="form-control" placeholder="3,8kg" id="peso" name="peso" required autocomplete="peso">
                </div>

                <div class="col-md-12 d-grid gap-1 mb-5">
                    <button class="btn white-blue" type="submit">Salvar</button>
                </div>
            </form> 
        </div>
    </div>
    <!-- Fim formulário -->

   <!-- Scripts -->
	<script type="text/javascript">
   		$("#peso").mask('000.0', {
   			reverse: true,
			maxlength: false
   		});
    </script>	
    <!-- Fim Scripts -->
@endsection