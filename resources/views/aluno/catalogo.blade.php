<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo - SpaceSeat</title>

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
            font-size: 13px;
        }

        .separator {
            height: 1px;
            background-color: #20232b;
            margin: 2rem 0;
        }

        .course-card {
            transition: all 0.2s;
            height: 100%;
        }

        .course-card:hover {
            transform: translateY(-2px);
        }

        .tag {
            font-size: 12px;
            padding: 2px 8px;
            border-radius: 12px;
            background-color: rgba(255, 255, 255, 0.05);
            color: var(--text-secondary);
            display: inline-block;
            margin-right: 4px;
        }

        .search-input {
            background-color: var(--card-color);
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: var(--text-color);
            padding: 8px 12px;
            font-size: 14px;
            border-radius: 4px;
            width: 100%;
        }

        .search-input:focus {
            outline: none;
            border-color: var(--accent-color);
            background-color: var(--card-color);
            color: var(--text-color);
        }

        .search-input::placeholder {
            color: var(--text-secondary);
        }

        .filter-btn {
            background-color: transparent;
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: var(--text-secondary);
            padding: 8px 12px;
            font-size: 14px;
            border-radius: 4px;
            transition: all 0.2s;
        }

        .filter-btn:hover {
            border-color: var(--accent-color);
            color: var(--text-color);
        }

        .filter-btn.active {
            background-color: var(--accent-color);
            border-color: var(--accent-color);
            color: white;
        }

        .fw-medium {
            font-weight: 500;
            color: #ffffff;
        }

        .text-secondary {
            color: #a8b0cf !important;
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

            .course-filters {
                flex-wrap: wrap;
            }

            .course-filters .btn {
                margin-bottom: 0.5rem;
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
                    <a href="/aluno/jornada" class="nav-link mb-1">
                        <i class="bi bi-collection me-2"></i>
                        Jornada
                    </a>
                    <a href="/aluno/catalogo" class="nav-link active mb-1">
                        <i class="bi bi-journal me-2"></i>
                        Catálogo
                    </a>
                </nav>
            </aside>

            <!-- Conteúdo principal -->
            <main class="flex-grow-1 py-4 px-4">
                <div class="mx-auto" style="max-width: 1000px;">
                    <!-- Cabeçalho simplificado -->
                    <header class="mb-5 d-flex justify-content-between align-items-center">
                        <div>
                            <h1 class="fs-5 fw-medium m-0">Catálogo de Cursos</h1>
                            <p class="text-secondary fs-small mt-1 mb-0">Explore nossa biblioteca de cursos</p>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-subtle dropdown-toggle" type="button" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ Auth::user()->name }}
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

                    <!-- Barra de pesquisa e filtros -->
                    <div class="mb-5">
                        <div class="row g-3">
                            <div class="col-md-8">
                                <div class="position-relative">
                                    <i class="bi bi-search position-absolute"
                                    style="left: 12px; top: 50%; transform: translateY(-50%); color: var(--text-secondary)"></i>
                                    <input type="text" class="search-input ps-4" placeholder="Buscar cursos...">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="d-flex gap-2">
                                    <button class="filter-btn flex-grow-1 active">Todos</button>
                                    <button class="filter-btn flex-grow-1">Tecnologia</button>
                                    <button class="filter-btn flex-grow-1">Design</button>
                                    <button class="filter-btn flex-grow-1">Negócios</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Trilhas de Aprendizado -->
                    <div class="mb-5">
                        <p class="text-secondary fs-small mb-3">TRILHAS DE APRENDIZADO</p>

                        <div class="row g-4">
                            <!-- Trilha Desenvolvimento Web -->
                            <div class="col-md-6 col-lg-4">
                                <div class="card course-card p-4">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="me-3 d-flex align-items-center justify-content-center rounded-circle"
                                            style="width: 40px; height: 40px; background-color: rgba(108, 71, 255, 0.1);">
                                            <i class="bi bi-code-slash text-accent"></i>
                                        </div>
                                        <div>
                                            <p class="fw-medium mb-0">Desenvolvimento Web</p>
                                            <p class="text-secondary fs-small mb-0">5 cursos • 55h</p>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <span class="tag">HTML</span>
                                        <span class="tag">CSS</span>
                                        <span class="tag">JavaScript</span>
                                        <span class="tag">React</span>
                                    </div>
                                    <a href="#" class="btn-accent text-decoration-none text-center">
                                        <i class="bi bi-collection me-2"></i>
                                        Iniciar Trilha
                                    </a>
                                </div>
                            </div>

                            <!-- Trilha Design UI/UX -->
                            <div class="col-md-6 col-lg-4">
                                <div class="card course-card p-4">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="me-3 d-flex align-items-center justify-content-center rounded-circle"
                                            style="width: 40px; height: 40px; background-color: rgba(255, 71, 148, 0.1);">
                                            <i class="bi bi-palette text-danger"></i>
                                        </div>
                                        <div>
                                            <p class="fw-medium mb-0">Design UI/UX</p>
                                            <p class="text-secondary fs-small mb-0">6 cursos • 45h</p>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <span class="tag">Figma</span>
                                        <span class="tag">Design System</span>
                                        <span class="tag">UX</span>
                                    </div>
                                    <a href="#" class="btn-accent text-decoration-none text-center">
                                        <i class="bi bi-collection me-2"></i>
                                        Iniciar Trilha
                                    </a>
                                </div>
                            </div>

                            <!-- Trilha Marketing Digital -->
                            <div class="col-md-6 col-lg-4">
                                <div class="card course-card p-4">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="me-3 d-flex align-items-center justify-content-center rounded-circle"
                                            style="width: 40px; height: 40px; background-color: rgba(52, 199, 89, 0.1);">
                                            <i class="bi bi-megaphone text-success"></i>
                                        </div>
                                        <div>
                                            <p class="fw-medium mb-0">Marketing Digital</p>
                                            <p class="text-secondary fs-small mb-0">8 cursos • 60h</p>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <span class="tag">SEO</span>
                                        <span class="tag">Redes Sociais</span>
                                        <span class="tag">Analytics</span>
                                    </div>
                                    <a href="#" class="btn-accent text-decoration-none text-center">
                                        <i class="bi bi-collection me-2"></i>
                                        Iniciar Trilha
                                    </a>
                                </div>
                            </div>

                            <!-- Trilha Gestão de Projetos -->
                            <div class="col-md-6 col-lg-4">
                                <div class="card course-card p-4">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="me-3 d-flex align-items-center justify-content-center rounded-circle"
                                            style="width: 40px; height: 40px; background-color: rgba(255, 179, 0, 0.1);">
                                            <i class="bi bi-kanban text-warning"></i>
                                        </div>
                                        <div>
                                            <p class="fw-medium mb-0">Gestão de Projetos</p>
                                            <p class="text-secondary fs-small mb-0">5 cursos • 40h</p>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <span class="tag">Scrum</span>
                                        <span class="tag">Kanban</span>
                                        <span class="tag">Agile</span>
                                    </div>
                                    <a href="#" class="btn-accent text-decoration-none text-center">
                                        <i class="bi bi-collection me-2"></i>
                                        Iniciar Trilha
                                    </a>
                                </div>
                            </div>

                            <!-- Trilha Finanças Pessoais -->
                            <div class="col-md-6 col-lg-4">
                                <div class="card course-card p-4">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="me-3 d-flex align-items-center justify-content-center rounded-circle"
                                            style="width: 40px; height: 40px; background-color: rgba(0, 122, 255, 0.1);">
                                            <i class="bi bi-cash-coin text-primary"></i>
                                        </div>
                                        <div>
                                            <p class="fw-medium mb-0">Finanças Pessoais</p>
                                            <p class="text-secondary fs-small mb-0">4 cursos • 30h</p>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <span class="tag">Investimentos</span>
                                        <span class="tag">Planejamento</span>
                                    </div>
                                    <a href="#" class="btn-accent text-decoration-none text-center">
                                        <i class="bi bi-collection me-2"></i>
                                        Iniciar Trilha
                                    </a>
                                </div>
                            </div>

                            <!-- Trilha Produtividade -->
                            <div class="col-md-6 col-lg-4">
                                <div class="card course-card p-4">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="me-3 d-flex align-items-center justify-content-center rounded-circle"
                                            style="width: 40px; height: 40px; background-color: rgba(175, 82, 222, 0.1);">
                                            <i class="bi bi-clock-history text-purple"></i>
                                        </div>
                                        <div>
                                            <p class="fw-medium mb-0">Produtividade</p>
                                            <p class="text-secondary fs-small mb-0">3 cursos • 25h</p>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <span class="tag">Gestão de Tempo</span>
                                        <span class="tag">Foco</span>
                                    </div>
                                    <a href="#" class="btn-accent text-decoration-none text-center">
                                        <i class="bi bi-collection me-2"></i>
                                        Iniciar Trilha
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="separator"></div>

                    <!-- Cursos Individuais -->
                    <div>
                        <p class="text-secondary fs-small mb-3">CURSOS POPULARES</p>

                        <div class="row g-4">
                            <!-- Curso de Fotografia -->
                            <div class="col-md-6 col-lg-4">
                                <div class="card course-card p-4">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="me-3 d-flex align-items-center justify-content-center rounded-circle"
                                            style="width: 40px; height: 40px; background-color: rgba(108, 71, 255, 0.1);">
                                            <i class="bi bi-camera text-accent"></i>
                                        </div>
                                        <div>
                                            <p class="fw-medium mb-0">Fotografia Digital</p>
                                            <p class="text-secondary fs-small mb-0">10h • Iniciante</p>
                                        </div>
                                    </div>
                                    <p class="text-secondary fs-small mb-3">
                                        Aprenda os fundamentos da fotografia digital e edição de imagens.
                                    </p>
                                    <a href="#" class="btn-accent text-decoration-none text-center">
                                        <i class="bi bi-play-fill me-2"></i>
                                        Iniciar Curso
                                    </a>
                                </div>
                            </div>

                            <!-- Curso de Vendas -->
                            <div class="col-md-6 col-lg-4">
                                <div class="card course-card p-4">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="me-3 d-flex align-items-center justify-content-center rounded-circle"
                                            style="width: 40px; height: 40px; background-color: rgba(52, 199, 89, 0.1);">
                                            <i class="bi bi-graph-up-arrow text-success"></i>
                                        </div>
                                        <div>
                                            <p class="fw-medium mb-0">Vendas B2B</p>
                                            <p class="text-secondary fs-small mb-0">8h • Intermediário</p>
                                        </div>
                                    </div>
                                    <p class="text-secondary fs-small mb-3">
                                        Domine as técnicas de vendas para o mercado corporativo.
                                    </p>
                                    <a href="#" class="btn-accent text-decoration-none text-center">
                                        <i class="bi bi-play-fill me-2"></i>
                                        Iniciar Curso
                                    </a>
                                </div>
                            </div>

                            <!-- Curso de Oratória -->
                            <div class="col-md-6 col-lg-4">
                                <div class="card course-card p-4">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="me-3 d-flex align-items-center justify-content-center rounded-circle"
                                            style="width: 40px; height: 40px; background-color: rgba(255, 179, 0, 0.1);">
                                            <i class="bi bi-mic text-warning"></i>
                                        </div>
                                        <div>
                                            <p class="fw-medium mb-0">Oratória e Comunicação</p>
                                            <p class="text-secondary fs-small mb-0">6h • Iniciante</p>
                                        </div>
                                    </div>
                                    <p class="text-secondary fs-small mb-3">
                                        Desenvolva suas habilidades de comunicação e apresentação em público.
                                    </p>
                                    <a href="#" class="btn-accent text-decoration-none text-center">
                                        <i class="bi bi-play-fill me-2"></i>
                                        Iniciar Curso
                                    </a>
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
