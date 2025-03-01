<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Página de registro para a plataforma de cursos online">
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

        .register-container {
            min-height: 100vh;
            display: flex;
            flex-direction: row;
        }

        .brand-section {
            background-color: #000;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0;
            position: relative;
            overflow: hidden;
            width: 50%;
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
            background: linear-gradient(135deg, rgba(108, 93, 211, 0.1) 0%, rgba(0, 0, 0, 0.8) 100%);
            z-index: 1;
        }

        .form-section {
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 50%;
            background: linear-gradient(to bottom, #f8f9fa, #ffffff);
        }

        .form-container {
            width: 85%;
            max-width: 450px;
            padding: 2rem;
        }

        .register-title {
            color: #6C5DD3;
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
            border-color: #6C5DD3;
            box-shadow: 0 0 0 0.25rem rgba(108, 93, 211, 0.25);
        }

        .btn-register {
            background-color: #6C5DD3;
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

        .btn-register:hover {
            background-color: #5b4eb8;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(108, 93, 211, 0.3);
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
            width: 50%;
        }

        .social-btn:hover {
            background-color: #f8f9fa;
            border-color: #6C5DD3;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }

        .login-link {
            text-align: center;
            margin-top: 2rem;
            color: #666;
        }

        .login-link a {
            color: #6C5DD3;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .login-link a:hover {
            color: #5b4eb8;
            text-decoration: underline;
        }

        .invalid-feedback {
            font-size: 80%;
            color: #dc3545;
            display: block;
            margin-top: 0.25rem;
        }

        /* Mobile Responsiveness */
        @media (max-width: 768px) {
            html, body {
                overflow: auto; /* Permite rolagem em dispositivos móveis */
            }

            .register-container {
                flex-direction: column;
            }

            .brand-section {
                display: none; /* Oculta completamente a seção da logo em dispositivos móveis */
            }

            .form-section {
                width: 100%;
                padding: 30px 0;
                min-height: 100vh;
            }

            .form-container {
                width: 90%;
                padding: 1.5rem;
            }

            .register-title {
                font-size: 1.8rem;
                margin-bottom: 1.5rem;
            }

            .social-login {
                flex-direction: column;
                gap: 0.75rem;
            }

            .social-btn {
                width: 100%;
            }

            .separator {
                margin: 1.5rem 0;
            }
        }

        /* Extra Small Devices */
        @media (max-width: 576px) {
            .form-container {
                padding: 1rem;
            }

            .register-title {
                font-size: 1.5rem;
                margin-bottom: 1rem;
            }

            .form-floating {
                margin-bottom: 1rem;
            }

            .form-floating > .form-control {
                padding: 0.75rem;
                height: calc(3rem + 2px);
            }

            .form-floating > label {
                padding: 0.75rem;
            }

            .btn-register {
                padding: 0.6rem;
            }
        }
    </style>
</head>
<body>
    <div class="register-container">
        <div class="brand-section">
            <div class="logo-container">
                <img src="{{ asset('images/logo.png') }}" alt="Space Seat Logo">
            </div>
        </div>

        <div class="form-section">
            <div class="form-container">
                <h1 class="register-title">Crie sua conta</h1>

                @if ($errors->any())
                    <div class="alert alert-danger mb-4">
                        <i class="fas fa-exclamation-circle me-2"></i>
                        Por favor, corrija os erros abaixo para continuar.
                    </div>
                @endif

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="form-floating">
                        <input type="text"
                            class="form-control @error('name') is-invalid @enderror"
                            id="name"
                            name="name"
                            placeholder="Seu nome"
                            value="{{ old('name') }}"
                            required autofocus>
                        <label for="name">Nome completo</label>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

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

                    <div class="form-floating">
                        <input type="password"
                            class="form-control"
                            id="password_confirmation"
                            name="password_confirmation"
                            placeholder="Confirme sua senha"
                            required>
                        <label for="password_confirmation">Confirme sua senha</label>
                    </div>

                    <button type="submit" class="btn-register">
                        Criar conta <i class="fas fa-user-plus ms-2"></i>
                    </button>

                    <div class="login-link">
                        Já tem uma conta? <a href="{{ route('login') }}">Faça login</a>
                    </div>

                    <div class="separator">ou continue com</div>

                    <div class="social-login">
                        <a href="{{ route('google.login') }}" class="social-btn">
                            <img src="https://cdn.cdnlogo.com/logos/g/35/google-icon.svg" width="20" height="20" alt="Google">
                            Google
                        </a>
                        <a href="{{ route('github.login') }}" class="social-btn">
                            <img src="https://cdn.cdnlogo.com/logos/g/69/github-icon.svg" width="20" height="20" alt="GitHub">
                            GitHub
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
