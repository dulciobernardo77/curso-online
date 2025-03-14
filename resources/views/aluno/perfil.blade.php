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
            border-radius: 8px;
            margin-bottom: 28px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }

        .profile-header {
            background: linear-gradient(to right, var(--accent-color), #8e6aff);
            padding: 40px 0;
            border-radius: 8px;
            margin-bottom: 30px;
        }

        .profile-avatar {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            border: 4px solid rgba(255, 255, 255, 0.2);
            background-color: var(--card-color);
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
        }

        .profile-avatar i {
            font-size: 48px;
            color: var(--text-secondary);
        }

        .progress-circle {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            background: conic-gradient(var(--accent-color) 0%, var(--accent-color) 40%, var(--card-color) 40%);
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto;
        }

        .progress-circle-inner {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background-color: var(--card-color);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .stat-card {
            background-color: rgba(255, 255, 255, 0.05);
            border-radius: 8px;
            padding: 20px;
            text-align: center;
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

        .text-secondary {
            color: var(--text-secondary) !important;
        }

        .fs-small {
            font-size: 14px;
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
                <div class="mx-auto" style="max-width: 1000px;">
                    <!-- Cabeçalho do perfil -->
                    <div class="profile-header text-center">
                        <div class="profile-avatar">
                            <i class="bi bi-person"></i>
                        </div>
                        <h2 class="fw-bold mb-2">{{ Auth::user()->name }}</h2>
                        <p class="text-white-50 mb-0">Aluno</p>
                    </div>

                    <!-- Estatísticas -->
                    <div class="row g-4 mb-5">
                        <div class="col-md-4">
                            <div class="stat-card">
                                <div class="progress-circle mb-3">
                                    <div class="progress-circle-inner">
                                        <h3 class="fw-bold mb-0">40%</h3>
                                        <p class="text-secondary fs-small mb-0">Concluído</p>
                                    </div>
                                </div>
                                <h5 class="mb-1">Progresso Geral</h5>
                                <p class="text-secondary fs-small mb-0">2 de 5 cursos completos</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="stat-card">
                                <i class="bi bi-clock text-accent mb-3" style="font-size: 2rem;"></i>
                                <h5 class="mb-1">Tempo Total</h5>
                                <p class="text-secondary fs-small mb-0">12 horas de estudo</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="stat-card">
                                <i class="bi bi-trophy text-accent mb-3" style="font-size: 2rem;"></i>
                                <h5 class="mb-1">Certificados</h5>
                                <p class="text-secondary fs-small mb-0">2 certificados obtidos</p>
                            </div>
                        </div>
                    </div>

                    <!-- Informações do Perfil -->
                    <div class="card p-4 mb-4">
                        <h5 class="mb-4">Informações Pessoais</h5>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <p class="text-secondary mb-1 fs-small">Nome</p>
                                <p class="mb-0">{{ Auth::user()->name }}</p>
                            </div>
                            <div class="col-md-6">
                                <p class="text-secondary mb-1 fs-small">Email</p>
                                <p class="mb-0">{{ Auth::user()->email }}</p>
                            </div>
                            <div class="col-12">
                                <a href="{{ route('profile.edit') }}" class="text-accent text-decoration-none fs-small">
                                    <i class="bi bi-pencil me-2"></i>Editar Perfil
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Cursos em Andamento -->
                    <div class="card p-4">
                        <h5 class="mb-4">Cursos em Andamento</h5>
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="d-flex align-items-center">
                                    <div class="me-3 d-flex align-items-center justify-content-center rounded-circle"
                                        style="width: 48px; height: 48px; background-color: rgba(108, 71, 255, 0.1);">
                                        <i class="bi bi-code-slash text-accent"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-1">HTML & CSS Básico</h6>
                                        <div class="progress" style="width: 150px; height: 4px;">
                                            <div class="progress-bar" role="progressbar" style="width: 60%"></div>
                                        </div>
                                    </div>
                                    <div class="ms-auto">
                                        <span class="text-accent">60%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex align-items-center">
                                    <div class="me-3 d-flex align-items-center justify-content-center rounded-circle"
                                        style="width: 48px; height: 48px; background-color: rgba(108, 71, 255, 0.1);">
                                        <i class="bi bi-braces text-accent"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-1">JavaScript Fundamentos</h6>
                                        <div class="progress" style="width: 150px; height: 4px;">
                                            <div class="progress-bar" role="progressbar" style="width: 30%"></div>
                                        </div>
                                    </div>
                                    <div class="ms-auto">
                                        <span class="text-accent">30%</span>
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