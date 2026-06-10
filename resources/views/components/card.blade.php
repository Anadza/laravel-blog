<div {{ $attributes->merge(['class' => 'card border-0 shadow-sm']) }}>
    @if(isset($title))
        <div class="card-header bg-transparent border-0 pt-4 pb-0">
            <h5 class="card-title fw-bold m-0">{{ $title }}</h5>
        </div>
    @endif

    <div class="card-body">
        {{ $slot }}
    </div>

    @if(isset($footer))
        <div class="card-footer bg-transparent border-0 pt-0 pb-4">
            {{ $footer }}
        </div>
    @endif
</div>
