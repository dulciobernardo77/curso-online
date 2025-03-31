@extends('layouts.instrutor-layout')

@section('title', 'Editar Módulo - ' . $modulo->title)

@section('header', 'Editar Módulo')

@section('breadcrumbs')
    <x-breadcrumb :items="[
        ['title' => 'Meus Cursos', 'url' => route('instrutor.cursos.index')],
        ['title' => $modulo->course->title, 'url' => route('instrutor.cursos.show', $modulo->course->id)],
        ['title' => 'Módulos', 'url' => route('instrutor.modulos.index', $modulo->course->id)],
        ['title' => 'Editar Módulo'],
    ]" />
@endsection

@section('header-actions')
    <x-button 
        variant="outline-accent" 
        icon="arrow-left" 
        href="{{ route('instrutor.modulos.index', $modulo->course->id) }}"
    >
        Voltar
    </x-button>
@endsection

@section('main-content')
    <x-card>
        <form action="{{ route('instrutor.modulos.update', $modulo->id) }}" method="POST">
            @csrf
            @method('PUT')
            <input type="hidden" name="course_id" value="{{ $modulo->course->id }}">
            
            <x-form.input 
                name="title"
                label="Título do Módulo"
                value="{{ $modulo->title }}"
                maxlength="100"
                required
                placeholder="Digite o título do módulo"
            />

            <x-form.textarea 
                name="description"
                label="Descrição do Módulo"
                value="{{ $modulo->description }}"
                maxlength="255"
                placeholder="Digite uma breve descrição do módulo"
            />

            <x-form.input 
                name="order"
                label="Ordem do Módulo"
                type="number"
                value="{{ $modulo->order }}"
                min="1"
                placeholder="Ex: 1"
                helpText="A ordem define a sequência em que os módulos serão exibidos no curso."
            />

            <div class="d-flex justify-content-end gap-2">
                <x-button 
                    variant="outline-accent" 
                    href="{{ route('instrutor.modulos.index', $modulo->course->id) }}"
                >
                    Cancelar
                </x-button>
                <x-button 
                    type="submit" 
                    variant="accent"
                >
                    Salvar Alterações
                </x-button>
            </div>
        </form>
    </x-card>

    <x-card>
        <x-slot name="header">Aulas neste Módulo</x-slot>
        
        @if($modulo->lessons->count() > 0)
            <div class="table-responsive">
                <table class="table table-borderless">
                    <thead>
                        <tr>
                            <th scope="col" style="width: 60px;">#</th>
                            <th scope="col">Título</th>
                            <th scope="col" style="width: 120px;">Tipo</th>
                            <th scope="col" style="width: 120px;">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($modulo->lessons->sortBy('order') as $lesson)
                        <tr>
                            <td>{{ $lesson->order }}</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div>
                                        <span class="fw-medium">{{ $lesson->title }}</span>
                                        @if($lesson->is_free)
                                            <span class="badge bg-success ms-2">Gratuita</span>
                                        @endif
                                    </div>
                                </div>
                            </td>
                            <td>
                                @if($lesson->type == 'video')
                                    <span class="badge bg-info">Vídeo</span>
                                @elseif($lesson->type == 'text')
                                    <span class="badge bg-primary">Texto</span>
                                @elseif($lesson->type == 'quiz')
                                    <span class="badge bg-warning">Quiz</span>
                                @endif
                            </td>
                            <td>
                                <div class="d-flex gap-1">
                                    <a href="{{ route('instrutor.lessons.edit', $lesson->id) }}" class="btn btn-sm btn-outline-accent">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                    <form action="{{ route('instrutor.lessons.destroy', $lesson->id) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir esta aula?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <div class="text-center py-4">
                <p class="text-secondary mb-3">Nenhuma aula encontrada neste módulo.</p>
                <x-button 
                    variant="outline-accent" 
                    icon="plus-circle" 
                    href="{{ route('instrutor.lessons.create', ['module_id' => $modulo->id]) }}"
                >
                    Criar Nova Aula
                </x-button>
            </div>
        @endif
        
        @if($modulo->lessons->count() > 0)
            <div class="mt-3">
                <x-button 
                    variant="outline-accent" 
                    icon="plus-circle" 
                    href="{{ route('instrutor.lessons.create', ['module_id' => $modulo->id]) }}"
                >
                    Adicionar Nova Aula
                </x-button>
            </div>
        @endif
    </x-card>
@endsection 