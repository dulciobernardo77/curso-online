<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meus Cursos - SpaceSeat</title>

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
        
        .course-card {
            background-color: var(--card-color);
            border-radius: 8px;
            transition: transform 0.2s;
            height: 100%;
            overflow: hidden;
            border: 1px solid rgba(255, 255, 255, 0.05);
        }
        
        .course-card:hover {
            transform: translateY(-5px);
        }
        
        .course-thumbnail {
            height: 160px;
            background-size: cover;
            background-position: center;
            position: relative;
        }
        
        .course-badge {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 12px;
            padding: 4px 8px;
            border-radius: 4px;
        }
        
        .course-status {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 8px;
            background: rgba(0, 0, 0, 0.5);
            font-size: 12px;
        }
        
        .table {
            color: var(--text-color);
        }
        
        .table thead th {
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            color: var(--text-secondary);
            font-weight: 500;
            font-size: 13px;
            padding-top: 12px;
            padding-bottom: 12px;
        }
        
        .table td {
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
            padding-top: 12px;
            padding-bottom: 12px;
            vertical-align: middle;
        }
        
        .search-input {
            background-color: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: var(--text-color);
            border-radius: 4px;
            padding: 8px 12px;
            font-size: 14px;
        }
        
        .search-input:focus {
            background-color: rgba(255, 255, 255, 0.07);
            border-color: var(--accent-color);
            box-shadow: none;
            color: var(--text-color);
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
                    <header class="mb-4 d-flex justify-content-between align-items-center">
                        <div>
                            <h1 class="fs-5 fw-medium m-0">Meus Cursos</h1>
                            <p class="text-secondary fs-small mt-1 mb-0">Gerencie todos os seus cursos na plataforma</p>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-subtle dropdown-toggle" type="button" id="profileDropdown" data-bs-toggle="dropdown">
                                {{ Auth::user()->name }}
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

                    <!-- Filtros e botão de adicionar curso -->
                    <div class="mb-4 d-flex justify-content-between align-items-center">
                        <div class="input-group" style="max-width: 300px;">
                            <input type="text" class="form-control search-input" placeholder="Pesquisar cursos...">
                            <button class="btn btn-accent"><i class="bi bi-search"></i></button>
                        </div>
                        <div>
                            <a href="{{ route('instrutor.cursos.create') }}" class="btn btn-accent">
                                <i class="bi bi-plus-circle me-2"></i>Criar Novo Curso
                            </a>
                        </div>
                    </div>

                    <!-- Tabela de cursos -->
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Curso</th>
                                            <th>Status</th>
                                            <th>Alunos</th>
                                            <th>Avaliação</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if(isset($cursos) && count($cursos) > 0)
                                            @foreach($cursos as $curso)
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div style="width: 60px; height: 40px; background-image: url('{{ $curso->image ?? asset('images/curso-default.jpg') }}'); background-size: cover; background-position: center; border-radius: 4px;" class="me-3"></div>
                                                        <div>
                                                            <p class="mb-0 fw-medium">{{ $curso->title }}</p>
                                                            <small class="text-secondary">{{ $curso->modules_count ?? 0 }} módulos • {{ $curso->lessons_count ?? 0 }} aulas</small>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    @if($curso->status == 'published')
                                                        <span class="badge bg-success">Publicado</span>
                                                    @elseif($curso->status == 'draft')
                                                        <span class="badge bg-secondary">Rascunho</span>
                                                    @else
                                                        <span class="badge bg-warning">Em revisão</span>
                                                    @endif
                                                </td>
                                                <td>{{ $curso->students_count ?? 0 }}</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <i class="bi bi-star-fill text-warning me-1"></i>
                                                        <span>{{ $curso->rating ?? '0.0' }}</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex gap-2">
                                                        <a href="{{ route('instrutor.cursos.show', $curso->id) }}" class="btn btn-sm btn-subtle" title="Visualizar">
                                                            <i class="bi bi-eye"></i>
                                                        </a>
                                                        <a href="{{ route('instrutor.cursos.edit', $curso->id) }}" class="btn btn-sm btn-subtle" title="Editar">
                                                            <i class="bi bi-pencil"></i>
                                                        </a>
                                                        <form action="{{ route('instrutor.cursos.destroy', $curso->id) }}" method="POST" class="d-inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-sm btn-subtle" title="Excluir" onclick="return confirm('Tem certeza que deseja excluir este curso?')">
                                                                <i class="bi bi-trash"></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="5" class="text-center py-4">
                                                    <i class="bi bi-info-circle me-2"></i>
                                                    Você ainda não possui cursos criados
                                                </td>
                                            </tr>
                                        @endif
                                    </tbody>
                                </table>
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