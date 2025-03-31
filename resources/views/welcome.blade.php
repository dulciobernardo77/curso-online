<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'SpaceSeat') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark py-3" style="background-color: #0a0c12; position: fixed; width: 100%; z-index: 1000;">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/">SpaceSeat</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="/">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#courses">Cursos</a>
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
    
    <!-- Hero Section -->
    <section class="hero-section position-relative overflow-hidden" style="padding-top: 80px;">
        <div class="h-100 container">
            <div class="row align-items-center justify-content-between h-100">
                <div class="col-lg-6 hero-content text-start">
                    <span class="badge d-inline-flex align-items-center mb-3">
                        <i class="bi bi-rocket-takeoff me-2"></i>
                        Aprenda no seu ritmo
                    </span>
                    <h1 class="display-4 fw-bold hero-title mb-4">
                        Domine novas habilidades.<br>
                        <span class="gradient-text">Conquiste seu futuro.</span>
                    </h1>
                    <p class="lead text-white-50 mb-5">
                        Acesse cursos gratuitos criados por estudantes e professores. 
                        Aprenda no seu ritmo com nossa plataforma educacional.
                    </p>
                    <div class="d-flex gap-3">
                        <a href="{{ route('login') }}" class="btn btn-primary btn-lg px-5">
                            Começar Agora
                            <i class="bi bi-arrow-right ms-2"></i>
                        </a>
                        <a href="#courses" class="btn btn-outline-light btn-lg px-5">
                            Ver Cursos
                        </a>
                    </div>
                    <div class="d-flex align-items-center mt-5 gap-4">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-check-circle-fill text-primary me-2"></i>
                            <span>Acesso vitalício</span>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="bi bi-check-circle-fill text-primary me-2"></i>
                            <span>Certificado incluso</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-none d-lg-block">
                    <div class="hero-image-wrapper">
                        <img src="/images/erasebg-transformed.png" alt="Educação Online"
                            class="hero-image img-fluid w-100">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Stats Section -->
    <section class="stats-section section-padding">
        <div class="container">
            <div class="row text-center g-4">
                <!-- Cursos -->
                <div class="col-lg-3 col-sm-6">
                    <div class="stats-item">
                        <div class="stats-icon mb-3">
                            <i class="bi bi-book text-primary"></i>
                        </div>
                        <h3 class="stats-number fw-bold mb-2">150+</h3>
                        <p class="stats-label text-gray-400 mb-0">Cursos</p>
                    </div>
                </div>

                <!-- Alunos -->
                <div class="col-lg-3 col-sm-6">
                    <div class="stats-item">
                        <div class="stats-icon mb-3">
                            <i class="bi bi-people text-primary"></i>
                        </div>
                        <h3 class="stats-number fw-bold mb-2">12k+</h3>
                        <p class="stats-label text-gray-400 mb-0">Alunos</p>
                    </div>
                </div>

                <!-- Instrutores -->
                <div class="col-lg-3 col-sm-6">
                    <div class="stats-item">
                        <div class="stats-icon mb-3">
                            <i class="bi bi-mortarboard text-primary"></i>
                        </div>
                        <h3 class="stats-number fw-bold mb-2">90+</h3>
                        <p class="stats-label text-gray-400 mb-0">Instrutores</p>
                    </div>
                </div>

                <!-- Certificados -->
                <div class="col-lg-3 col-sm-6">
                    <div class="stats-item">
                        <div class="stats-icon mb-3">
                            <i class="bi bi-trophy text-primary"></i>
                        </div>
                        <h3 class="stats-number fw-bold mb-2">25k+</h3>
                        <p class="stats-label text-gray-400 mb-0">Certificados</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Courses -->
    <section id="courses" class="section-padding">
        <div class="container">
            <div class="mb-5 text-center">
                <span class="text-primary">Nossos Cursos</span>
                <h2 class="display-5 fw-bold mt-2">Cursos em Destaque</h2>
                <p class="text-white-50">Explore nossos cursos educacionais gratuitos</p>
            </div>

            <div class="row g-4">
                @foreach ($featuredCourses as $course)
                    <div class="col-md-4">
                        <div class="course-card">
                            <img src="{{ $course->image }}" alt="{{ $course->title }}" class="img-fluid">
                            <div class="p-4">
                                <h4>{{ $course->title }}</h4>
                                <p class="text-white-50">{{ $course->description }}</p>
                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <span class="text-primary">Gratuito</span>
                                    <a href="{{Route('login')}}" class="btn btn-outline-primary">Saiba Mais</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Comunidade de Estudantes Section -->
    <section class="discord-community-section section-padding position-relative overflow-hidden">
        <div class="discord-glow"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 pe-lg-5 mb-5 mb-lg-0">
                    <span class="badge bg-discord mb-3 animate__animated animate__fadeInUp">
                        <i class="bi bi-people-fill me-2"></i>
                        Ambiente Colaborativo
                    </span>
                    <h2 class="display-5 fw-bold mb-4 animate__animated animate__fadeInUp animate__delay-1s">
                        Junte-se à nossa<br>
                        <span class="text-discord">Comunidade de Estudantes</span>
                    </h2>
                    <p class="lead text-white-50 mb-4 animate__animated animate__fadeInUp animate__delay-2s">
                        Conecte-se com outros estudantes, compartilhe conhecimento e participe de atividades em grupo para um aprendizado colaborativo.
                    </p>
                    <div class="discord-stats d-flex gap-5 mb-5 animate__animated animate__fadeInUp animate__delay-3s">
                        <div class="discord-stat">
                            <h3 class="text-discord fw-bold">Interação</h3>
                            <p class="text-white-50">Entre alunos</p>
                        </div>
                        <div class="discord-stat">
                            <h3 class="text-discord fw-bold">Suporte</h3>
                            <p class="text-white-50">Da comunidade</p>
                        </div>
                        <div class="discord-stat">
                            <h3 class="text-discord fw-bold">Gratuito</h3>
                            <p class="text-white-50">Para todos</p>
                        </div>
                    </div>
                    <a href="{{route('login')}}" class="btn btn-discord btn-lg px-5 animate__animated animate__fadeInUp animate__delay-4s">
                        <i class="bi bi-people-fill me-2"></i>
                        Participar da Comunidade
                    </a>
                </div>
                <div class="col-lg-6 animate__animated animate__fadeInRight animate__delay-4s">
                    <div class="discord-image-wrapper">
                        <img src="/images/discord-community.webp" alt="Nossa Comunidade de Estudantes" class="img-fluid rounded-4 shadow-lg">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Por que escolher a Space Seat Section -->
    <section class="why-choose-section section-padding">
        <div class="container">
            <!-- Cabeçalho da Seção -->
            <div class="text-center mb-5">
                <p class="text-gray-400 mb-2">Por que escolher a</p>
                <h2 class="display-4 fw-bold mb-5">
                    <span class="text-primary">&lt;</span>
                    SpaceSeat
                    <span class="text-primary">?&gt;</span>
                </h2>
            </div>

            <!-- Grid de Recursos -->
            <div class="row g-4">
                <!-- Card 1 -->
                <div class="col-md-4">
                    <div class="feature-card h-100">
                        <div class="feature-icon mb-4">
                            <i class="bi bi-clock text-primary"></i>
                        </div>
                        <h3 class="feature-title">Conteúdo Organizado</h3>
                        <p class="feature-description">
                            Acesse conteúdo educacional bem organizado para facilitar seu aprendizado.
                        </p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-md-4">
                    <div class="feature-card h-100">
                        <div class="feature-icon mb-4">
                            <i class="bi bi-play-circle text-primary"></i>
                        </div>
                        <h3 class="feature-title">Aulas em Vídeo</h3>
                        <p class="feature-description">
                            Assista às aulas em vídeo para um aprendizado mais dinâmico e interativo.
                        </p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-md-4">
                    <div class="feature-card h-100">
                        <div class="feature-icon mb-4">
                            <i class="bi bi-people text-primary"></i>
                        </div>
                        <h3 class="feature-title">Comunidade Colaborativa</h3>
                        <p class="feature-description">
                            Faça parte de uma comunidade onde alunos e instrutores colaboram juntos.
                        </p>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="col-md-4">
                    <div class="feature-card h-100">
                        <div class="feature-icon mb-4">
                            <i class="bi bi-laptop text-primary"></i>
                        </div>
                        <h3 class="feature-title">Acesso por Qualquer Dispositivo</h3>
                        <p class="feature-description">
                            Estude pelo computador, tablet ou celular, com uma interface adaptada para todos os dispositivos.
                        </p>
                    </div>
                </div>
                
                <!-- Card 5 -->
                <div class="col-md-4">
                    <div class="feature-card h-100">
                        <div class="feature-icon mb-4">
                            <i class="bi bi-award text-primary"></i>
                        </div>
                        <h3 class="feature-title">Certificados de Conclusão</h3>
                        <p class="feature-description">
                            Ao concluir um curso, receba um certificado para comprovar seu aprendizado.
                        </p>
                    </div>
                </div>
                
                <!-- Card 6 -->
                <div class="col-md-4">
                    <div class="feature-card h-100">
                        <div class="feature-icon mb-4">
                            <i class="bi bi-currency-dollar text-primary"></i>
                        </div>
                        <h3 class="feature-title">100% Gratuito</h3>
                        <p class="feature-description">
                            Todos os cursos e recursos são totalmente gratuitos, sem custos escondidos.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="section-padding">
        <div class="container">
            <div class="mb-5 text-center">
                <span class="text-primary">Depoimentos</span>
                <h2 class="display-5 fw-bold mt-2">O Que Dizem Nossos Alunos</h2>
                <p class="text-white-50">Histórias reais de quem transformou sua carreira</p>
            </div>
            <div class="row g-4">
                @foreach ($testimonials as $testimonial)
                    <div class="col-md-4">
                        <div class="testimonial-card">
                            <div class="d-flex align-items-center mb-4">
                                <img src="{{ $testimonial['image'] }}" alt="{{ $testimonial['name'] }}"
                                    class="rounded-circle" width="60" height="60">
                                <div class="ms-3">
                                    <h5 class="mb-0">{{ $testimonial['name'] }}</h5>

                                </div>

                            </div>
                            <p class="text-white-50">{{ $testimonial['content'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="fAQ section-padding bg-black">
        <div class="container">
            <div class="mb-5 text-center">
                <span class="text-primary">FAQ</span>
                <h2 class="display-5 fw-bold mt-2">Perguntas Frequentes</h2>
                <p class="text-white-50">Tira as tuas dúvidas e prepara-te para fazeres parte da SpaceSeat</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="accordion" id="faqAccordion">
                        @foreach ($faqs as $index => $faq)
                            <div class="accordion-item border-secondary mb-3 border bg-transparent">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed bg-transparent text-white"
                                        type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq{{ $index }}">
                                        {{ $faq['question'] }}
                                    </button>
                                </h2>
                                <div id="faq{{ $index }}" class="accordion-collapse collapse"
                                    data-bs-parent="#faqAccordion">
                                    <div class="accordion-body text-white-50">
                                        {{ $faq['answer'] }}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-4 border-top border-dark">
        <div class="container">
            <p class="text-center text-white-50 mb-0">
                SpaceSeat - Projeto Educacional desenvolvido como TCC do Ensino Médio - 2025
            </p>
        </div>
    </footer>

    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/welcome.js') }}"></script>
</body>

</html>
