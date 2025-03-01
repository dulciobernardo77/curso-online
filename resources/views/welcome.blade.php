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
    <!-- Hero Section -->
    <section class="hero-section position-relative overflow-hidden">
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
                <p class="text-white-50">Explore nossos cursos mais populares e bem avaliados</p>
            </div>

            <div class="row g-4">
                @foreach ($featuredCourses as $course)
                    <div class="col-md-4">
                        <div class="course-card">
                            <img src="{{ $course->image }}" alt="{{ $course->title }}" class="img-fluid">
                            <div class="p-4">
                                <!--<span-- class="badge bg-primary mb-2">{{ $course->category }}</span-->
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

    <!-- Discord Community Section -->
    <section class="discord-community-section section-padding position-relative overflow-hidden">
        <div class="discord-glow"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 pe-lg-5 mb-5 mb-lg-0">
                    <span class="badge bg-discord mb-3 animate__animated animate__fadeInUp">
                        <i class="bi bi-discord me-2"></i>
                        Comunidade Ativa
                    </span>
                    <h2 class="display-5 fw-bold mb-4 animate__animated animate__fadeInUp animate__delay-1s">
                        Junte-se à nossa<br>
                        <span class="text-discord">Comunidade Discord</span>
                    </h2>
                    <p class="lead text-white-50 mb-4 animate__animated animate__fadeInUp animate__delay-2s">
                        Conecte-se com outros estudantes, compartilhe conhecimento e participe de eventos exclusivos. Nossa comunidade está sempre ativa e pronta para ajudar!
                    </p>
                    <div class="discord-stats d-flex gap-5 mb-5 animate__animated animate__fadeInUp animate__delay-3s">
                        <div class="discord-stat">
                            <h3 class="text-discord fw-bold">2,500+</h3>
                            <p class="text-white-50">Membros</p>
                        </div>
                        <div class="discord-stat">
                            <h3 class="text-discord fw-bold">15+</h3>
                            <p class="text-white-50">Canais Ativos</p>
                        </div>
                        <div class="discord-stat">
                            <h3 class="text-discord fw-bold">24/7</h3>
                            <p class="text-white-50">Suporte</p>
                        </div>
                    </div>
                    <a href="{{route('login')}}" class="btn btn-discord btn-lg px-5 animate__animated animate__fadeInUp animate__delay-4s">
                        <i class="bi bi-discord me-2"></i>
                        Entrar no Discord
                    </a>
                </div>
                <div class="col-lg-6 animate__animated animate__fadeInRight animate__delay-4s">
                    <div class="discord-image-wrapper">
                        <img src="/images/discord-community.webp" alt="Nossa Comunidade Discord" class="img-fluid rounded-4 shadow-lg">
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
                        <h3 class="feature-title">+138 horas de conteúdo exclusivo</h3>
                        <p class="feature-description">
                            Tenha acesso a mais de 138 horas de conteúdo exclusivo e aprofunde seus conhecimentos.
                        </p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-md-4">
                    <div class="feature-card h-100">
                        <div class="feature-icon mb-4">
                            <i class="bi bi-play-circle text-primary"></i>
                        </div>
                        <h3 class="feature-title">Novas aulas todas as semanas</h3>
                        <p class="feature-description">
                            Novas aulas todas as semanas, mantendo você atualizado constantemente.
                        </p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-md-4">
                    <div class="feature-card h-100">
                        <div class="feature-icon mb-4">
                            <i class="bi bi-people text-primary"></i>
                        </div>
                        <h3 class="feature-title">+1310 membros na comunidade</h3>
                        <p class="feature-description">
                            Junte-se a uma comunidade de mais de 1310 membros e amplie seus horizontes.
                        </p>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="col-md-4">
                    <div class="feature-card h-100">
                        <div class="feature-icon mb-4">
                            <i class="bi bi-code-slash text-primary"></i>
                        </div>
                        <h3 class="feature-title">Acesso aos códigos no GitHub da Academia</h3>
                        <p class="feature-description">
                            Tenha acesso a todos os códigos no GitHub da Academia para aprimorar sua aprendizagem.
                        </p>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="col-md-4">
                    <div class="feature-card h-100">
                        <div class="feature-icon mb-4">
                            <i class="bi bi-discord text-primary"></i>
                        </div>
                        <h3 class="feature-title">Servidor dedicado para alunos no Discord</h3>
                        <p class="feature-description">
                            Acesso a um servidor dedicado no Discord exclusivo para alunos.
                        </p>
                    </div>
                </div>

                <!-- Card 6 -->
                <div class="col-md-4">
                    <div class="feature-card h-100">
                        <div class="feature-icon mb-4">
                            <i class="bi bi-rocket text-primary"></i>
                        </div>
                        <h3 class="feature-title">Pronto para começar sua jornada de aprendizado?</h3>
                        <p class="feature-description">
                            Torne-se um aluno agora e desbloqueie acesso exclusivo ao nosso conteúdo e comunidade!
                        </p>
                    </div>
                </div>
            </div>

            <!-- CTA -->
            <div class="text-center mt-5">
                <a href="{{ route('register') }}" class="btn btn-primary btn-lg px-5">
                    SEJA UM ALUNO DA SPACESEAT
                </a>
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
