<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Financeiro - Admin SpaceSeat</title>

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

        .table {
            color: var(--text-color);
            font-size: 14px;
        }

        .table th {
            font-weight: 500;
            color: var(--text-secondary);
            border-bottom-color: var(--border);
        }

        .table td {
            border-bottom-color: var(--border);
            vertical-align: middle;
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
                    <a href="/admin/cursos" class="nav-link mb-1">
                        <i class="bi bi-journal-text me-2"></i>
                        Cursos
                    </a>
                    <a href="/admin/categorias" class="nav-link mb-1">
                        <i class="bi bi-grid me-2"></i>
                        Categorias
                    </a>
                    <a href="/admin/financeiro" class="nav-link active mb-1">
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
                        <div>
                            <h1 class="fs-5 fw-medium m-0">Financeiro</h1>
                            <p class="text-secondary mt-1 mb-0">Gerencie as transações e receitas da plataforma</p>
                        </div>
                        <div class="d-flex gap-2">
                            <button class="btn btn-subtle">
                                <i class="bi bi-download me-2"></i>
                                Exportar
                            </button>
                            <button class="btn btn-accent">
                                <i class="bi bi-plus-lg me-2"></i>
                                Nova Transação
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

                    <!-- Cards de estatísticas -->
                    <div class="row g-4 mb-4">
                        <div class="col-12 col-md-3">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="rounded-circle p-2 me-3" style="background: rgba(46, 213, 115, 0.1)">
                                            <i class="bi bi-cash" style="color: #2ed573"></i>
                                        </div>
                                        <h6 class="card-subtitle text-secondary mb-0">Receita Total</h6>
                                    </div>
                                    <h3 class="card-title mb-0">R$ 125.489,00</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-3">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="rounded-circle p-2 me-3" style="background: rgba(108, 71, 255, 0.1)">
                                            <i class="bi bi-calendar text-accent"></i>
                                        </div>
                                        <h6 class="card-subtitle text-secondary mb-0">Receita Mensal</h6>
                                    </div>
                                    <h3 class="card-title mb-0">R$ 28.945,00</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-3">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="rounded-circle p-2 me-3" style="background: rgba(255, 171, 0, 0.1)">
                                            <i class="bi bi-receipt" style="color: #ffab00"></i>
                                        </div>
                                        <h6 class="card-subtitle text-secondary mb-0">Transações</h6>
                                    </div>
                                    <h3 class="card-title mb-0">1,234</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-3">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="rounded-circle p-2 me-3" style="background: rgba(255, 71, 87, 0.1)">
                                            <i class="bi bi-people" style="color: #ff4757"></i>
                                        </div>
                                        <h6 class="card-subtitle text-secondary mb-0">Novos Clientes</h6>
                                    </div>
                                    <h3 class="card-title mb-0">156</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Gráficos -->
                    <div class="row g-4 mb-4">
                        <div class="col-12 col-lg-8">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h6 class="card-subtitle text-secondary mb-4">Receita dos Últimos 6 Meses</h6>
                                    <div style="height: 300px; background: rgba(108, 71, 255, 0.05); border-radius: 4px;">
                                        <!-- Gráfico será inserido aqui -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h6 class="card-subtitle text-secondary mb-4">Distribuição de Vendas</h6>
                                    <div style="height: 300px; background: rgba(108, 71, 255, 0.05); border-radius: 4px;">
                                        <!-- Gráfico será inserido aqui -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tabela de transações -->
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-subtitle text-secondary mb-4">Transações Recentes</h6>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th style="width: 100px">ID</th>
                                            <th>Cliente</th>
                                            <th>Curso</th>
                                            <th style="width: 120px">Valor</th>
                                            <th style="width: 120px">Data</th>
                                            <th style="width: 120px">Status</th>
                                            <th style="width: 100px">Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>#12345</td>
                                            <td>João Silva</td>
                                            <td>Desenvolvimento Web Full Stack</td>
                                            <td>R$ 997,00</td>
                                            <td>23/03/2024</td>
                                            <td><span class="badge badge-success">Concluído</span></td>
                                            <td>
                                                <div class="btn-group">
                                                    <button class="btn btn-subtle btn-sm">
                                                        <i class="bi bi-eye"></i>
                                                    </button>
                                                    <button class="btn btn-subtle btn-sm">
                                                        <i class="bi bi-download"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#12344</td>
                                            <td>Maria Santos</td>
                                            <td>UI/UX Design</td>
                                            <td>R$ 797,00</td>
                                            <td>23/03/2024</td>
                                            <td><span class="badge badge-warning">Pendente</span></td>
                                            <td>
                                                <div class="btn-group">
                                                    <button class="btn btn-subtle btn-sm">
                                                        <i class="bi bi-eye"></i>
                                                    </button>
                                                    <button class="btn btn-subtle btn-sm">
                                                        <i class="bi bi-download"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#12343</td>
                                            <td>Pedro Oliveira</td>
                                            <td>Marketing Digital</td>
                                            <td>R$ 597,00</td>
                                            <td>22/03/2024</td>
                                            <td><span class="badge badge-danger">Falhou</span></td>
                                            <td>
                                                <div class="btn-group">
                                                    <button class="btn btn-subtle btn-sm">
                                                        <i class="bi bi-eye"></i>
                                                    </button>
                                                    <button class="btn btn-subtle btn-sm">
                                                        <i class="bi bi-download"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
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