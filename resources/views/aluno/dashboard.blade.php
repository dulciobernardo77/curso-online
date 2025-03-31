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

        .progress {
            height: 6px;
            background-color: var(--bg-color);
            border-radius: 3px;
            overflow: hidden;
        }

        .progress-bar {
            background-color: var(--accent-color);
        }

        .coming-soon {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            padding: 2px 8px;
            border-radius: 12px;
            font-size: 12px;
        }

        .welcome-card {
            background: linear-gradient(45deg, #2d2258, #6c47ff);
            border-radius: 6px;
            overflow: hidden;
            position: relative;
        }

        .welcome-card::after {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 200px;
            height: 100%;
            background-image: url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAwIiBoZWlnaHQ9IjIwMCIgdmlld0JveD0iMCAwIDIwMCAyMDAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxjaXJjbGUgY3g9IjE1MCIgY3k9IjUwIiByPSI4MCIgZmlsbD0icmdiYSgyNTUsIDI1NSwgMjU1LCAwLjEpIi8+CjxjaXJjbGUgY3g9IjE4MCIgY3k9IjgwIiByPSI0MCIgZmlsbD0icmdiYSgyNTUsIDI1NSwgMjU1LCAwLjA1KSIvPgo8L3N2Zz4=');
            background-repeat: no-repeat;
            background-position: center;
            pointer-events: none;
        }

        .stats-card {
            display: flex;
            align-items: center;
            background-color: var(--card-color);
            border-radius: 6px;
            padding: 1rem;
        }

        .stats-icon {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            margin-right: 1rem;
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
                    <a href="/dashboard" class="nav-link active mb-1">
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
                    <!-- Cabeçalho simplificado -->
                    <header class="mb-5 d-flex justify-content-between align-items-center">
                        <div>
                            <h1 class="fs-5 fw-medium m-0">Dashboard</h1>
                            <p class="text-secondary fs-small mt-1 mb-0">Bem-vindo de volta</p>
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

                    <!-- Card de boas-vindas -->
                    <div class="welcome-card p-4 mb-5">
                        <div style="max-width: 60%;">
                            <h2 class="fw-bold mb-2">Olá, {{ Auth::user()->name }}!</h2>
                            <p class="mb-3">Continue de onde parou e expanda seus conhecimentos hoje.</p>
                            <a href="/aluno/jornada" class="btn btn-light btn-sm">
                                <i class="bi bi-play-fill me-1"></i>
                                Continuar Aprendendo
                            </a>
                        </div>
                    </div>

                    <!-- Estatísticas rápidas -->
                    <div class="row g-4 mb-5">
                        <div class="col-md-4">
                            <div class="stats-card">
                                <div class="stats-icon" style="background-color: rgba(108, 71, 255, 0.1);">
                                    <i class="bi bi-book text-accent"></i>
                                </div>
                                <div>
                                    <p class="mb-0 text-secondary fs-small">Cursos em andamento</p>
                                    <p class="fw-medium mb-0">{{ $cursosEmAndamento ?? 3 }} cursos</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="stats-card">
                                <div class="stats-icon" style="background-color: rgba(52, 199, 89, 0.1);">
                                    <i class="bi bi-check-circle text-success"></i>
                                </div>
                                <div>
                                    <p class="mb-0 text-secondary fs-small">Cursos concluídos</p>
                                    <p class="fw-medium mb-0">{{ $cursosConcluidos ?? 5 }} cursos</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="stats-card">
                                <div class="stats-icon" style="background-color: rgba(255, 179, 0, 0.1);">
                                    <i class="bi bi-lightning-charge text-warning"></i>
                                    </div>
                                <div>
                                    <p class="mb-0 text-secondary fs-small">Sequência de estudo</p>
                                    <p class="fw-medium mb-0">{{ $streak ?? 7 }} dias</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Continue Aprendendo -->
                    <div class="mb-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <p class="text-secondary fs-small mb-0">CONTINUE APRENDENDO</p>
                            <a href="/aluno/jornada" class="text-accent" style="font-size: 14px; text-decoration: none;">
                                Ver Todos
                                <i class="bi bi-chevron-right"></i>
                            </a>
                        </div>

                    <div class="row g-4">
                            @if(!empty($cursos) && count($cursos) > 0)
                                @foreach($cursos as $curso)
                                <!-- Curso em progresso -->
                                <div class="col-md-6 col-lg-4">
                                    <div class="card course-card p-4">
                                        <div class="d-flex align-items-center mb-3">
                                            <div class="me-3 d-flex align-items-center justify-content-center rounded-circle" style="width: 40px; height: 40px; background-color: rgba(108, 71, 255, 0.1);">
                                                <i class="bi bi-{{ $curso->icon ?? 'code-slash' }} text-accent"></i>
                                            </div>
                                            <div>
                                                <p class="fw-medium mb-0">{{ $curso->title }}</p>
                                                <p class="text-secondary fs-small mb-0">Módulo {{ $curso->current_module }} de {{ $curso->total_modules }}</p>
                                            </div>
                                        </div>
                                        <p class="text-secondary fs-small mb-2">Progresso: {{ $curso->progress }}%</p>
                                        <div class="progress mb-3">
                                            <div class="progress-bar" role="progressbar" style="width: {{ $curso->progress }}%"></div>
                                        </div>
                                        <a href="{{ route('aluno.curso', $curso->id) }}" class="btn-accent text-decoration-none text-center">
                                            <i class="bi bi-play-fill me-2"></i>
                                            Continuar
                                        </a>
                                    </div>
                                </div>
                                @endforeach
                            @else
                                <!-- Curso em progresso 1 (Fallback) -->
                                <div class="col-md-6 col-lg-4">
                                    <div class="card course-card p-4">
                                        <div class="d-flex align-items-center mb-3">
                                            <div class="me-3 d-flex align-items-center justify-content-center rounded-circle" style="width: 40px; height: 40px; background-color: rgba(108, 71, 255, 0.1);">
                                                <i class="bi bi-code-slash text-accent"></i>
                                            </div>
                                            <div>
                                                <p class="fw-medium mb-0">Desenvolvimento Web</p>
                                                <p class="text-secondary fs-small mb-0">Módulo 3 de 5</p>
                                            </div>
                                        </div>
                                        <p class="text-secondary fs-small mb-2">Progresso: 68%</p>
                                        <div class="progress mb-3">
                                            <div class="progress-bar" role="progressbar" style="width: 68%"></div>
                                        </div>
                                        <a href="#" class="btn-accent text-decoration-none text-center">
                                            <i class="bi bi-play-fill me-2"></i>
                                            Continuar
                                        </a>
                                    </div>
                                </div>

                                <!-- Curso em progresso 2 (Fallback) -->
                                <div class="col-md-6 col-lg-4">
                                    <div class="card course-card p-4">
                                        <div class="d-flex align-items-center mb-3">
                                            <div class="me-3 d-flex align-items-center justify-content-center rounded-circle" style="width: 40px; height: 40px; background-color: rgba(255, 71, 148, 0.1);">
                                                <i class="bi bi-palette text-danger"></i>
                                            </div>
                                            <div>
                                                <p class="fw-medium mb-0">Design UI/UX</p>
                                                <p class="text-secondary fs-small mb-0">Módulo 2 de 6</p>
                                            </div>
                                        </div>
                                        <p class="text-secondary fs-small mb-2">Progresso: 35%</p>
                                        <div class="progress mb-3">
                                            <div class="progress-bar" role="progressbar" style="width: 35%"></div>
                                        </div>
                                        <a href="#" class="btn-accent text-decoration-none text-center">
                                            <i class="bi bi-play-fill me-2"></i>
                                            Continuar
                                        </a>
                                    </div>
                                </div>

                                <!-- Curso em progresso 3 (Fallback) -->
                                <div class="col-md-6 col-lg-4">
                                    <div class="card course-card p-4">
                                        <div class="d-flex align-items-center mb-3">
                                            <div class="me-3 d-flex align-items-center justify-content-center rounded-circle" style="width: 40px; height: 40px; background-color: rgba(52, 199, 89, 0.1);">
                                                <i class="bi bi-megaphone text-success"></i>
                                </div>
                                <div>
                                                <p class="fw-medium mb-0">Marketing Digital</p>
                                                <p class="text-secondary fs-small mb-0">Módulo 1 de 8</p>
                                            </div>
                                        </div>
                                        <p class="text-secondary fs-small mb-2">Progresso: 12%</p>
                                        <div class="progress mb-3">
                                            <div class="progress-bar" role="progressbar" style="width: 12%"></div>
                                        </div>
                                        <a href="#" class="btn-accent text-decoration-none text-center">
                                            <i class="bi bi-play-fill me-2"></i>
                                            Continuar
                                        </a>
                                    </div>
                                </div>
                            @endif
                                </div>
                            </div>

                    <div class="separator"></div>

                    <!-- Eventos e aulas ao vivo próximas -->
                    <div class="mb-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <p class="text-secondary fs-small mb-0">PRÓXIMOS EVENTOS</p>
                            <a href="/aluno/calendario" class="text-accent" style="font-size: 14px; text-decoration: none;">
                                Ver Calendário
                                <i class="bi bi-chevron-right"></i>
                            </a>
                        </div>

                        <div class="row g-4">
                            @if(!empty($eventos) && count($eventos) > 0)
                                @foreach($eventos as $evento)
                                <!-- Evento -->
                        <div class="col-md-6">
                                    <div class="card course-card p-4">
                                        <div class="d-flex justify-content-between align-items-start mb-3">
                                            <div class="d-flex align-items-center">
                                                <div class="me-3 d-flex align-items-center justify-content-center rounded-circle" style="width: 40px; height: 40px; background-color: rgba(108, 71, 255, 0.1);">
                                                    <i class="bi bi-{{ $evento->icon ?? 'calendar-event' }} text-accent"></i>
                                                </div>
                                                <div>
                                                    <p class="fw-medium mb-0">{{ $evento->title }}</p>
                                                    <p class="text-secondary fs-small mb-0">{{ $evento->date }}</p>
                                                </div>
                                            </div>
                                            @if($evento->live ?? false)
                                            <span class="badge bg-danger">Ao Vivo</span>
                                            @endif
                                        </div>
                                        <p class="text-secondary fs-small mb-3">{{ $evento->description }}</p>
                                        <a href="{{ $evento->url ?? '#' }}" class="btn-accent text-decoration-none text-center">
                                            <i class="bi bi-calendar-check me-2"></i>
                                            Participar
                                        </a>
                                    </div>
                                </div>
                                @endforeach
                            @else
                                <!-- Evento 1 (Fallback) -->
                                <div class="col-md-6">
                                    <div class="card course-card p-4">
                                        <div class="d-flex justify-content-between align-items-start mb-3">
                                            <div class="d-flex align-items-center">
                                                <div class="me-3 d-flex align-items-center justify-content-center rounded-circle" style="width: 40px; height: 40px; background-color: rgba(108, 71, 255, 0.1);">
                                                    <i class="bi bi-camera-video text-accent"></i>
                                </div>
                                <div>
                                                    <p class="fw-medium mb-0">Workshop: Introdução ao React</p>
                                                    <p class="text-secondary fs-small mb-0">Amanhã, 19:00</p>
                                                </div>
                                            </div>
                                            <span class="badge bg-danger">Ao Vivo</span>
                                        </div>
                                        <p class="text-secondary fs-small mb-3">Aprenda os fundamentos do React e construa sua primeira aplicação com o instrutor João Silva.</p>
                                        <a href="#" class="btn-accent text-decoration-none text-center">
                                            <i class="bi bi-calendar-check me-2"></i>
                                            Participar
                                        </a>
                                    </div>
                                </div>

                                <!-- Evento 2 (Fallback) -->
                                <div class="col-md-6">
                                    <div class="card course-card p-4">
                                        <div class="d-flex justify-content-between align-items-start mb-3">
                                            <div class="d-flex align-items-center">
                                                <div class="me-3 d-flex align-items-center justify-content-center rounded-circle" style="width: 40px; height: 40px; background-color: rgba(255, 179, 0, 0.1);">
                                                    <i class="bi bi-people text-warning"></i>
                                                </div>
                                                <div>
                                                    <p class="fw-medium mb-0">Desafio de Código: Backend</p>
                                                    <p class="text-secondary fs-small mb-0">Sexta-feira, 20:00</p>
                            </div>
                        </div>
                    </div>
                                        <p class="text-secondary fs-small mb-3">Participe do nosso desafio semanal e resolva problemas práticos de desenvolvimento backend.</p>
                                        <a href="#" class="btn-accent text-decoration-none text-center">
                                            <i class="bi bi-calendar-check me-2"></i>
                                            Participar
                                        </a>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- Bootstrap JS Bundle com Popper -->
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