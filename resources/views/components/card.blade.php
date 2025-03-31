<div {{ $attributes->merge(['class' => 'card p-4 mb-4']) }}>
    @if(isset($header))
        <div class="card-header border-bottom pb-3 mb-3">
            <h5 class="mb-0">{{ $header }}</h5>
            @if(isset($headerActions))
                <div class="header-actions">
                    {{ $headerActions }}
                </div>
            @endif
        </div>
    @endif
    
    <div class="card-body p-0">
        {{ $slot }}
    </div>
    
    @if(isset($footer))
        <div class="card-footer border-top pt-3 mt-3">
            {{ $footer }}
        </div>
    @endif
</div> 