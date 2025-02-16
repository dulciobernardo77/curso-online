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
                'image' => '/images/user1.webp',
                'category' => 'Desenvolvimento Web',
                'title' => 'Desenvolvimento Full Stack',
                'description' => 'Aprenda a criar aplicações web completas com as tecnologias mais modernas.',
                'price' => 'free'
            ],
            (object)[
                'image' => '/images/user1.webp',
                'category' => 'Data Science',
                'title' => 'Ciência de Dados',
                'description' => 'Domine análise de dados, machine learning e visualização de dados.',
                'price' => 'free'
            ],
            (object)[
                'image' => '/images/user1.webp',
                'category' => 'Mobile',
                'title' => 'Desenvolvimento Mobile',
                'description' => 'Crie aplicativos móveis modernos para iOS e Android.',
                'price' => 'free'
            ],
            (object)[
                'image' => '/images/user1.webp',
                'category' => 'Desenvolvimento Web',
                'title' => 'Desenvolvimento Full Stack',
                'description' => 'Aprenda a criar aplicações web completas com as tecnologias mais modernas.',
                'price' => 'free'
            ],
            (object)[
                'image' => '/images/user1.webp',
                'category' => 'JavaScript',
                'title' => 'Fundamentos de Javascript',
                'description' => 'Domine O fundamentos do js.aprenda a cria aplicacoes web interativas e modernais',
                'price' => 'free'
            ],
            (object)[
                'image' => '/images/user1.webp',
                'category' => 'Mobile',
                'title' => 'Desenvolvimento Mobile',
                'description' => 'Crie aplicativos móveis modernos para iOS e Android.',
                'price' => 'free'
            ]
        ];

        $testimonials = [
            [
                'image' => '/images/user1.jpg',
                'name' => 'Dulcio Bernardo',
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
            ],
            [
                'image' => '/images/user1.jpg',
                'name' => 'Dulcio Bernardo',
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
            ],
            [
                'image' => '/images/user1.jpg',
                'name' => 'Dulcio Bernardo',
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
                'question' => 'O que é a Space Seat?',
                'answer' => 'A Space Seat é uma plataforma online focada na oferta de cursos de alta qualidade em diversas áreas do conhecimento. Nosso objetivo é proporcionar uma experiência de aprendizado acessível e eficaz para todos os nossos usuários.'
            ],
            [
                'question' => 'Como posso me inscrever em um curso?',
                'answer' => 'Após a inscrição, você tem acesso imediato e vitalício a todo o conteúdo do curso, podendo estudar no seu próprio ritmo.'
            ],
            [
                'question' => 'Os cursos são gratuitos ou pagos?',
                'answer' => 'Todos os cursos oferecidos na Space Seat são gratuitos, proporcionando acesso livre ao conhecimento para todos os usuários.'
            ],
            [
                'question' => 'Como funciona o certificado de conclusão?',
                'answer' => 'Ao concluir um curso, receberás um certificado digital de conclusão, que poderá ser baixado e compartilhado no teu perfil profissional, como no LinkedIn.
'
            ],
            [
                'question' => 'Existe um prazo para concluir os cursos?',
                'answer' => 'Ao concluir um curso, receberás um certificado digital de conclusão, que poderá ser baixado e compartilhado no teu perfil profissional, como no LinkedIn.
'
            ],
            [
                'question' => 'Existe suporte durante os cursos?',
                'answer' => 'Não, os cursos podem ser feitos no teu próprio ritmo. Uma vez inscrito, terás acesso vitalício ao conteúdo.'
            ],
            [
                'question' => 'Posso acessar os cursos pelo celular?',
                'answer' => 'Sim! Os cursos da Space Seat podem ser acessados através do navegador do teu celular, garantindo flexibilidade para estudar de onde quiseres.'
            ],
            [
                'question' => 'Posso interagir com outros alunos?',
                'answer' => 'Caso tenhas dúvidas ou problemas técnicos, podes entrar em contato com o nosso suporte através do e-mail suporte@spaceseat.com ou pelo chat disponível na plataforma.
.'
            ]
        ];

        return view('welcome', compact('featuredCourses', 'testimonials', 'faqs'));

        return view('welcome', compact('featuredCourses'));
    }
}
