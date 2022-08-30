@extends('layouts.template')

    @section('scripts')
    <script src="https://kit.fontawesome.com/0ddd7f20dc.js" crossorigin="anonymous"></script>
    @endsection

    @section('title') DIO @endsection

    @section('estilo')
        th {
            color: black;
            text-align: center;
        }

        .white-blue{
            background-color: #039be5;
            color: white;
        }
    @endsection

    @section('nav&footer')

    <!-- Texto cidade -->
    <div class="col-lg-6 col-md-6 col-sm-8 col-xs-8 mx-auto mt-4">
        <div class="container text-center">
            <span class="text-white" style="font-size: 42pt;">Caçador<span>, <span></span>
            <span style="color: #039be5; font-size: 42pt;">SC</span>
            <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exclusao">
                <i class="fa-solid fa-trash"></i>
            </button> :
        </div>
    </div>
    <!-- Fim texto cidade -->

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
                      <th style="background-color: #fff;">First Name</th>
                      <td>John</td>
                    </tr>
                    <tr class="text-light">
                      <th style="background-color: #fff;">Last Name</th>
                      <td>Carter</td>
                    </tr>
                    <tr class="text-light">
                      <th style="background-color: #fff;">Email</th>
                      <td>johncarter@mail.com</td>
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
    <div class="row row-cols-1 row-cols-md-2 g-3 mx-auto" style="width: 600px">
        <div class="col mt-4">
            <div class="card h-100" style="width: 280px;">
                <img src="{{ asset('imagens/DIO.jpg') }}" class="mx-auto" width="250px" alt="DIO" >
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
        </div>
        <div class="col mt-4">
            <div class="card h-100" style="width: 280px;">
                <img src="{{ asset('imagens/DIO.jpg') }}" class="mx-auto" width="250px" alt="DIO" >
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
        </div>
        <div class="col mb-5">
            <div class="card h-100" style="width: 280px;">
                <img src="{{ asset('imagens/DIO.jpg') }}" class="mx-auto" width="250px" alt="DIO" >
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
        </div>
        <div class="col mb-5">
            <div class="card h-100" style="width: 280px;">
                <div class="card-body mx-auto">
                    <a href="#" style="text-decoration: none;">
                        <span style="color: #039be5; font-size: 180pt;">+</span>
                    </a>
                </div>
            </div>
        </div>       
    </div>
	<!-- Fim cards -->

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
                            <button type="submit" class="btn white-blue">Salvar</button>
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