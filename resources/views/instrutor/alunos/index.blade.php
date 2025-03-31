<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meus Alunos - SpaceSeat</title>

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
        
        .avatar {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background-color: var(--accent-color);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 500;
            font-size: 14px;
        }
        
        .badge-accent {
            background-color: rgba(108, 71, 255, 0.1);
            color: var(--accent-color);
            font-weight: 500;
            padding: 4px 8px;
            border-radius: 4px;
            font-size: 12px;
        }
        
        .progress {
            height: 4px;
            background-color: rgba(255, 255, 255, 0.06);
            border-radius: 2px;
        }
        
        .progress-bar {
            background-color: var(--accent-color);
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
                    <a href="{{ route('instrutor.cursos.index') }}" class="nav-link mb-1">
                        <i class="bi bi-collection me-2"></i>
                        Meus Cursos
                    </a>
                    <a href="#" class="nav-link active mb-1">
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
                            <h1 class="fs-5 fw-medium m-0">Meus Alunos</h1>
                            <p class="text-secondary fs-small mt-1 mb-0">Acompanhe o progresso dos alunos matriculados em seus cursos</p>
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

                    <!-- Abas para filtrar alunos -->
                    <ul class="nav nav-tabs mb-4">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Todos os Alunos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Ativos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Concluíram Cursos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Inativos</a>
                        </li>
                    </ul>

                    <!-- Filtros e pesquisa -->
                    <div class="mb-4 d-flex justify-content-between align-items-center">
                        <div class="input-group" style="max-width: 300px;">
                            <input type="text" class="form-control search-input" placeholder="Pesquisar alunos...">
                            <button class="btn btn-accent"><i class="bi bi-search"></i></button>
                        </div>
                        <div>
                            <select class="form-control search-input" style="width: auto;">
                                <option value="">Filtrar por curso</option>
                                <option value="1">HTML & CSS Fundamentos</option>
                                <option value="2">JavaScript Básico</option>
                                <option value="3">React: Componentes e Estado</option>
                            </select>
                        </div>
                    </div>

                    <!-- Estatísticas resumidas -->
                    <div class="row g-4 mb-4">
                        <div class="col-md-3">
                            <div class="card p-3">
                                <p class="text-secondary fs-small mb-1">TOTAL DE ALUNOS</p>
                                <h3 class="fw-medium mb-0">45</h3>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card p-3">
                                <p class="text-secondary fs-small mb-1">ALUNOS ATIVOS</p>
                                <h3 class="fw-medium mb-0">32</h3>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card p-3">
                                <p class="text-secondary fs-small mb-1">TAXA DE CONCLUSÃO</p>
                                <h3 class="fw-medium mb-0">68%</h3>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card p-3">
                                <p class="text-secondary fs-small mb-1">AVALIAÇÕES</p>
                                <h3 class="fw-medium mb-0">4.7</h3>
                            </div>
                        </div>
                    </div>

                    <!-- Tabela de alunos -->
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Aluno</th>
                                            <th>Curso</th>
                                            <th>Progresso</th>
                                            <th>Última Atividade</th>
                                            <th>Status</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Exemplo de aluno 1 -->
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar me-3" style="background-color: #6c47ff;">JD</div>
                                                    <div>
                                                        <p class="mb-0 fw-medium">João da Silva</p>
                                                        <small class="text-secondary">joao.silva@example.com</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>HTML & CSS Fundamentos</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div style="width: 100px;" class="me-2">
                                                        <div class="progress">
                                                            <div class="progress-bar" role="progressbar" style="width: 85%"></div>
                                                        </div>
                                                    </div>
                                                    <span>85%</span>
                                                </div>
                                            </td>
                                            <td>Há 2 dias</td>
                                            <td><span class="badge-accent">Ativo</span></td>
                                            <td>
                                                <div class="d-flex gap-2">
                                                    <button class="btn btn-sm btn-subtle" title="Enviar Mensagem">
                                                        <i class="bi bi-chat"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-subtle" title="Ver Detalhes">
                                                        <i class="bi bi-eye"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        
                                        <!-- Exemplo de aluno 2 -->
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar me-3" style="background-color: #8e44ad;">MC</div>
                                                    <div>
                                                        <p class="mb-0 fw-medium">Maria Costa</p>
                                                        <small class="text-secondary">maria.costa@example.com</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>JavaScript Básico</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div style="width: 100px;" class="me-2">
                                                        <div class="progress">
                                                            <div class="progress-bar" role="progressbar" style="width: 100%"></div>
                                                        </div>
                                                    </div>
                                                    <span>100%</span>
                                                </div>
                                            </td>
                                            <td>Há 1 semana</td>
                                            <td><span class="badge-accent">Concluído</span></td>
                                            <td>
                                                <div class="d-flex gap-2">
                                                    <button class="btn btn-sm btn-subtle" title="Enviar Mensagem">
                                                        <i class="bi bi-chat"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-subtle" title="Ver Detalhes">
                                                        <i class="bi bi-eye"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        
                                        <!-- Exemplo de aluno 3 -->
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar me-3" style="background-color: #16a085;">PS</div>
                                                    <div>
                                                        <p class="mb-0 fw-medium">Pedro Santos</p>
                                                        <small class="text-secondary">pedro.santos@example.com</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>React: Componentes e Estado</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div style="width: 100px;" class="me-2">
                                                        <div class="progress">
                                                            <div class="progress-bar" role="progressbar" style="width: 45%"></div>
                                                        </div>
                                                    </div>
                                                    <span>45%</span>
                                                </div>
                                            </td>
                                            <td>Hoje</td>
                                            <td><span class="badge-accent">Ativo</span></td>
                                            <td>
                                                <div class="d-flex gap-2">
                                                    <button class="btn btn-sm btn-subtle" title="Enviar Mensagem">
                                                        <i class="bi bi-chat"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-subtle" title="Ver Detalhes">
                                                        <i class="bi bi-eye"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        
                                        <!-- Exemplo de aluno 4 -->
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar me-3" style="background-color: #e74c3c;">AA</div>
                                                    <div>
                                                        <p class="mb-0 fw-medium">Ana Almeida</p>
                                                        <small class="text-secondary">ana.almeida@example.com</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>JavaScript Básico</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div style="width: 100px;" class="me-2">
                                                        <div class="progress">
                                                            <div class="progress-bar" role="progressbar" style="width: 20%"></div>
                                                        </div>
                                                    </div>
                                                    <span>20%</span>
                                                </div>
                                            </td>
                                            <td>Há 1 mês</td>
                                            <td><span class="badge-accent" style="background-color: rgba(231, 76, 60, 0.1); color: #e74c3c;">Inativo</span></td>
                                            <td>
                                                <div class="d-flex gap-2">
                                                    <button class="btn btn-sm btn-subtle" title="Enviar Mensagem">
                                                        <i class="bi bi-chat"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-subtle" title="Ver Detalhes">
                                                        <i class="bi bi-eye"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            
                            <!-- Paginação -->
                            <nav class="mt-4">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1">Anterior</a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Próximo</a>
                                    </li>
                                </ul>
                            </nav>
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