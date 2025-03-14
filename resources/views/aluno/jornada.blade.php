<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Jornada - SpaceSeat</title>

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
            background-color: #20232b;
            margin: 2rem 0;
        }

        .course-list-item {
            padding: 16px;
            border-radius: 6px;
            transition: all 0.2s;
        }

        .course-list-item:hover {
            background-color: rgba(255, 255, 255, 0.02);
        }

        .status-badge {
            font-size: 12px;
            padding: 2px 8px;
            border-radius: 12px;
            background-color: rgba(108, 71, 255, 0.1);
            color: var(--accent-color);
        }

        .status-badge.completed {
            background-color: rgba(52, 199, 89, 0.1);
            color: #34c759;
        }

        .text-secondary {
            color: #a8b0cf !important;
        }

        .fw-medium {
            font-weight: 500;
            color: #ffffff;
        }

        /* Menu Hamburguer para Mobile */
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
            @media (max-width: 768px) {
                header .dropdown {
                    display: none;
                }
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

            .mobile-push {
                margin-top: 0;
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
            <button class="btn btn-subtle dropdown-toggle" type="button" id="mobileProfileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-person"></i>
            </button>
            <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end" aria-labelledby="mobileProfileDropdown">
                <li><a class="dropdown-item" href="{{ route('aluno.perfil') }}">
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

    <div class="container-fluid px-0 mobile-push">
        <div class="min-vh-100 d-flex">
            <!-- Barra lateral ultrassimplificada -->
            <aside class="py-4 px-3" style="width: 180px;" id="sidebar">
                <div class="mb-5">
                    <h3 class="fw-bold mb-0">SpaceSeat</h3>
                </div>

                <nav>
                    <a href="/dashboard" class="nav-link mb-1">
                        <i class="bi bi-house-door me-2"></i>
                        Home
                    </a>
                    <a href="/aluno/jornada" class="nav-link active mb-1">
                        <i class="bi bi-collection me-2"></i>
                        Jornada
                    </a>
                    <a href="/aluno/catalogo" class="nav-link mb-1">
                        <i class="bi bi-journal me-2"></i>
                        Catálogo
                    </a>
                </nav>
            </aside>

            <!-- Conteúdo principal -->
            <main class="flex-grow-1 py-4 px-4">
                <div class="mx-auto" style="max-width: 800px;">
                    <!-- Cabeçalho simplificado -->
                    <header class="mb-5 d-flex justify-content-between align-items-center">
                        <div>
                            <h1 class="fs-5 fw-medium m-0">Trilha de Desenvolvimento Web</h1>
                            <p class="text-secondary fs-small mt-1 mb-0">2 de 5 cursos concluídos</p>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-subtle dropdown-toggle" type="button" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ Auth::user()->name }}
                                <i class="bi bi-person"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end" aria-labelledby="profileDropdown">
                                <li><a class="dropdown-item" href="{{ route('aluno.perfil') }}">
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

                    <!-- Progresso geral -->
                    <div class="mb-5">
                        <div class="progress">
                            <div class="progress-bar" style="width: 40%"></div>
                        </div>
                    </div>

                    <!-- Lista de cursos -->
                    <div class="mb-5">
                        <p class="text-secondary fs-small mb-3">CURSOS DA TRILHA</p>

                        <!-- HTML & CSS -->
                        <div class="course-list-item">
                            <div class="d-flex align-items-center">
                                <div class="me-3 d-flex align-items-center justify-content-center rounded-circle"
                                    style="width: 32px; height: 32px; background-color: rgba(52, 199, 89, 0.1);">
                                    <i class="bi bi-check text-success"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <p class="fw-medium mb-1">1. HTML & CSS Fundamentos</p>
                                            <p class="text-secondary fs-small mb-0">10 horas de conteúdo</p>
                                        </div>
                                        <span class="status-badge completed">Concluído</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- JavaScript -->
                        <div class="course-list-item">
                            <div class="d-flex align-items-center">
                                <div class="me-3 d-flex align-items-center justify-content-center rounded-circle"
                                    style="width: 32px; height: 32px; background-color: rgba(52, 199, 89, 0.1);">
                                    <i class="bi bi-check text-success"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <p class="fw-medium mb-1">2. JavaScript Básico</p>
                                            <p class="text-secondary fs-small mb-0">12 horas de conteúdo</p>
                                        </div>
                                        <span class="status-badge completed">Concluído</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- React -->
                        <div class="course-list-item">
                            <div class="d-flex align-items-center">
                                <div class="me-3 d-flex align-items-center justify-content-center rounded-circle"
                                    style="width: 32px; height: 32px; background-color: rgba(108, 71, 255, 0.1);">
                                    <i class="bi bi-play-fill text-accent"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <p class="fw-medium mb-1">3. React JS: Componentes e Estado</p>
                                            <p class="text-secondary fs-small mb-0">15 horas de conteúdo • 65% concluído</p>
                                        </div>
                                        <a href="#" class="btn-accent text-decoration-none">Continuar</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Node.js -->
                        <div class="course-list-item">
                            <div class="d-flex align-items-center">
                                <div class="me-3 d-flex align-items-center justify-content-center rounded-circle"
                                    style="width: 32px; height: 32px; background-color: rgba(255, 255, 255, 0.05);">
                                    <span class="text-secondary">4</span>
                                </div>
                                <div class="flex-grow-1">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <p class="fw-medium mb-1">4. Node.js Básico</p>
                                            <p class="text-secondary fs-small mb-0">10 horas de conteúdo</p>
                                        </div>
                                        <span class="status-badge">Bloqueado</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Express -->
                        <div class="course-list-item">
                            <div class="d-flex align-items-center">
                                <div class="me-3 d-flex align-items-center justify-content-center rounded-circle"
                                    style="width: 32px; height: 32px; background-color: rgba(255, 255, 255, 0.05);">
                                    <span class="text-secondary">5</span>
                                </div>
                                <div class="flex-grow-1">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <p class="fw-medium mb-1">5. Express.js e APIs</p>
                                            <p class="text-secondary fs-small mb-0">8 horas de conteúdo</p>
                                        </div>
                                        <span class="status-badge">Bloqueado</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="separator"></div>

                    <!-- Certificados -->
                    <div>
                        <p class="text-secondary fs-small mb-3">CERTIFICADOS</p>

                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="course-list-item">
                                    <div class="d-flex align-items-center">
                                        <div class="me-3 d-flex align-items-center justify-content-center rounded-circle"
                                            style="width: 32px; height: 32px; background-color: rgba(52, 199, 89, 0.1);">
                                            <i class="bi bi-patch-check text-success"></i>
                                        </div>
                                        <div>
                                            <p class="fw-medium mb-1">HTML & CSS Fundamentos</p>
                                            <p class="text-secondary fs-small mb-0">Concluído em 05/08/2023</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="course-list-item">
                                    <div class="d-flex align-items-center">
                                        <div class="me-3 d-flex align-items-center justify-content-center rounded-circle"
                                            style="width: 32px; height: 32px; background-color: rgba(52, 199, 89, 0.1);">
                                            <i class="bi bi-patch-check text-success"></i>
                                        </div>
                                        <div>
                                            <p class="fw-medium mb-1">JavaScript Básico</p>
                                            <p class="text-secondary fs-small mb-0">Concluído em 20/09/2023</p>
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

    <!-- Bootstrap JS Bundle with Popper -->
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
