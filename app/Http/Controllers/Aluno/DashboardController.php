<?php

namespace App\Http\Controllers\Aluno;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Curso;

class DashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        
        // Aqui você implementaria a lógica para buscar os dados reais
        $cursosEmAndamento = 0;
        $cursosConcluidos = 0;
        $certificados = 0;
        $cursos = [];
        
        return view('aluno.dashboard', compact(
            'cursosEmAndamento',
            'cursosConcluidos',
            'certificados',
            'cursos'
        ));
    }
} 