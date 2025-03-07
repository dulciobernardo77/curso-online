<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Excluir conta') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Depois que sua conta for excluída, todos os seus recursos e dados serão excluídos permanentemente. Antes de excluir sua conta, baixe todos os dados ou informações que deseja reter.') }}
        </p>
    </header>

    <div class="mt-3">
        <!-- Botão para abrir o modal de confirmação -->
        <button type="button" class="btn btn-danger py-2 px-4" data-bs-toggle="modal" data-bs-target="#confirmUserDeletionModal">
            Excluir Conta
        </button>

        <!-- Modal de confirmação -->
        <div class="modal fade" id="confirmUserDeletionModal" tabindex="-1" aria-labelledby="confirmUserDeletionModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content bg-dark text-light border-0">
                    <div class="modal-header border-0">
                        <h5 class="modal-title fs-6 fw-medium" id="confirmUserDeletionModalLabel">Tem certeza de que deseja excluir sua conta?</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p class="fs-small mb-4" style="color: #ffffff; opacity: 0.95;">
                            Depois que sua conta for excluída, todos os seus recursos e dados serão excluídos permanentemente.
                            Antes de excluir sua conta, por favor, faça o download de quaisquer dados ou informações que deseja manter.
                        </p>

                        <form method="post" action="{{ route('profile.destroy') }}" id="deleteAccountForm">
                            @csrf
                            @method('delete')

                            <div class="mb-4">
                                <label for="password" class="form-label">Senha</label>
                                <input id="password" name="password" type="password"
                                       class="form-control @error('password') is-invalid @enderror"
                                       placeholder="Digite sua senha para confirmar">
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer border-0">
                        <button type="button" class="btn btn-subtle" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-danger py-2 px-4" form="deleteAccountForm">
                            Excluir Conta
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
