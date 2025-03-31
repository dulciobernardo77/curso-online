<?php

namespace App\Http\Controllers\Aluno;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;

class CursoController extends Controller
{
    /**
     * Mostra os detalhes de um curso específico.
     *
     * @param  int  $curso
     * @return \Illuminate\Http\Response
     */
    public function show($curso)
    {
        // Recuperar o curso do banco de dados
        $curso = Course::with(['modules.lessons'])->findOrFail($curso);
        
        // Verificar se o aluno está matriculado neste curso
        // (Isso será implementado quando tivermos o sistema de matrícula)
        
        // Dados de progresso do aluno
        $progresso = 30; // Exemplo, será calculado dinamicamente
        $moduloAtual = 1; // Exemplo, será obtido do banco
        $aulaAtual = 2;   // Exemplo, será obtido do banco
        
        return view('aluno.curso', compact('curso', 'progresso', 'moduloAtual', 'aulaAtual'));
    }
}
