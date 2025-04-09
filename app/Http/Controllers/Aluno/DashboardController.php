<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Curso;
use App\Models\Inscricao;
use App\Models\Evento;
use Carbon\Carbon;

class DashboardController extends Controller
{
    /**
     * Mostra a dashboard do aluno.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        
        // Busca os cursos em andamento do aluno
        $cursos = Inscricao::where('user_id', $user->id)
            ->where('status', 'em_andamento')
            ->with('curso')
            ->get()
            ->map(function ($inscricao) {
                return [
                    'id' => $inscricao->curso->id,
                    'title' => $inscricao->curso->titulo,
                    'icon' => $inscricao->curso->icone ?? 'code-slash',
                    'current_module' => $inscricao->modulo_atual,
                    'total_modules' => $inscricao->curso->total_modulos,
                    'progress' => $inscricao->progresso,
                ];
            })
            ->take(3); // Limita a 3 cursos na dashboard
        
        // Conta os cursos em andamento
        $cursosEmAndamento = Inscricao::where('user_id', $user->id)
            ->where('status', 'em_andamento')
            ->count();
            
        // Conta os cursos concluídos
        $cursosConcluidos = Inscricao::where('user_id', $user->id)
            ->where('status', 'concluido')
            ->count();
            
        // Calcula a sequência de estudo (streak)
        $streak = $this->calcularStreak($user->id);
        
        // Busca os próximos eventos
        $eventos = Evento::where('data', '>=', Carbon::now())
            ->orderBy('data')
            ->take(2)
            ->get()
            ->map(function ($evento) {
                return [
                    'id' => $evento->id,
                    'title' => $evento->titulo,
                    'icon' => $evento->icone ?? 'calendar-event',
                    'date' => Carbon::parse($evento->data)->format('d/m/Y H:i'),
                    'description' => $evento->descricao,
                    'live' => $evento->ao_vivo,
                    'url' => route('aluno.evento', $evento->id),
                ];
            });
            
        return view('aluno.dashboard', compact(
            'cursos', 
            'cursosEmAndamento', 
            'cursosConcluidos', 
            'streak', 
            'eventos'
        ));
    }
    
    /**
     * Calcula a sequência de dias de estudo do aluno.
     *
     * @param int $userId
     * @return int
     */
    private function calcularStreak($userId)
    {
        // Esta é uma implementação simplificada
        // Em um sistema real, você precisaria de uma tabela para rastrear logins diários
        
        // Simula uma sequência de 7 dias como exemplo
        // Em produção, você consultaria um registro de atividades do usuário
        return 7;
        
        /* Implementação real seria algo como:
        
        $registros = Atividade::where('user_id', $userId)
            ->orderBy('data', 'desc')
            ->get();
            
        $streak = 0;
        $dataAtual = Carbon::today();
        
        foreach ($registros as $registro) {
            $dataRegistro = Carbon::parse($registro->data)->startOfDay();
            
            // Se é o primeiro registro ou a data é o dia anterior
            if ($streak === 0 || $dataRegistro->equalTo($dataAtual->copy()->subDays($streak))) {
                $streak++;
            } else if (!$dataRegistro->equalTo($dataAtual->copy()->subDays($streak - 1))) {
                // Se encontrar um dia que não seja parte da sequência, para
                break;
            }
        }
        
        return $streak;
        */
    }
}