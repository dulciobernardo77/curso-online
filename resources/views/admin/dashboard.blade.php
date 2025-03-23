<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - SpaceSeat</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

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
            --font-primary: 'Inter', system-ui, sans-serif;
        }

        body {
            background-color: var(--bg-color);
            color: var(--text-color);
            font-family: var(--font-primary);
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

        .stats-card {
            transition: all 0.2s;
        }

        .stats-card:hover {
            transform: translateY(-1px);
        }

        .fs-small {
            font-size: 0.75rem;
        }

        .text-secondary {
            color: #a8b0cf !important;
        }

        .fw-medium {
            font-weight: 500;
            color: #ffffff;
        }

        .menu-toggle {
            display: none;
            background: none;
            border: none;
            color: var(--text-color);
            font-size: 1.5rem;
            cursor: pointer;
            padding: 0.5rem;
            z-index: 1000;
        }

        .mobile-header {
            display: none;
            padding: 1rem;
            background-color: var(--bg-color);
            border-bottom: var(--border);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        @media (max-width: 768px) {
            .mobile-header {
                display: flex;
                align-items: center;
                justify-content: space-between;
            }

            .menu-toggle {
                display: inline-block;
            }

            aside {
                position: fixed;
                left: -250px;
                top: 0;
                height: 100vh;
                z-index: 999;
                background-color: var(--bg-color);
                transition: left 0.3s ease;
                width: 220px !important;
                padding-top: 4rem !important;
            }

            aside.show {
                left: 0;
            }

            main {
                width: 100%;
                margin-left: 0 !important;
            }
        }
    </style>
</head>
<body>
    <!-- Cabeçalho mobile -->
    <div class="mobile-header">
        <button class="menu-toggle" id="menuToggle">
            <i class="bi bi-list"></i>
        </button>
        <h3 class="fw-bold mb-0">SpaceSeat</h3>
        <div class="dropdown">
            <button class="btn btn-subtle dropdown-toggle" type="button" id="mobileProfileDropdown" data-bs-toggle="dropdown">
                <i class="bi bi-person"></i>
            </button>
            <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end">
                <li><a class="dropdown-item" href="/admin/perfil">
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
    </div>

    <div class="container-fluid px-0">
        <div class="min-vh-100 d-flex">
            <!-- Barra lateral -->
            <aside class="py-4 px-3" style="width: 180px;" id="sidebar">
                <div class="mb-5">
                    <h3 class="fw-bold mb-0">SpaceSeat</h3>
                </div>

                <nav>
                    <a href="/admin/dashboard" class="nav-link active mb-1">
                        <i class="bi bi-house-door me-2"></i>
                        Dashboard
                    </a>
                    <a href="/admin/usuarios" class="nav-link mb-1">
                        <i class="bi bi-people me-2"></i>
                        Usuários
                    </a>
                    <a href="/admin/cursos" class="nav-link mb-1">
                        <i class="bi bi-journal-text me-2"></i>
                        Cursos
                    </a>
                    <a href="/admin/categorias" class="nav-link mb-1">
                        <i class="bi bi-grid me-2"></i>
                        Categorias
                    </a>
                    <a href="/admin/financeiro" class="nav-link mb-1">
                        <i class="bi bi-cash-stack me-2"></i>
                        Financeiro
                    </a>
                    <a href="/admin/relatorios" class="nav-link mb-1">
                        <i class="bi bi-bar-chart me-2"></i>
                        Relatórios
                    </a>
                    <a href="/admin/configuracoes" class="nav-link mb-1">
                        <i class="bi bi-gear me-2"></i>
                        Configurações
                    </a>
                </nav>
            </aside>

            <!-- Conteúdo principal -->
            <main class="flex-grow-1 py-4 px-4">
                <div class="mx-auto" style="max-width: 1200px;">
                    <!-- Cabeçalho -->
                    <header class="mb-5 d-flex justify-content-between align-items-center">
                        <h1 class="fs-5 fw-medium m-0">Dashboard Administrativo</h1>
                        <div class="dropdown">
                            <button class="btn btn-subtle dropdown-toggle" type="button" id="profileDropdown" data-bs-toggle="dropdown">
                                <i class="bi bi-person"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end">
                                <li><a class="dropdown-item" href="/admin/perfil">
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

                    <!-- Cards de estatísticas -->
                    <div class="row g-4 mb-4">
                        <div class="col-12 col-sm-6 col-lg-3">
                            <div class="card stats-card h-100">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="flex-shrink-0">
                                            <i class="bi bi-people fs-4 text-accent"></i>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="card-title mb-0 text-secondary">Usuários Ativos</h6>
                                        </div>
                                    </div>
                                    <h3 class="card-text fw-medium">1,234</h3>
                                    <p class="card-text fs-small text-secondary mb-0">
                                        <i class="bi bi-arrow-up-short"></i>
                                        12% este mês
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-lg-3">
                            <div class="card stats-card h-100">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="flex-shrink-0">
                                            <i class="bi bi-journal-text fs-4 text-accent"></i>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="card-title mb-0 text-secondary">Cursos Publicados</h6>
                                        </div>
                                    </div>
                                    <h3 class="card-text fw-medium">48</h3>
                                    <p class="card-text fs-small text-secondary mb-0">
                                        <i class="bi bi-arrow-up-short"></i>
                                        3 novos cursos
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-lg-3">
                            <div class="card stats-card h-100">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="flex-shrink-0">
                                            <i class="bi bi-star fs-4 text-accent"></i>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="card-title mb-0 text-secondary">Avaliação Média</h6>
                                        </div>
                                    </div>
                                    <h3 class="card-text fw-medium">4.8</h3>
                                    <p class="card-text fs-small text-secondary mb-0">
                                        <i class="bi bi-arrow-up-short"></i>
                                        0.2 pontos
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-lg-3">
                            <div class="card stats-card h-100">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="flex-shrink-0">
                                            <i class="bi bi-cash fs-4 text-accent"></i>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="card-title mb-0 text-secondary">Receita Mensal</h6>
                                        </div>
                                    </div>
                                    <h3 class="card-text fw-medium">R$ 45.850</h3>
                                    <p class="card-text fs-small text-secondary mb-0">
                                        <i class="bi bi-arrow-up-short"></i>
                                        15% este mês
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Gráficos e Tabelas -->
                    <div class="row g-4">
                        <div class="col-12 col-lg-8">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title mb-4">Vendas nos Últimos 6 Meses</h5>
                                    <div style="height: 300px; background: var(--card-color);" class="d-flex align-items-center justify-content-center">
                                        <p class="text-secondary">Gráfico de Vendas</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-lg-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title mb-4">Atividades Recentes</h5>
                                    <div class="list-group list-group-flush">
                                        <div class="list-group-item bg-transparent text-white border-bottom border-secondary py-3">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h6 class="mb-1">Novo usuário registrado</h6>
                                                <small class="text-secondary">Agora</small>
                                            </div>
                                            <p class="mb-1 text-secondary">João Silva se registrou na plataforma</p>
                                        </div>
                                        <div class="list-group-item bg-transparent text-white border-bottom border-secondary py-3">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h6 class="mb-1">Curso publicado</h6>
                                                <small class="text-secondary">2h atrás</small>
                                            </div>
                                            <p class="mb-1 text-secondary">Novo curso de Python foi publicado</p>
                                        </div>
                                        <div class="list-group-item bg-transparent text-white py-3">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h6 class="mb-1">Nova avaliação</h6>
                                                <small class="text-secondary">5h atrás</small>
                                            </div>
                                            <p class="mb-1 text-secondary">Curso de JavaScript recebeu 5 estrelas</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
        document.getElementById('menuToggle').addEventListener('click', function() {
            document.getElementById('sidebar').classList.toggle('show');
        });
    </script>
</body>
</html>
