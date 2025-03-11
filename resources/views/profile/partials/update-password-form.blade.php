<section>
    <header>
        <h2 class="text-lg font-medium text-white">
            {{ __('Atualizar senha') }}
        </h2>

        <p class="mt-1 text-sm text-white">
            {{ __('Certifique-se de que sua conta esteja usando uma senha longa e aleatória para permanecer segura.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-3">
        @csrf
        @method('put')

        <!-- Senha atual -->
        <div class="mb-4">
            <label for="current_password" class="form-label">Senha atual</label>
            <input id="current_password" name="current_password" type="password"
                   class="form-control @error('current_password') is-invalid @enderror"
                   autocomplete="current-password">
            @error('current_password')
                <div class="invalid-feedback" style="color: #ff6b6b; font-weight: 500;">{{ $message }}</div>
            @enderror
        </div>

        <!-- Nova senha -->
        <div class="mb-4">
            <label for="password" class="form-label">Nova senha</label>
            <input id="password" name="password" type="password"
                   class="form-control @error('password') is-invalid @enderror"
                   autocomplete="new-password">
            @error('password')
                <div class="invalid-feedback" style="color: #ff6b6b; font-weight: 500;">{{ $message }}</div>
            @enderror
        </div>

        <!-- Confirmar senha -->
        <div class="mb-4">
            <label for="password_confirmation" class="form-label">Confirmar senha</label>
            <input id="password_confirmation" name="password_confirmation" type="password"
                   class="form-control @error('password_confirmation') is-invalid @enderror"
                   autocomplete="new-password">
            @error('password_confirmation')
                <div class="invalid-feedback" style="color: #ff6b6b; font-weight: 500;">{{ $message }}</div>
            @enderror
        </div>

        <div class="mt-4">
            <button type="submit" class="btn btn-accent py-2 px-4">Salvar</button>

            @if (session('status') === 'password-updated')
                <span class="text-success fs-small ms-3">Salvo.</span>
            @endif
        </div>
    </form>
</section>
