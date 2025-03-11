<section>
    <header>
        <h2 class="text-lg font-medium text-white">
            {{ __('Informações do perfil') }}
        </h2>

        <p class="mt-1 text-sm text-white">
            {{ __("Atualize as informações de perfil e endereço de e-mail da sua conta.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}" class="d-none">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-3">
        @csrf
        @method('patch')

        <div class="mb-4">
            <label for="name" class="form-label">Nome</label>
            <input id="name" name="name" type="text" class="form-control @error('name') is-invalid @enderror"
                   value="{{ old('name', $user->name) }}" required autofocus autocomplete="name">
            @error('name')
                <div class="invalid-feedback" style="color: #ff6b6b; font-weight: 500;">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-4">
            <label for="email" class="form-label">Email</label>
            <input id="email" name="email" type="email" class="form-control @error('email') is-invalid @enderror"
                   value="{{ old('email', $user->email) }}" required autocomplete="username">
            @error('email')
                <div class="invalid-feedback" style="color: #ff6b6b; font-weight: 500;">{{ $message }}</div>
            @enderror

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div class="mt-3">
                    <p class="text-secondary fs-small">
                        Seu endereço de e-mail não foi verificado.

                        <button form="send-verification" class="btn btn-link p-0 m-0 align-baseline text-accent text-decoration-none">
                            Clique aqui para reenviar o e-mail de verificação.
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 text-success fs-small">
                            Um novo link de verificação foi enviado para seu endereço de e-mail.
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="mt-4">
            <button type="submit" class="btn btn-accent py-2 px-4">Salvar</button>

            @if (session('status') === 'profile-updated')
                <span class="text-success fs-small ms-3">Salvo.</span>
            @endif
        </div>
    </form>
</section>
