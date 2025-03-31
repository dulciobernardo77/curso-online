@props(['type' => 'info', 'dismissible' => false])

@php
    $typeClasses = [
        'info' => 'alert-info',
        'success' => 'alert-success',
        'warning' => 'alert-warning',
        'danger' => 'alert-danger',
        'primary' => 'alert-primary',
        'secondary' => 'alert-secondary',
    ];
    
    $icons = [
        'info' => 'bi-info-circle',
        'success' => 'bi-check-circle',
        'warning' => 'bi-exclamation-triangle',
        'danger' => 'bi-exclamation-circle',
        'primary' => 'bi-bell',
        'secondary' => 'bi-gear',
    ];
    
    $alertClass = $typeClasses[$type] ?? 'alert-info';
    $icon = $icons[$type] ?? 'bi-info-circle';
@endphp

<div {{ $attributes->merge(['class' => "alert $alertClass"]) }} role="alert">
    <div class="d-flex align-items-center">
        <i class="bi {{ $icon }} me-2"></i>
        <div>{{ $slot }}</div>
    </div>
    
    @if($dismissible)
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fechar"></button>
    @endif
</div> 