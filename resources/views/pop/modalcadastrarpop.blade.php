<!-- Modal cadastro de POP -->
<form id="form" action="{{ route('adicionarpop', ['id' => $cidade_id]) }}" method="POST">
@csrf
    <div class="modal" id="cadastropop{{ $cidade_id }}">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Cadastro de POP</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label class="form-label">Digite o nome do POP</label>
                        <input id="nome" type="text" placeholder="Nome do POP" class="form-control" name="nome" value="{{ old('name') }}" required autocomplete="nome" autofocus>
                    </div>

                    <div class="col-md-12 mb-3">
                        <label class="form-label">Digite o endereço do POP</label>
                        <input id="endereco" type="text" placeholder="R. Sen. Salgado Filho, 231, Centro, Caçador - SC" class="form-control" name="endereco" required autocomplete="endereco">
                    </div>

                    <div class="col-md-12 mb-3">
                        <label class="form-label">Descrição</label>
                        <input id="descricao" type="text" placeholder="Dê uma descrição para o POP" class="form-control" name="descricao" required autocomplete="descricao">
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn" style="background-color: #039be5; color: white;">Salvar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- Fim modal cadastro de POP -->