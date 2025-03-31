<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre - SpaceSeat</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <style>
        body {
            background-color: #0f1117;
            color: #ffffff;
            font-family: 'Inter', system-ui, sans-serif;
        }
        .about-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 6rem 1rem 3rem;
        }
        .card {
            background-color: #171a21;
            border: none;
            border-radius: 10px;
            color: #ffffff;
        }
        .text-primary {
            color: #6c47ff !important;
        }
        .text-secondary {
            color: #a0a0a0 !important;
        }
        .team-member img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
        }
        @media (max-width: 768px) {
            .about-container {
                padding-top: 5rem;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark py-3 fixed-top" style="background-color: #0a0c12;">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/">SpaceSeat</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('about') }}">Sobre</a>
                    </li>
                    @auth
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Entrar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Registrar</a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <!-- About Section -->
    <div class="about-container">
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bold mb-4">Sobre o Projeto SpaceSeat</h1>
            <p class="lead text-secondary mb-0">Plataforma de Aprendizado Online</p>
        </div>

        <div class="card mb-5 p-4">
            <div class="card-body">
                <h2 class="fs-4 mb-4 fw-semibold">O que é o SpaceSeat?</h2>
                <p>O SpaceSeat é uma plataforma de aprendizado online desenvolvida como <strong>Trabalho de Conclusão de Curso (TCC) de Ensino Médio</strong>. Nosso objetivo é criar um ambiente educacional gratuito onde estudantes possam acessar conteúdo organizado e instrutores possam compartilhar conhecimento.</p>
                
                <p>Esta plataforma foi criada com propósitos educacionais, demonstrando a aplicação de conhecimentos em programação web, design de interface e experiência do usuário.</p>
                
                <h2 class="fs-4 mt-5 mb-4 fw-semibold">Recursos da Plataforma</h2>
                <ul class="text-secondary">
                    <li class="mb-2">Sistema de gerenciamento de cursos</li>
                    <li class="mb-2">Área de instrutor para criação de conteúdo</li>
                    <li class="mb-2">Área de aluno para visualização de cursos</li>
                    <li class="mb-2">Design responsivo para dispositivos móveis</li>
                    <li class="mb-2">Sistema de autenticação de usuários</li>
                </ul>
                
                <h2 class="fs-4 mt-5 mb-4 fw-semibold">Tecnologias Utilizadas</h2>
                <div class="row row-cols-2 row-cols-md-4 g-3 text-center">
                    <div class="col">
                        <div class="p-3">
                            <i class="bi bi-filetype-php text-primary fs-1"></i>
                            <p class="mt-2 mb-0">PHP/Laravel</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-3">
                            <i class="bi bi-bootstrap text-primary fs-1"></i>
                            <p class="mt-2 mb-0">Bootstrap</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-3">
                            <i class="bi bi-database text-primary fs-1"></i>
                            <p class="mt-2 mb-0">MySQL</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-3">
                            <i class="bi bi-code-slash text-primary fs-1"></i>
                            <p class="mt-2 mb-0">JavaScript</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="card p-4">
            <div class="card-body">
                <h2 class="fs-4 mb-4 fw-semibold">Equipe do Projeto</h2>
                <p class="text-secondary mb-4">Este projeto foi desenvolvido por estudantes do Ensino Médio como Trabalho de Conclusão de Curso.</p>
                
                <div class="text-center">
                    <p class="mb-0 text-secondary">2025 &copy; SpaceSeat - Todos os direitos reservados</p>
                    <p class="text-secondary fs-6 mt-2">Este é um projeto educacional sem fins lucrativos</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 