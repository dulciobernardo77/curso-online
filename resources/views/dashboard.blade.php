<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Space Seat</title>

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
            color: var(--text-color);
            font-family: system-ui, -apple-system, sans-serif;
            line-height: 1.5;
            font-size: 15px;
        }

        .card {
            background-color: var(--card-color);
            border: none;
            border-radius: 6px;
        }

        .text-accent {
            color: var(--accent-color);
        }

        .btn-accent {
            background-color: var(--accent-color);
            color: white;
            border: none;
            border-radius: 4px;
            padding: 6px 12px;
            font-size: 14px;
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

        .progress {
            height: 4px;
            background-color: rgba(255, 255, 255, 0.06);
            border-radius: 2px;
            overflow: hidden;
        }

        .progress-bar {
            background-color: var(--accent-color);
        }

        .course-item {
            transition: all 0.2s;
        }

        .course-item:hover {
            transform: translateY(-1px);
        }

        .fs-small {
            font-size: 13px;
        }

        .separator {
            height: 1px;
            background-color: rgba(255, 255, 255, 0.05);
            margin: 20px 0;
        }

        .text-secondary {
            color: #a8b0cf !important;
        }

        .fw-medium {
            font-weight: 500;
            color: #ffffff;
        }
    </style>
</head>

<body>
    <div class="container-fluid px-0">
        <div class="min-vh-100 d-flex">
            <!-- Barra lateral ultrassimplificada -->
            <div class="py-4 px-3" style="width: 180px;">
                <div class="mb-5">
                    <h3 class="fw-bold mb-0">SpaceSeat</h3>
                </div>

                <nav>
                    <a href="/dashboard" class="nav-link active mb-1">
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
                        <h1 class="fs-5 fw-medium m-0">{{ Auth::user()->name }}</h1>
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

                    <!-- Progresso ultra simplificado -->
                    <div class="mb-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <p class="m-0 text-secondary fs-small">PROGRESSO DA TRILHA</p>
                            <p class="m-0 fs-small">40%</p>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" style="width: 40%"></div>
                        </div>
                    </div>

                    <!-- Curso atual -->
                    <div class="mb-5">
                        <p class="text-secondary fs-small mb-3">CONTINUE APRENDENDO</p>

                        <div class="card p-4 course-item">
                            <div class="d-flex align-items-center">
                                <div class="me-3 d-flex align-items-center justify-content-center rounded-circle"
                                    style="width: 36px; height: 36px; background-color: rgba(108, 71, 255, 0.1);">
                                    <i class="bi bi-play-fill text-accent"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="fw-medium mb-1">React JS: Componentes e Estado</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="fs-small text-secondary">65% concluído</div>
                                        <a href="#" class="btn-accent text-decoration-none">Continuar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="separator"></div>

                    <!-- Resumo ultrassimplificado -->
                    <div class="row g-4">
                        <div class="col-md-6">
                            <p class="text-secondary fs-small mb-3">SEU PROGRESSO</p>

                            <div class="mb-2">
                                <div class="d-flex justify-content-between">
                                    <span class="text-secondary">Cursos em andamento</span>
                                    <span>3</span>
                                </div>
                            </div>
                            <div class="mb-2">
                                <div class="d-flex justify-content-between">
                                    <span class="text-secondary">Cursos concluídos</span>
                                    <span>12</span>
                                </div>
                            </div>
                            <div>
                                <div class="d-flex justify-content-between">
                                    <span class="text-secondary">Tempo estudado</span>
                                    <span>45h</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <p class="text-secondary fs-small mb-3">PRÓXIMOS CURSOS</p>

                            <div class="mb-3">
                                <div class="d-flex">
                                    <span class="text-secondary me-2">4.</span>
                                    <span>Node.js Básico</span>
                                </div>
                            </div>
                            <div>
                                <div class="d-flex">
                                    <span class="text-secondary me-2">5.</span>
                                    <span>Express.js e APIs</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="separator"></div>

                    <!-- Link minimalista -->
                    <div class="text-center mt-4">
                        <a href="/jornada" class="text-accent text-decoration-none">
                            Ver jornada completa <i class="bi bi-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
