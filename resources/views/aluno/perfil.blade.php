<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Perfil - SpaceSeat</title>

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
            border-radius: 12px;
            margin-bottom: 24px;
        }

        .profile-section {
            padding: 32px;
            border-radius: 12px;
            background-color: var(--card-color);
        }

        .profile-avatar {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background-color: rgba(108, 71, 255, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 24px;
        }

        .profile-avatar i {
            font-size: 32px;
            color: var(--accent-color);
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

        .text-accent {
            color: var(--accent-color);
        }

        .btn-edit {
            color: var(--accent-color);
            background-color: rgba(108, 71, 255, 0.1);
            border: none;
            padding: 8px 16px;
            border-radius: 6px;
            font-size: 14px;
            font-weight: 500;
            text-decoration: none;
            transition: all 0.2s;
        }

        .btn-edit:hover {
            background-color: rgba(108, 71, 255, 0.2);
            color: var(--accent-color);
        }

        .progress {
            height: 4px;
            background-color: rgba(255, 255, 255, 0.06);
            border-radius: 2px;
        }

        .progress-bar {
            background-color: var(--accent-color);
        }

        .stat-item {
            padding: 16px;
            border-radius: 8px;
            background-color: rgba(255, 255, 255, 0.02);
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

            header .dropdown {
                display: none;
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
    </div>

    <div class="container-fluid px-0 mobile-push">
        <div class="min-vh-100 d-flex">
            <!-- Barra lateral -->
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
                    <a href="/aluno/catalogo" class="nav-link mb-1">
                        <i class="bi bi-journal me-2"></i>
                        Catálogo
                    </a>
                </nav>
            </aside>

            <!-- Conteúdo principal -->
            <main class="flex-grow-1 py-4 px-4">
                <div class="mx-auto" style="max-width: 800px;">
                    <!-- Cabeçalho -->
                    <header class="d-flex justify-content-between align-items-center mb-4">
                        <h1 class="fs-4 fw-bold m-0">Meu Perfil</h1>
                        <a href="{{ route('profile.edit') }}" class="btn-edit">
                            <i class="bi bi-pencil me-2"></i>Editar Perfil
                        </a>
                    </header>

                    <!-- Seção Principal -->
                    <div class="profile-section mb-4">
                        <div class="d-flex align-items-center mb-4">
                            <div class="profile-avatar">
                                <i class="bi bi-person"></i>
                            </div>
                            <div class="ms-3">
                                <h2 class="fs-5 fw-bold mb-1">{{ Auth::user()->name }}</h2>
                                <p class="text-secondary mb-0">{{ Auth::user()->email }}</p>
                            </div>
                        </div>

                        <!-- Progresso -->
                        <div class="row g-4">
                            <div class="col-md-4">
                                <div class="stat-item">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span class="text-secondary">Progresso</span>
                                        <span class="text-accent">40%</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 40%"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="stat-item">
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-clock text-accent me-2"></i>
                                        <span class="text-secondary">12h estudadas</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="stat-item">
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-trophy text-accent me-2"></i>
                                        <span class="text-secondary">2 certificados</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Cursos em Andamento -->
                    <div class="profile-section">
                        <h3 class="fs-5 fw-bold mb-4">Cursos em Andamento</h3>
                        <div class="row g-4">
                            <div class="col-12">
                                <div class="d-flex align-items-center p-3" style="background: rgba(255,255,255,0.02); border-radius: 8px;">
                                    <i class="bi bi-code-slash text-accent me-3" style="font-size: 24px;"></i>
                                    <div class="flex-grow-1">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <h6 class="mb-0">HTML & CSS Básico</h6>
                                            <span class="text-accent">60%</span>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 60%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-flex align-items-center p-3" style="background: rgba(255,255,255,0.02); border-radius: 8px;">
                                    <i class="bi bi-braces text-accent me-3" style="font-size: 24px;"></i>
                                    <div class="flex-grow-1">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <h6 class="mb-0">JavaScript Fundamentos</h6>
                                            <span class="text-accent">30%</span>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 30%"></div>
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