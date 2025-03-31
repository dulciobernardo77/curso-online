<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Módulos - {{ $curso->title }} - SpaceSeat</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">

    <!-- Sortable.js -->
    <script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js"></script>

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
            background-color: var(--card-color);
        }
        
        .module-header {
            padding: 16px;
            background-color: rgba(255, 255, 255, 0.02);
            border-top-left-radius: 6px;
            border-top-right-radius: 6px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        
        .module-content {
            padding: 16px;
            border-top: 1px solid rgba(255, 255, 255, 0.05);
        }
        
        .module-title {
            margin-bottom: 0;
            font-weight: 500;
        }
        
        .module-lessons-count {
            font-size: 13px;
            color: var(--text-secondary);
            margin-top: 4px;
        }
        
        .module-drag-handle {
            cursor: grab;
            color: var(--text-secondary);
            margin-right: 12px;
        }
        
        .lesson-item {
            margin-bottom: 12px;
            border: 1px solid rgba(255, 255, 255, 0.05);
            border-radius: 4px;
            padding: 12px;
            background-color: rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
        }
        
        .lesson-drag-handle {
            cursor: grab;
            color: var(--text-secondary);
            margin-right: 12px;
        }
        
        .lesson-info {
            flex: 1;
        }
        
        .lesson-title {
            margin-bottom: 2px;
            font-weight: 500;
            font-size: 14px;
        }
        
        .lesson-duration {
            font-size: 12px;
            color: var(--text-secondary);
        }
        
        .lesson-actions {
            display: flex;
            gap: 8px;
        }
        
        .empty-state {
            text-align: center;
            padding: 40px 20px;
        }
        
        .empty-state-icon {
            font-size: 48px;
            color: var(--text-secondary);
            opacity: 0.5;
            margin-bottom: 16px;
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
                            <a href="{{ route('instrutor.cursos.show', $curso->id) }}" class="text-secondary me-3">
                                <i class="bi bi-arrow-left"></i>
                            </a>
                            <div>
                                <h1 class="fs-5 fw-medium m-0">Módulos e Aulas</h1>
                                <p class="text-secondary fs-small mt-1 mb-0">{{ $curso->title }}</p>
                            </div>
                        </div>
                    </header>

                    <!-- Abas de navegação -->
                    <ul class="nav nav-tabs mb-4">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('instrutor.cursos.show', $curso->id) }}">Visão Geral</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('instrutor.modulos.index', $curso->id) }}">Módulos e Aulas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('instrutor.cursos.alunos', $curso->id) }}">Alunos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('instrutor.cursos.avaliacoes', $curso->id) }}">Avaliações</a>
                        </li>
                    </ul>

                    <!-- Botão de adicionar módulo -->
                    <div class="d-flex justify-content-end mb-4">
                        <a href="{{ route('instrutor.modulos.create', $curso->id) }}" class="btn btn-accent">
                            <i class="bi bi-plus-circle me-2"></i>Adicionar Módulo
                        </a>
                    </div>

                    <!-- Lista de Módulos -->
                    @if(isset($modulos) && count($modulos) > 0)
                        <div id="modulesList">
                            @foreach($modulos as $modulo)
                                <div class="module-item" data-id="{{ $modulo->id }}">
                                    <div class="module-header" data-bs-toggle="collapse" data-bs-target="#module{{ $modulo->id }}Content">
                                        <div class="d-flex align-items-center">
                                            <i class="bi bi-grip-vertical module-drag-handle"></i>
                                            <div>
                                                <h5 class="module-title">{{ $modulo->title }}</h5>
                                                <p class="module-lessons-count">{{ count($modulo->lessons ?? []) }} aulas</p>
                                            </div>
                                        </div>
                                        <div>
                                            <a href="{{ route('instrutor.lessons.create', ['modulo' => $modulo->id]) }}" class="btn btn-sm btn-outline-accent me-2">
                                                <i class="bi bi-plus-lg me-1"></i>Aula
                                            </a>
                                            <div class="btn-group">
                                                <a href="{{ route('instrutor.modulos.edit', $modulo->id) }}" class="btn btn-sm btn-subtle">
                                                    <i class="bi bi-pencil"></i>
                                                </a>
                                                <button type="button" class="btn btn-sm btn-subtle" data-bs-toggle="modal" data-bs-target="#deleteModuleModal{{ $modulo->id }}">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </div>
                                            <i class="bi bi-chevron-down ms-2"></i>
                                        </div>
                                    </div>
                                    <div class="collapse module-content" id="module{{ $modulo->id }}Content">
                                        @if(isset($modulo->lessons) && count($modulo->lessons) > 0)
                                            <div class="lessons-list" data-module-id="{{ $modulo->id }}">
                                                @foreach($modulo->lessons as $lesson)
                                                    <div class="lesson-item" data-id="{{ $lesson->id }}">
                                                        <i class="bi bi-grip-vertical lesson-drag-handle"></i>
                                                        <div class="lesson-info">
                                                            <h6 class="lesson-title">{{ $lesson->title }}</h6>
                                                            <span class="lesson-duration">{{ $lesson->duration_minutes }} minutos</span>
                                                        </div>
                                                        <div class="lesson-actions">
                                                            <a href="{{ route('instrutor.lessons.edit', $lesson->id) }}" class="btn btn-sm btn-subtle">
                                                                <i class="bi bi-pencil"></i>
                                                            </a>
                                                            <button type="button" class="btn btn-sm btn-subtle" data-bs-toggle="modal" data-bs-target="#deleteLessonModal{{ $lesson->id }}">
                                                                <i class="bi bi-trash"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        @else
                                            <div class="text-center py-3">
                                                <p class="text-secondary mb-3">Este módulo ainda não tem aulas.</p>
                                                <a href="{{ route('instrutor.lessons.create', ['modulo' => $modulo->id]) }}" class="btn btn-sm btn-outline-accent">
                                                    <i class="bi bi-plus-lg me-1"></i>Adicionar Aula
                                                </a>
                                            </div>
                                        @endif
                                    </div>
                                </div>

                                <!-- Modal de exclusão de módulo -->
                                <div class="modal fade" id="deleteModuleModal{{ $modulo->id }}" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content bg-dark text-light">
                                            <div class="modal-header border-0">
                                                <h5 class="modal-title">Excluir Módulo</h5>
                                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Tem certeza que deseja excluir o módulo "{{ $modulo->title }}"?</p>
                                                <p class="text-danger">Todas as aulas deste módulo também serão excluídas.</p>
                                            </div>
                                            <div class="modal-footer border-0">
                                                <button type="button" class="btn btn-outline-light" data-bs-dismiss="modal">Cancelar</button>
                                                <form action="{{ route('instrutor.modulos.destroy', $modulo->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Excluir</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Modais de exclusão de aulas -->
                                @if(isset($modulo->lessons))
                                    @foreach($modulo->lessons as $lesson)
                                        <div class="modal fade" id="deleteLessonModal{{ $lesson->id }}" tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content bg-dark text-light">
                                                    <div class="modal-header border-0">
                                                        <h5 class="modal-title">Excluir Aula</h5>
                                                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Tem certeza que deseja excluir a aula "{{ $lesson->title }}"?</p>
                                                    </div>
                                                    <div class="modal-footer border-0">
                                                        <button type="button" class="btn btn-outline-light" data-bs-dismiss="modal">Cancelar</button>
                                                        <form action="{{ route('instrutor.lessons.destroy', $lesson->id) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger">Excluir</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            @endforeach
                        </div>
                    @else
                        <div class="card">
                            <div class="card-body empty-state">
                                <i class="bi bi-collection empty-state-icon"></i>
                                <h4 class="mb-3">Nenhum módulo criado</h4>
                                <p class="text-secondary mb-4">Comece a criar o conteúdo do seu curso adicionando um módulo.</p>
                                <a href="{{ route('instrutor.modulos.create', $curso->id) }}" class="btn btn-accent">
                                    <i class="bi bi-plus-circle me-2"></i>Adicionar Módulo
                                </a>
                            </div>
                        </div>
                    @endif
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
            
            // Inicializar Sortable para os módulos
            const modulesList = document.getElementById('modulesList');
            if (modulesList) {
                new Sortable(modulesList, {
                    handle: '.module-drag-handle',
                    animation: 150,
                    onEnd: function(evt) {
                        // Enviar nova ordem para o backend
                        const moduleIds = Array.from(modulesList.children).map(item => item.dataset.id);
                        
                        fetch('{{ route("instrutor.modulos.reorder", $curso->id) }}', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            },
                            body: JSON.stringify({ order: moduleIds })
                        });
                    }
                });
            }
            
            // Inicializar Sortable para as aulas em cada módulo
            const lessonsLists = document.querySelectorAll('.lessons-list');
            lessonsLists.forEach(list => {
                new Sortable(list, {
                    handle: '.lesson-drag-handle',
                    animation: 150,
                    onEnd: function(evt) {
                        // Enviar nova ordem para o backend
                        const lessonIds = Array.from(list.children).map(item => item.dataset.id);
                        const moduleId = list.dataset.moduleId;
                        
                        fetch('{{ route("instrutor.lessons.reorder") }}', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            },
                            body: JSON.stringify({ 
                                module_id: moduleId,
                                order: lessonIds 
                            })
                        });
                    }
                });
            });
        });
    </script>
</body>
</html> 