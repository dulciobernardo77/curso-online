<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo - Space Seat</title>

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
        }

        body {
            background-color: var(--bg-color);
            color: var(--text-color);
            font-family: system-ui, -apple-system, sans-serif;
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
            font-size: 13px;
        }

        .separator {
            height: 1px;
            background-color: rgba(255, 255, 255, 0.05);
            margin: 20px 0;
        }

        .course-card {
            transition: all 0.2s;
            height: 100%;
        }

        .course-card:hover {
            transform: translateY(-2px);
        }

        .tag {
            font-size: 12px;
            padding: 2px 8px;
            border-radius: 12px;
            background-color: rgba(255, 255, 255, 0.05);
            color: var(--text-secondary);
            display: inline-block;
            margin-right: 4px;
        }

        .search-input {
            background-color: var(--card-color);
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: var(--text-color);
            padding: 8px 12px;
            font-size: 14px;
            border-radius: 4px;
            width: 100%;
        }

        .search-input:focus {
            outline: none;
            border-color: var(--accent-color);
            background-color: var(--card-color);
            color: var(--text-color);
        }

        .search-input::placeholder {
            color: var(--text-secondary);
        }

        .filter-btn {
            background-color: transparent;
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: var(--text-secondary);
            padding: 8px 12px;
            font-size: 14px;
            border-radius: 4px;
            transition: all 0.2s;
        }

        .filter-btn:hover {
            border-color: var(--accent-color);
            color: var(--text-color);
        }

        .filter-btn.active {
            background-color: var(--accent-color);
            border-color: var(--accent-color);
            color: white;
        }
    </style>
</head>

