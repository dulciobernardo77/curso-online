<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Aula - SpaceSeat</title>

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
        
        /* Estilo para o upload de mídia */
        .media-upload-container {
            width: 100%;
            height: 160px;
            border: 2px dashed rgba(255, 255, 255, 0.1);
            border-radius: 8px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.2s;
        }
        
        .media-upload-container:hover {
            border-color: var(--accent-color);
        }
        
        .media-upload-container .upload-icon {
            font-size: 2rem;
            color: var(--text-secondary);
            margin-bottom: 10px;
        }
        
        .media-upload-container .upload-text {
            color: var(--text-secondary);
            font-size: 14px;
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
                            <a href="{{ route('instrutor.modulos.index', $modulo->curso_id) }}" class="text-secondary me-3">
                                <i class="bi bi-arrow-left"></i>
                            </a>
                            <div>
                                <h1 class="fs-5 fw-medium m-0">Adicionar Nova Aula</h1>
                                <p class="text-secondary fs-small mt-1 mb-0">{{ $modulo->title }}</p>
                            </div>
                        </div>
                    </header>

                    <!-- Formulário de criação de aula -->
                    <form action="{{ route('instrutor.lessons.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="modulo_id" value="{{ $modulo->id }}">
                        
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
                                <h5 class="fw-medium mb-4">Informações da Aula</h5>
                                
                                <div class="mb-3">
                                    <label for="title" class="form-label">Título da Aula</label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}" required>
                                    <div class="character-count">0/100 caracteres</div>
                                    @error('title')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                                <div class="mb-3">
                                    <label for="description" class="form-label">Descrição</label>
                                    <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="3">{{ old('description') }}</textarea>
                                    <div class="character-count">0/300 caracteres</div>
                                    @error('description')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                                <div class="row mb-3">
                                    <div class="col-md-4">
                                        <label for="duration_minutes" class="form-label">Duração (minutos)</label>
                                        <input type="number" min="1" class="form-control @error('duration_minutes') is-invalid @enderror" id="duration_minutes" name="duration_minutes" value="{{ old('duration_minutes') }}">
                                        @error('duration_minutes')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    
                                    <div class="col-md-4">
                                        <label for="difficulty" class="form-label">Dificuldade</label>
                                        <select class="form-select @error('difficulty') is-invalid @enderror" id="difficulty" name="difficulty">
                                            <option value="1" {{ old('difficulty') == '1' ? 'selected' : '' }}>Básica</option>
                                            <option value="2" {{ old('difficulty') == '2' ? 'selected' : '' }}>Intermediária</option>
                                            <option value="3" {{ old('difficulty') == '3' ? 'selected' : '' }}>Avançada</option>
                                        </select>
                                        @error('difficulty')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    
                                    <div class="col-md-4">
                                        <label for="type" class="form-label">Tipo de Aula</label>
                                        <select class="form-select @error('type') is-invalid @enderror" id="type" name="type">
                                            <option value="video" {{ old('type') == 'video' ? 'selected' : '' }}>Vídeo</option>
                                            <option value="text" {{ old('type') == 'text' ? 'selected' : '' }}>Texto</option>
                                            <option value="quiz" {{ old('type') == 'quiz' ? 'selected' : '' }}>Quiz</option>
                                        </select>
                                        @error('type')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" id="is_free" name="is_free" value="1" {{ old('is_free') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="is_free">
                                        Disponibilizar como conteúdo gratuito de amostra
                                    </label>
                                    <div class="text-secondary fs-small mt-1">Marque esta opção se deseja que esta aula esteja disponível para usuários não matriculados.</div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Seção de abas para os diferentes tipos de conteúdo -->
                        <div class="card mb-4">
                            <div class="card-body">
                                <ul class="nav nav-tabs mb-4" id="contentTabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="video-tab" data-bs-toggle="tab" data-bs-target="#video-content" type="button" role="tab" aria-controls="video-content" aria-selected="true">Vídeo</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="text-tab" data-bs-toggle="tab" data-bs-target="#text-content" type="button" role="tab" aria-controls="text-content" aria-selected="false">Conteúdo de Texto</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="files-tab" data-bs-toggle="tab" data-bs-target="#files-content" type="button" role="tab" aria-controls="files-content" aria-selected="false">Arquivos</button>
                                    </li>
                                </ul>
                                
                                <div class="tab-content" id="contentTabsContent">
                                    <!-- Aba de Vídeo -->
                                    <div class="tab-pane fade show active" id="video-content" role="tabpanel" aria-labelledby="video-tab">
                                        <div class="mb-3">
                                            <label for="video_type" class="form-label">Tipo de Vídeo</label>
                                            <select class="form-select" id="video_type" name="video_type">
                                                <option value="youtube" {{ old('video_type') == 'youtube' ? 'selected' : '' }}>YouTube</option>
                                                <option value="vimeo" {{ old('video_type') == 'vimeo' ? 'selected' : '' }}>Vimeo</option>
                                                <option value="upload" {{ old('video_type') == 'upload' ? 'selected' : '' }}>Upload</option>
                                            </select>
                                        </div>
                                        
                                        <div id="youtubeVimeoInput" class="mb-3">
                                            <label for="video_url" class="form-label">URL do Vídeo</label>
                                            <input type="text" class="form-control" id="video_url" name="video_url" value="{{ old('video_url') }}" placeholder="Ex: https://www.youtube.com/watch?v=abcdef">
                                            <div class="text-secondary fs-small mt-1">Cole o link completo do vídeo (YouTube ou Vimeo)</div>
                                        </div>
                                        
                                        <div id="uploadVideoInput" class="mb-3" style="display: none;">
                                            <label class="form-label">Arquivo de Vídeo</label>
                                            <div class="media-upload-container" id="videoUploadContainer">
                                                <input type="file" id="video_file" name="video_file" class="d-none" accept="video/mp4,video/webm">
                                                <i class="bi bi-cloud-upload upload-icon"></i>
                                                <p class="upload-text">Clique para fazer upload do vídeo<br>ou arraste e solte aqui</p>
                                                <p class="text-secondary fs-small mt-2">Formatos suportados: MP4, WebM (máx. 1GB)</p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Aba de Conteúdo de Texto -->
                                    <div class="tab-pane fade" id="text-content" role="tabpanel" aria-labelledby="text-tab">
                                        <div class="mb-3">
                                            <label for="content" class="form-label">Conteúdo da Aula</label>
                                            <textarea class="form-control" id="content" name="content" rows="10">{{ old('content') }}</textarea>
                                            <div class="text-secondary fs-small mt-1">Este editor suporta formatação Markdown. Você pode incluir títulos, listas, links, etc.</div>
                                        </div>
                                    </div>
                                    
                                    <!-- Aba de Arquivos -->
                                    <div class="tab-pane fade" id="files-content" role="tabpanel" aria-labelledby="files-tab">
                                        <div class="mb-3">
                                            <label class="form-label">Arquivos Adicionais</label>
                                            <div class="media-upload-container" id="filesUploadContainer">
                                                <input type="file" id="attachment_files" name="attachment_files[]" class="d-none" multiple>
                                                <i class="bi bi-cloud-upload upload-icon"></i>
                                                <p class="upload-text">Clique para fazer upload de arquivos<br>ou arraste e solte aqui</p>
                                                <p class="text-secondary fs-small mt-2">PDFs, imagens, documentos, etc. (máx. 50MB por arquivo)</p>
                                            </div>
                                            <div id="filesList" class="mt-3"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="d-flex justify-content-end gap-2 mb-5">
                            <a href="{{ route('instrutor.modulos.index', $modulo->curso_id) }}" class="btn btn-outline-accent">Cancelar</a>
                            <button type="submit" class="btn btn-accent">Criar Aula</button>
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
            
            // Alternar entre tipos de vídeo
            const videoTypeSelect = document.getElementById('video_type');
            const youtubeVimeoInput = document.getElementById('youtubeVimeoInput');
            const uploadVideoInput = document.getElementById('uploadVideoInput');
            
            videoTypeSelect.addEventListener('change', function() {
                if (this.value === 'upload') {
                    youtubeVimeoInput.style.display = 'none';
                    uploadVideoInput.style.display = 'block';
                } else {
                    youtubeVimeoInput.style.display = 'block';
                    uploadVideoInput.style.display = 'none';
                }
            });
            
            // Upload de vídeo
            const videoUploadContainer = document.getElementById('videoUploadContainer');
            const videoFileInput = document.getElementById('video_file');
            
            videoUploadContainer.addEventListener('click', function() {
                videoFileInput.click();
            });
            
            videoFileInput.addEventListener('change', function() {
                if (this.files && this.files[0]) {
                    const fileName = this.files[0].name;
                    const fileSize = (this.files[0].size / (1024 * 1024)).toFixed(2); // MB
                    
                    videoUploadContainer.innerHTML = `
                        <i class="bi bi-file-earmark-play text-accent mb-2" style="font-size: 32px;"></i>
                        <p class="mb-1">${fileName}</p>
                        <p class="text-secondary fs-small">${fileSize} MB</p>
                    `;
                }
            });
            
            // Upload de arquivos
            const filesUploadContainer = document.getElementById('filesUploadContainer');
            const attachmentFilesInput = document.getElementById('attachment_files');
            const filesList = document.getElementById('filesList');
            
            filesUploadContainer.addEventListener('click', function() {
                attachmentFilesInput.click();
            });
            
            attachmentFilesInput.addEventListener('change', function() {
                filesList.innerHTML = '';
                
                if (this.files && this.files.length > 0) {
                    for (let i = 0; i < this.files.length; i++) {
                        const file = this.files[i];
                        const fileName = file.name;
                        const fileSize = (file.size / (1024 * 1024)).toFixed(2); // MB
                        
                        const fileItem = document.createElement('div');
                        fileItem.className = 'd-flex align-items-center mb-2 p-2 border border-secondary rounded';
                        
                        let fileIcon = 'bi-file-earmark';
                        if (fileName.match(/\.(jpg|jpeg|png|gif)$/i)) {
                            fileIcon = 'bi-file-earmark-image';
                        } else if (fileName.match(/\.(pdf)$/i)) {
                            fileIcon = 'bi-file-earmark-pdf';
                        } else if (fileName.match(/\.(doc|docx)$/i)) {
                            fileIcon = 'bi-file-earmark-word';
                        } else if (fileName.match(/\.(xls|xlsx)$/i)) {
                            fileIcon = 'bi-file-earmark-excel';
                        } else if (fileName.match(/\.(zip|rar)$/i)) {
                            fileIcon = 'bi-file-earmark-zip';
                        }
                        
                        fileItem.innerHTML = `
                            <i class="bi ${fileIcon} text-accent me-2"></i>
                            <div class="flex-grow-1">
                                <p class="mb-0">${fileName}</p>
                                <p class="text-secondary fs-small mb-0">${fileSize} MB</p>
                            </div>
                        `;
                        
                        filesList.appendChild(fileItem);
                    }
                }
            });
            
            // Alternar tipos de aula
            const typeSelect = document.getElementById('type');
            const contentTabs = document.getElementById('contentTabs');
            
            typeSelect.addEventListener('change', function() {
                if (this.value === 'video') {
                    document.getElementById('video-tab').click();
                } else if (this.value === 'text') {
                    document.getElementById('text-tab').click();
                }
            });
            
            // Atualizar tipo de aula quando muda a aba
            document.getElementById('video-tab').addEventListener('click', function() {
                typeSelect.value = 'video';
            });
            
            document.getElementById('text-tab').addEventListener('click', function() {
                typeSelect.value = 'text';
            });
        });
    </script>
</body>
</html>
