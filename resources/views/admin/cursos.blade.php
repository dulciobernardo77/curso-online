<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos - Admin SpaceSeat</title>

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

        .course-card {
            transition: all 0.2s;
        }

        .course-card:hover {
            transform: translateY(-2px);
        }

        .badge {
            padding: 4px 8px;
            font-size: 12px;
            border-radius: 4px;
        }

        .badge-success {
            background-color: rgba(46, 213, 115, 0.15);
            color: #2ed573;
        }

        .badge-warning {
            background-color: rgba(255, 171, 0, 0.15);
            color: #ffab00;
        }

        .badge-danger {
            background-color: rgba(255, 71, 87, 0.15);
            color: #ff4757;
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
                <li><a class="dropdown-item" href="/admin/perfil">
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
                    <a href="/admin/dashboard" class="nav-link mb-1">
                        <i class="bi bi-house-door me-2"></i>
                        Dashboard
                    </a>
                    <a href="/admin/usuarios" class="nav-link mb-1">
                        <i class="bi bi-people me-2"></i>
                        Usuários
                    </a>
                    <a href="/admin/cursos" class="nav-link active mb-1">
                        <i class="bi bi-journal-text me-2"></i>
                        Cursos
                    </a>
                    <a href="/admin/categorias" class="nav-link mb-1">
                        <i class="bi bi-grid me-2"></i>
                        Categorias
                    </a>
                    <a href="/admin/financeiro" class="nav-link mb-1">
                        <i class="bi bi-cash-stack me-2"></i>
                        Financeiro
                    </a>
                    <a href="/admin/relatorios" class="nav-link mb-1">
                        <i class="bi bi-bar-chart me-2"></i>
                        Relatórios
                    </a>
                    <a href="/admin/configuracoes" class="nav-link mb-1">
                        <i class="bi bi-gear me-2"></i>
                        Configurações
                    </a>
                </nav>
            </aside>

            <!-- Conteúdo principal -->
            <main class="flex-grow-1 py-4 px-4">
                <div class="mx-auto" style="max-width: 1200px;">
                    <!-- Cabeçalho -->
                    <header class="mb-5 d-flex justify-content-between align-items-center">
                        <h1 class="fs-5 fw-medium m-0">Gerenciar Cursos</h1>
                        <div class="d-flex gap-2">
                            <button class="btn btn-accent">
                                <i class="bi bi-plus-lg me-2"></i>
                                Novo Curso
                            </button>
                            <div class="dropdown">
                                <button class="btn btn-subtle dropdown-toggle" type="button" id="profileDropdown" data-bs-toggle="dropdown">
                                    <i class="bi bi-person"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end">
                                    <li><a class="dropdown-item" href="/admin/perfil">
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
                    </header>

                    <!-- Filtros -->
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row g-3">
                                <div class="col-12 col-md-4">
                                    <label class="form-label text-secondary">Categoria</label>
                                    <select class="form-select form-select-sm bg-dark text-white border-secondary">
                                        <option value="">Todas</option>
                                        <option value="programacao">Programação</option>
                                        <option value="design">Design</option>
                                        <option value="marketing">Marketing</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-4">
                                    <label class="form-label text-secondary">Status</label>
                                    <select class="form-select form-select-sm bg-dark text-white border-secondary">
                                        <option value="">Todos</option>
                                        <option value="publicado">Publicado</option>
                                        <option value="rascunho">Rascunho</option>
                                        <option value="revisao">Em Revisão</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-4">
                                    <label class="form-label text-secondary">Buscar</label>
                                    <input type="text" class="form-control form-control-sm bg-dark text-white border-secondary" placeholder="Nome do curso...">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Grid de Cursos -->
                    <div class="row g-4">
                        <!-- Curso 1 -->
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="card course-card h-100">
                                <img src="https://via.placeholder.com/400x200" class="card-img-top" alt="Curso">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-start mb-2">
                                        <h5 class="card-title mb-0">Desenvolvimento Web Full Stack</h5>
                                        <span class="badge badge-success">Publicado</span>
                                    </div>
                                    <p class="card-text text-secondary mb-3">Aprenda HTML, CSS, JavaScript, React e Node.js</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="text-secondary fs-small">
                                            <i class="bi bi-people me-1"></i> 234 alunos
                                        </div>
                                        <div class="btn-group">
                                            <button class="btn btn-subtle btn-sm">
                                                <i class="bi bi-pencil"></i>
                                            </button>
                                            <button class="btn btn-subtle btn-sm text-danger">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Curso 2 -->
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="card course-card h-100">
                                <img src="https://via.placeholder.com/400x200" class="card-img-top" alt="Curso">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-start mb-2">
                                        <h5 class="card-title mb-0">UI/UX Design</h5>
                                        <span class="badge badge-warning">Em Revisão</span>
                                    </div>
                                    <p class="card-text text-secondary mb-3">Design de interfaces e experiência do usuário</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="text-secondary fs-small">
                                            <i class="bi bi-people me-1"></i> 156 alunos
                                        </div>
                                        <div class="btn-group">
                                            <button class="btn btn-subtle btn-sm">
                                                <i class="bi bi-pencil"></i>
                                            </button>
                                            <button class="btn btn-subtle btn-sm text-danger">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Curso 3 -->
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="card course-card h-100">
                                <img src="https://via.placeholder.com/400x200" class="card-img-top" alt="Curso">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-start mb-2">
                                        <h5 class="card-title mb-0">Marketing Digital</h5>
                                        <span class="badge badge-danger">Rascunho</span>
                                    </div>
                                    <p class="card-text text-secondary mb-3">Estratégias de marketing para o mundo digital</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="text-secondary fs-small">
                                            <i class="bi bi-people me-1"></i> 0 alunos
                                        </div>
                                        <div class="btn-group">
                                            <button class="btn btn-subtle btn-sm">
                                                <i class="bi bi-pencil"></i>
                                            </button>
                                            <button class="btn btn-subtle btn-sm text-danger">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Paginação -->
                    <nav class="mt-4">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                                <a class="page-link bg-dark border-secondary" href="#" tabindex="-1">Anterior</a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link bg-accent border-accent" href="#">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link bg-dark border-secondary" href="#">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link bg-dark border-secondary" href="#">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link bg-dark border-secondary" href="#">Próximo</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </main>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
        document.getElementById('menuToggle').addEventListener('click', function() {
            document.getElementById('sidebar').classList.toggle('show');
        });
    </script>
</body>
</html> 