<body>
    <div class="container-fluid px-0">
        <div class="min-vh-100 d-flex">
            <!-- Barra lateral ultrassimplificada -->
            <aside class="py-4 px-3" style="width: 180px;">
                <div class="mb-5">
                    <h6 class="fw-bold mb-0">Space Seat</h6>
                </div>

                <nav>
                    <a href="/dashboard" class="nav-link mb-1">
                        <i class="bi bi-house-door me-2"></i>
                        Home
                    </a>
                    <a href="/jornada" class="nav-link mb-1">
                        <i class="bi bi-collection me-2"></i>
                        Jornada
                    </a>
                    <a href="/catalogo" class="nav-link active mb-1">
                        <i class="bi bi-journal me-2"></i>
                        Catálogo
                    </a>
                </nav>
            </aside>

            <!-- Conteúdo principal -->
            <main class="flex-grow-1 py-4 px-4">
                <div class="mx-auto" style="max-width: 1000px;">
                    <!-- Cabeçalho simplificado -->
                    <header class="mb-5 d-flex justify-content-between align-items-center">
                        <div>
                            <h1 class="fs-5 fw-medium m-0">Catálogo de Cursos</h1>
                            <p class="text-secondary fs-small mt-1 mb-0">Explore nossa biblioteca de cursos</p>
                        </div>
                        <div>
                            <button class="btn btn-subtle">
                                <i class="bi bi-person"></i>
                            </button>
                        </div>
                    </header>

                    <!-- Barra de pesquisa e filtros -->
                    <div class="mb-5">
                        <div class="row g-3">
                            <div class="col-md-8">
                                <div class="position-relative">
                                    <i class="bi bi-search position-absolute"
                                    style="left: 12px; top: 50%; transform: translateY(-50%); color: var(--text-secondary)"></i>
                                    <input type="text" class="search-input ps-4" placeholder="Buscar cursos...">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="d-flex gap-2">
                                    <button class="filter-btn flex-grow-1 active">Todos</button>
                                    <button class="filter-btn flex-grow-1">Iniciante</button>
                                    <button class="filter-btn flex-grow-1">Avançado</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Trilhas de Aprendizado -->
                    <div class="mb-5">
                        <p class="text-secondary fs-small mb-3">TRILHAS DE APRENDIZADO</p>

                        <div class="row g-4">
                            <!-- Trilha Desenvolvimento Web -->
                            <div class="col-md-6 col-lg-4">
                                <div class="card course-card p-4">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="me-3 d-flex align-items-center justify-content-center rounded-circle"
                                            style="width: 40px; height: 40px; background-color: rgba(108, 71, 255, 0.1);">
                                            <i class="bi bi-code-slash text-accent"></i>
                                        </div>
                                        <div>
                                            <p class="fw-medium mb-0">Desenvolvimento Web</p>
                                            <p class="text-secondary fs-small mb-0">5 cursos • 55h</p>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <span class="tag">HTML</span>
                                        <span class="tag">CSS</span>
                                        <span class="tag">JavaScript</span>
                                    </div>
                                    <a href="#" class="btn-accent text-decoration-none text-center">Ver trilha</a>
                                </div>
                            </div>

                            <!-- Trilha Mobile -->
                            <div class="col-md-6 col-lg-4">
                                <div class="card course-card p-4">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="me-3 d-flex align-items-center justify-content-center rounded-circle"
                                            style="width: 40px; height: 40px; background-color: rgba(52, 199, 89, 0.1);">
                                            <i class="bi bi-phone text-success"></i>
                                        </div>
                                        <div>
                                            <p class="fw-medium mb-0">Desenvolvimento Mobile</p>
                                            <p class="text-secondary fs-small mb-0">4 cursos • 48h</p>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <span class="tag">React Native</span>
                                        <span class="tag">Flutter</span>
                                    </div>
                                    <a href="#" class="btn-accent text-decoration-none text-center">Ver trilha</a>
                                </div>
                            </div>

                            <!-- Trilha Data Science -->
                            <div class="col-md-6 col-lg-4">
                                <div class="card course-card p-4">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="me-3 d-flex align-items-center justify-content-center rounded-circle"
                                            style="width: 40px; height: 40px; background-color: rgba(255, 179, 0, 0.1);">
                                            <i class="bi bi-graph-up text-warning"></i>
                                        </div>
                                        <div>
                                            <p class="fw-medium mb-0">Data Science</p>
                                            <p class="text-secondary fs-small mb-0">6 cursos • 72h</p>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <span class="tag">Python</span>
                                        <span class="tag">Machine Learning</span>
                                    </div>
                                    <a href="#" class="btn-accent text-decoration-none text-center">Ver trilha</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="separator"></div>

                    <!-- Cursos Individuais -->
                    <div>
                        <p class="text-secondary fs-small mb-3">CURSOS POPULARES</p>

                        <div class="row g-4">
                            <!-- Curso 1 -->
                            <div class="col-md-6 col-lg-4">
                                <div class="card course-card p-4">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="me-3 d-flex align-items-center justify-content-center rounded-circle"
                                            style="width: 40px; height: 40px; background-color: rgba(108, 71, 255, 0.1);">
                                            <i class="bi bi-braces text-accent"></i>
                                        </div>
                                        <div>
                                            <p class="fw-medium mb-0">JavaScript Avançado</p>
                                            <p class="text-secondary fs-small mb-0">12h • Intermediário</p>
                                        </div>
                                    </div>
                                    <p class="text-secondary fs-small mb-3">
                                        Aprenda conceitos avançados de JavaScript, incluindo ES6+, async/await e mais.
                                    </p>
                                    <a href="#" class="btn-accent text-decoration-none text-center">Começar</a>
                                </div>
                            </div>

                            <!-- Curso 2 -->
                            <div class="col-md-6 col-lg-4">
                                <div class="card course-card p-4">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="me-3 d-flex align-items-center justify-content-center rounded-circle"
                                            style="width: 40px; height: 40px; background-color: rgba(52, 199, 89, 0.1);">
                                            <i class="bi bi-database text-success"></i>
                                        </div>
                                        <div>
                                            <p class="fw-medium mb-0">SQL Fundamentos</p>
                                            <p class="text-secondary fs-small mb-0">8h • Iniciante</p>
                                        </div>
                                    </div>
                                    <p class="text-secondary fs-small mb-3">
                                        Aprenda a trabalhar com bancos de dados relacionais e consultas SQL.
                                    </p>
                                    <a href="#" class="btn-accent text-decoration-none text-center">Começar</a>
                                </div>
                            </div>

                            <!-- Curso 3 -->
                            <div class="col-md-6 col-lg-4">
                                <div class="card course-card p-4">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="me-3 d-flex align-items-center justify-content-center rounded-circle"
                                            style="width: 40px; height: 40px; background-color: rgba(255, 179, 0, 0.1);">
                                            <i class="bi bi-git text-warning"></i>
                                        </div>
                                        <div>
                                            <p class="fw-medium mb-0">Git & GitHub</p>
                                            <p class="text-secondary fs-small mb-0">6h • Iniciante</p>
                                        </div>
                                    </div>
                                    <p class="text-secondary fs-small mb-3">
                                        Domine o controle de versão e colaboração em projetos com Git.
                                    </p>
                                    <a href="#" class="btn-accent text-decoration-none text-center">Começar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
