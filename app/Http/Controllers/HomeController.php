<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $featuredCourses = [
            [
                'title' => 'React Masterclass',
                'instructor' => 'Ana Silva',
                'description' => 'Aprenda React do zero ao avançado com projetos práticos',
                'image' => 'https://images.unsplash.com/photo-1633356122544-f134324a6cee?w=800&auto=format&fit=crop&q=60',
                'students' => 1234,
                'duration' => '32h'
            ],
            [
                'title' => 'Design de Interfaces',
                'instructor' => 'Carlos Santos',
                'description' => 'Domine os princípios do design de interfaces modernas',
                'image' => 'https://images.unsplash.com/photo-1581291518633-83b4ebd1d83e?w=800&auto=format&fit=crop&q=60',
                'students' => 856,
                'duration' => '24h'
            ],
            [
                'title' => 'JavaScript Avançado',
                'instructor' => 'Pedro Costa',
                'description' => 'Conceitos avançados de JavaScript e ES6+',
                'image' => 'https://images.unsplash.com/photo-1627398242454-45a1465c2479?w=800&auto=format&fit=crop&q=60',
                'students' => 2156,
                'duration' => '28h'
            ]
        ];

        $testimonials = [
            [
                'name' => 'João Silva',
                'role' => 'Desenvolvedor Frontend',
                'image' => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=400&auto=format&fit=crop&q=60',
                'text' => 'Os cursos são extremamente práticos e os instrutores são muito dedicados. Consegui uma nova oportunidade de trabalho graças ao conhecimento adquirido aqui.'
            ],
            [
                'name' => 'Maria Santos',
                'role' => 'UX Designer',
                'image' => 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=400&auto=format&fit=crop&q=60',
                'text' => 'A plataforma oferece conteúdo de alta qualidade e sempre atualizado. A comunidade é muito ativa e colaborativa.'
            ],
            [
                'name' => 'Carlos Eduardo',
                'role' => 'Analista de Dados',
                'image' => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=400&auto=format&fit=crop&q=60',
                'text' => 'Excelente experiência de aprendizado. Os projetos práticos me ajudaram a consolidar o conhecimento de forma efetiva.'
            ]
        ];

        $categories = [
            ['icon' => 'code', 'name' => 'Programação', 'courses' => 150],
            ['icon' => 'palette', 'name' => 'Design', 'courses' => 89],
            ['icon' => 'language', 'name' => 'Idiomas', 'courses' => 120],
            ['icon' => 'database', 'name' => 'Data Science', 'courses' => 95],
            ['icon' => 'comments', 'name' => 'Marketing', 'courses' => 78],
            ['icon' => 'brain', 'name' => 'IA & Machine Learning', 'courses' => 65]
        ];

        $stats = [
            ['icon' => 'book', 'number' => '150+', 'label' => 'Cursos'],
            ['icon' => 'users', 'number' => '12k+', 'label' => 'Alunos'],
            ['icon' => 'graduation-cap', 'number' => '90+', 'label' => 'Instrutores'],
            ['icon' => 'trophy', 'number' => '25k+', 'label' => 'Certificados']
        ];

        return view('dashboard', compact('featuredCourses', 'testimonials', 'categories', 'stats'));
    }
}
