<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - SpaceSeat</title>

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
                <li><a class="dropdown-item" href="#">
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
                    <a href="{{ route('instrutor.dashboard') }}" class="nav-link active mb-1">
                        <i class="bi bi-house-door me-2"></i>
                        Dashboard
                    </a>
                    <a href="{{ route('instrutor.cursos.index') }}" class="nav-link mb-1">
                        <i class="bi bi-collection me-2"></i>
                        Meus Cursos
                    </a>
                    <a href="#" class="nav-link mb-1">
                        <i class="bi bi-people me-2"></i>
                        Alunos
                    </a>
                </nav>
            </aside>

            <!-- Conteúdo principal -->
            <main class="flex-grow-1 py-4 px-4">
                <div class="mx-auto" style="max-width: 800px;">
                    <!-- Cabeçalho -->
                    <header class="mb-5 d-flex justify-content-between align-items-center">
                        <h1 class="fs-5 fw-medium m-0">Olá {{ Auth::user()->name }}</h1>
                        <div class="dropdown">
                            <button class="btn btn-subtle dropdown-toggle" type="button" id="profileDropdown" data-bs-toggle="dropdown">
                                <i class="bi bi-person"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end">
                                <li><a class="dropdown-item" href="#">
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

                    <!-- Cards de Estatísticas -->
                    <div class="row g-4 mb-5">
                        <div class="col-md-4">
                            <div class="card p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="me-3 d-flex align-items-center justify-content-center rounded-circle"
                                        style="width: 40px; height: 40px; background-color: rgba(108, 71, 255, 0.1);">
                                        <i class="bi bi-collection text-accent"></i>
                                    </div>
                                    <div>
                                        <p class="text-secondary fs-small mb-0">CURSOS</p>
                                        <h3 class="fw-medium mb-0">0</h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="me-3 d-flex align-items-center justify-content-center rounded-circle"
                                        style="width: 40px; height: 40px; background-color: rgba(108, 71, 255, 0.1);">
                                        <i class="bi bi-people text-accent"></i>
                                    </div>
                                    <div>
                                        <p class="text-secondary fs-small mb-0">ALUNOS</p>
                                        <h3 class="fw-medium mb-0">0</h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="me-3 d-flex align-items-center justify-content-center rounded-circle"
                                        style="width: 40px; height: 40px; background-color: rgba(108, 71, 255, 0.1);">
                                        <i class="bi bi-star text-accent"></i>
                                    </div>
                                    <div>
                                        <p class="text-secondary fs-small mb-0">AVALIAÇÕES</p>
                                        <h3 class="fw-medium mb-0">0</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Ações Rápidas -->
                    <div class="card mb-5">
                        <div class="card-body">
                            <h4 class="fs-6 fw-medium mb-4">Ações Rápidas</h4>
                            <div class="d-flex gap-3">
                                <a href="{{ route('instrutor.cursos.create') }}" class="btn btn-accent">
                                    <i class="bi bi-plus-circle me-2"></i>Criar Novo Curso
                                </a>
                                <a href="{{ route('instrutor.cursos.index') }}" class="btn btn-subtle">
                                    <i class="bi bi-list me-2"></i>Gerenciar Cursos
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Atividade Recente -->
                    <div class="card">
                        <div class="card-body">
                            <h4 class="fs-6 fw-medium mb-4">Atividade Recente</h4>
                            <p class="text-secondary text-center py-4 mb-0">
                                <i class="bi bi-info-circle me-2"></i>
                                Nenhuma atividade recente para exibir
                            </p>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Script para o menu mobile -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuToggle = document.getElementById('menuToggle');
            const sidebar = document.getElementById('sidebar');

            menuToggle.addEventListener('click', function() {
                sidebar.classList.toggle('show');
            });

            // Fechar o menu quando clicar fora dele em telas pequenas
            document.addEventListener('click', function(event) {
                const isClickInsideMenu = sidebar.contains(event.target) || menuToggle.contains(event.target);
                if (!isClickInsideMenu && window.innerWidth <= 768 && sidebar.classList.contains('show')) {
                    sidebar.classList.remove('show');
                }
            });
        });
    </script>
</body>
</html> 