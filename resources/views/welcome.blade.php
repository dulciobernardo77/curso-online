<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'EduPlatform') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>
    <!-- Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">
                <i class="bi bi-mortarboard-fill me-2"></i>
                SpaceSeat
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cursos</a>
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
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container h-100">
            <div class="row align-items-center justify-content-between h-100">
                <div class="col-lg-6 text-start hero-content">
                    <span class="badge mb-3 d-inline-flex align-items-center">
                        <i class="bi bi-rocket-takeoff me-2"></i>
                        Aprenda no seu ritmo
                    </span>
                    <h1 class="display-4 fw-bold mb-4 hero-title">
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
                    <div class="mt-5 d-flex align-items-center gap-4">
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
                <div class="col-lg-5 d-none d-lg-block">
                    <div class="hero-image-wrapper">
                        <img src="/images/erasebg-transformed.png" alt="Educação Online" class="hero-image">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="section-padding border-top border-bottom border-secondary">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-3 col-6 mb-4 mb-md-0">
                    <i class="bi bi-book"></i>
                    <div class="stats-counter" data-count="150">0</div>
                    <p class="text-white-50">Cursos</p>
                </div>
                <div class="col-md-3 col-6 mb-4 mb-md-0">
                        <i class="bi bi-people"></i>
                    <div class="stats-counter" data-count="50000">0</div>
                    <p class="text-white-50">Alunos</p>
                </div>
                <div class="col-md-3 col-6">
                    <i class="bi bi-mortarboard"></i>
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
            <div class="text-center mb-5">
                <span class="text-primary">Nossos Cursos</span>
                <h2 class="display-5 fw-bold mt-2">Cursos em Destaque</h2>
                <p class="text-white-50">Explore nossos cursos mais populares e bem avaliados</p>
            </div>

            <div class="row g-4">
                @foreach($featuredCourses as $course)
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

    <!-- Features Section -->
    <section class="section-padding bg-black">
        <div class="container">
            <div class="text-center mb-5">
                <span class="text-primary">Por que nos escolher</span>
                <h2 class="display-5 fw-bold mt-2">Recursos Exclusivos</h2>
                <p class="text-white-50">Descubra o que torna nossa plataforma única</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="feature-card p-4 h-100">
                        <i class="bi bi-laptop fs-2 text-primary mb-3"></i>
                        <h4>Aprenda em Qualquer Lugar</h4>
                        <p class="text-white-50">Acesse o conteúdo de qualquer dispositivo, a qualquer momento</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card p-4 h-100">
                        <i class="bi bi-people fs-2 text-primary mb-3"></i>
                        <h4>Comunidade Ativa</h4>
                        <p class="text-white-50">Conecte-se com outros alunos e aprenda juntos</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card p-4 h-100">
                    <i class="bi bi-people fs-2 text-primary mb-3"></i>
                        <h4>Certificação Reconhecida</h4>
                        <p class="text-white-50">Obtenha certificados validados pelo mercado</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="section-padding">
        <div class="container">
            <div class="text-center mb-5">
                <span class="text-primary">Depoimentos</span>
                <h2 class="display-5 fw-bold mt-2">O Que Dizem Nossos Alunos</h2>
                <p class="text-white-50">Histórias reais de quem transformou sua carreira</p>
            </div>
            <div class="row g-4">
                @foreach($testimonials as $testimonial)
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <div class="d-flex align-items-center mb-4">
                            <img src="{{ $testimonial['image'] }}" alt="{{ $testimonial['name'] }}"
                                class="rounded-circle" width="60" height="60">
                            <div class="ms-3">
                                <h5 class="mb-0">{{ $testimonial['name'] }}</h5>
                                <small class="text-primary">{{ $testimonial['role'] }}</small>
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
            <div class="text-center mb-5">
                <span class="text-primary">FAQ</span>
                <h2 class="display-5 fw-bold mt-2">Perguntas Frequentes</h2>
                <p class="text-white-50">Tira as tuas dúvidas e prepara-te para fazeres parte da SpaceSeat</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="accordion" id="faqAccordion">
                        @foreach($faqs as $index => $faq)
                        <div class="accordion-item bg-transparent border border-secondary mb-3">
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
                    <p class="text-white-50">Plataforma líder em educação online focada em tecnologia e desenvolvimento profissional.</p>
                    <div class="d-flex gap-3 mt-4">
                        <a href="#" class="text-white-50"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="text-white-50"><i class="bi bi-twitter"></i></a>
                        <a href="https://www.instagram.com/__spaceseat/" class="text-white-50"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="text-white-50"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
                <div class="col-lg-2">
                    <h5 class="mb-4">Links Rápidos</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">Cursos</a></li>
                        <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">Instrutores</a></li>
                        <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">Preços</a></li>
                        <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">Blog</a></li>
                    </ul>
                </div>
                <div class="col-lg-2">
                    <h5 class="mb-4">Suporte</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">Contato</a></li>
                        <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">FAQ</a></li>
                        <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">Ajuda</a></li>
                        <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">Privacidade</a></li>
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
            <hr class="mt-5 mb-4" style="border-color: rgba(255,255,255,0.1)">
            <div class="text-center text-white-50">
                <small>&copy; 2024 Space seat. Todos os direitos reservados.</small>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/welcome.js') }}"></script>
</body>
</html>
