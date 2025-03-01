<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Curso Online') }}</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        html, body {
            height: 100%;
            margin: 0;
            overflow: hidden;
            font-family: 'Poppins', sans-serif;
        }

        .login-container {
            min-height: 100vh;
            background-color: #fff;
        }

        .brand-section {
            background-color: #000;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0;
            position: relative;
            overflow: hidden;
            min-height: 100vh;
        }

        .logo-container {
            position: relative;
            z-index: 2;
            text-align: center;
            width: 85%;
        }

        .brand-section img {
            max-width: 80%;
            height: auto;
            filter: drop-shadow(0 0 10px rgba(255, 255, 255, 0.2));
        }

        .brand-section::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(26, 115, 232, 0.1) 0%, rgba(0, 0, 0, 0.8) 100%);
            z-index: 1;
        }

        .form-section {
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background: linear-gradient(to bottom, #f8f9fa, #ffffff);
        }

        .form-container {
            width: 85%;
            max-width: 450px;
        }

        .login-title {
            color: #1a73e8;
            font-size: 2.2rem;
            font-weight: 600;
            margin-bottom: 2rem;
            text-align: center;
        }

        .form-floating {
            margin-bottom: 1.25rem;
        }

        .form-floating > .form-control {
            padding: 1rem 0.75rem;
            height: calc(3.5rem + 2px);
            line-height: 1.25;
        }

        .form-floating > label {
            padding: 1rem 0.75rem;
        }

        .form-control:focus {
            border-color: #1a73e8;
            box-shadow: 0 0 0 0.25rem rgba(26, 115, 232, 0.25);
        }

        .btn-login {
            background-color: #1a73e8;
            color: white;
            padding: 0.75rem;
            border: none;
            border-radius: 8px;
            width: 100%;
            margin-top: 1rem;
            font-weight: 500;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .btn-login:hover {
            background-color: #0d62c7;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(26, 115, 232, 0.3);
        }

        .forgot-password {
            color: #1a73e8;
            text-decoration: none;
            font-size: 0.9rem;
            text-align: right;
            display: block;
            margin-bottom: 1rem;
            transition: color 0.3s ease;
        }

        .forgot-password:hover {
            color: #0d62c7;
            text-decoration: underline;
        }

        .separator {
            display: flex;
            align-items: center;
            text-align: center;
            margin: 2rem 0;
            color: #666;
        }

        .separator::before,
        .separator::after {
            content: '';
            flex: 1;
            border-bottom: 1px solid #ddd;
        }

        .separator::before {
            margin-right: 1rem;
        }

        .separator::after {
            margin-left: 1rem;
        }

        .social-login {
            display: flex;
            justify-content: center;
            gap: 1rem;
            margin-top: 1.5rem;
        }

        .social-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.75rem;
            padding: 0.75rem 1rem;
            border: 1px solid #ddd;
            border-radius: 8px;
            background: white;
            color: #333;
            text-decoration: none;
            transition: all 0.3s ease;
            font-weight: 500;
        }

        .social-btn:hover {
            background-color: #f8f9fa;
            border-color: #1a73e8;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }

        .register-link {
            text-align: center;
            margin-top: 2rem;
            color: #666;
        }

        .register-link a {
            color: #1a73e8;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .register-link a:hover {
            color: #0d62c7;
            text-decoration: underline;
        }

        .input-group-text {
            cursor: pointer;
            background-color: transparent;
            border-left: none;
        }

        .invalid-feedback {
            font-size: 80%;
            color: #dc3545;
            margin-top: -1rem;
            margin-bottom: 1rem;
        }

        @media (max-width: 768px) {
            .brand-section {
                min-height: 30vh;
            }

            .form-section {
                min-height: 70vh;
            }
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row login-container">
            <div class="col-md-6 brand-section">
                <div class="logo-container">
                    <img src="{{ asset('images/logo.png') }}" alt="Space Seat Logo">
                </div>
            </div>

            <div class="col-md-6 form-section">
                <div class="form-container">
                    <h1 class="login-title">Acesse sua conta</h1>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-floating">
                            <input type="email"
                                class="form-control @error('email') is-invalid @enderror"
                                id="email"
                                name="email"
                                placeholder="nome@exemplo.com"
                                value="{{ old('email') }}"
                                required>
                            <label for="email">E-mail</label>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-floating">
                            <input type="password"
                                class="form-control @error('password') is-invalid @enderror"
                                id="password"
                                name="password"
                                placeholder="Senha"
                                required>
                            <label for="password">Senha</label>
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <a href="{{ route('password.request') }}" class="forgot-password">
                            Esqueceu sua senha?
                        </a>

                        <button type="submit" class="btn-login">
                            Entrar <i class="fas fa-arrow-right ms-2"></i>
                        </button>

                        <div class="register-link">
                            Não tem uma conta? <a href="{{ route('register') }}">Cadastre-se agora</a>
                        </div>

                        <div class="separator">ou continue com</div>

                        <div class="social-login">
                            <a href="{{ route('google.login') }}" class="social-btn w-50">
                                <img src="https://cdn.cdnlogo.com/logos/g/35/google-icon.svg" width="20" height="20" alt="Google">
                                Google
                            </a>
                            <a href="{{ route('github.login') }}" class="social-btn w-50">
                                <img src="https://cdn.cdnlogo.com/logos/g/69/github-icon.svg" width="20" height="20" alt="GitHub">
                                GitHub
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
