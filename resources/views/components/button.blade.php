@props(['type' => 'button', 'variant' => 'accent', 'size' => '', 'icon' => null])

@php
    $variantClasses = [
        'accent' => 'btn-accent',
        'outline-accent' => 'btn-outline-accent',
        'subtle' => 'btn-subtle',
        'primary' => 'btn-primary',
        'secondary' => 'btn-secondary',
        'success' => 'btn-success',
        'danger' => 'btn-danger',
        'warning' => 'btn-warning',
        'info' => 'btn-info',
        'light' => 'btn-light',
        'dark' => 'btn-dark',
        'link' => 'btn-link',
        'outline-primary' => 'btn-outline-primary',
        'outline-secondary' => 'btn-outline-secondary',
        'outline-success' => 'btn-outline-success',
        'outline-danger' => 'btn-outline-danger',
        'outline-warning' => 'btn-outline-warning',
        'outline-info' => 'btn-outline-info',
        'outline-light' => 'btn-outline-light',
        'outline-dark' => 'btn-outline-dark',
    ];
    
    $sizeClasses = [
        'sm' => 'btn-sm',
        'lg' => 'btn-lg',
    ];
    
    $btnClass = $variantClasses[$variant] ?? 'btn-accent';
    $sizeClass = $sizeClasses[$size] ?? '';
@endphp

<button 
    type="{{ $type }}"
    {{ $attributes->merge(['class' => "btn $btnClass $sizeClass"]) }}
>
    @if($icon)
        <i class="bi bi-{{ $icon }} me-1"></i>
    @endif
    {{ $slot }}
</button> 