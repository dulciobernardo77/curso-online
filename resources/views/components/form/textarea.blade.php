@props(['name', 'label', 'value' => '', 'rows' => 3, 'maxlength' => null, 'required' => false, 'placeholder' => '', 'helpText' => null])

<div class="mb-3">
    <label for="{{ $name }}" class="form-label">{{ $label }}</label>
    <textarea 
        class="form-control @error($name) is-invalid @enderror" 
        id="{{ $name }}" 
        name="{{ $name }}" 
        rows="{{ $rows }}"
        @if($required) required @endif
        placeholder="{{ $placeholder }}"
        @if($maxlength) maxlength="{{ $maxlength }}" @endif
        {{ $attributes }}
    >{{ old($name, $value) }}</textarea>
    
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