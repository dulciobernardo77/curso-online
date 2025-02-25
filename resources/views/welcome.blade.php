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
    <!-- Navbar
    <nav-- class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">
                SpaceSeat
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cursos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">sobre-nos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Comunidade</a>
                    </li>
                </ul>
            </div>
            <div>
                <ul class="navbar-nav ms-auto">
                    @auth
                                                                            <li class="nav-item">
                                                                                <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                                                                            </li>
@else
    <li class="nav-item">
                                                                                <a class="btn btn-primary ms-2" href="{{ route('login') }}">Login</a>
                                                                            </li>
                                                                            <li class="nav-item">
                                                                                <a class="btn btn-primary ms-2" href="{{ route('register') }}">Registrar</a>
                                                                            </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav-->

    <!-- Hero Sectiohhn -->
    <section class="hero-section">
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
                        Junte-se a mais de 50.000 alunos transformando suas carreiras
                        com cursos práticos e certificados reconhecidos pelo mercado.
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
    <section class="section-padding border-top border-bottom border-secondary">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-3 col-6 mb-md-0 mb-4">
                    <i class="bi bi-book"></i>
                    <div class="stats-counter" data-count="150">0</div>
                    <p class="text-white-50">Cursos</p>
                </div>
                <div class="col-md-3 col-6 mb-md-0 mb-4">
                    <i class="bi bi-people"></i>
                    <div class="stats-counter" data-count="50000">0</div>
                    <p class="text-white-50">Alunos</p>
                </div>
                <div class="col-md-3 col-6">
                    <i data-count="120" class="bi bi-mortarboard"></i>
                    <div class="stats-counter" data-count="120">0</div>
                    <p class="text-white-50">Instrutores</p>
                </div>
                <div class="col-md-3 col-6">
                    <i class="bi bi-trophy"></i>
                    <div class="stats-counter" data-count="98">0</div>
                    <p class="text-white-50">% Satisfação</p>
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
                <p class="text-white-50">Explore nossos cursos mais populares e bem avaliados</p>
            </div>

            <div class="row g-4">
                @foreach ($featuredCourses as $course)
                    <div class="col-md-4">
                        <div class="course-card">
                            <img src="{{ $course->image }}" alt="{{ $course->title }}" class="img-fluid">
                            <div class="p-4">
                                <span class="badge bg-primary mb-2">{{ $course->category }}</span>
                                <h4>{{ $course->title }}</h4>
                                <p class="text-white-50">{{ $course->description }}</p>
                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <span class="text-primary">R$ {{ $course->price }}</span>
                                    <a href="#" class="btn btn-outline-primary">Saiba Mais</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- por que  da escolha Section -->
    <section class="spacer py-5">
        <div class="section-title container text-center">
            <p>Por que escolher a</p>
            <h1><span style="color: var(--primary-color);">&lt;</span> SpaceSeat <span
                    style="color: var(--primary-color);">?&gt;</span></h1>
        </div>

        <div class="features-container">
            <div class="row g-4 mb-5">
                <div class="col-md-4 text-center">
                    <div class="icon-container">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor"
                            class="feature-icon" viewBox="0 0 16 16">
                            <path
                                d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                        </svg>
                    </div>
                    <h3 class="feature-title">+138 horas de conteúdo exclusivo</h3>
                    <p class="feature-description">Tenha acesso a mais de 138 horas de conteúdo exclusivo e aprofunde
                        seus conhecimentos.</p>
                </div>

                <div class="col-md-4 text-center">
                    <div class="icon-container">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor"
                            class="feature-icon" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                            <path
                                d="M6.271 5.055a.5.5 0 0 1 .52.038l3.5 2.5a.5.5 0 0 1 0 .814l-3.5 2.5A.5.5 0 0 1 6 10.5v-5a.5.5 0 0 1 .271-.445z" />
                        </svg>
                    </div>
                    <h3 class="feature-title">Novas aulas todas as semanas</h3>
                    <p class="feature-description">Novas aulas todas as semanas, mantendo você atualizado
                        constantemente.</p>
                </div>

                <div class="col-md-4 text-center">
                    <div class="icon-container">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor"
                            class="feature-icon" viewBox="0 0 16 16">
                            <path
                                d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
                        </svg>
                    </div>
                    <h3 class="feature-title">+1310 membros na comunidade</h3>
                    <p class="feature-description">Junte-se a uma comunidade de mais de 1310 membros e amplie seus
                        horizontes.</p>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-md-4 text-center">
                    <div class="icon-container">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor"
                            class="feature-icon" viewBox="0 0 16 16">
                            <path
                                d="M5.854 4.854a.5.5 0 1 0-.708-.708l-3.5 3.5a.5.5 0 0 0 0 .708l3.5 3.5a.5.5 0 0 0 .708-.708L2.707 8l3.147-3.146zm4.292 0a.5.5 0 0 1 .708-.708l3.5 3.5a.5.5 0 0 1 0 .708l-3.5 3.5a.5.5 0 0 1-.708-.708L13.293 8l-3.147-3.146z" />
                        </svg>
                    </div>
                    <h3 class="feature-title">Acesso aos códigos no GitHub da Academia</h3>
                    <p class="feature-description">Tenha acesso a todos os códigos no GitHub da Academia para aprimorar
                        sua aprendizagem.</p>
                </div>

                <div class="col-md-4 text-center">
                    <div class="icon-container">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor"
                            class="feature-icon" viewBox="0 0 16 16">
                            <path
                                d="M8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6-.097 1.016-.417 2.13-.771 2.966-.079.186.074.394.273.362 2.256-.37 3.597-.938 4.18-1.234A9.06 9.06 0 0 0 8 15z" />
                        </svg>
                    </div>
                    <h3 class="feature-title">Servidor dedicado para alunos no Discord</h3>
                    <p class="feature-description">Acesso a um servidor dedicado no Discord exclusivo para alunos.</p>
                </div>

                <div class="col-md-4 text-center">
                    <div class="icon-container">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor"
                            class="feature-icon" viewBox="0 0 16 16">
                            <path
                                d="M8 0a8 8 0 0 0 5.262 14.959c.2-.052.4-.106.586-.163.167-.035.334-.082.5-.129.334-.093.666-.185.983-.317a7.93 7.93 0 0 0 .44-.196 6.424 6.424 0 0 0 .665-.356c.23-.145.447-.321.647-.513a7.97 7.97 0 0 0 .917-1.127c.258-.397.488-.864.653-1.24.164-.376.305-.795.394-1.061a6.021 6.021 0 0 0 .138-.535c.03-.135.05-.273.063-.416.013-.143.017-.288.012-.437a2.96 2.96 0 0 0-.06-.523A3.932 3.932 0 0 0 13.863 7c-.047-.146-.102-.282-.164-.41a3.3 3.3 0 0 0-.23-.467 3.097 3.097 0 0 0-.701-.872A3.104 3.104 0 0 0 12 4.831c-.118-.044-.238-.077-.36-.1a3.242 3.242 0 0 0-.409-.05 3.087 3.087 0 0 0-1.053.13 2.986 2.986 0 0 0-1.992 2.064 3.23 3.23 0 0 0-.054 1.31c.027.22.064.437.112.65a3.03 3.03 0 0 0 .291.725c.06.123.125.24.195.353.075.123.148.24.233.35a3.106 3.106 0 0 0 .539.57c.1.082.21.159.324.232.132.083.27.16.414.23.033.016.064.044.1.044H10v2.007h-.006a1.65 1.65 0 0 1-.126-.04 6.992 6.992 0 0 1-.553-.22 6.256 6.256 0 0 1-1.188-.762 6.57 6.57 0 0 1-.748-.74 6.848 6.848 0 0 1-.585-.77c-.177-.273-.333-.569-.463-.882a6.294 6.294 0 0 1-.341-1.092 6.173 6.173 0 0 1-.087-1.92c.037-.31.094-.615.174-.91.076-.293.174-.577.29-.851.232-.548.52-1.051.813-1.496a7.85 7.85 0 0 1 .78-1.02A7.9 7.9 0 0 1 8 0z" />
                        </svg>
                    </div>
                    <h3 class="feature-title">Pronto para começar sua jornada de aprendizado?</h3>
                    <p class="feature-description">Torne-se um aluno agora e desbloqueie acesso exclusivo ao nosso
                        conteúdo e comunidade!</p>
                </div>
            </div>
        </div>

        <div class="container mt-5 text-center">
            <a href="{{ route('login') }}" class="cta-button">
                SEJA UM ALUNO DA SpaceSeat
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="ms-2" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z" />
                    <path fill-rule="evenodd"
                        d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z" />
                </svg>
            </a>
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
    <footer class="bg-rgba(255, 255, 255, 0.05) py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4">
                    <h5 class="mb-4">Sobre a Space seat</h5>
                    <p class="text-white-50">Plataforma líder em educação online focada em tecnologia e desenvolvimento
                        profissional.</p>
                    <div class="d-flex mt-4 gap-3">
                        <a href="#" class="text-white-50"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="text-white-50"><i class="bi bi-twitter"></i></a>
                        <a href="https://www.instagram.com/__spaceseat/" class="text-white-50"><i
                                class="bi bi-instagram"></i></a>
                        <a href="#" class="text-white-50"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
                <div class="col-lg-2">
                    <h5 class="mb-4">Links Rápidos</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">Cursos</a>
                        </li>
                        <li class="mb-2"><a href="#"
                                class="text-white-50 text-decoration-none">Instrutores</a></li>
                        <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">Preços</a>
                        </li>
                        <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">Blog</a></li>
                    </ul>
                </div>
                <div class="col-lg-2">
                    <h5 class="mb-4">Suporte</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">Contato</a>
                        </li>
                        <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">FAQ</a></li>
                        <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">Ajuda</a>
                        </li>
                        <li class="mb-2"><a href="#"
                                class="text-white-50 text-decoration-none">Privacidade</a></li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h5 class="mb-4">Newsletter</h5>
                    <p class="text-white-50">Receba novidades e atualizações sobre nossos cursos.</p>
                    <form class="mt-4">
                        <div class="input-group">
                            <input type="email" class="form-control bg-transparent text-white"
                                placeholder="Seu email" style="border-color: rgba(255,255,255,0.1)">
                            <button class="btn btn-primary" type="submit">Inscrever</button>
                        </div>
                    </form>
                </div>
            </div>
            <hr class="mb-4 mt-5" style="border-color: rgba(255,255,255,0.1)">
            <div class="text-white-50 text-center">
                <small>&copy; 2024 Space seat. Todos os direitos reservados.</small>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/welcome.js') }}"></script>
</body>

</html>
