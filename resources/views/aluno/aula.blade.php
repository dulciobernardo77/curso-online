<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $aula->title }} - SpaceSeat</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">

    <style>
        :root {
            --bg-color: #0f1117;
            --card-color: #171a21;
            --sidebar-color: #0d0f14;
            --accent-color: #6c47ff;
            --text-color: #ffffff;
            --text-secondary: #a0a0a0;
            --border: 1px solid #20232b;
        }

        body {
            background-color: var(--bg-color);
            color: #ffffff;
            font-family: system-ui, -apple-system, sans-serif;
            line-height: 1.5;
            font-size: 16px;
        }

        .card {
            background-color: var(--card-color);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            margin-bottom: 24px;
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

        .text-accent {
            color: var(--accent-color);
        }

        .btn-accent {
            color: var(--accent-color);
            background-color: rgba(108, 71, 255, 0.1);
            border: none;
            padding: 8px 16px;
            border-radius: 6px;
            font-size: 14px;
            font-weight: 500;
            text-decoration: none;
            transition: all 0.2s;
            display: inline-block;
        }

        .btn-accent:hover {
            background-color: rgba(108, 71, 255, 0.2);
            color: var(--accent-color);
        }

        .lesson-sidebar {
            height: 100vh;
            overflow-y: auto;
            background-color: var(--sidebar-color);
            border-right: var(--border);
            position: sticky;
            top: 0;
            padding: 20px;
        }

        .lesson-item {
            padding: 12px 16px;
            border-radius: 8px;
            margin-bottom: 6px;
            transition: all 0.2s;
        }

        .lesson-item:hover {
            background-color: rgba(255, 255, 255, 0.03);
        }

        .lesson-item.completed {
            background-color: rgba(52, 199, 89, 0.05);
        }

        .lesson-item.current {
            background-color: rgba(108, 71, 255, 0.05);
        }

        .lesson-icon {
            width: 24px;
            height: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 12px;
            color: var(--text-secondary);
        }

        .lesson-item.completed .lesson-icon {
            color: #34c759;
        }

        .lesson-item.current .lesson-icon {
            color: var(--accent-color);
        }

        .module-title {
            font-size: 12px;
            text-transform: uppercase;
            color: var(--text-secondary);
            margin-bottom: 8px;
            padding-left: 8px;
            letter-spacing: 0.5px;
        }

        .video-container {
            position: relative;
            padding-bottom: 56.25%;
            height: 0;
            overflow: hidden;
            border-radius: 12px;
            background-color: #000;
            margin-bottom: 24px;
        }

        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: 0;
        }

        .tab-content {
            padding: 24px;
            background-color: var(--card-color);
            border-radius: 0 0 12px 12px;
        }

        .nav-tabs {
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .nav-tabs .nav-link {
            color: var(--text-secondary);
            background-color: transparent;
            border: none;
            border-bottom: 2px solid transparent;
            border-radius: 0;
            padding: 12px 16px;
            font-weight: 500;
            margin-bottom: 0;
        }

        .nav-tabs .nav-link:hover {
            color: var(--text-color);
            border-color: transparent;
        }

        .nav-tabs .nav-link.active {
            color: var(--accent-color);
            background-color: transparent;
            border-bottom: 2px solid var(--accent-color);
        }

        .lesson-navigation {
            display: flex;
            justify-content: space-between;
            margin-top: 40px;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        .progress-indicator {
            height: 4px;
            background-color: rgba(255, 255, 255, 0.06);
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
        }

        .progress-bar {
            background-color: var(--accent-color);
            height: 100%;
            width: 0;
            transition: width 0.3s;
        }

        .mark-complete-btn {
            position: fixed;
            bottom: 24px;
            right: 24px;
            z-index: 100;
            padding: 12px 24px;
            border-radius: 30px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
        }

        .resource-item {
            background-color: rgba(255, 255, 255, 0.03);
            border-radius: 8px;
            padding: 16px;
            margin-bottom: 12px;
            transition: all 0.2s;
        }

        .resource-item:hover {
            background-color: rgba(255, 255, 255, 0.05);
        }

        .resource-icon {
            width: 40px;
            height: 40px;
            border-radius: 8px;
            background-color: rgba(108, 71, 255, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 16px;
        }

        .resource-icon i {
            color: var(--accent-color);
            font-size: 20px;
        }

        .nav-divider {
            height: 1px;
            background-color: rgba(255, 255, 255, 0.05);
            margin: 12px 0;
        }

        .comment-item {
            padding: 16px;
            border-radius: 8px;
            background-color: rgba(255, 255, 255, 0.03);
            margin-bottom: 16px;
        }

        .comment-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: var(--card-color);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 12px;
        }

        .comment-avatar i {
            color: var(--text-secondary);
        }

        /* Botão mobile do menu de aulas */
        .lessons-toggle {
            display: none;
            position: fixed;
            bottom: 24px;
            left: 24px;
            z-index: 100;
            width: 48px;
            height: 48px;
            border-radius: 50%;
            background-color: var(--accent-color);
            color: white;
            border: none;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
        }

        @media (max-width: 992px) {
            .lesson-sidebar {
                position: fixed;
                left: -100%;
                top: 0;
                width: 300px !important;
                height: 100vh;
                z-index: 1000;
                transition: left 0.3s ease;
            }

            .lesson-sidebar.show {
                left: 0;
            }

            .lessons-toggle {
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .lessons-backdrop {
                display: none;
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background-color: rgba(0, 0, 0, 0.5);
                z-index: 999;
            }

            .lessons-backdrop.show {
                display: block;
            }
        }
    </style>
</head>

<body>
    <!-- Indicador de progresso no topo -->
    <div class="progress-indicator">
        <div class="progress-bar" id="readingProgress"></div>
    </div>

    <div class="container-fluid p-0">
        <div class="row g-0">
            <!-- Barra lateral com lista de aulas -->
            <div class="col-lg-3 col-xl-2 lesson-sidebar" id="lessonSidebar">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <a href="{{ route('aluno.curso', ['curso' => $curso->id]) }}" class="text-decoration-none">
                        <h3 class="fs-5 fw-bold mb-0">{{ $curso->title }}</h3>
                    </a>
                    <button class="btn-close btn-close-white d-lg-none" id="closeSidebar"></button>
                </div>

                <div class="mb-4">
                    <div class="d-flex justify-content-between mb-2">
                        <p class="text-secondary fs-small mb-0">Seu progresso</p>
                        <p class="text-secondary fs-small mb-0">{{ $curso->modules->sum('lessons.count') }} aulas</p>
                    </div>
                    <div class="progress mb-1">
                        <div class="progress-bar" role="progressbar" style="width: 45%"></div>
                    </div>
                    <p class="text-secondary fs-small mb-0">45% concluído</p>
                </div>

                <div class="mb-4">
                    <!-- Módulos e aulas -->
                    @foreach($modulos as $modulo)
                    <div class="mb-3">
                        <p class="module-title">Módulo {{ $modulo->order }}: {{ $modulo->title }}</p>
                        
                        <!-- Lista de aulas do módulo -->
                        @foreach($modulo->lessons as $lecao)
                        <a href="{{ route('aluno.aula', ['aula' => $lecao->id]) }}" class="text-decoration-none text-light">
                            <div class="lesson-item d-flex align-items-center 
                                @if($lecao->id === $aula->id) current @endif
                                @if(false) completed @endif"
                            >
                                <div class="lesson-icon">
                                    @if(false)
                                    <i class="bi bi-check-circle-fill"></i>
                                    @elseif($lecao->id === $aula->id)
                                    <i class="bi bi-play-circle-fill"></i>
                                    @else
                                    <i class="bi bi-circle"></i>
                                    @endif
                                </div>
                                <div>
                                    <p class="mb-0 fs-small">{{ $lecao->title }}</p>
                                    <p class="text-secondary mb-0" style="font-size: 12px;">{{ $lecao->duration_minutes }} min</p>
                                </div>
                            </div>
                        </a>
                        @endforeach
                    </div>
                    @endforeach
                </div>

                <div class="nav-divider"></div>

                <div class="mt-4">
                    <a href="{{ route('aluno.dashboard') }}" class="nav-link">
                        <i class="bi bi-house-door me-2"></i>
                        Dashboard
                    </a>
                    <a href="{{ route('aluno.progresso') }}" class="nav-link">
                        <i class="bi bi-bar-chart me-2"></i>
                        Meu Progresso
                    </a>
                    <a href="{{ route('aluno.certificados') }}" class="nav-link">
                        <i class="bi bi-award me-2"></i>
                        Certificados
                    </a>
                </div>
            </div>

            <!-- Overlay para fechar o menu em dispositivos mobile -->
            <div class="lessons-backdrop" id="lessonsBackdrop"></div>

            <!-- Conteúdo principal -->
            <div class="col-lg-9 col-xl-10">
                <div class="container py-4 px-lg-5">
                    <!-- Cabeçalho da aula -->
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div>
                            <h1 class="fs-4 fw-bold mb-1">{{ $aula->title }}</h1>
                            <p class="text-secondary mb-0">{{ $curso->title }} • Módulo {{ $aula->module->order }}: {{ $aula->module->title }}</p>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-subtle dropdown-toggle" type="button" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ Auth::user()->name }}
                                <i class="bi bi-person ms-2"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end" aria-labelledby="profileDropdown">
                                <li><a class="dropdown-item" href="{{ route('aluno.perfil') }}">
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

                    <!-- Vídeo da aula -->
                    <div class="video-container">
                        <iframe src="{{ $aula->video_url ?? 'https://www.youtube.com/embed/dQw4w9WgXcQ' }}" allowfullscreen></iframe>
                    </div>

                    <!-- Abas de conteúdo -->
                    <ul class="nav nav-tabs" id="lessonTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="content-tab" data-bs-toggle="tab" data-bs-target="#content" type="button" role="tab" aria-controls="content" aria-selected="true">Conteúdo</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="resources-tab" data-bs-toggle="tab" data-bs-target="#resources" type="button" role="tab" aria-controls="resources" aria-selected="false">Recursos</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="questions-tab" data-bs-toggle="tab" data-bs-target="#questions" type="button" role="tab" aria-controls="questions" aria-selected="false">Dúvidas</button>
                        </li>
                    </ul>
                    <div class="tab-content card p-0" id="lessonTabsContent">
                        <!-- Aba de Conteúdo -->
                        <div class="tab-pane fade show active" id="content" role="tabpanel" aria-labelledby="content-tab">
                            <div class="tab-content">
                                <div>
                                    <h3 class="fs-5 fw-medium mb-3">{{ $aula->title }}</h3>
                                    <div>
                                        {!! $aula->content ?? '<p>Neste vídeo você aprendeu os conceitos fundamentais de como criar interfaces modernas e responsivas usando HTML e CSS. Vimos como estruturar um layout utilizando flexbox, como aplicar estilos consistentes e técnicas para criar designs adaptáveis a diferentes dispositivos.</p><p>É importante praticar esses conceitos criando seus próprios projetos. Na próxima aula, veremos como adicionar interatividade à nossa página usando JavaScript.</p><h4 class="fs-6 fw-medium mb-3 mt-4">Pontos importantes</h4><ul><li>Estrutura básica do HTML5</li><li>Seletores CSS e especificidade</li><li>Flexbox para layouts responsivos</li><li>Unidades relativas (rem, em, %)</li><li>Media queries para responsividade</li></ul>' !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Aba de Recursos -->
                        <div class="tab-pane fade" id="resources" role="tabpanel" aria-labelledby="resources-tab">
                            <div class="tab-content">
                                <h3 class="fs-5 fw-medium mb-3">Recursos complementares</h3>
                                
                                <!-- Lista de recursos -->
                                <div class="resource-item d-flex align-items-center">
                                    <div class="resource-icon">
                                        <i class="bi bi-file-earmark-pdf"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h5 class="fs-6 fw-medium mb-1">Guia de Referência HTML/CSS</h5>
                                        <p class="text-secondary mb-0 fs-small">PDF • 1.2 MB</p>
                                    </div>
                                    <a href="#" class="btn-accent">
                                        <i class="bi bi-download"></i>
                                    </a>
                                </div>
                                
                                <div class="resource-item d-flex align-items-center">
                                    <div class="resource-icon">
                                        <i class="bi bi-file-earmark-text"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h5 class="fs-6 fw-medium mb-1">Código-fonte do exemplo</h5>
                                        <p class="text-secondary mb-0 fs-small">ZIP • 245 KB</p>
                                    </div>
                                    <a href="#" class="btn-accent">
                                        <i class="bi bi-download"></i>
                                    </a>
                                </div>
                                
                                <div class="resource-item d-flex align-items-center">
                                    <div class="resource-icon">
                                        <i class="bi bi-link-45deg"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h5 class="fs-6 fw-medium mb-1">Documentação oficial do Flexbox</h5>
                                        <p class="text-secondary mb-0 fs-small">Link externo</p>
                                    </div>
                                    <a href="https://developer.mozilla.org/pt-BR/docs/Web/CSS/CSS_Flexible_Box_Layout" target="_blank" class="btn-accent">
                                        <i class="bi bi-box-arrow-up-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Aba de Dúvidas -->
                        <div class="tab-pane fade" id="questions" role="tabpanel" aria-labelledby="questions-tab">
                            <div class="tab-content">
                                <h3 class="fs-5 fw-medium mb-3">Perguntas e discussões</h3>
                                
                                <div class="mb-4">
                                    <form>
                                        <div class="mb-3">
                                            <label for="commentInput" class="form-label">Envie sua dúvida ou comentário</label>
                                            <textarea class="form-control bg-dark text-light border-secondary" id="commentInput" rows="3" placeholder="Escreva sua pergunta..."></textarea>
                                        </div>
                                        <button type="submit" class="btn-accent">
                                            <i class="bi bi-send me-2"></i>
                                            Enviar comentário
                                        </button>
                                    </form>
                                </div>
                                
                                <!-- Comentários existentes -->
                                <div class="comment-item">
                                    <div class="d-flex mb-2">
                                        <div class="comment-avatar">
                                            <i class="bi bi-person"></i>
                                        </div>
                                        <div>
                                            <p class="fw-medium mb-0">Maria Silva</p>
                                            <p class="text-secondary fs-small mb-0">Há 3 dias</p>
                                        </div>
                                    </div>
                                    <p class="mb-2">Como posso centralizar elementos verticalmente com Flexbox? Tentei usar align-items mas não funcionou no meu caso.</p>
                                    
                                    <!-- Resposta do instrutor -->
                                    <div class="ms-4 mt-3">
                                        <div class="comment-item">
                                            <div class="d-flex mb-2">
                                                <div class="comment-avatar">
                                                    <i class="bi bi-person-badge"></i>
                                                </div>
                                                <div>
                                                    <p class="fw-medium mb-0">João Instrutor <span class="badge bg-accent bg-opacity-10 text-accent ms-2 fs-small">Instrutor</span></p>
                                                    <p class="text-secondary fs-small mb-0">Há 2 dias</p>
                                                </div>
                                            </div>
                                            <p class="mb-0">Olá Maria! Para centralizar verticalmente com Flexbox, você precisa garantir que o container pai tenha display: flex e então usar align-items: center. Se isso não estiver funcionando, verifique se o container pai tem altura suficiente. Outro ponto importante é verificar se não há conflitos com outras propriedades CSS.</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="comment-item">
                                    <div class="d-flex mb-2">
                                        <div class="comment-avatar">
                                            <i class="bi bi-person"></i>
                                        </div>
                                        <div>
                                            <p class="fw-medium mb-0">Carlos Oliveira</p>
                                            <p class="text-secondary fs-small mb-0">Há 1 semana</p>
                                        </div>
                                    </div>
                                    <p class="mb-0">Excelente aula! Consegui aplicar o conceito de flexbox no meu projeto e ficou muito melhor. Obrigado!</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Navegação entre aulas -->
                    <div class="lesson-navigation">
                        @if($aulaAnterior)
                        <a href="{{ route('aluno.aula', ['aula' => $aulaAnterior->id]) }}" class="btn-accent">
                            <i class="bi bi-arrow-left me-2"></i>
                            Aula anterior
                        </a>
                        @else
                        <div></div>
                        @endif
                        
                        @if($proximaAula)
                        <a href="{{ route('aluno.aula', ['aula' => $proximaAula->id]) }}" class="btn-accent">
                            Próxima aula
                            <i class="bi bi-arrow-right ms-2"></i>
                        </a>
                        @else
                        <a href="{{ route('aluno.curso', ['curso' => $curso->id]) }}" class="btn-accent">
                            Finalizar módulo
                            <i class="bi bi-check-circle ms-2"></i>
                        </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Botão flutuante para marcar como concluída -->
    <button class="btn-accent mark-complete-btn">
        <i class="bi bi-check-lg me-2"></i>
        Marcar como concluída
    </button>

    <!-- Botão para abrir menu de aulas (mobile) -->
    <button class="lessons-toggle" id="lessonsToggle">
        <i class="bi bi-list"></i>
    </button>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Menu móvel de aulas
        document.getElementById('lessonsToggle').addEventListener('click', function() {
            document.getElementById('lessonSidebar').classList.add('show');
            document.getElementById('lessonsBackdrop').classList.add('show');
        });

        document.getElementById('closeSidebar').addEventListener('click', function() {
            document.getElementById('lessonSidebar').classList.remove('show');
            document.getElementById('lessonsBackdrop').classList.remove('show');
        });

        document.getElementById('lessonsBackdrop').addEventListener('click', function() {
            document.getElementById('lessonSidebar').classList.remove('show');
            document.getElementById('lessonsBackdrop').classList.remove('show');
        });

        // Progresso de leitura
        window.addEventListener('scroll', function() {
            const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
            const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            const scrolled = (winScroll / height) * 100;
            document.getElementById('readingProgress').style.width = scrolled + '%';
        });
    </script>
</body>
</html> 