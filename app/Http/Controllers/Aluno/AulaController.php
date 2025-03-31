<?php

namespace App\Http\Controllers\Aluno;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lesson;
use App\Models\Course;
use App\Models\CourseModule;

class AulaController extends Controller
{
    /**
     * Mostra uma aula específica.
     *
     * @param  int  $aula
     * @return \Illuminate\Http\Response
     */
    public function show($aula)
    {
        // Recuperar a aula
        $aula = Lesson::with(['module.course'])->findOrFail($aula);
        $curso = $aula->module->course;
        
        // Obter todas as aulas do módulo para construir a navegação
        $modulos = $curso->modules()->with('lessons')->get();
        
        // Verificar se o usuário tem acesso a este curso
        // (Isso será implementado quando tivermos o sistema de matrícula)
        
        // Marcar esta aula como visualizada (implementação futura)
        
        // Calcular a próxima e a anterior aula
        $proximaAula = null;
        $aulaAnterior = null;
        
        // Construir lista com todas as aulas do curso, em ordem
        $todasAulas = collect();
        foreach ($modulos as $modulo) {
            foreach ($modulo->lessons as $lecao) {
                $todasAulas->push($lecao);
            }
        }
        
        // Encontrar o índice da aula atual
        $indiceAtual = $todasAulas->search(function ($item) use ($aula) {
            return $item->id === $aula->id;
        });
        
        if ($indiceAtual !== false) {
            if ($indiceAtual > 0) {
                $aulaAnterior = $todasAulas[$indiceAtual - 1];
            }
            
            if ($indiceAtual < $todasAulas->count() - 1) {
                $proximaAula = $todasAulas[$indiceAtual + 1];
            }
        }
        
        return view('aluno.aula', compact('aula', 'curso', 'modulos', 'proximaAula', 'aulaAnterior'));
    }
}
