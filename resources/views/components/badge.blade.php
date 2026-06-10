@props(['color' => 'secondary'])

<span {{ $attributes->merge(['class' => "badge bg-{$color}"]) }}>
    {{ $slot }}
</span>
