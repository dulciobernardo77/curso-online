<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Perfil - SpaceSeat</title>

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

        .form-label {
            color: var(--text-secondary);
            font-size: 14px;
            margin-bottom: 8px;
            font-weight: 500;
        }

        .form-control, .form-select {
            background-color: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: var(--text-color);
            border-radius: 4px;
            padding: 8px 12px;
            font-size: 14px;
        }

        .form-control:focus, .form-select:focus {
            background-color: rgba(255, 255, 255, 0.07);
            border-color: var(--accent-color);
            box-shadow: none;
            color: var(--text-color);
        }
        
        .form-select {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23ffffff' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='m2 5 6 6 6-6'/%3e%3c/svg%3e");
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
        
        /* Estilos para o avatar do perfil */
        .profile-avatar {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background-color: var(--accent-color);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 36px;
            font-weight: 500;
            position: relative;
            margin-bottom: 16px;
        }
        
        .profile-avatar .edit-avatar {
            position: absolute;
            bottom: 0;
            right: 0;
            width: 30px;
            height: 30px;
            background-color: var(--card-color);
            border: 2px solid var(--bg-color);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            color: var(--text-secondary);
            font-size: 14px;
            transition: all 0.2s;
        }
        
        .profile-avatar .edit-avatar:hover {
            background-color: var(--accent-color);
            color: white;
        }
        
        /* Estilo para as abas do perfil */
        .nav-pills .nav-link {
            margin-right: 8px;
            padding: 8px 16px;
            border-radius: 4px;
            color: var(--text-secondary);
            font-weight: 500;
            font-size: 14px;
        }
        
        .nav-pills .nav-link.active {
            background-color: rgba(108, 71, 255, 0.1);
            color: var(--accent-color);
        }
        
        /* Estilo para os links de redes sociais */
        .social-link {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 36px;
            height: 36px;
            border-radius: 4px;
            background-color: rgba(255, 255, 255, 0.05);
            color: var(--text-secondary);
            margin-right: 8px;
            transition: all 0.2s;
        }
        
        .social-link:hover {
            background-color: rgba(108, 71, 255, 0.1);
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
                    <a href="#" class="nav-link mb-1">
                        <i class="bi bi-people me-2"></i>
                        Alunos
                    </a>
                </nav>
            </aside>

            <!-- Conteúdo principal -->
            <main class="flex-grow-1 py-4 px-4">
                <div class="mx-auto" style="max-width: 800px;">
                    <!-- Cabeçalho -->
                    <header class="mb-4">
                        <h1 class="fs-5 fw-medium mb-1">Meu Perfil</h1>
                        <p class="text-secondary fs-small mb-0">Gerencie suas informações pessoais e credenciais</p>
                    </header>

                    <!-- Abas do perfil -->
                    <ul class="nav nav-pills mb-4">
                        <li class="nav-item">
                            <a class="nav-link active" id="personal-tab" data-bs-toggle="pill" href="#personal">Informações Pessoais</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="account-tab" data-bs-toggle="pill" href="#account">Conta</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="notifications-tab" data-bs-toggle="pill" href="#notifications">Notificações</a>
                        </li>
                    </ul>

                    <!-- Conteúdo das abas -->
                    <div class="tab-content">
                        <!-- Aba de informações pessoais -->
                        <div class="tab-pane fade show active" id="personal">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div class="d-flex flex-column align-items-center mb-4">
                                        <div class="profile-avatar">
                                            {{ substr(Auth::user()->name, 0, 1) }}
                                            <div class="edit-avatar">
                                                <i class="bi bi-pencil"></i>
                                            </div>
                                        </div>
                                        <h5 class="fw-medium mb-1">{{ Auth::user()->name }}</h5>
                                        <p class="text-secondary mb-2">{{ Auth::user()->email }}</p>
                                        <div class="d-flex">
                                            <a href="#" class="social-link"><i class="bi bi-linkedin"></i></a>
                                            <a href="#" class="social-link"><i class="bi bi-twitter"></i></a>
                                            <a href="#" class="social-link"><i class="bi bi-github"></i></a>
                                            <a href="#" class="social-link"><i class="bi bi-globe"></i></a>
                                        </div>
                                    </div>

                                    <form>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <label for="name" class="form-label">Nome Completo</label>
                                                <input type="text" class="form-control" id="name" value="{{ Auth::user()->name }}">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="display_name" class="form-label">Nome de Exibição</label>
                                                <input type="text" class="form-control" id="display_name" value="{{ Auth::user()->name }}">
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="bio" class="form-label">Biografia</label>
                                            <textarea class="form-control" id="bio" rows="3" placeholder="Escreva uma breve descrição sobre você e sua experiência..."></textarea>
                                            <div class="text-secondary fs-small mt-1">Esta biografia será exibida em seus cursos e perfil público.</div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="specialty" class="form-label">Especialidade</label>
                                            <input type="text" class="form-control" id="specialty" placeholder="Ex: Desenvolvimento Web, UI/UX Design, Python, etc.">
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <label for="website" class="form-label">Website</label>
                                                <input type="url" class="form-control" id="website" placeholder="https://seu-site.com">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="linkedin" class="form-label">LinkedIn</label>
                                                <input type="url" class="form-control" id="linkedin" placeholder="https://linkedin.com/in/seu-perfil">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <label for="twitter" class="form-label">Twitter</label>
                                                <input type="url" class="form-control" id="twitter" placeholder="https://twitter.com/seu-perfil">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="github" class="form-label">GitHub</label>
                                                <input type="url" class="form-control" id="github" placeholder="https://github.com/seu-perfil">
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-end mt-4">
                                            <button type="submit" class="btn btn-accent">Salvar Alterações</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- Aba de conta -->
                        <div class="tab-pane fade" id="account">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h5 class="fw-medium mb-4">Informações da Conta</h5>
                                    
                                    <div class="mb-3">
                                        <label for="email" class="form-label">E-mail</label>
                                        <input type="email" class="form-control" id="email" value="{{ Auth::user()->email }}" disabled>
                                        <div class="text-secondary fs-small mt-1">Para alterar seu e-mail, entre em contato com o suporte.</div>
                                    </div>

                                    <hr class="my-4">

                                    <h5 class="fw-medium mb-4">Alterar Senha</h5>
                                    
                                    <form>
                                        <div class="mb-3">
                                            <label for="current_password" class="form-label">Senha Atual</label>
                                            <input type="password" class="form-control" id="current_password">
                                        </div>

                                        <div class="mb-3">
                                            <label for="new_password" class="form-label">Nova Senha</label>
                                            <input type="password" class="form-control" id="new_password">
                                        </div>

                                        <div class="mb-3">
                                            <label for="password_confirmation" class="form-label">Confirmar Nova Senha</label>
                                            <input type="password" class="form-control" id="password_confirmation">
                                            <div class="text-secondary fs-small mt-1">A senha deve ter pelo menos 8 caracteres e incluir letras e números.</div>
                                        </div>

                                        <div class="d-flex justify-content-end mt-4">
                                            <button type="submit" class="btn btn-accent">Atualizar Senha</button>
                                        </div>
                                    </form>

                                    <hr class="my-4">

                                    <h5 class="fw-medium mb-4">Dados Bancários</h5>
                                    
                                    <form>
                                        <div class="mb-3">
                                            <label for="bank_name" class="form-label">Banco</label>
                                            <input type="text" class="form-control" id="bank_name">
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <label for="agency" class="form-label">Agência</label>
                                                <input type="text" class="form-control" id="agency">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="account" class="form-label">Conta</label>
                                                <input type="text" class="form-control" id="account">
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="pix_key" class="form-label">Chave PIX</label>
                                            <input type="text" class="form-control" id="pix_key">
                                        </div>

                                        <div class="d-flex justify-content-end mt-4">
                                            <button type="submit" class="btn btn-accent">Salvar Dados Bancários</button>
                                        </div>
                                    </form>

                                    <hr class="my-4">

                                    <h5 class="fw-medium mb-4 text-danger">Zona de Perigo</h5>
                                    
                                    <p class="text-secondary">Ao desativar sua conta, você perderá acesso a todos os seus cursos e informações associadas. Esta ação não pode ser desfeita.</p>
                                    
                                    <button type="button" class="btn btn-outline-danger">Desativar Minha Conta</button>
                                </div>
                            </div>
                        </div>

                        <!-- Aba de notificações -->
                        <div class="tab-pane fade" id="notifications">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h5 class="fw-medium mb-4">Preferências de Notificação</h5>
                                    
                                    <form>
                                        <h6 class="fw-medium mb-3">Notificações por E-mail</h6>
                                        
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox" id="email_new_student" checked>
                                            <label class="form-check-label" for="email_new_student">
                                                Novos alunos matriculados nos meus cursos
                                            </label>
                                        </div>
                                        
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox" id="email_course_completed" checked>
                                            <label class="form-check-label" for="email_course_completed">
                                                Alunos que completaram meus cursos
                                            </label>
                                        </div>
                                        
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox" id="email_new_review" checked>
                                            <label class="form-check-label" for="email_new_review">
                                                Novas avaliações nos meus cursos
                                            </label>
                                        </div>
                                        
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox" id="email_question" checked>
                                            <label class="form-check-label" for="email_question">
                                                Novas perguntas nos meus cursos
                                            </label>
                                        </div>
                                        
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox" id="email_payment" checked>
                                            <label class="form-check-label" for="email_payment">
                                                Notificações de pagamento
                                            </label>
                                        </div>
                                        
                                        <div class="form-check mb-5">
                                            <input class="form-check-input" type="checkbox" id="email_marketing" checked>
                                            <label class="form-check-label" for="email_marketing">
                                                Newsletters e atualizações da plataforma
                                            </label>
                                        </div>
                                        
                                        <h6 class="fw-medium mb-3">Notificações no Sistema</h6>
                                        
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox" id="notify_new_student" checked>
                                            <label class="form-check-label" for="notify_new_student">
                                                Novos alunos matriculados nos meus cursos
                                            </label>
                                        </div>
                                        
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox" id="notify_course_completed" checked>
                                            <label class="form-check-label" for="notify_course_completed">
                                                Alunos que completaram meus cursos
                                            </label>
                                        </div>
                                        
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox" id="notify_new_review" checked>
                                            <label class="form-check-label" for="notify_new_review">
                                                Novas avaliações nos meus cursos
                                            </label>
                                        </div>
                                        
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox" id="notify_question" checked>
                                            <label class="form-check-label" for="notify_question">
                                                Novas perguntas nos meus cursos
                                            </label>
                                        </div>
                                        
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox" id="notify_payment" checked>
                                            <label class="form-check-label" for="notify_payment">
                                                Notificações de pagamento
                                            </label>
                                        </div>

                                        <div class="d-flex justify-content-end mt-4">
                                            <button type="submit" class="btn btn-accent">Salvar Preferências</button>
                                        </div>
                                    </form>
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