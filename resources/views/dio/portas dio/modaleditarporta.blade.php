<!-- Modal edição de cadastro -->
<form id="form" action="{{ route('editaportadio', ['id' => $pd->id]) }}" method="POST">
@csrf
    <div class="modal" id="edicaoporta{{ $pd->id }}">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Editar</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label class="form-label">Nome</label>
                        <input id="nome" type="text" value="{{ $pd->nome }}" placeholder="Nome" class="form-control" name="nome" required autocomplete="nome" autofocus>
                    </div>

                    <div class="col-md-12 mb-3">
                        <label class="form-label">Status da porta</label>
                        <select name="id_status" class="form-control" placeholder="Status da porta" required>
                            @foreach(App\Http\Controllers\StatusPortasController::obtemListaStatusPortaSelect() as $sp)
                                @if($pd->id_status == $sp->id)
                                    <option value="{{ $sp->id }}" selected>{{ $sp->nome }}</option>
                                @else
                                    <option value="{{ $sp->id }}">{{ $sp->nome }}</option>
                                @endif
							@endforeach
                        </select>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Velocidade do link</label>
                        <select name="velocidade_link" class="form-control" placeholder="Velocidade do link" required>
                            @if($pd->velocidade_link == 0)
                                <option value="0" selected>0</option>
                                <option value="10">10Mbps</option>
                                <option value="100">100Mbps</option>
                                <option value="1000">1000Mbps</option>
                            @elseif($pd->velocidade_link == 10)
                                <option value="0">0</option>
                                <option value="10" selected>10Mbps</option>
                                <option value="100">100Mbps</option>
                                <option value="1000">1000Mbps</option>
                            @elseif($pd->velocidade_link == 100)
                                <option value="0">0</option>
                                <option value="10">10Mbps</option>
                                <option value="100" selected>100Mbps</option>
                                <option value="1000">1000Mbps</option>
                            @else
                                <option value="0">0</option>
                                <option value="10">10Mbps</option>
                                <option value="100">100Mbps</option>
                                <option value="1000" selected>1000Mbps</option>
                            @endif
                        </select>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Potência do sinal</label>
                        <input id="potencia_sinal" type="text" value="{{ $pd->potencia_sinal }}" placeholder="18.85dB" class="form-control" name="potencia_sinal" required autocomplete="potencia_sinal">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Primeira CEO</label>
                        <input id="primeira_ceo" type="text" value="{{ $pd->primeira_ceo }}" placeholder="Primeira CEO" class="form-control" name="primeira_ceo" required autocomplete="primeira_ceo">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Última CEO</label>
                        <input id="ultima_ceo" type="text" value="{{ $pd->ultima_ceo }}" placeholder="Última CEO" class="form-control" name="ultima_ceo" required autocomplete="ultima_ceo">
                    </div>

                    <div class="col-md-12 mb-3">
                        <label class="form-label">Tipo de cordão</label>
                        <input id="tipo_cordao" type="text" value="{{ $pd->tipo_cordao }}" placeholder="Tipo de cordão" class="form-control" name="tipo_cordao" required autocomplete="tipo_cordao">
                    </div>

                    <div class="col-md-12 mb-3">
                        <label class="form-label">Observação</label>
                        <input id="observacao" type="text" value="{{ $pd->observacao }}" placeholder="Observação" class="form-control" name="observacao" required autocomplete="obervacao">
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
<!-- Fim modal edição de cadastro -->