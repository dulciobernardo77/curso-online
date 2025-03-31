<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $curso->title }} - SpaceSeat</title>

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

        .btn-accent {
            color: var(--accent-color);
            background-color: rgba(108, 71, 255, 0.1);
            border: none;
            padding: 8px 16px;
            border-radius: 6px;
            font-size: 14px;
            font-weight: 500;
            text-decoration: none;
            transition: all 0.2s;
            display: inline-block;
        }

        .btn-accent:hover {
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

        .stat-card {
            padding: 24px;
            background-color: var(--card-color);
            border-radius: 12px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            margin-bottom: 24px;
        }

        .course-banner {
            height: 240px;
            background-color: var(--card-color);
            background-size: cover;
            background-position: center;
            border-radius: 12px;
            margin-bottom: 24px;
            position: relative;
            overflow: hidden;
        }

        .course-banner::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(to bottom, rgba(15, 17, 23, 0.5), rgba(15, 17, 23, 0.9));
        }
        
        .course-banner-content {
            position: relative;
            z-index: 1;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            padding: 24px;
        }

        .module-card {
            background-color: var(--card-color);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            margin-bottom: 16px;
        }

        .module-header {
            padding: 16px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
            cursor: pointer;
        }

        .module-content {
            padding: 0;
        }

        .lesson-item {
            padding: 12px 16px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.03);
            transition: all 0.2s;
        }

        .lesson-item:last-child {
            border-bottom: none;
        }

        .lesson-item:hover {
            background-color: rgba(255, 255, 255, 0.03);
        }

        .lesson-item.completed {
            background-color: rgba(52, 199, 89, 0.05);
        }

        .lesson-item.current {
            background-color: rgba(108, 71, 255, 0.05);
        }

        .lesson-icon {
            width: 24px;
            height: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 12px;
            color: var(--text-secondary);
        }

        .lesson-item.completed .lesson-icon {
            color: #34c759;
        }

        .lesson-item.current .lesson-icon {
            color: var(--accent-color);
        }

        .course-info-item {
            margin-bottom: 16px;
        }

        .course-info-item i {
            color: var(--accent-color);
            opacity: 0.8;
            margin-right: 8px;
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
            <!-- Barra lateral -->
            <aside class="py-4 px-3" style="width: 180px;" id="sidebar">
                <div class="mb-5">
                    <h3 class="fw-bold mb-0">SpaceSeat</h3>
                </div>

                <nav>
                    <a href="{{ route('aluno.dashboard') }}" class="nav-link mb-1">
                        <i class="bi bi-house-door me-2"></i>
                        Home
                    </a>
                    <a href="{{ route('aluno.jornada') }}" class="nav-link mb-1">
                        <i class="bi bi-collection me-2"></i>
                        Jornada
                    </a>
                    <a href="{{ route('aluno.catalogo') }}" class="nav-link mb-1">
                        <i class="bi bi-journal me-2"></i>
                        Catálogo
                    </a>
                    <a href="{{ route('aluno.progresso') }}" class="nav-link mb-1">
                        <i class="bi bi-bar-chart me-2"></i>
                        Progresso
                    </a>
                    <a href="{{ route('aluno.certificados') }}" class="nav-link mb-1">
                        <i class="bi bi-award me-2"></i>
                        Certificados
                    </a>
                    <a href="{{ route('aluno.notificacoes') }}" class="nav-link mb-1">
                        <i class="bi bi-bell me-2"></i>
                        Notificações
                    </a>
                    <a href="{{ route('aluno.perfil') }}" class="nav-link mb-1">
                        <i class="bi bi-person me-2"></i>
                        Perfil
                    </a>
                </nav>
            </aside>

            <!-- Conteúdo principal -->
            <main class="flex-grow-1 py-4 px-4">
                <div class="mx-auto" style="max-width: 1000px;">
                    <!-- Cabeçalho do curso -->
                    <div class="mb-4">
                        <a href="{{ route('aluno.dashboard') }}" class="text-secondary" style="text-decoration: none;">
                            <i class="bi bi-arrow-left me-2"></i> Voltar para Dashboard
                        </a>
                    </div>

                    <!-- Banner do curso -->
                    <div class="course-banner" style="background-image: url('{{ $curso->image ?? asset('images/curso-default.jpg') }}')">
                        <div class="course-banner-content">
                            <div class="d-flex align-items-center mb-2">
                                @if($curso->level)
                                <span class="badge bg-dark me-2">{{ $curso->getLevelTextAttribute() }}</span>
                                @endif
                                <span class="badge bg-dark">{{ $curso->duration_hours }} horas</span>
                            </div>
                            <h1 class="fw-bold mb-2">{{ $curso->title }}</h1>
                            <p class="fs-6 mb-4 text-light">{{ $curso->description }}</p>
                            
                            <div class="d-flex align-items-center">
                                <div class="me-4">
                                    <p class="text-secondary fs-small mb-1">Seu progresso</p>
                                    <div class="progress" style="width: 200px;">
                                        <div class="progress-bar" role="progressbar" style="width: {{ $progresso }}%"></div>
                                    </div>
                                </div>
                                <a href="{{ route('aluno.aula', ['aula' => 1]) }}" class="btn-accent">
                                    <i class="bi bi-play-fill me-2"></i>
                                    Continuar estudando
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="row g-4">
                        <!-- Módulos e aulas -->
                        <div class="col-lg-8">
                            <h4 class="fw-medium mb-4">Conteúdo do curso</h4>
                            
                            @foreach($curso->modules as $modulo)
                            <div class="module-card">
                                <div class="module-header d-flex justify-content-between align-items-center">
                                    <div>
                                        <h5 class="fw-medium mb-0">{{ $modulo->title }}</h5>
                                        <p class="text-secondary fs-small mb-0">{{ $modulo->lessons->count() }} aulas • {{ $modulo->lessons->sum('duration_minutes') }} minutos</p>
                                    </div>
                                    <i class="bi bi-chevron-down text-secondary"></i>
                                </div>
                                
                                <div class="module-content">
                                    @foreach($modulo->lessons as $aula)
                                    <a href="{{ route('aluno.aula', ['aula' => $aula->id]) }}" class="text-decoration-none text-light">
                                        <div class="lesson-item d-flex align-items-center
                                            @if($moduloAtual > $modulo->order || ($moduloAtual == $modulo->order && $aulaAtual > $aula->order)) completed @endif
                                            @if($moduloAtual == $modulo->order && $aulaAtual == $aula->order) current @endif
                                        ">
                                            <div class="lesson-icon">
                                                @if($moduloAtual > $modulo->order || ($moduloAtual == $modulo->order && $aulaAtual > $aula->order))
                                                <i class="bi bi-check-circle-fill"></i>
                                                @elseif($moduloAtual == $modulo->order && $aulaAtual == $aula->order)
                                                <i class="bi bi-play-circle-fill"></i>
                                                @else
                                                <i class="bi bi-lock"></i>
                                                @endif
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="mb-0 fw-medium">{{ $aula->title }}</p>
                                                <p class="text-secondary fs-small mb-0">{{ $aula->duration_minutes }} minutos</p>
                                            </div>
                                        </div>
                                    </a>
                                    @endforeach
                                </div>
                            </div>
                            @endforeach
                            
                            <!-- Exemplo de módulo de avaliação final -->
                            <div class="module-card">
                                <div class="module-header d-flex justify-content-between align-items-center">
                                    <div>
                                        <h5 class="fw-medium mb-0">Avaliação Final</h5>
                                        <p class="text-secondary fs-small mb-0">1 avaliação • 30 minutos</p>
                                    </div>
                                    <i class="bi bi-chevron-down text-secondary"></i>
                                </div>
                                
                                <div class="module-content">
                                    <div class="lesson-item d-flex align-items-center">
                                        <div class="lesson-icon">
                                            <i class="bi bi-lock"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0 fw-medium">Prova Final</p>
                                            <p class="text-secondary fs-small mb-0">30 minutos • 25 questões</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Informações do curso -->
                        <div class="col-lg-4">
                            <div class="stat-card">
                                <h4 class="fw-medium mb-4">Sobre este curso</h4>
                                
                                <div class="course-info-item">
                                    <i class="bi bi-person-fill"></i>
                                    <span>Instrutor: {{ $curso->instructor->name ?? 'Não definido' }}</span>
                                </div>
                                
                                <div class="course-info-item">
                                    <i class="bi bi-calendar-fill"></i>
                                    <span>Atualizado em {{ $curso->updated_at->format('d/m/Y') }}</span>
                                </div>
                                
                                <div class="course-info-item">
                                    <i class="bi bi-translate"></i>
                                    <span>Idioma: Português</span>
                                </div>
                                
                                <div class="course-info-item">
                                    <i class="bi bi-award-fill"></i>
                                    <span>Certificado ao concluir</span>
                                </div>
                                
                                <h5 class="fw-medium mb-2 mt-4">Requisitos</h5>
                                <p class="text-secondary mb-4">{{ $curso->requirements ?? 'Nenhum conhecimento prévio necessário.' }}</p>
                                
                                <h5 class="fw-medium mb-2">Objetivos de aprendizagem</h5>
                                <p class="text-secondary">{{ $curso->objectives }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.getElementById('menuToggle').addEventListener('click', function() {
            document.getElementById('sidebar').classList.toggle('show');
        });
        
        // Expandir/colapsar módulos
        document.querySelectorAll('.module-header').forEach(function(header) {
            header.addEventListener('click', function() {
                const content = this.nextElementSibling;
                const icon = this.querySelector('.bi-chevron-down');
                
                if (content.style.display === 'none' || !content.style.display) {
                    content.style.display = 'block';
                    icon.style.transform = 'rotate(180deg)';
                } else {
                    content.style.display = 'none';
                    icon.style.transform = 'rotate(0deg)';
                }
            });
        });
    </script>
</body>
</html> 