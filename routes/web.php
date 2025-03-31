<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;


Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

Route::get('/about', function () {
    return view('about.index');
})->name('about');

Route::get('/dashboard', function () {
    if (auth()->user()->role === 'instrutor') {
        return redirect()->route('instrutor.dashboard');
    }
    return view('aluno.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
use Laravel\Socialite\Facades\Socialite;

Route::get('/auth/google', function () {
    return Socialite::driver('google')->redirect();
})->name('google.login');

Route::get('/auth/google/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleGoogleCallback']);

Route::get('/auth/github', function () {
    return Socialite::driver('github')->redirect();
})->name('github.login');

Route::get('/auth/github/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleGithubCallback']);

Route::middleware(['auth', 'verified'])->prefix('aluno')->name('aluno.')->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\Aluno\DashboardController::class, 'index'])->name('dashboard');
    
    Route::get('/jornada', function () {
        return view('aluno.jornada');
    })->name('jornada');

    Route::get('/catalogo', function () {
        return view('aluno.catalogo');
    })->name('catalogo');

    Route::get('/perfil', function () {
        return view('aluno.perfil');
    })->name('perfil');
    
    Route::get('/progresso', function () {
        return view('aluno.progresso');
    })->name('progresso');
    
    Route::get('/notificacoes', function () {
        return view('aluno.notificacoes');
    })->name('notificacoes');
    
    Route::get('/certificados', function () {
        return view('aluno.certificados');
    })->name('certificados');
    
    Route::get('/avaliacoes', function () {
        return view('aluno.avaliacoes');
    })->name('avaliacoes');
    
    Route::get('/curso/{curso}', [App\Http\Controllers\Aluno\CursoController::class, 'show'])->name('curso');
    
    Route::get('/aula/{aula}', [App\Http\Controllers\Aluno\AulaController::class, 'show'])->name('aula');
});

Route::get('/aluno/teste', function () {
    return 'Rota de teste aluno funcionando!';
});

Route::get('/teste', function () {
    return 'Rota de teste funcionando!';
});

// Rotas do Instrutor
Route::middleware(['web', 'auth'])->group(function () {
    Route::middleware(\App\Http\Middleware\CheckRole::class . ':instrutor')->prefix('instrutor')->name('instrutor.')->group(function () {
        // Dashboard do Instrutor
        Route::get('/', [App\Http\Controllers\Instrutor\DashboardController::class, 'index'])->name('dashboard');
        Route::get('/dashboard', [App\Http\Controllers\Instrutor\DashboardController::class, 'index'])->name('dashboard');

        // Rotas de Cursos
        Route::get('/cursos', [App\Http\Controllers\Instrutor\CursoController::class, 'index'])->name('cursos.index');
        Route::get('/cursos/criar', [App\Http\Controllers\Instrutor\CursoController::class, 'create'])->name('cursos.create');
        Route::post('/cursos', [App\Http\Controllers\Instrutor\CursoController::class, 'store'])->name('cursos.store');
        Route::get('/cursos/{curso}', [App\Http\Controllers\Instrutor\CursoController::class, 'show'])->name('cursos.show');
        Route::get('/cursos/{curso}/edit', [App\Http\Controllers\Instrutor\CursoController::class, 'edit'])->name('cursos.edit');
        Route::put('/cursos/{curso}', [App\Http\Controllers\Instrutor\CursoController::class, 'update'])->name('cursos.update');
        Route::delete('/cursos/{curso}', [App\Http\Controllers\Instrutor\CursoController::class, 'destroy'])->name('cursos.destroy');
    });
});

// Rotas do Admin
Route::middleware(['web', 'auth'])->group(function () {
    Route::middleware(\App\Http\Middleware\CheckRole::class . ':admin')->prefix('admin')->name('admin.')->group(function () {
        // Dashboard do Admin
        Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
        Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
        
        // Outras rotas do admin
        Route::get('/usuarios', function () {
            return view('admin.usuarios');
        })->name('usuarios');
        
        Route::get('/cursos', function () {
            return view('admin.cursos');
        })->name('cursos');
        
        Route::get('/categorias', function () {
            return view('admin.categorias');
        })->name('categorias');
        
        Route::get('/financeiro', function () {
            return view('admin.financeiro');
        })->name('financeiro');
        
        Route::get('/relatorios', function () {
            return view('admin.relatorios');
        })->name('relatorios');
        
        Route::get('/configuracoes', function () {
            return view('admin.configuracoes');
        })->name('configuracoes');
    });
});
