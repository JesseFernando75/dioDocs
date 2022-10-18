<!-- Modal confirmação de limpeza de porta -->
<form action="{{ route('limpaportadio', ['id' => $pd->id]) }}" method="POST">
    @csrf
    <div class="modal" id="limpezaporta{{ $pd->id }}">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Limpar</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    Você realmente deseja limpar a porta <strong>{{ $pd->num_porta }}
                    </strong>? Todos os dados dessa porta serão excluídos.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-danger">Limpar</button>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- Fim modal confirmação de limpeza de porta -->