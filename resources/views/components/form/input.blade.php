@props(['name', 'label', 'type' => 'text', 'value' => '', 'maxlength' => null, 'required' => false, 'placeholder' => '', 'helpText' => null])

<div class="mb-3">
    <label for="{{ $name }}" class="form-label">{{ $label }}</label>
    <input 
        type="{{ $type }}" 
        class="form-control @error($name) is-invalid @enderror" 
        id="{{ $name }}" 
        name="{{ $name }}" 
        value="{{ old($name, $value) }}" 
        @if($required) required @endif
        placeholder="{{ $placeholder }}"
        @if($maxlength) maxlength="{{ $maxlength }}" @endif
        {{ $attributes }}
    >
    
    @if($maxlength)
        <div class="character-count">0/{{ $maxlength }} caracteres</div>
    @endif
    
    @if($helpText)
        <small class="text-secondary mt-1">{{ $helpText }}</small>
    @endif
    
    @error($name)
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div> 