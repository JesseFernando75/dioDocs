<!-- Modal edição de cadastro -->
<form id="form" action="{{ route('editausuario', ['id' => $u->id]) }}" method="POST">
@csrf
    <div class="modal" id="edicaousuario{{ $u->id }}">
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
                        <input id="name" type="text" value="{{ $u->name }}" placeholder="Nome" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    </div>

                    <div class="col-md-12 mb-3">
                        <label class="form-label">Tipo de perfil</label>
                        <select name="id_perfil" class="form-control" placeholder="Perfil de usuário" required>
                            @if($u->id_perfil == 1)
                                <option value="1" selected>Administrador</option>
                                <option value="2">Leitor</option>
                                <option value="3">Técnico</option>
                            @elseif($u->id_perfil == 2)
                                <option value="1">Administrador</option>
                                <option value="2" selected>Leitor</option>
                                <option value="3">Técnico</option>
                            @elseif($u->id_perfil == 3)
                                <option value="1">Administrador</option>
                                <option value="2">Leitor</option>
                                <option value="3" selected>Técnico</option>
                            @endif
                        </select>
                    </div>

                    <div class="col-md-12 mb-3">
                        <label class="form-label">E-mail</label>
                        <input id="email" type="email" value="{{ $u->email }}" placeholder="E-mail" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Nova senha</label>
                        <input id="password" type="password" placeholder="Senha" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">

                        @error('senha')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror      
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Confirme sua senha</label>
                        <input id="password-confirm" type="password" placeholder="Confirmação de senha" class="form-control" name="password_confirmation" autocomplete="new-password">

                        @error('senha')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror      
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