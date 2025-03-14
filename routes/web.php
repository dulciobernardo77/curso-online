<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;


Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
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

Route::get('/aluno/jornada', function () {
    return view('aluno.jornada');
})->middleware(['auth', 'verified'])->name('aluno.jornada');

Route::get('/aluno/catalogo', function () {
    return view('aluno.catalogo');
})->middleware(['auth', 'verified'])->name('aluno.catalogo');

Route::get('/aluno/perfil', function () {
    return view('aluno.perfil');
})->middleware(['auth', 'verified'])->name('aluno.perfil');

Route::get('/aluno/teste', function () {
    return 'Rota de teste aluno funcionando!';
});

Route::get('/teste', function () {
    return 'Rota de teste funcionando!';
});
