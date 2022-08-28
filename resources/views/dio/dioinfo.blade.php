@extends('layouts.template')

    @section('scripts')
    <script src="https://kit.fontawesome.com/0ddd7f20dc.js" crossorigin="anonymous"></script>
    @endsection

    @section('title') DIO info @endsection

    @section('estilo')
        .th-edit {
            color: black;
            text-align: center;
        }
    @endsection

    @section('nav&footer')

    <!-- Texto cidade -->
    <div class="col-lg-6 col-md-6 col-sm-8 col-xs-8 mx-auto mt-4">
        <div class="container text-center">
            <span class="font-weight-bold text-white" style="font-size: 42pt;">DIO<span> - <span></span>
            <span class="font-weight-bold" style="color: #039be5; font-size: 42pt;">Salgado Filho</span>
            <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exclusao">
                <i class="fa-solid fa-trash"></i>
            </button> :
        </div>
    </div>
    <!-- Fim texto cidade -->

    <!-- Texto dados -->
    <p class="text-center text-light fs-4 mt-4">Dados
        <button class="btn btn-sm" style="background-color: #039be5;" data-bs-toggle="modal" data-bs-target="#edicao">
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
                      <th class="th-edit" style="background-color: #fff;">First Name</th>
                      <td>John</td>
                    </tr>
                    <tr class="text-light">
                      <th class="th-edit" style="background-color: #fff;">Last Name</th>
                      <td>Carter</td>
                    </tr>
                    <tr class="text-light">
                      <th class="th-edit" style="background-color: #fff;">Email</th>
                      <td>johncarter@mail.com</td>
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
				    <th scope="col">Fibra</th>
				    <th scope="col">Descrição</th>
				    <th scope="col">Link</th>
                    <th scope="col">Status</th>
				    <th scope="col">Sinal</th>
				    <th scope="col">Origem</th>
                    <th scope="col">Destino</th>
                    <th scope="col">Opções</th>
				  </tr>
				</thead>
				<tbody style="background-color: #616161;">
                  <tr class="text-light text-center">
				    <th scope="row">$v->id</th>
					<td>$v->nome</td>
					<td>$v->cpf</td>
					<td>$v->num_conta</td>
					<td>R$</td>
                    <td>R$</td>
                    <td>R$</td>
					<td>
                      <button class="btn btn-sm" style="background-color: #039be5;" data-bs-toggle="modal" data-bs-target="#edicao"><i class="fa-solid fa-pen-to-square"></i></button>
					  <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exclusao"><i class="fa-solid fa-trash"></i></button>
					</td>
				    </tr>
                  <tr class="text-light text-center">
                    <th scope="row">$v->id</th>
					<td>$v->nome</td>
					<td>$v->cpf</td>
					<td>$v->num_conta</td>
					<td>R$</td>
                    <td>R$</td>
                    <td>R$</td>
					<td>
                      <button class="btn btn-sm" style="background-color: #039be5;" data-bs-toggle="modal" data-bs-target="#edicao"><i class="fa-solid fa-pen-to-square"></i></button>
					  <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exclusao"><i class="fa-solid fa-trash"></i></button>
					</td>
				  </tr>
                  <tr class="text-light text-center">
				    <th scope="row">$v->id</th>
					<td>$v->nome</td>
					<td>$v->cpf</td>
					<td>$v->num_conta</td>
					<td>R$</td>
                    <td>R$</td>
                    <td>R$</td>
					<td>
                      <button class="btn btn-sm" style="background-color: #039be5;" data-bs-toggle="modal" data-bs-target="#edicao"><i class="fa-solid fa-pen-to-square"></i></button>
					  <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exclusao"><i class="fa-solid fa-trash"></i></button>
					</td>
				  </tr>
                  <tr class="text-light text-center">
                    <th scope="row">$v->id</th>
					<td>$v->nome</td>
					<td>$v->cpf</td>
					<td>$v->num_conta</td>
					<td>R$</td>
                    <td>R$</td>
                    <td>R$</td>
					<td>
                      <button class="btn btn-sm" style="background-color: #039be5;" data-bs-toggle="modal" data-bs-target="#edicao"><i class="fa-solid fa-pen-to-square"></i></button>
					  <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exclusao"><i class="fa-solid fa-trash"></i></button>
					</td>
				  </tr>
				</tbody>
			</table>
		</div>
	</div>
	<!-- Fim tabela -->	

    <!-- Modal edição de cadastro -->
    <div class="modal" id="edicao">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Editar</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                  <form id="form" action="" method="POST">
		      	    @csrf
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label class="form-label">Nome</label>
                            <input type="text" name="nome" class="form-control" placeholder="Seu nome" pattern="[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$" value="$v->nome" required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">CPF</label>
                            <input type="text" name="cpf" id="cpf" class="form-control" placeholder="000.000.000-00" value="$v->cpf" required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Telefone</label>
                            <input type="text" name="telefone" id="telefone" class="form-control" placeholder="(49) 3555-5555" value="$v->telefone" required>
                        </div>

                        <div class="col-md-12 mb-4">
                            <label class="form-label">Número da conta</label>
                            <input type="number" name="num_conta" class="form-control" placeholder="67807" value="$v->num_conta" required>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-warning">Salvar</button>
                        </div>
                    </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
	<!-- Fim modal edição de cadastro -->

    <!-- Modal confirmação de exclusão -->
    <div class="modal" id="exclusao">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Excluir</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    Você realmente deseja excluir este cadastro? Essa ação é irreversível.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
			        <button type="submit" class="btn btn-danger">Excluir</button>
                </div>
            </div>
        </div>
    </div>
	<!-- Fim modal confirmação de exclusão -->
    @endsection