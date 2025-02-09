<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $featuredCourses = Course::where('featured', true)
            ->take(6)
            ->get();


            $featuredCourses = [
            (object)[
                'image' => '/images/course1.jpg',
                'category' => 'Desenvolvimento Web',
                'title' => 'Desenvolvimento Full Stack',
                'description' => 'Aprenda a criar aplicações web completas com as tecnologias mais modernas.',
                'price' => '997,00'
            ],
            (object)[
                'image' => '/images/course2.jpg',
                'category' => 'Data Science',
                'title' => 'Ciência de Dados',
                'description' => 'Domine análise de dados, machine learning e visualização de dados.',
                'price' => '897,00'
            ],
            (object)[
                'image' => '/images/course3.jpg',
                'category' => 'Mobile',
                'title' => 'Desenvolvimento Mobile',
                'description' => 'Crie aplicativos móveis modernos para iOS e Android.',
                'price' => '797,00'
            ]
        ];

        $testimonials = [
            [
                'image' => '/images/user1.jpg',
                'name' => 'João Silva',
                'role' => 'Desenvolvedor Full Stack',
                'content' => 'Os cursos da Space seat mudaram minha carreira. Em 6 meses consegui minha primeira vaga como desenvolvedor.'
            ],
            [
                'image' => '/images/user2.jpg',
                'name' => 'Maria Santos',
                'role' => 'Data Scientist',
                'content' => 'A qualidade do conteúdo e o suporte da comunidade são excepcionais. Recomendo fortemente.'
            ],
            [
                'image' => '/images/user3.jpg',
                'name' => 'Pedro Costa',
                'role' => 'Mobile Developer',
                'content' => 'A metodologia prática e os projetos reais fizeram toda a diferença no meu aprendizado.'
            ]
        ];

        $faqs = [
            [
                'question' => 'Como funciona o acesso aos cursos?',
                'answer' => 'Após a inscrição, você tem acesso imediato e vitalício a todo o conteúdo do curso, podendo estudar no seu próprio ritmo.'
            ],
            [
                'question' => 'Os certificados são reconhecidos?',
                'answer' => 'Sim, todos os nossos certificados são reconhecidos pelo mercado e contam com verificação digital.'
            ],
            [
                'question' => 'Existe suporte durante os cursos?',
                'answer' => 'Oferecemos suporte completo através de nossa comunidade, fórum exclusivo e mentoria com os instrutores.'
            ],
            [
                'question' => 'Posso assistir as aulas offline?',
                'answer' => 'Sim, nosso app permite que você baixe as aulas para assistir offline quando e onde quiser.'
            ]
        ];

        return view('welcome', compact('featuredCourses', 'testimonials', 'faqs'));

        return view('welcome', compact('featuredCourses'));
    }
}
