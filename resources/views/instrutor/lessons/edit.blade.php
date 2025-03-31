<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Aula - SpaceSeat</title>

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
            border-color: rgba(108, 71, 255, 0.5);
            background-color: rgba(108, 71, 255, 0.02);
        }
        
        .media-preview {
            max-width: 100%;
            max-height: 120px;
            border-radius: 4px;
            margin-bottom: 10px;
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
                width: 250px;
                background-color: var(--bg-color);
                border-right: var(--border);
                transition: left 0.3s ease;
                z-index: 900;
                overflow-y: auto;
            }

            aside.show {
                left: 0;
            }

            .content-wrapper {
                padding-left: 0 !important;
            }
        }
    </style>
</head>
<body>
    <div class="mobile-header">
        <button class="menu-toggle">
            <i class="bi bi-list"></i>
        </button>
        <div class="d-flex align-items-center">
            <span class="h6 mb-0 me-2">SpaceSeat</span>
            <span class="badge bg-accent">Instrutor</span>
        </div>
    </div>

    <div class="d-flex min-vh-100">
        <!-- Sidebar -->
        <aside class="d-flex flex-column border-end p-3" style="width: 250px; position: sticky; top: 0; height: 100vh; overflow-y: auto;">
            <div class="d-flex align-items-center mb-4 mt-2">
                <div>
                    <h6 class="mb-1">SpaceSeat</h6>
                    <div class="d-flex align-items-center">
                        <span class="badge bg-accent me-2">Instrutor</span>
                        <small class="text-secondary">{{ $lesson->module->course->title }}</small>
                    </div>
                </div>
            </div>

            <ul class="nav flex-column mb-auto w-100">
                <li class="mb-1">
                    <a href="{{ route('instrutor.dashboard') }}" class="nav-link">
                        <i class="bi bi-grid me-2"></i> Dashboard
                    </a>
                </li>
                <li class="mb-1">
                    <a href="{{ route('instrutor.cursos.index') }}" class="nav-link active">
                        <i class="bi bi-book me-2"></i> Meus Cursos
                    </a>
                </li>
                <li class="mb-1">
                    <a href="{{ route('instrutor.alunos.index') }}" class="nav-link">
                        <i class="bi bi-people me-2"></i> Meus Alunos
                    </a>
                </li>
                <li class="mb-1">
                    <a href="{{ route('instrutor.perfil.index') }}" class="nav-link">
                        <i class="bi bi-person-circle me-2"></i> Perfil
                    </a>
                </li>
            </ul>

            <div class="border-top pt-3 mt-3">
                <a href="{{ route('logout') }}" class="nav-link text-danger">
                    <i class="bi bi-box-arrow-left me-2"></i> Sair
                </a>
            </div>
        </aside>

        <!-- Main Content -->
        <div class="content-wrapper flex-grow-1 p-4">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-1">
                            <li class="breadcrumb-item"><a href="{{ route('instrutor.cursos.index') }}" class="text-decoration-none text-secondary">Meus Cursos</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('instrutor.cursos.show', $lesson->module->course->id) }}" class="text-decoration-none text-secondary">{{ $lesson->module->course->title }}</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('instrutor.modulos.index', $lesson->module->course->id) }}" class="text-decoration-none text-secondary">Módulos</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Editar Aula</li>
                        </ol>
                    </nav>
                    <h4 class="fw-bold mb-0">Editar Aula</h4>
                </div>
                <a href="{{ route('instrutor.lessons.show', $lesson->id) }}" class="btn btn-outline-accent">
                    <i class="bi bi-arrow-left me-1"></i> Voltar
                </a>
            </div>

            <div class="card p-4 mb-4">
                <form action="{{ route('instrutor.lessons.update', $lesson->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    
                    <div class="mb-3">
                        <label for="title" class="form-label">Título da Aula</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ $lesson->title }}" required placeholder="Digite o título da aula" maxlength="100">
                        <div class="character-count">0/100 caracteres</div>
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Descrição da Aula</label>
                        <textarea class="form-control" id="description" name="description" rows="3" placeholder="Digite uma breve descrição da aula" maxlength="255">{{ $lesson->description }}</textarea>
                        <div class="character-count">0/255 caracteres</div>
                    </div>

                    <div class="mb-3">
                        <label for="type" class="form-label">Tipo de Aula</label>
                        <select class="form-select" id="type" name="type" required>
                            <option value="video" {{ $lesson->type == 'video' ? 'selected' : '' }}>Vídeo</option>
                            <option value="text" {{ $lesson->type == 'text' ? 'selected' : '' }}>Texto</option>
                            <option value="quiz" {{ $lesson->type == 'quiz' ? 'selected' : '' }}>Quiz</option>
                        </select>
                    </div>

                    <div id="videoFields" class="mb-3 {{ $lesson->type != 'video' ? 'd-none' : '' }}">
                        <label class="form-label">Vídeo da Aula</label>
                        <div class="mb-3">
                            <label for="video_url" class="form-label">URL do Vídeo</label>
                            <input type="url" class="form-control" id="video_url" name="video_url" value="{{ $lesson->video_url }}" placeholder="URL do vídeo (YouTube, Vimeo, etc)">
                        </div>
                        
                        <div class="mb-3">
                            <label for="video_duration" class="form-label">Duração do Vídeo (minutos)</label>
                            <input type="number" class="form-control" id="video_duration" name="video_duration" value="{{ $lesson->duration }}" min="1" placeholder="Ex: 45">
                        </div>
                    </div>

                    <div id="textFields" class="mb-3 {{ $lesson->type != 'text' ? 'd-none' : '' }}">
                        <label for="content" class="form-label">Conteúdo da Aula</label>
                        <textarea class="form-control" id="content" name="content" rows="10" placeholder="Digite o conteúdo da aula...">{{ $lesson->content }}</textarea>
                    </div>

                    <div id="quizFields" class="mb-3 {{ $lesson->type != 'quiz' ? 'd-none' : '' }}">
                        <label class="form-label">Perguntas do Quiz</label>
                        <div id="questionsContainer">
                            @if($lesson->type == 'quiz' && isset($lesson->questions))
                                @foreach($lesson->questions as $index => $question)
                                    <div class="card mb-3 p-3 question-card">
                                        <div class="mb-3">
                                            <label class="form-label">Pergunta #{{ $index + 1 }}</label>
                                            <input type="text" class="form-control" name="questions[{{ $index }}][text]" value="{{ $question['text'] }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Alternativas</label>
                                            @foreach($question['options'] as $optIndex => $option)
                                                <div class="input-group mb-2">
                                                    <div class="input-group-text">
                                                        <input class="form-check-input mt-0" type="radio" name="questions[{{ $index }}][correct]" value="{{ $optIndex }}" {{ $optIndex == $question['correct'] ? 'checked' : '' }}>
                                                    </div>
                                                    <input type="text" class="form-control" name="questions[{{ $index }}][options][{{ $optIndex }}]" value="{{ $option }}" required>
                                                </div>
                                            @endforeach
                                        </div>
                                        <button type="button" class="btn btn-outline-danger btn-sm align-self-end" onclick="removeQuestion(this)">Remover Pergunta</button>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                        <button type="button" id="addQuestion" class="btn btn-outline-accent">
                            <i class="bi bi-plus-circle me-1"></i> Adicionar Pergunta
                        </button>
                    </div>

                    <div class="mb-3">
                        <label for="order" class="form-label">Ordem da Aula</label>
                        <input type="number" class="form-control" id="order" name="order" value="{{ $lesson->order }}" min="1" placeholder="Ex: 1">
                    </div>

                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="is_free" id="is_free" {{ $lesson->is_free ? 'checked' : '' }}>
                            <label class="form-check-label" for="is_free">
                                Aula Gratuita (pré-visualização)
                            </label>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end gap-2">
                        <a href="{{ route('instrutor.lessons.show', $lesson->id) }}" class="btn btn-outline-accent">Cancelar</a>
                        <button type="submit" class="btn btn-accent">Salvar Alterações</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Toggle sidebar on mobile
        document.querySelector('.menu-toggle')?.addEventListener('click', function() {
            document.querySelector('aside').classList.toggle('show');
        });
        
        // Character counter for text inputs
        document.querySelectorAll('[maxlength]').forEach(input => {
            const counter = input.nextElementSibling;
            if (counter && counter.classList.contains('character-count')) {
                const updateCount = () => {
                    const used = input.value.length;
                    const max = input.getAttribute('maxlength');
                    counter.textContent = `${used}/${max} caracteres`;
                    
                    if (used > max * 0.9) {
                        counter.classList.add('danger');
                        counter.classList.remove('warning');
                    } else if (used > max * 0.7) {
                        counter.classList.add('warning');
                        counter.classList.remove('danger');
                    } else {
                        counter.classList.remove('warning', 'danger');
                    }
                };
                
                input.addEventListener('input', updateCount);
                updateCount(); // Inicializa o contador
            }
        });
        
        // Show/hide fields based on lesson type
        document.getElementById('type').addEventListener('change', function() {
            const type = this.value;
            document.getElementById('videoFields').classList.toggle('d-none', type !== 'video');
            document.getElementById('textFields').classList.toggle('d-none', type !== 'text');
            document.getElementById('quizFields').classList.toggle('d-none', type !== 'quiz');
        });
        
        // Quiz question management
        let questionCount = document.querySelectorAll('.question-card').length || 0;
        
        document.getElementById('addQuestion')?.addEventListener('click', function() {
            const questionsContainer = document.getElementById('questionsContainer');
            const questionCard = document.createElement('div');
            questionCard.className = 'card mb-3 p-3 question-card';
            questionCard.innerHTML = `
                <div class="mb-3">
                    <label class="form-label">Pergunta #${questionCount + 1}</label>
                    <input type="text" class="form-control" name="questions[${questionCount}][text]" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Alternativas</label>
                    <div class="input-group mb-2">
                        <div class="input-group-text">
                            <input class="form-check-input mt-0" type="radio" name="questions[${questionCount}][correct]" value="0" checked>
                        </div>
                        <input type="text" class="form-control" name="questions[${questionCount}][options][0]" required>
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-text">
                            <input class="form-check-input mt-0" type="radio" name="questions[${questionCount}][correct]" value="1">
                        </div>
                        <input type="text" class="form-control" name="questions[${questionCount}][options][1]" required>
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-text">
                            <input class="form-check-input mt-0" type="radio" name="questions[${questionCount}][correct]" value="2">
                        </div>
                        <input type="text" class="form-control" name="questions[${questionCount}][options][2]" required>
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-text">
                            <input class="form-check-input mt-0" type="radio" name="questions[${questionCount}][correct]" value="3">
                        </div>
                        <input type="text" class="form-control" name="questions[${questionCount}][options][3]" required>
                    </div>
                </div>
                <button type="button" class="btn btn-outline-danger btn-sm align-self-end" onclick="removeQuestion(this)">Remover Pergunta</button>
            `;
            questionsContainer.appendChild(questionCard);
            questionCount++;
        });
        
        function removeQuestion(button) {
            const card = button.closest('.question-card');
            card.remove();
            
            // Reordena os índices das perguntas restantes
            const questions = document.querySelectorAll('.question-card');
            questions.forEach((question, index) => {
                const label = question.querySelector('label');
                if (label.textContent.startsWith('Pergunta #')) {
                    label.textContent = `Pergunta #${index + 1}`;
                }
                
                // Atualiza os nomes dos campos
                const textInput = question.querySelector('input[name^="questions"][name$="[text]"]');
                const optionInputs = question.querySelectorAll('input[name^="questions"][name$="]"]');
                const radioInputs = question.querySelectorAll('input[type="radio"]');
                
                if (textInput) {
                    textInput.name = `questions[${index}][text]`;
                }
                
                optionInputs.forEach((input, optIndex) => {
                    if (input.name.includes('[options]')) {
                        input.name = `questions[${index}][options][${optIndex}]`;
                    }
                });
                
                radioInputs.forEach(radio => {
                    radio.name = `questions[${index}][correct]`;
                });
            });
            
            questionCount = questions.length;
        }
    </script>
</body>
</html> 