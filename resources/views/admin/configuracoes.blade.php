<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configurações - Admin SpaceSeat</title>

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

        .form-control {
            background-color: var(--bg-color);
            border: var(--border);
            color: var(--text-color);
            font-size: 14px;
            padding: 8px 12px;
        }

        .form-control:focus {
            background-color: var(--bg-color);
            border-color: var(--accent-color);
            color: var(--text-color);
            box-shadow: none;
        }

        .form-label {
            color: var(--text-secondary);
            font-size: 14px;
            margin-bottom: 6px;
        }

        .form-text {
            color: var(--text-secondary);
            font-size: 13px;
        }

        .form-select {
            background-color: var(--bg-color);
            border: var(--border);
            color: var(--text-color);
            font-size: 14px;
            padding: 8px 12px;
        }

        .form-select:focus {
            background-color: var(--bg-color);
            border-color: var(--accent-color);
            color: var(--text-color);
            box-shadow: none;
        }

        .form-check-input {
            background-color: var(--bg-color);
            border: var(--border);
        }

        .form-check-input:checked {
            background-color: var(--accent-color);
            border-color: var(--accent-color);
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
                    <a href="/admin/cursos" class="nav-link mb-1">
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
                    <a href="/admin/configuracoes" class="nav-link active mb-1">
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
                            <h1 class="fs-5 fw-medium m-0">Configurações</h1>
                            <p class="text-secondary mt-1 mb-0">Gerencie as configurações da plataforma</p>
                        </div>
                        <div class="d-flex gap-2">
                            <button class="btn btn-accent">
                                <i class="bi bi-save me-2"></i>
                                Salvar Alterações
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

                    <!-- Navegação das configurações -->
                    <div class="card mb-4">
                        <div class="card-body">
                            <nav class="nav nav-pills nav-fill">
                                <a class="nav-link active" href="#geral" data-bs-toggle="pill">
                                    <i class="bi bi-gear me-2"></i>Geral
                                </a>
                                <a class="nav-link" href="#aparencia" data-bs-toggle="pill">
                                    <i class="bi bi-palette me-2"></i>Aparência
                                </a>
                                <a class="nav-link" href="#email" data-bs-toggle="pill">
                                    <i class="bi bi-envelope me-2"></i>Email
                                </a>
                                <a class="nav-link" href="#pagamentos" data-bs-toggle="pill">
                                    <i class="bi bi-credit-card me-2"></i>Pagamentos
                                </a>
                                <a class="nav-link" href="#integracoes" data-bs-toggle="pill">
                                    <i class="bi bi-box-arrow-up-right me-2"></i>Integrações
                                </a>
                                <a class="nav-link" href="#backup" data-bs-toggle="pill">
                                    <i class="bi bi-cloud-arrow-up me-2"></i>Backup
                                </a>
                                <a class="nav-link" href="#logs" data-bs-toggle="pill">
                                    <i class="bi bi-list-check me-2"></i>Logs
                                </a>
                            </nav>
                        </div>
                    </div>

                    <!-- Conteúdo das configurações -->
                    <div class="tab-content">
                        <!-- Configurações Gerais -->
                        <div class="tab-pane fade show active" id="geral">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-subtitle text-secondary mb-4">Configurações Gerais</h6>
                                    <form>
                                        <div class="mb-4">
                                            <label class="form-label">Logo da Plataforma</label>
                                            <div class="d-flex align-items-center gap-3">
                                                <img src="path/to/logo.png" alt="Logo atual" class="rounded" style="width: 100px; height: 100px; object-fit: cover;">
                                                <div>
                                                    <button class="btn btn-accent mb-2">
                                                        <i class="bi bi-upload me-2"></i>Alterar Logo
                                                    </button>
                                                    <p class="form-text m-0">Recomendado: PNG, SVG. Tamanho máximo: 2MB</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Nome da Plataforma</label>
                                            <input type="text" class="form-control" value="SpaceSeat">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Descrição</label>
                                            <textarea class="form-control" rows="3">Plataforma de cursos online</textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Fuso Horário</label>
                                            <select class="form-select">
                                                <option value="America/Sao_Paulo">America/Sao_Paulo (UTC-3)</option>
                                                <option value="UTC">UTC</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Idioma Padrão</label>
                                            <select class="form-select">
                                                <option value="pt-BR">Português (Brasil)</option>
                                                <option value="en">English</option>
                                                <option value="es">Español</option>
                                            </select>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- Configurações de Aparência -->
                        <div class="tab-pane fade" id="aparencia">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-subtitle text-secondary mb-4">Configurações de Aparência</h6>
                                    <form>
                                        <div class="mb-3">
                                            <label class="form-label">Tema</label>
                                            <select class="form-select">
                                                <option value="dark">Escuro</option>
                                                <option value="light">Claro</option>
                                                <option value="auto">Automático</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Cor Primária</label>
                                            <input type="color" class="form-control form-control-color" value="#6c47ff">
                                        </div>
                                        <div class="mb-3">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" id="responsiveMode" checked>
                                                <label class="form-check-label" for="responsiveMode">Modo Responsivo</label>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- Configurações de Email -->
                        <div class="tab-pane fade" id="email">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-subtitle text-secondary mb-4">Configurações de Email</h6>
                                    <form>
                                        <div class="mb-3">
                                            <label class="form-label">Servidor SMTP</label>
                                            <input type="text" class="form-control" placeholder="smtp.exemplo.com">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Porta</label>
                                            <input type="number" class="form-control" placeholder="587">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Email</label>
                                            <input type="email" class="form-control" placeholder="contato@exemplo.com">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Senha</label>
                                            <input type="password" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" id="sslTls" checked>
                                                <label class="form-check-label" for="sslTls">Usar SSL/TLS</label>
                                            </div>
                                        </div>
                                        <button class="btn btn-accent">
                                            <i class="bi bi-envelope me-2"></i>Testar Conexão
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- Configurações de Pagamento -->
                        <div class="tab-pane fade" id="pagamentos">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-subtitle text-secondary mb-4">Configurações de Pagamento</h6>
                                    <form>
                                        <div class="mb-3">
                                            <label class="form-label">Gateway de Pagamento</label>
                                            <select class="form-select">
                                                <option value="stripe">Stripe</option>
                                                <option value="paypal">PayPal</option>
                                                <option value="mercadopago">MercadoPago</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Chave da API</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Chave Secreta</label>
                                            <input type="password" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Moeda Padrão</label>
                                            <select class="form-select">
                                                <option value="BRL">Real Brasileiro (BRL)</option>
                                                <option value="USD">Dólar Americano (USD)</option>
                                                <option value="EUR">Euro (EUR)</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" id="testMode">
                                                <label class="form-check-label" for="testMode">Modo de Teste</label>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- Integrações -->
                        <div class="tab-pane fade" id="integracoes">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-subtitle text-secondary mb-4">Integrações</h6>
                                    <div class="list-group">
                                        <div class="list-group-item bg-dark border-secondary">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <h6 class="mb-1">Google Analytics</h6>
                                                    <p class="text-secondary mb-0">Acompanhe as métricas do seu site</p>
                                                </div>
                                                <button class="btn btn-accent">Conectar</button>
                                            </div>
                                        </div>
                                        <div class="list-group-item bg-dark border-secondary">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <h6 class="mb-1">Mailchimp</h6>
                                                    <p class="text-secondary mb-0">Integração com email marketing</p>
                                                </div>
                                                <button class="btn btn-accent">Conectar</button>
                                            </div>
                                        </div>
                                        <div class="list-group-item bg-dark border-secondary">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <h6 class="mb-1">Zendesk</h6>
                                                    <p class="text-secondary mb-0">Suporte ao cliente</p>
                                                </div>
                                                <button class="btn btn-accent">Conectar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Backup -->
                        <div class="tab-pane fade" id="backup">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-subtitle text-secondary mb-4">Backup</h6>
                                    <div class="mb-4">
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <div>
                                                <h6 class="mb-1">Backup Automático</h6>
                                                <p class="text-secondary mb-0">Configurar backup automático da plataforma</p>
                                            </div>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" id="autoBackup" checked>
                                            </div>
                                        </div>
                                        <select class="form-select mb-3">
                                            <option value="daily">Diário</option>
                                            <option value="weekly">Semanal</option>
                                            <option value="monthly">Mensal</option>
                                        </select>
                                    </div>
                                    <div class="mb-4">
                                        <h6 class="mb-3">Backup Manual</h6>
                                        <button class="btn btn-accent">
                                            <i class="bi bi-download me-2"></i>Fazer Backup Agora
                                        </button>
                                    </div>
                                    <div>
                                        <h6 class="mb-3">Backups Recentes</h6>
                                        <div class="list-group">
                                            <div class="list-group-item bg-dark border-secondary">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <h6 class="mb-1">Backup_20240323</h6>
                                                        <p class="text-secondary mb-0">23/03/2024 - 15:30 - 256MB</p>
                                                    </div>
                                                    <div class="btn-group">
                                                        <button class="btn btn-subtle">
                                                            <i class="bi bi-download"></i>
                                                        </button>
                                                        <button class="btn btn-subtle">
                                                            <i class="bi bi-arrow-clockwise"></i>
                                                        </button>
                                                        <button class="btn btn-subtle text-danger">
                                                            <i class="bi bi-trash"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Logs -->
                        <div class="tab-pane fade" id="logs">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-subtitle text-secondary mb-4">Logs do Sistema</h6>
                                    <div class="mb-3">
                                        <select class="form-select mb-3">
                                            <option value="all">Todos os Logs</option>
                                            <option value="error">Erros</option>
                                            <option value="warning">Avisos</option>
                                            <option value="info">Informações</option>
                                        </select>
                                    </div>
                                    <div class="bg-dark p-3 rounded" style="height: 400px; overflow-y: auto;">
                                        <pre class="text-secondary mb-0" style="font-size: 12px;">
[2024-03-23 15:30:45] INFO: Sistema iniciado
[2024-03-23 15:31:12] INFO: Novo usuário registrado (ID: 1234)
[2024-03-23 15:32:01] WARNING: Tentativa de login falhou
[2024-03-23 15:35:23] ERROR: Falha na conexão com o banco de dados
                                        </pre>
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

    <!-- Menu Toggle Script -->
    <script>
        document.getElementById('menuToggle').addEventListener('click', function() {
            document.getElementById('sidebar').classList.toggle('show');
        });
    </script>
</body>
</html> 