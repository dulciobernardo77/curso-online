<!-- resources/views/auth/login.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Curso Online') }}</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .login-container {
            min-height: 100vh;
            background-color: #fff;
        }

        .brand-section {
            background-color: #000;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
        }

        .brand-section img {
            max-width: 80%;
            height: auto;
        }

        .form-section {
            padding: 2rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .login-title {
            color: #1a73e8;
            font-size: 2rem;
            font-weight: 600;
            margin-bottom: 2rem;
        }

        .form-control {
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 0.75rem;
            margin-bottom: 1rem;
        }

        .btn-login {
            background-color: #1a73e8;
            color: white;
            padding: 0.75rem;
            border: none;
            border-radius: 4px;
            width: 100%;
            margin-top: 1rem;
        }

        .forgot-password {
            color: #1a73e8;
            text-decoration: none;
            font-size: 0.9rem;
            text-align: right;
            display: block;
            margin-bottom: 1rem;
        }

        .separator {
            text-align: center;
            margin: 1.5rem 0;
            color: #666;
        }

        .social-login {
            display: flex;
            justify-content: center;
            gap: 1rem;
            margin-top: 1rem;
        }

        .social-btn {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.5rem 1rem;
            border: 1px solid #ddd;
            border-radius: 4px;
            background: white;
            color: #333;
            text-decoration: none;
        }

        .register-link {
            text-align: center;
            margin-top: 1rem;
            color: #666;
        }

        .register-link a {
            color: #1a73e8;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row login-container">
            <div class="col-md-6 brand-section">
                <img src="{{ asset('images/logo.png') }}" alt="Space Seat Logo">
            </div>


            <div class="col-md-6 form-section">
                <div class="w-100" style="max-width: 500px; margin: 0 auto;">
                    <h1 class="login-title">Entrar</h1>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <input type="email"
                            class="form-control @error('email') is-invalid @enderror"
                            name="email"
                            placeholder="info@example.com"
                            value="{{ old('email') }}"
                            required>
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror

                        <input type="password"
                            class="form-control @error('password') is-invalid @enderror"
                            name="password"
                            placeholder="Palavra-passe"
                            required>
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror

                        <a href="{{ route('password.request') }}" class="forgot-password">
                            Esqueci minha senha
                        </a>

                        <button type="submit" class="btn-login">Entrar</button>

                        <div class="register-link">
                            Não tem uma conta? <a href="{{ route('register') }}">Inscrever-se</a>
                        </div>

                        <div class="separator">- OU -</div>

                        <div class="social-login">
                            <a href="{{ route('google.login') }}" class="social-btn w-50">
                                <img src="https://cdn.cdnlogo.com/logos/g/35/google-icon.svg" width="20" height="20" alt="Google">
                                Entrar com Google
                            </a>
                            <a href="{{ route('github.login') }}" class="social-btn w-50 ">
                                <img src="https://cdn.cdnlogo.com/logos/g/69/github-icon.svg" width="20" height="20" alt="GitHub">
                                Entrar com GitHub
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
