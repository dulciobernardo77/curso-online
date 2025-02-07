<!-- resources/views/auth/register.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Página de registro para a plataforma de cursos online">
    <title>{{ config('app.name', 'Curso Online') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        :root {
            --primary-color: #1a73e8;
            --border-color: #ddd;
            --text-gray: #666;
            --dark-bg: #03090e;
        }

        .register-container { min-height: 100vh; }

        .brand-section {
            background-color: var(--dark-bg);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
        }

        .brand-logo { max-width: 80%; }

        .auth-section {
            padding: 2rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .auth-container {
            max-width:500px;
            margin: 0 auto;
            width: 100%;
        }

        .page-title {
            color: var(--primary-color);
            font-size: 2rem;
            font-weight: 600;
            margin-bottom: 2rem;
        }

        .form-field {
            border: 1px solid var(--border-color);
            border-radius: 4px;
            padding: 0.75rem;
            margin-bottom: 1rem;
            width: 100% !important;
        }

        .submit-button {
            background-color: var(--primary-color);
            color: white;lor: var(--primary-color);
            padding: 0.75rem;
            border: none;
            border-radius: 4px;
            width: 100%;
            margin-top: 1rem;
        }

        .divider {
            text-align: center;
            margin: 1.5rem 0;
            color: var(--text-gray);
        }

        .social-auth {
            display: flex;
            justify-content: center;
            gap: 1rem;
            margin-top: 1rem;
        }

        .social-button {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.5rem;
            border: 1px solid var(--border-color);
            border-radius: 4px;
            background: white;
            color: #333;
            text-decoration: none;
        }

        .login-info {
            text-align: center;
            margin-top: 1rem;
            color: var(--text-gray);
        }

        .login-link {
            color: var(--primary-color);
            text-decoration: none;
        }
    </style>
</head>
<body>
    <main class="container-fluid">
        <div class="row register-container">
            <aside class="col-md-6 brand-section">
                <img src="{{ asset('images/logo.png') }}" width="100%" alt="Logo da plataforma" class="brand-logo">
            </aside>

            <section class="col-md-6 auth-section">
                <div class="auth-container">
                    <header>
                        <h1 class="page-title">Criar Conta</h1>
                    </header>

                    <form method="POST" action="{{ route('register') }}" class="auth-form">
                        @csrf

                        <div class="form-group">
                            <label for="name" class="visually-hidden">Nome</label>
                            <input type="text"
                                id="name"
                                class="form-field @error('name') is-invalid @enderror"
                                name="name"
                                placeholder="Nome completo"
                                value="{{ old('name') }}"
                                required>
                            @error('name')
                                <div class="invalid-feedback" role="alert">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email" class="visually-hidden">Email</label>
                            <input type="email"
                                id="email"
                                class="form-field @error('email') is-invalid @enderror"
                                name="email"
                                placeholder="seu@email.com"
                                value="{{ old('email') }}"
                                required>
                            @error('email')
                                <div class="invalid-feedback" role="alert">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password" class="visually-hidden">Senha</label>
                            <input type="password"
                                id="password"
                                class="form-field @error('password') is-invalid @enderror"
                                name="password"
                                placeholder="Senha"
                                required>
                            @error('password')
                                <div class="invalid-feedback" role="alert">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password_confirmation" class="visually-hidden">Confirmar Senha</label>
                            <input type="password"
                                id="password_confirmation"
                                class="form-field"
                                name="password_confirmation"
                                placeholder="Confirmar senha"
                                required>
                        </div>

                        <button type="submit" class="submit-button">Criar Conta</button>

                        <div class="login-info">
                            Já tem uma conta? <a href="{{ route('login') }}" class="login-link">Entrar</a>
                        </div>

                        <div class="divider" role="separator">- OU -</div>

                        <nav class="social-auth">
                            <a href="{{ route('google.login') }}" class="social-button" role="button">
                                <img src="https://cdn.cdnlogo.com/logos/g/35/google-icon.svg" width="20" height="20" alt="Ícone do Google">
                                <span>Registrar com Google</span>
                            </a>
                            <a href="{{ route('github.login') }}" class="social-button" role="button">
                                <img src="https://cdn.cdnlogo.com/logos/g/69/github-icon.svg" width="20" height="20" alt="Ícone do GitHub">
                                <span>Registrar com GitHub</span>
                            </a>
                        </nav>
                    </form>
                </div>
            </section>
        </div>
    </main>
</body>
</html>
