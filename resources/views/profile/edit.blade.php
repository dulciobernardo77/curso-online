<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Perfil - Space Seat</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">

    <style>
        :root {
            --bg-color: #0f1117;
            --card-color: #171a21;
            --accent-color: #6c47ff;
            --text-color: #ffffff;
            --text-secondary: #a0a0a0;
            --border: 1px solid #20232b;
        }

        body {
            background-color: var(--bg-color);
            color: #ffffff;
            font-family: system-ui, -apple-system, sans-serif;
            line-height: 1.5;
            font-size: 16px;
        }

        .card {
            background-color: var(--card-color);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 8px;
            margin-bottom: 28px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }

        .text-accent {
            color: var(--accent-color);
        }

        .btn-accent {
            background-color: var(--accent-color);
            color: white;
            border: none;
            border-radius: 4px;
            padding: 10px 16px;
            font-size: 15px;
            font-weight: 600;
        }

        .btn-accent:hover {
            background-color: #5a3ad9;
            color: white;
        }

        .btn-subtle {
            background-color: transparent;
            color: var(--text-secondary);
            border: none;
            padding: 6px 10px;
            font-size: 14px;
        }

        .btn-subtle:hover {
            color: var(--text-color);
        }

        .nav-link {
            color: var(--text-secondary);
            padding: 8px 12px;
            margin-bottom: 4px;
            border-radius: 4px;
            transition: all 0.2s;
            font-size: 14px;
        }

        .nav-link:hover {
            color: var(--text-color);
            background-color: rgba(255, 255, 255, 0.03);
        }

        .nav-link.active {
            color: var(--accent-color);
            background-color: rgba(108, 71, 255, 0.1);
            font-weight: 500;
        }

        .nav-link i {
            opacity: 0.7;
        }

        .form-control {
            background-color: rgba(255, 255, 255, 0.07);
            border: var(--border);
            color: var(--text-color);
            padding: 10px 12px;
            font-size: 15px;
            border-radius: 4px;
        }

        .form-control:focus {
            background-color: rgba(255, 255, 255, 0.07);
            box-shadow: none;
            border-color: var(--accent-color);
            color: var(--text-color);
        }

        .form-label {
            color: #ffffff;
            font-size: 16px;
            margin-bottom: 8px;
            font-weight: 600;
            letter-spacing: -0.01em;
        }

        .fs-small {
            font-size: 15px;
            color: #ffffff;
            opacity: 0.9;
        }

        .text-danger {
            color: #ff4d6e !important;
        }

        .alert-success {
            background-color: rgba(52, 199, 89, 0.1);
            border: 1px solid rgba(52, 199, 89, 0.2);
            color: #34c759;
            padding: 10px 12px;
            border-radius: 4px;
            font-size: 14px;
        }

        .btn-danger {
            background-color: rgba(255, 77, 110, 0.1);
            border: 1px solid rgba(255, 77, 110, 0.2);
            color: #ff4d6e;
        }

        .btn-danger:hover {
            background-color: rgba(255, 77, 110, 0.2);
            color: #ff4d6e;
        }

        .text-secondary {
            color: #ffffff !important;
            opacity: 0.85;
        }

        .fw-medium {
            font-weight: 500;
            color: #ffffff;
        }

        h5.fs-6 {
            font-size: 18px !important;
            font-weight: 700 !important;
            color: #ffffff;
            letter-spacing: -0.02em;
        }

        .btn {
            font-weight: 600;
        }
    </style>
</head>

<body>
    <div class="container-fluid px-0">
        <div class="min-vh-100 d-flex">
            <!-- Barra lateral ultrassimplificada -->
            <div class="py-4 px-3" style="width: 180px;">
                <div class="mb-5">
                    <h6 class="fw-bold mb-0">Space Seat</h6>
                </div>

                <nav>
                    <a href="/dashboard" class="nav-link mb-1">
                        <i class="bi bi-house-door me-2"></i>
                        Home
                    </a>
                    <a href="/jornada" class="nav-link mb-1">
                        <i class="bi bi-collection me-2"></i>
                        Jornada
                    </a>
                    <a href="/catalogo" class="nav-link mb-1">
                        <i class="bi bi-journal me-2"></i>
                        Catálogo
                    </a>
                </nav>
            </div>

            <!-- Conteúdo principal -->
            <main class="flex-grow-1 py-4 px-4">
                <div class="mx-auto" style="max-width: 800px;">
                    <!-- Cabeçalho simplificado -->
                    <header class="mb-5 d-flex justify-content-between align-items-center">
                        <h1 class="fs-5 fw-medium m-0">Meu Perfil</h1>
                        <div class="dropdown">
                            <button class="btn btn-subtle dropdown-toggle" type="button" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-person"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end" aria-labelledby="profileDropdown">
                                <li><a class="dropdown-item" href="{{ route('profile.edit') }}">
                                    <i class="bi bi-person-circle me-2"></i>Meu Perfil
                                </a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" class="dropdown-item">
                                            <i class="bi bi-box-arrow-right me-2"></i>Sair
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </header>

                    <!-- Informações do perfil -->
                    <div class="card p-4">
                        <h5 class="fs-6 fw-bold mb-3 text-white">INFORMAÇÕES DO PERFIL</h5>
                        <p class="fs-small mb-4">Atualize as informações de perfil e endereço de e-mail da sua conta.</p>

                        @include('profile.partials.update-profile-information-form')
                    </div>

                    <!-- Atualizar senha -->
                    <div class="card p-4">
                        <h5 class="fs-6 fw-bold mb-3 text-white">ALTERAR SENHA</h5>
                        <p class="fs-small mb-4">Certifique-se de que sua conta esteja usando uma senha longa e aleatória para permanecer segura.</p>

                        @include('profile.partials.update-password-form')
                    </div>

                    <!-- Excluir conta -->
                    <div class="card p-4">
                        <h5 class="fs-6 fw-bold mb-3 text-white">EXCLUIR CONTA</h5>
                        <p class="fs-small mb-4">Depois que sua conta for excluída, todos os seus recursos e dados serão excluídos permanentemente.</p>

                        @include('profile.partials.delete-user-form')
                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
