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

    <style>
        :root {
            --primary-color: #1a73e8;

        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: #0A0A0A;
            color: #fff;
        }

        .navbar {
            background-color: rgba(10, 10, 10, 0.95);
            backdrop-filter: blur(10px);
        }

        .hero-section {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.9)),
                        url('/images/hero-bg.jpg') no-repeat center center;
            background-size: cover;
            height: 100vh;
            padding: 120px 0;
        }

        .feature-card {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            transition: all 0.3s ease;
        }

        .feature-card:hover {
            transform: translateY(-5px);
            border-color: var(--primary-color);
        }

        .course-card {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            overflow: hidden;
        }

        .course-card img {
            transition: transform 0.3s ease;
        }

        .course-card:hover img {
            transform: scale(1.05);
        }

        .stats-counter {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--primary-color);
        }

        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }

        .btn-primary:hover {
            background-color: darken(var(--primary-color), 10%);
            border-color: darken(var(--primary-color), 10%);
        }

        .section-padding {
            padding: 80px 0;
        }

        .testimonial-card {
            background: rgba(255, 255, 255, 0.05);
            border-radius: 12px;
            padding: 24px;
            transition: transform 0.3s ease;
        }

        .testimonial-card:hover {
            transform: translateY(-5px);
        }

        .accordion-button:not(.collapsed) {
            color: var(--primary-color);
            background-color: rgba(26, 115, 232, 0.1);
        }

        .accordion-button:focus {
            box-shadow: none;
            border-color: var(--primary-color);
        }

        .accordion-button::after {
            filter: invert(1);
        }

        footer a:hover {
            color: var(--primary-color) !important;
        }

        .input-group .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: none;
        }

        .fade-in {
            opacity: 1 !important;
            transform: translateY(0) !important;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">
                <i class="bi bi-mortarboard-fill me-2"></i>
                Space seat
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#courses">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#instructors">Cursos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#pricing">blog</a>
                    </li>
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
    <section class="hero-section text-center">
        <div class="container">
            <span class="badge  mb-3">🚀 Aprenda no seu ritmo</span>
            <h1 class="display-4 fw-bold mb-4">Aprenda. Cresça.<br>Conquiste seu futuro.</h1>
            <p class="lead text-white-50 mb-5">
                Junte-se a mais de 50.000 alunos transformando suas carreiras<br>
                com cursos práticos e certificados reconhecidos pelo mercado.
            </p>
            <div class="d-flex justify-content-center gap-3">
                <a href="{{ route('login') }}" class="btn btn-primary btn-lg px-5">
                    Começar Agora
                    <i class="bi bi-arrow-right ms-2"></i>
                </a>
                <a href="#courses" class="btn btn-outline-light btn-lg px-5">Ver Cursos</a>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="section-padding border-top border-bottom border-secondary">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-3 col-6 mb-4 mb-md-0">
                    <div class="stats-counter" data-count="150">0</div>
                    <p class="text-white-50">Cursos</p>
                </div>
                <div class="col-md-3 col-6 mb-4 mb-md-0">
                    <div class="stats-counter" data-count="50000">0</div>
                    <p class="text-white-50">Alunos</p>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stats-counter" data-count="120">0</div>
                    <p class="text-white-50">Instrutores</p>
                </div>
                <div class="col-md-3 col-6">
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
                        <i class="bi bi-certificate fs-2 text-primary mb-3"></i>
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
    <section class="section-padding bg-black">
        <div class="container">
            <div class="text-center mb-5">
                <span class="text-primary">FAQ</span>
                <h2 class="display-5 fw-bold mt-2">Perguntas Frequentes</h2>
                <p class="text-white-50">Encontre respostas para suas dúvidas</p>
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
    <footer class="bg-black py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4">
                    <h5 class="mb-4">Sobre a Space seat</h5>
                    <p class="text-white-50">Plataforma líder em educação online focada em tecnologia e desenvolvimento profissional.</p>
                    <div class="d-flex gap-3 mt-4">
                        <a href="#" class="text-white-50"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="text-white-50"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="text-white-50"><i class="bi bi-instagram"></i></a>
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
    <script>
        // Animate stats counters
        document.addEventListener('DOMContentLoaded', function() {
            const counters = document.querySelectorAll('.stats-counter');
            const speed = 200;

            counters.forEach(counter => {
                const target = parseInt(counter.getAttribute('data-count'));
                const increment = target / speed;
                let current = 0;

                const updateCount = () => {
                    if (current < target) {
                        current += increment;
                        counter.innerText = Math.ceil(current);
                        setTimeout(updateCount, 1);
                    } else {
                        counter.innerText = target;
                    }
                };

                updateCount();
            });
        });

        // Smooth scroll for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Navbar background change on scroll
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.style.backgroundColor = 'rgba(10, 10, 10, 0.95)';
            } else {
                navbar.style.backgroundColor = 'rgba(10, 10, 10, 0.7)';
            }
        });

        // Fade in elements on scroll
        const observerOptions = {
            root: null,
            threshold: 0.1,
            rootMargin: '0px'
        };

        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('fade-in');
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        document.querySelectorAll('.feature-card, .testimonial-card').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(20px)';
            el.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
            observer.observe(el);
        });
    </script>
</body>
</html>
