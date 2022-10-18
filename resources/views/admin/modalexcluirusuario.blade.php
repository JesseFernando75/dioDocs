<!-- Modal confirmação de exclusão -->
<form action="{{ route('excluiusuario', ['id' => $u->id]) }}" method="POST">
    @csrf
    <div class="modal" id="exclusaousuario{{ $u->id }}">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Excluir</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    Você realmente quer excluir o cadastro de <strong>{{ $u->name }}</strong>?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-danger">Excluir</button>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- Fim modal confirmação de exclusão -->