<!-- Modal cadastro de DIO -->
<form id="form" action="{{ route('adicionardio', ['id' => $pop_id]) }}" method="POST">
@csrf
    <div class="modal" id="cadastrodio{{ $pop_id }}">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Cadastro de DIO</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label class="form-label">Digite o nome do DIO</label>
                        <input id="nome" type="text" placeholder="Nome do DIO" class="form-control" name="nome" value="{{ old('name') }}" required autocomplete="nome" autofocus>
                    </div>

                    <div class="col-md-12 mb-3">
                        <label class="form-label">Tipo de DIO</label>
                        <select name="id_tipo" class="form-control" placeholder="Tipo de DIO" required>
                            @foreach(App\Http\Controllers\TiposDioController::obtemListaTiposDioSelect() as $td)
							    <option value="{{ $td->id }}">{{ $td->modelo }}</option>
							@endforeach
                        </select>
                    </div>

                    <div class="col-md-12 mb-3">
                        <label class="form-label">Descrição</label>
                        <input id="descricao" type="text" placeholder="Dê uma descrição para o DIO" class="form-control" name="descricao" required autocomplete="descricao">
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn white-blue">Salvar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- Fim modal cadastro de DIO -->