<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Curso - SpaceSeat</title>

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
        
        /* Estilo para o upload de imagem */
        .image-upload-container {
            width: 100%;
            height: 200px;
            border: 2px dashed rgba(255, 255, 255, 0.1);
            border-radius: 8px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.2s;
            background-size: cover;
            background-position: center;
            position: relative;
        }
        
        .image-upload-container:hover {
            border-color: var(--accent-color);
        }
        
        .image-upload-container .upload-icon {
            font-size: 2rem;
            color: var(--text-secondary);
            margin-bottom: 10px;
        }
        
        .image-upload-container .upload-text {
            color: var(--text-secondary);
            font-size: 14px;
        }
        
        .image-upload-container.has-image .upload-overlay {
            display: none;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            border-radius: 6px;
            align-items: center;
            justify-content: center;
        }
        
        .image-upload-container.has-image:hover .upload-overlay {
            display: flex;
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
                            <a href="{{ route('instrutor.cursos.index') }}" class="text-secondary me-3">
                                <i class="bi bi-arrow-left"></i>
                            </a>
                            <div>
                                <h1 class="fs-5 fw-medium m-0">Editar Curso</h1>
                                <p class="text-secondary fs-small mt-1 mb-0">Faça alterações nos detalhes do seu curso</p>
                            </div>
                        </div>
                    </header>

                    <!-- Abas de navegação -->
                    <ul class="nav nav-tabs mb-4">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('instrutor.cursos.edit', $curso->id) }}">Informações</a>
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

                    <!-- Formulário de edição de curso -->
                    <form action="{{ route('instrutor.cursos.update', $curso->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        
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
                                <h5 class="fw-medium mb-4">Informações Básicas</h5>
                                
                                <div class="mb-3">
                                    <label for="title" class="form-label">Título do Curso</label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $curso->title) }}" required>
                                    <div class="character-count">{{ strlen($curso->title) }}/100 caracteres</div>
                                    @error('title')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                                <div class="mb-3">
                                    <label for="description" class="form-label">Descrição</label>
                                    <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="4" required>{{ old('description', $curso->description) }}</textarea>
                                    <div class="character-count">{{ strlen($curso->description) }}/500 caracteres</div>
                                    @error('description')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                                <div class="mb-3">
                                    <label class="form-label">Imagem do Curso</label>
                                    <div class="image-upload-container has-image" id="imageUploadContainer" style="background-image: url('{{ $curso->image ? asset($curso->image) : asset('images/curso-default.jpg') }}');">
                                        <input type="file" id="image" name="image" class="d-none" accept="image/*">
                                        <div class="upload-content" style="display: none;">
                                            <i class="bi bi-cloud-upload upload-icon"></i>
                                            <p class="upload-text">Clique para fazer upload da imagem<br>ou arraste e solte aqui</p>
                                            <p class="text-secondary fs-small mt-2">Tamanho recomendado: 1280x720px</p>
                                        </div>
                                        <div class="upload-overlay">
                                            <button type="button" class="btn btn-sm btn-accent">Alterar imagem</button>
                                        </div>
                                    </div>
                                    @error('image')
                                        <div class="text-danger fs-small mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        
                        <div class="card mb-4">
                            <div class="card-body">
                                <h5 class="fw-medium mb-4">Detalhes do Curso</h5>
                                
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="category_id" class="form-label">Categoria</label>
                                        <select class="form-select @error('category_id') is-invalid @enderror" id="category_id" name="category_id">
                                            <option value="" disabled>Selecione uma categoria</option>
                                            @if(isset($categories))
                                                @foreach($categories as $category)
                                                    <option value="{{ $category->id }}" {{ old('category_id', $curso->category_id) == $category->id ? 'selected' : '' }}>
                                                        {{ $category->name }}
                                                    </option>
                                                @endforeach
                                            @endif
                                        </select>
                                        @error('category_id')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <label for="level" class="form-label">Nível</label>
                                        <select class="form-select @error('level') is-invalid @enderror" id="level" name="level">
                                            <option value="" disabled>Selecione um nível</option>
                                            <option value="1" {{ old('level', $curso->level) == '1' ? 'selected' : '' }}>Iniciante</option>
                                            <option value="2" {{ old('level', $curso->level) == '2' ? 'selected' : '' }}>Intermediário</option>
                                            <option value="3" {{ old('level', $curso->level) == '3' ? 'selected' : '' }}>Avançado</option>
                                        </select>
                                        @error('level')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="duration_hours" class="form-label">Duração (horas)</label>
                                        <input type="number" min="1" class="form-control @error('duration_hours') is-invalid @enderror" id="duration_hours" name="duration_hours" value="{{ old('duration_hours', $curso->duration_hours) }}">
                                        @error('duration_hours')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <label for="status" class="form-label">Status</label>
                                        <select class="form-select @error('status') is-invalid @enderror" id="status" name="status">
                                            <option value="draft" {{ old('status', $curso->status) == 'draft' ? 'selected' : '' }}>Rascunho</option>
                                            <option value="published" {{ old('status', $curso->status) == 'published' ? 'selected' : '' }}>Publicado</option>
                                            <option value="review" {{ old('status', $curso->status) == 'review' ? 'selected' : '' }}>Em Revisão</option>
                                        </select>
                                        @error('status')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="requirements" class="form-label">Pré-requisitos</label>
                                    <textarea class="form-control @error('requirements') is-invalid @enderror" id="requirements" name="requirements" rows="3">{{ old('requirements', $curso->requirements) }}</textarea>
                                    @error('requirements')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                                <div class="mb-3">
                                    <label for="objectives" class="form-label">Objetivos de Aprendizagem</label>
                                    <textarea class="form-control @error('objectives') is-invalid @enderror" id="objectives" name="objectives" rows="3">{{ old('objectives', $curso->objectives) }}</textarea>
                                    @error('objectives')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        
                        <div class="d-flex justify-content-between mb-5">
                            <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteCourseModal">
                                <i class="bi bi-trash me-1"></i>Excluir Curso
                            </button>
                            <div>
                                <a href="{{ route('instrutor.cursos.index') }}" class="btn btn-outline-accent me-2">Cancelar</a>
                                <button type="submit" class="btn btn-accent">Salvar Alterações</button>
                            </div>
                        </div>
                    </form>
                </div>
            </main>
        </div>
    </div>

    <!-- Modal de Confirmação de Exclusão -->
    <div class="modal fade" id="deleteCourseModal" tabindex="-1" aria-labelledby="deleteCourseModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content bg-dark text-light">
                <div class="modal-header border-0">
                    <h5 class="modal-title" id="deleteCourseModalLabel">Excluir Curso</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Tem certeza que deseja excluir este curso? Esta ação não pode ser desfeita e todos os dados relacionados ao curso serão perdidos.</p>
                </div>
                <div class="modal-footer border-0">
                    <button type="button" class="btn btn-outline-light" data-bs-dismiss="modal">Cancelar</button>
                    <form action="{{ route('instrutor.cursos.destroy', $curso->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Sim, Excluir</button>
                    </form>
                </div>
            </div>
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
            
            // Upload de imagem
            const imageUploadContainer = document.getElementById('imageUploadContainer');
            const imageInput = document.getElementById('image');
            
            imageUploadContainer.addEventListener('click', function() {
                imageInput.click();
            });
            
            imageInput.addEventListener('change', function() {
                if (this.files && this.files[0]) {
                    const reader = new FileReader();
                    
                    reader.onload = function(e) {
                        imageUploadContainer.style.backgroundImage = `url(${e.target.result})`;
                        imageUploadContainer.classList.add('has-image');
                        imageUploadContainer.querySelector('.upload-content').style.display = 'none';
                    }
                    
                    reader.readAsDataURL(this.files[0]);
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
                descriptionCount.textContent = `${count}/500 caracteres`;
                
                if (count > 400 && count <= 500) {
                    descriptionCount.classList.add('warning');
                    descriptionCount.classList.remove('danger');
                } else if (count > 500) {
                    descriptionCount.classList.add('danger');
                    descriptionCount.classList.remove('warning');
                } else {
                    descriptionCount.classList.remove('warning', 'danger');
                }
            });
        });
    </script>
</body>
</html> 