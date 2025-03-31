<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $curso->title }} - SpaceSeat</title>

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

        .btn-outline-accent {
            background-color: transparent;
            color: var(--accent-color);
            border: 1px solid var(--accent-color);
            border-radius: 4px;
            padding: 6px 12px;
            font-size: 14px;
        }

        .btn-outline-accent:hover {
            background-color: rgba(108, 71, 255, 0.1);
            color: var(--accent-color);
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
        
        .course-banner {
            height: 240px;
            background-size: cover;
            background-position: center;
            position: relative;
            border-radius: 6px;
            margin-bottom: 20px;
        }
        
        .course-banner::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(to bottom, rgba(23, 26, 33, 0.3), rgba(23, 26, 33, 0.9));
            border-radius: 6px;
        }
        
        .course-banner-content {
            position: absolute;
            bottom: 20px;
            left: 20px;
            z-index: 2;
            max-width: 80%;
        }
        
        .badge-status {
            display: inline-block;
            padding: 4px 8px;
            border-radius: 4px;
            font-size: 12px;
            font-weight: 500;
        }
        
        .badge-status.published {
            background-color: rgba(25, 135, 84, 0.1);
            color: #198754;
        }
        
        .badge-status.draft {
            background-color: rgba(108, 117, 125, 0.1);
            color: #6c757d;
        }
        
        .badge-status.review {
            background-color: rgba(255, 193, 7, 0.1);
            color: #ffc107;
        }
        
        .info-box {
            border: 1px solid rgba(255, 255, 255, 0.05);
            border-radius: 6px;
            padding: 16px;
            margin-bottom: 16px;
        }
        
        .info-box-title {
            font-size: 13px;
            font-weight: 500;
            color: var(--text-secondary);
            margin-bottom: 8px;
            text-transform: uppercase;
        }
        
        .nav-tabs {
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .nav-tabs .nav-link {
            border: none;
            border-bottom: 2px solid transparent;
            padding: 8px 16px;
            margin-right: 4px;
            border-radius: 0;
            color: var(--text-secondary);
            font-size: 14px;
            font-weight: 500;
        }
        
        .nav-tabs .nav-link:hover {
            border-color: transparent;
            color: var(--text-color);
        }
        
        .nav-tabs .nav-link.active {
            background-color: transparent;
            border-color: var(--accent-color);
            color: var(--accent-color);
        }
        
        .module-item {
            border: 1px solid rgba(255, 255, 255, 0.05);
            border-radius: 6px;
            margin-bottom: 16px;
        }
        
        .module-header {
            padding: 12px 16px;
            background-color: rgba(255, 255, 255, 0.02);
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
            border-top-left-radius: 6px;
            border-top-right-radius: 6px;
            cursor: pointer;
        }
        
        .module-content {
            padding: 16px;
        }
        
        .lesson-item {
            padding: 10px 12px;
            border-radius: 4px;
            margin-bottom: 8px;
        }
        
        .lesson-item:hover {
            background-color: rgba(255, 255, 255, 0.03);
        }
        
        .lesson-index {
            width: 24px;
            height: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.1);
            font-size: 12px;
            margin-right: 10px;
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
                    <a href="{{ route('instrutor.dashboard') }}" class="nav-link mb-1">
                        <i class="bi bi-house-door me-2"></i>
                        Dashboard
                    </a>
                    <a href="{{ route('instrutor.cursos.index') }}" class="nav-link active mb-1">
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
                <div class="mx-auto" style="max-width: 1000px;">
                    <!-- Cabeçalho -->
                    <header class="mb-4">
                        <div class="d-flex align-items-center mb-4">
                            <a href="{{ route('instrutor.cursos.index') }}" class="text-secondary me-3">
                                <i class="bi bi-arrow-left"></i>
                            </a>
                            <div>
                                <h1 class="fs-5 fw-medium m-0">Detalhes do Curso</h1>
                                <p class="text-secondary fs-small mt-1 mb-0">Visualize informações e conteúdo do seu curso</p>
                            </div>
                            <div class="ms-auto">
                                <a href="{{ route('instrutor.cursos.edit', $curso->id) }}" class="btn btn-accent">
                                    <i class="bi bi-pencil me-1"></i>Editar Curso
                                </a>
                            </div>
                        </div>
                    </header>

                    <!-- Banner do curso -->
                    <div class="course-banner" style="background-image: url('{{ $curso->image ? asset($curso->image) : asset('images/curso-default.jpg') }}')">
                        <div class="course-banner-content">
                            <div class="mb-2">
                                @if($curso->status == 'published')
                                    <span class="badge-status published">Publicado</span>
                                @elseif($curso->status == 'draft')
                                    <span class="badge-status draft">Rascunho</span>
                                @else
                                    <span class="badge-status review">Em Revisão</span>
                                @endif
                                
                                <span class="text-white ms-2 fs-small">
                                    @if($curso->category)
                                        {{ $curso->category->name }}
                                    @endif
                                </span>
                            </div>
                            <h2 class="fs-4 fw-bold text-white mb-1">{{ $curso->title }}</h2>
                            <p class="text-white-50 mb-0">
                                {{ $curso->duration_hours }} horas de conteúdo •
                                @if($curso->modules_count)
                                    {{ $curso->modules_count }} módulos •
                                @endif
                                @if($curso->lessons_count)
                                    {{ $curso->lessons_count }} aulas •
                                @endif
                                @if($curso->level == 1)
                                    Nível Iniciante
                                @elseif($curso->level == 2)
                                    Nível Intermediário
                                @else
                                    Nível Avançado
                                @endif
                            </p>
                        </div>
                    </div>

                    <!-- Abas de navegação -->
                    <ul class="nav nav-tabs mb-4">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('instrutor.cursos.show', $curso->id) }}">Visão Geral</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('instrutor.modulos.index', $curso->id) }}">Módulos e Aulas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('instrutor.cursos.alunos', $curso->id) }}">Alunos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('instrutor.cursos.avaliacoes', $curso->id) }}">Avaliações</a>
                        </li>
                    </ul>

                    <div class="row">
                        <!-- Coluna principal com conteúdo do curso -->
                        <div class="col-lg-8">
                            <!-- Descrição -->
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h5 class="fw-medium mb-3">Descrição</h5>
                                    <p>{{ $curso->description }}</p>
                                </div>
                            </div>
                            
                            <!-- Pré-requisitos -->
                            @if($curso->requirements)
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h5 class="fw-medium mb-3">Pré-requisitos</h5>
                                    <p>{{ $curso->requirements }}</p>
                                </div>
                            </div>
                            @endif
                            
                            <!-- Objetivos de Aprendizagem -->
                            @if($curso->objectives)
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h5 class="fw-medium mb-3">Objetivos de Aprendizagem</h5>
                                    <p>{{ $curso->objectives }}</p>
                                </div>
                            </div>
                            @endif
                            
                            <!-- Lista de Módulos e Aulas -->
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-4">
                                        <h5 class="fw-medium mb-0">Conteúdo do Curso</h5>
                                        <a href="{{ route('instrutor.modulos.index', $curso->id) }}" class="btn btn-sm btn-outline-accent">
                                            <i class="bi bi-pencil me-1"></i>Gerenciar Conteúdo
                                        </a>
                                    </div>
                                    
                                    @if(isset($curso->modules) && count($curso->modules) > 0)
                                        @foreach($curso->modules as $module)
                                            <div class="module-item">
                                                <div class="module-header d-flex justify-content-between">
                                                    <span class="fw-medium">{{ $module->title }}</span>
                                                    <span class="text-secondary fs-small">{{ count($module->lessons) }} aulas</span>
                                                </div>
                                                <div class="module-content">
                                                    @if(isset($module->lessons) && count($module->lessons) > 0)
                                                        @foreach($module->lessons as $index => $lesson)
                                                            <div class="lesson-item d-flex align-items-center">
                                                                <div class="lesson-index">{{ $index + 1 }}</div>
                                                                <div>
                                                                    <p class="mb-0">{{ $lesson->title }}</p>
                                                                    <p class="text-secondary fs-small mb-0">{{ $lesson->duration_minutes }} minutos</p>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    @else
                                                        <p class="text-secondary fs-small mb-0">Nenhuma aula adicionada a este módulo.</p>
                                                    @endif
                                                </div>
                                            </div>
                                        @endforeach
                                    @else
                                        <div class="text-center py-4">
                                            <i class="bi bi-collection fs-1 text-secondary mb-3 d-block"></i>
                                            <p class="mb-3">Você ainda não adicionou nenhum conteúdo a este curso.</p>
                                            <a href="{{ route('instrutor.modulos.create', $curso->id) }}" class="btn btn-accent">
                                                <i class="bi bi-plus-circle me-1"></i>Adicionar Módulo
                                            </a>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        
                        <!-- Coluna lateral com estatísticas -->
                        <div class="col-lg-4">
                            <!-- Estatísticas do curso -->
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h5 class="fw-medium mb-3">Estatísticas</h5>
                                    
                                    <div class="info-box">
                                        <p class="info-box-title mb-1">ALUNOS MATRICULADOS</p>
                                        <h4 class="fw-medium mb-0">{{ $curso->students_count ?? 0 }}</h4>
                                    </div>
                                    
                                    <div class="info-box">
                                        <p class="info-box-title mb-1">AVALIAÇÃO MÉDIA</p>
                                        <div class="d-flex align-items-center">
                                            <h4 class="fw-medium mb-0 me-2">{{ number_format($curso->rating ?? 0, 1) }}</h4>
                                            <div class="d-flex">
                                                @for($i = 1; $i <= 5; $i++)
                                                    @if($i <= round($curso->rating ?? 0))
                                                        <i class="bi bi-star-fill text-warning"></i>
                                                    @else
                                                        <i class="bi bi-star text-secondary"></i>
                                                    @endif
                                                @endfor
                                            </div>
                                        </div>
                                        <p class="text-secondary fs-small mb-0">{{ $curso->reviews_count ?? 0 }} avaliações</p>
                                    </div>
                                    
                                    <div class="info-box">
                                        <p class="info-box-title mb-1">TAXA DE CONCLUSÃO</p>
                                        <h4 class="fw-medium mb-0">{{ $curso->completion_rate ?? '0%' }}</h4>
                                    </div>
                                    
                                    <div class="info-box mb-0">
                                        <p class="info-box-title mb-1">ÚLTIMAS MATRÍCULAS</p>
                                        @if(isset($curso->recent_students) && count($curso->recent_students) > 0)
                                            @foreach($curso->recent_students as $student)
                                                <div class="d-flex align-items-center mb-2">
                                                    <div class="avatar me-2" style="width: 32px; height: 32px;">
                                                        {{ substr($student->name, 0, 1) }}
                                                    </div>
                                                    <div>
                                                        <p class="mb-0 fs-small">{{ $student->name }}</p>
                                                        <p class="text-secondary fs-small mb-0">{{ $student->enrollment_date }}</p>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @else
                                            <p class="text-secondary fs-small mb-0">Nenhum aluno matriculado ainda.</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Ações -->
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h5 class="fw-medium mb-3">Ações</h5>
                                    
                                    <div class="d-grid gap-2">
                                        <a href="{{ route('instrutor.modulos.create', $curso->id) }}" class="btn btn-outline-accent">
                                            <i class="bi bi-plus-circle me-1"></i>Adicionar Módulo
                                        </a>
                                        
                                        <a href="{{ url('/curso/'.$curso->id) }}" target="_blank" class="btn btn-subtle">
                                            <i class="bi bi-eye me-1"></i>Pré-visualizar como Aluno
                                        </a>
                                        
                                        @if($curso->status == 'draft' || $curso->status == 'review')
                                            <form action="{{ route('instrutor.cursos.publish', $curso->id) }}" method="POST">
                                                @csrf
                                                <button type="submit" class="btn btn-accent w-100">
                                                    <i class="bi bi-check2-circle me-1"></i>Publicar Curso
                                                </button>
                                            </form>
                                        @else
                                            <form action="{{ route('instrutor.cursos.unpublish', $curso->id) }}" method="POST">
                                                @csrf
                                                <button type="submit" class="btn btn-outline-secondary w-100">
                                                    <i class="bi bi-pause-circle me-1"></i>Despublicar Curso
                                                </button>
                                            </form>
                                        @endif
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Menu mobile
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