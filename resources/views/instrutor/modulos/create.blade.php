<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Módulo - {{ $curso->title }} - SpaceSeat</title>

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
        
        /* Estilos para o contador de palavras/caracteres */
        .character-count {
            font-size: 12px;
            color: var(--text-secondary);
            text-align: right;
            margin-top: 4px;
        }
        
        .character-count.warning {
            color: #ffc107;
        }
        
        .character-count.danger {
            color: #dc3545;
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
                <div class="mx-auto" style="max-width: 800px;">
                    <!-- Cabeçalho -->
                    <header class="mb-4">
                        <div class="d-flex align-items-center mb-4">
                            <a href="{{ route('instrutor.modulos.index', $curso->id) }}" class="text-secondary me-3">
                                <i class="bi bi-arrow-left"></i>
                            </a>
                            <div>
                                <h1 class="fs-5 fw-medium m-0">Adicionar Novo Módulo</h1>
                                <p class="text-secondary fs-small mt-1 mb-0">{{ $curso->title }}</p>
                            </div>
                        </div>
                    </header>

                    <!-- Formulário de criação de módulo -->
                    <form action="{{ route('instrutor.modulos.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="curso_id" value="{{ $curso->id }}">
                        
                        <!-- Alertas de erro -->
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        
                        <div class="card mb-4">
                            <div class="card-body">
                                <h5 class="fw-medium mb-4">Informações do Módulo</h5>
                                
                                <div class="mb-3">
                                    <label for="title" class="form-label">Título do Módulo</label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}" required>
                                    <div class="character-count">0/100 caracteres</div>
                                    @error('title')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                                <div class="mb-3">
                                    <label for="description" class="form-label">Descrição</label>
                                    <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="4">{{ old('description') }}</textarea>
                                    <div class="character-count">0/300 caracteres</div>
                                    @error('description')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" id="is_free" name="is_free" value="1" {{ old('is_free') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="is_free">
                                        Disponibilizar como conteúdo gratuito de amostra
                                    </label>
                                    <div class="text-secondary fs-small mt-1">Marque esta opção se deseja que este módulo esteja disponível para usuários não matriculados.</div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="card mb-4">
                            <div class="card-body">
                                <h5 class="fw-medium mb-3">Objetivos de Aprendizagem</h5>
                                <p class="text-secondary fs-small mb-3">Descreva o que os alunos irão aprender neste módulo.</p>
                                
                                <div class="mb-3" id="learningObjectivesContainer">
                                    <div class="d-flex mb-2">
                                        <input type="text" class="form-control me-2" name="learning_objectives[]" placeholder="Ex: Aprender os conceitos básicos de HTML">
                                        <button type="button" class="btn btn-sm btn-outline-danger remove-objective" disabled>
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </div>
                                </div>
                                
                                <button type="button" class="btn btn-sm btn-outline-accent" id="addObjectiveBtn">
                                    <i class="bi bi-plus-circle me-1"></i>Adicionar Objetivo
                                </button>
                            </div>
                        </div>
                        
                        <div class="d-flex justify-content-end gap-2 mb-5">
                            <a href="{{ route('instrutor.modulos.index', $curso->id) }}" class="btn btn-outline-accent">Cancelar</a>
                            <button type="submit" class="btn btn-accent">Criar Módulo</button>
                        </div>
                    </form>
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
            
            // Contadores de caracteres
            const titleInput = document.getElementById('title');
            const descriptionInput = document.getElementById('description');
            const titleCount = titleInput.nextElementSibling;
            const descriptionCount = descriptionInput.nextElementSibling;
            
            titleInput.addEventListener('input', function() {
                const count = this.value.length;
                titleCount.textContent = `${count}/100 caracteres`;
                
                if (count > 80 && count <= 100) {
                    titleCount.classList.add('warning');
                    titleCount.classList.remove('danger');
                } else if (count > 100) {
                    titleCount.classList.add('danger');
                    titleCount.classList.remove('warning');
                } else {
                    titleCount.classList.remove('warning', 'danger');
                }
            });
            
            descriptionInput.addEventListener('input', function() {
                const count = this.value.length;
                descriptionCount.textContent = `${count}/300 caracteres`;
                
                if (count > 240 && count <= 300) {
                    descriptionCount.classList.add('warning');
                    descriptionCount.classList.remove('danger');
                } else if (count > 300) {
                    descriptionCount.classList.add('danger');
                    descriptionCount.classList.remove('warning');
                } else {
                    descriptionCount.classList.remove('warning', 'danger');
                }
            });
            
            // Adicionar objetivos de aprendizagem
            const objectivesContainer = document.getElementById('learningObjectivesContainer');
            const addObjectiveBtn = document.getElementById('addObjectiveBtn');
            
            addObjectiveBtn.addEventListener('click', function() {
                const objectiveDiv = document.createElement('div');
                objectiveDiv.className = 'd-flex mb-2';
                objectiveDiv.innerHTML = `
                    <input type="text" class="form-control me-2" name="learning_objectives[]" placeholder="Ex: Descreva outro objetivo de aprendizagem">
                    <button type="button" class="btn btn-sm btn-outline-danger remove-objective">
                        <i class="bi bi-trash"></i>
                    </button>
                `;
                
                objectivesContainer.appendChild(objectiveDiv);
                
                // Habilitar o botão de remover no primeiro objetivo
                const firstRemoveBtn = objectivesContainer.querySelector('.remove-objective');
                if (firstRemoveBtn.disabled) {
                    firstRemoveBtn.disabled = false;
                }
                
                // Adicionar evento para remover objetivo
                const removeBtn = objectiveDiv.querySelector('.remove-objective');
                removeBtn.addEventListener('click', function() {
                    objectiveDiv.remove();
                    
                    // Se houver apenas um objetivo, desabilitar seu botão de remover
                    const objectives = objectivesContainer.querySelectorAll('.d-flex');
                    if (objectives.length === 1) {
                        objectives[0].querySelector('.remove-objective').disabled = true;
                    }
                });
            });
        });
    </script>
</body>
</html> 